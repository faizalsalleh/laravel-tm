document.addEventListener('DOMContentLoaded', function () {
    const createUserForm = document.getElementById('createUserForm');

    if (createUserForm) {
        createUserForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Clear previous errors
            const modal = document.getElementById('createUserModal');
            const errorContainer = modal.querySelector('.modal-body .alert-danger');
            if (errorContainer) {
                errorContainer.remove();
            }

            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            fetch('/admin/users', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json().then(data => ({ status: response.status, body: data })))
                .then(result => {
                    if (result.status === 200 || result.status === 201) {
                        // Success
                        const modalInstance = coreui.Modal.getInstance(document.getElementById('createUserModal'));
                        modalInstance.hide();
                        createUserForm.reset();

                        // Reload page to show new user (SPA-like refresh)
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
