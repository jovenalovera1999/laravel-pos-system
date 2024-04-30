@extends('layout.main')

@section('content')

<title>LIST OF USERS | POS SYSTEM</title>

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
                        <form action="/users" method="get">
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
                                <td>{{ ($user->middle_name) ? $user->last_name . ', ' . $user->first_name . ' ' . $user->middle_name[0] . '. ' : $user->last_name . ', ' . $user->first_name . ' ' }} {{ ($user->suffix_name) ? $user->suffix_name : '' }}
                                </td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->contact_number }}</td>
                                <td>{{ $user->email_address}}</td>
                                <td>{{ $user->role}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Action Buttons">
                                        <a href="#" class="btn btn-primary btn_viewUser" data-bs-toggle="modal" data-bs-target="#viewUserModal" data-id="{{ $user->user_id }}">VIEW</a>
                                        <a href="#" class="btn btn-success btn_editUser" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="{{ $user->user_id }}">EDIT</a>
                                        <a href="#" class="btn btn-danger btn_deleteUser" data-bs-toggle="modal" data-bs-target="#deleteUserModal" data-id="{{ $user->user_id }}">DELETE</a>
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
    @if ($errors->any() && session('action') == 'userStore')
        const addUserModal = new bootstrap.Modal(document.getElementById('addUserModal'));
        addUserModal.show();
    @elseif ($errors->any() && session('action') == 'userUpdate')
        document.getElementById('editUserForm').action = '/user/update/' + {{  session('user_id')}};

        const editUserModal = new bootstrap.Modal(document.getElementById('editUserModal'));
        editUserModal.show();
    @endif
});

</script>

@endsection