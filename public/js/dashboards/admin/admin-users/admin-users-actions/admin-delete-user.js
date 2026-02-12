document.addEventListener('DOMContentLoaded', function () {
    const deleteUserForm = document.getElementById('deleteUserForm');
    const deleteUserModal = document.getElementById('deleteUserModal');

    // Modal population logic
    if (deleteUserModal) {
        deleteUserModal.addEventListener('show.coreui.modal', function (event) {
            const button = event.relatedTarget;
            if (button) {
                const userId = button.getAttribute('data-user-id');
                // Set the ID on the form for the submit handler
                if (deleteUserForm) {
                    deleteUserForm.setAttribute('data-user-id', userId);
                }
            }
        });
    }

    if (deleteUserForm) {
        deleteUserForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const userId = this.getAttribute('data-user-id');

            fetch(`/admin/users/${userId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
                .then(response => response.json().then(data => ({ status: response.status, body: data })))
                .then(result => {
                    if (result.status === 200) {
                        // Success
                        const modalInstance = coreui.Modal.getInstance(document.getElementById('deleteUserModal'));
                        modalInstance.hide();

                        // Reload page to show updated user list
                        window.location.reload();
                    } else {
                        alert(result.body.message || 'An error occurred while deleting the user.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An unexpected error occurred.');
                });
        });
    }
});
