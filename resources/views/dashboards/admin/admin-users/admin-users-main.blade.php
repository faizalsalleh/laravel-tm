@extends('layouts.admin-layout')

@section('content')
<div class="card mb-4 border-0 shadow-sm">
    <div class="card-header bg-white py-3">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">User Management</h5>
            <button class="btn btn-primary btn-sm d-flex align-items-center" data-coreui-toggle="modal" data-coreui-target="#createUserModal">
                <i class="cil-user-plus me-2"></i>
                Add User
            </button>
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-borderless table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Phone</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md bg-primary text-white me-3">
                                    {{ strtoupper(substr($user->first_name, 0, 1)) }}
                                </div>
                                <div>
                                    <div class="fw-semibold">{{ $user->first_name }} {{ $user->last_name }}</div>
                                    <div class="small text-body-secondary">Joined: {{ $user->created_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->user_type == 1)
                                <span class="badge bg-danger-subtle text-danger">Admin</span>
                            @elseif($user->user_type == 2)
                                <span class="badge bg-warning-subtle text-warning">HR</span>
                            @else
                                <span class="badge bg-success-subtle text-success">Employee</span>
                            @endif
                        </td>
                        <td>{{ $user->phone ?? 'N/A' }}</td>
                        <td class="text-end">
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-light text-primary btn-sm d-flex align-items-center justify-content-center" 
                                    title="Edit" 
                                    style="width: 32px; height: 32px;"
                                    data-coreui-toggle="modal" 
                                    data-coreui-target="#editUserModal"
                                    data-user="{{ json_encode($user, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) }}">
                                    <i class="cil-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-light text-danger btn-sm d-flex align-items-center justify-content-center" 
                                    title="Delete" 
                                    style="width: 32px; height: 32px;"
                                    data-coreui-toggle="modal" 
                                    data-coreui-target="#deleteUserModal"
                                    data-user-id="{{ $user->id }}">
                                    <i class="cil-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            <div class="text-body-secondary">No users found.</div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create User Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Create New User</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="createUserForm">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="userType" class="form-label">Role</label>
                            <select class="form-select" id="userType" name="user_type" required>
                                <option value="1">Admin</option>
                                <option value="2">HR</option>
                                <option value="3" selected>Employee</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUserForm">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="editFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="editFirstName" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="editLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="editLastName" name="last_name" required>
                        </div>
                        <div class="col-12">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" name="email" required>
                        </div>
                        <div class="col-12">
                            <label for="editPassword" class="form-label">Password <span class="text-muted small">(Leave blank to keep current)</span></label>
                            <input type="password" class="form-control" id="editPassword" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="editUserType" class="form-label">Role</label>
                            <select class="form-select" id="editUserType" name="user_type" required>
                                <option value="1">Admin</option>
                                <option value="2">HR</option>
                                <option value="3">Employee</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="editPhone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="editPhone" name="phone">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete User Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this user? This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cancel</button>
                <form id="deleteUserForm">
                    <button type="submit" class="btn btn-danger">Delete User</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/dashboards/admin/admin-users/admin-users-actions/admin-add-user.js') }}"></script>
<script src="{{ asset('js/dashboards/admin/admin-users/admin-users-actions/admin-edit-user.js') }}"></script>
<script src="{{ asset('js/dashboards/admin/admin-users/admin-users-actions/admin-delete-user.js') }}"></script>
@endpush
