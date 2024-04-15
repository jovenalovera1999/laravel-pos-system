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
                                        <a href="#" class="btn btn-primary">VIEW</a>
                                        <a href="#" class="btn btn-success">EDIT</a>
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

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">ADD USER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('userStore') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="first_name_id" name="first_name" />
                                @error('first_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="middle_name_id" name="middle_name" />
                                @error('middle_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="last_name_id" name="last_name" />
                                @error('last_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="suffix_name_id" name="suffix_name" />
                                @error('suffix_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="age" name="age" />
                                @error('age') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" />
                                @error('birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="gender_id" name="gender_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                                    @endforeach
                                </select>
                                @error('gender_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="address" name="address" />
                                @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" />
                                @error('contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="email_address" name="email_address" />
                                @error('email_address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="username" name="username" />
                                @error('username') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">PASSWORD</label>
                                <input type="text" class="form-control" id="password" name="password" />
                                @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">CONFIRM PASSWORD</label>
                                <input type="text" class="form-control" id="password_confirmation"
                                    name="password_confirmation" />
                                @error('password_confirmation') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="role_id" class="form-label">ROLE</label>
                                <select class="form-select" id="role_id" name="role_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                                    @endforeach
                                </select>
                                @error('role_id') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection