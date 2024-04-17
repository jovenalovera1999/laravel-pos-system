@extends('layout.main')

@section('content')

<title>USERS</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">USERS</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        ADD USER
                    </button>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="{{ route('userList') }}" method="get">
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
                                        <button type="button" class="btn btn-primary" data-user_id={{ $user->user_id }} data-first_name="{{ $user->first_name }}" data-middle_name="{{ $user->middle_name }}" data-last_name="{{ $user->last_name }}" data-suffix_name="{{ $user->suffix_name }}" data-age="{{ $user->age }}" data-birth_date="{{ $user->birth_date }}" data-gender_id="{{ $user->gender_id }}" data-gender={{ $user->gender }} data-address="{{ $user->address }}" data-contact_number="{{ $user->contact_number }}" data-email_address="{{ $user->email_address }}" data-username="{{ $user->username }}" data-role_id="{{ $user->role_id }}" data-role={{ $user->role }} data-bs-toggle="modal" data-bs-target="#viewUserModal" >VIEW</button>

                                        <button type="button" class="btn btn-success" data-user_id={{ $user->user_id }} data-first_name="{{ $user->first_name }}" data-middle_name="{{ $user->middle_name }}" data-last_name="{{ $user->last_name }}" data-suffix_name="{{ $user->suffix_name }}" data-age="{{ $user->age }}" data-birth_date="{{ $user->birth_date }}" data-gender_id="{{ $user->gender_id }}" data-gender="{{ $user->gender }}" data-address="{{ $user->address }}" data-contact_number="{{ $user->contact_number }}"  data-email_address="{{ $user->email_address }}" data-username="{{ $user->username }}" data-role_id="{{ $user->role_id }}" data-role="{{ $user->role }}" data-bs-toggle="modal" data-bs-target="#editUserModal" >EDIT</button>

                                        <a href="#" class="btn btn-danger">DELETE</a>
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
    document.addEventListener('DOMContentLoaded', function () {
        let addUserModal = new bootstrap.Modal(document.getElementById('addUserModal'));
        let editUserModal = new bootstrap.Modal(document.getElementById('editUserModal'));
        
        // Check if Laravel validation errors exist
        @if ($errors->any())
            addUserModal.show();
        @endif
    });
</script>

<script>
    document.getElementById('viewUserModal').addEventListener('show.bs.modal', function(event) {
        const btnView = event.relatedTarget;

        const userId = btnView.getAttribute('data-user_id');
        const firstName = btnView.getAttribute('data-first_name');
        const middleName = btnView.getAttribute('data-middle_name');
        const lastName = btnView.getAttribute('data-last_name');
        const suffixName = btnView.getAttribute('data-suffix_name');
        const age = btnView.getAttribute('data-age');
        const birthDate = btnView.getAttribute('data-birth_date');
        const genderId = btnView.getAttribute('data-gender_id');
        const gender = btnView.getAttribute('data-gender');
        const address = btnView.getAttribute('data-address');
        const contactNumber = btnView.getAttribute('data-contact_number');
        const emailAddress = btnView.getAttribute('data-email_address');
        const username = btnView.getAttribute('data-username');
        const roleId = btnView.getAttribute('data-role_id');
        const role = btnView.getAttribute('data-role');
        
        const modal = this;
        
        modal.querySelector('#first_name_id').value = firstName;
        modal.querySelector('#middle_name_id').value = middleName;
        modal.querySelector('#last_name_id').value = lastName;
        modal.querySelector('#suffix_name_id').value = suffixName;
        modal.querySelector('#age').value = age;
        modal.querySelector('#birth_date').value = birthDate;
        modal.querySelector('#gender_id').value = gender;
        modal.querySelector('#address').value = address;
        modal.querySelector('#contact_number').value = contactNumber;
        modal.querySelector('#email_address').value = emailAddress;
        modal.querySelector('#username').value = username;
        modal.querySelector('#role_id').value = role;
    });

    document.getElementById('editUserModal').addEventListener('show.bs.modal', function(event) {
        const btnEdit = event.relatedTarget;

        const userId = btnEdit.getAttribute('data-user_id');
        const firstName = btnEdit.getAttribute('data-first_name');
        const middleName = btnEdit.getAttribute('data-middle_name');
        const lastName = btnEdit.getAttribute('data-last_name');
        const suffixName = btnEdit.getAttribute('data-suffix_name');
        const age = btnEdit.getAttribute('data-age');
        const birthDate = btnEdit.getAttribute('data-birth_date');
        const genderId = btnEdit.getAttribute('data-gender_id');
        const address = btnEdit.getAttribute('data-address');
        const contactNumber = btnEdit.getAttribute('data-contact_number');
        const emailAddress = btnEdit.getAttribute('data-email_address');
        const username = btnEdit.getAttribute('data-username');
        const roleId = btnEdit.getAttribute('data-role_id');

        const modal = this;

        modal.querySelector('#user_update_form').action = '/user/update/' + userId;
        modal.querySelector('#first_name_id').value = firstName;
        modal.querySelector('#middle_name_id').value = middleName;
        modal.querySelector('#last_name_id').value = lastName;
        modal.querySelector('#suffix_name_id').value = suffixName;
        modal.querySelector('#age').value = age;
        modal.querySelector('#birth_date').value = birthDate;
        modal.querySelector('#gender_id').value = genderId;
        modal.querySelector('#address').value = address;
        modal.querySelector('#contact_number').value = contactNumber;
        modal.querySelector('#email_address').value = emailAddress;
        modal.querySelector('#username').value = username;
        modal.querySelector('#role_id').value = roleId;
    });
</script>

@endsection