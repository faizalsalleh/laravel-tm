document.addEventListener('DOMContentLoaded', function () {
    const editUserForm = document.getElementById('editUserForm');

    // Modal population logic
    const editUserModal = document.getElementById('editUserModal');
    if (editUserModal) {
        editUserModal.addEventListener('show.coreui.modal', function (event) {
            const button = event.relatedTarget;
            console.log('Modal triggered by:', button);

            if (button) {
                const userData = button.getAttribute('data-user');
                console.log('Raw data-user attribute:', userData);

                try {
                    const user = JSON.parse(userData);
                    console.log('Parsed User data:', user);

                    const modal = this;
                    // Check for both snake_case and camelCase
                    modal.querySelector('#editFirstName').value = user.first_name || user.firstName || '';
                    modal.querySelector('#editLastName').value = user.last_name || user.lastName || '';
                    modal.querySelector('#editEmail').value = user.email || '';
                    modal.querySelector('#editUserType').value = user.user_type || user.userType || '';
                    modal.querySelector('#editPhone').value = user.phone || '';

                    // Set the ID on the form for the submit handler
                    if (editUserForm) {
                        editUserForm.setAttribute('data-user-id', user.id);
                    }
                } catch (e) {
                    console.error('Error parsing user data:', e);
                }
            }
        });
    }

    if (editUserForm) {
        editUserForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Clear previous errors
            const modal = document.getElementById('editUserModal');
            const errorContainer = modal.querySelector('.modal-body .alert-danger');
            if (errorContainer) {
                errorContainer.remove();
            }

            const userId = this.getAttribute('data-user-id');
            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            // Remove empty password if not set
            if (!data.password) {
                delete data.password;
            }

            fetch(`/admin/users/${userId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json().then(data => ({ status: response.status, body: data })))
                .then(result => {
                    if (result.status === 200) {
                        // Success
                        const modalInstance = coreui.Modal.getInstance(document.getElementById('editUserModal'));
                        modalInstance.hide();

                        // Reload page to show updated user
                        window.location.reload();
                    } else {
                        // Validation errors
                        let errorHtml = '<div class="alert alert-danger" role="alert"><ul class="mb-0">';
                        if (result.body.errors) {
                            for (const [key, messages] of Object.entries(result.body.errors)) {
                                messages.forEach(msg => errorHtml += `<li>${msg}</li>`);
                            }
                        } else {
                            errorHtml += `<li>${result.body.message || 'An error occurred'}</li>`;
                        }
                        errorHtml += '</ul></div>';

                        modal.querySelector('.modal-body').insertAdjacentHTML('afterbegin', errorHtml);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An unexpected error occurred.');
                });
        });
    }
});
