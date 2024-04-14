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
                <!-- Search box -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="SEARCH" aria-label="SEARCH"
                        aria-describedby="search-button">
                    <button class="btn btn-outline-secondary" type="button" id="search-button">SEARCH</button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">FULL NAME</th>
                                <th class="col-1">ADDRESS</th>
                                <th class="col-1">CONTACT NUMBER</th>
                                <th class="col-1">EMAIL</th>
                                <th class="col-1">ACTION</th>
                            </tr>
                        </thead>
                    </table>
                </div>
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
                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" />
                            </div>
                            <div class="mb-3">
                                <label for="middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" />
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" />
                            </div>
                            <div class="mb-3">
                                <label for="suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="suffix_name" name="suffix_name" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="age" name="age" />
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" />
                            </div>
                            <div class="mb-3">
                                <label for="gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="gender_id" name="gender_id">
                                    <option selected>N/A</option>
                                    <option>MALE</option>
                                    <option>FEMALE</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="address" name="address" />
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="email_address" name="email_address" />
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="username" name="username" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">PASSWORD</label>
                                <input type="text" class="form-control" id="password" name="password" />
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">CONFIRM PASSWORD</label>
                                <input type="text" class="form-control" id="password_confirmation"
                                    name="password_confirmation" />
                            </div>
                            <div class="mb-3">
                                <label for="role_id" class="form-label">ROLE</label>
                                <select class="form-select" id="role_id" name="role_id">
                                    <option selected>N/A</option>
                                    <option>ADMIN</option>
                                    <option>EMPLOYEE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-success">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection