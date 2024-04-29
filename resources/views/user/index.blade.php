@extends('layout.main')

@section('content')

<title>USERS</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        @include('include.messages')
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">USERS</h5>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        ADD USER
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="/user/list" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="search" name="search" placeholder="SEARCH"
                                    aria-label="SEARCH" aria-describedby="search-button" />
                                <button class="btn btn-outline-secondary" type="submit" id="search-button">SEARCH</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{ $users->links() }}
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-1">FULL NAME</th>
                                <th class="col-1">ADDRESS</th>
                                <th class="col-1">CONTACT NUMBER</th>
                                <th class="col-1">EMAIL ADDRESS</th>
                                <th class="col-1">ROLE</th>
                                <th class="col-1">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ ($user->middle_name) ? $user->last_name . ', ' . $user->first_name . ' ' . $user->middle_name[0] . '. ' : $user->last_name . ' ' . $user->first_name . ' ' }} {{ ($user->suffix_name) ? $user->suffix_name : '' }}
                                </td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->contact_number }}</td>
                                <td>{{ $user->email_address}}</td>
                                <td>{{ $user->role}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Action Buttons">
                                        <a href="#" class="btn btn-primary btn_view" data-bs-toggle="modal" data-bs-target="#viewUserModal" data-id="{{ $user->user_id }}">VIEW</a>
                                        <a href="#" class="btn btn-success btn_edit" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="{{ $user->user_id }}">EDIT</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</main>

@include('include.user_modal')

<script>

document.addEventListener('DOMContentLoaded', function() {
    const btnView = document.querySelectorAll('.btn_view');
    btnView.forEach(function(button) {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if(xhr.readyState === XMLHttpRequest.DONE) {
                    if(xhr.status === 200) {
                        const user = JSON.parse(xhr.responseText);
                        
                        // Update input fields with user data and show the modal
                        document.getElementById('view_first_name_id').value = user.first_name || '';
                        document.getElementById('view_middle_name_id').value = user.middle_name || '';
                        document.getElementById('view_last_name_id').value = user.last_name || '';
                        document.getElementById('view_suffix_name_id').value = user.suffix_name || '';
                        document.getElementById('view_age').value = user.age || '';
                        document.getElementById('view_birth_date').value = user.birth_date || '';
                        document.getElementById('view_gender_id').value = user.gender || '';
                        document.getElementById('view_address').value = user.address || '';
                        document.getElementById('view_contact_number').value = user.contact_number || '';
                        document.getElementById('view_email_address').value = user.email_address || '';
                        document.getElementById('view_username').value = user.username || '';
                        document.getElementById('view_role_id').value = user.role || '';
                        
                    } else {
                        console.error('Error fetching user data');
                    }
                }
            };

            xhr.open('GET', '/user/view/' + id);
            xhr.send();
        });
    });

    const btnEdit = document.querySelectorAll('.btn_edit');
    btnEdit.forEach(function(button) {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if(xhr.readyState === XMLHttpRequest.DONE) {
                    if(xhr.status === 200) {
                        const user = JSON.parse(xhr.responseText);
                        
                        // Update input fields with user data and show the modal
                        document.getElementById('edit_first_name_id').value = user.first_name || '';
                        document.getElementById('edit_middle_name_id').value = user.middle_name || '';
                        document.getElementById('edit_last_name_id').value = user.last_name || '';
                        document.getElementById('edit_suffix_name_id').value = user.suffix_name || '';
                        document.getElementById('edit_age').value = user.age || '';
                        document.getElementById('edit_birth_date').value = user.birth_date || '';
                        document.getElementById('edit_gender_id').value = user.gender_id || '';
                        document.getElementById('edit_address').value = user.address || '';
                        document.getElementById('edit_contact_number').value = user.contact_number || '';
                        document.getElementById('edit_email_address').value = user.email_address || '';
                        document.getElementById('edit_username').value = user.username || '';
                        document.getElementById('edit_role_id').value = user.role_id || '';
                        
                        // Set the action attribute of the form to include the user ID
                        document.getElementById('editUserForm').action = '/user/update/' + user.user_id;
                    } else {
                        console.error('Error fetching user data');
                    }
                }
            };

            xhr.open('GET', '/user/edit/' + id);
            xhr.send();
        });
    });

    @if ($errors->any() && session('action') == 'store')
        const addUserModal = new bootstrap.Modal(document.getElementById('addUserModal'));
        addUserModal.show();
    @elseif ($errors->any() && session('action') == 'update')
        document.getElementById('editUserForm').action = '/user/update/' + {{  session('user_id')}};

        const editUserModal = new bootstrap.Modal(document.getElementById('editUserModal'));
        editUserModal.show();
    @endif
});

</script>

@endsection