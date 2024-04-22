<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="/user/store" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="addUserModalLabel">ADD USER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="add_first_name_id" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="add_first_name_id" name="first_name_id"
                                    value="{{ old('first_name_id') }}" />
                                @error('first_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_middle_name_id" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="add_middle_name_id" name="middle_name_id"
                                    value="{{ old('middle_name_id') }}" />
                                @error('middle_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_last_name_id" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="add_last_name_id" name="last_name_id"
                                    value="{{ old('last_name_id') }}" />
                                @error('last_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_suffix_name_id" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="add_suffix_name_id" name="suffix_name_id"
                                    value="{{ old('suffix_name_id') }}" />
                                @error('suffix_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="add_age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="add_age" name="age" value="{{ old('age') }}" />
                                @error('age') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="add_birth_date" name="birth_date"
                                    value="{{ old('birth_date') }}" />
                                @error('birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="add_gender_id" name="gender_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($genders as $gender)
                                    <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                                        @if (old('gender_id') == $gender->gender_id)
                                            <option value="{{ $gender->gender_id }}" selected hidden>{{ $gender->gender }}
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('gender_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="add_address" name="address" value="{{ old('address') }}" />
                                @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="add_contact_number" name="contact_number" value="{{ old('contact_number') }}" />
                                @error('contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="add_email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="add_email_address" name="email_address" value="{{ old('email_address') }}" />
                                @error('email_address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="add_username" name="username" />
                                @error('username') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_password" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" id="add_password" name="password" />
                                @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_password_confirmation" class="form-label">CONFIRM PASSWORD</label>
                                <input type="password" class="form-control" id="add_password_confirmation"
                                    name="password_confirmation" />
                                @error('password_confirmation') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_role_id" class="form-label">ROLE</label>
                                <select class="form-select" id="add_role_id" name="role_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                                        @if (old('role_id') == $role->role_id)
                                            <option value="{{ $role->role_id }}" selected hidden>{{ $role->role }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('role_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- View User Modal -->
<div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewUserModalLabel">VIEW USER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="view_first_name" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="view_first_name_id" name="first_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="view_middle_name_id" name="middle_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="view_last_name_id" name="last_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="view_suffix_name_id" name="suffix_name_id" readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="view_age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="view_age" name="age" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_birth_date" class="form-label">BIRTH DATE</label>
                                <input type="text" class="form-control" id="view_birth_date" name="birth_date" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_gender_id" class="form-label">GENDER</label>
                                <input type="text" class="form-control" id="view_gender_id" name="gender_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="view_address" name="address" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="view_contact_number" name="contact_number"
                                    readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="view_email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="view_email_address" name="email_address"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="view_username" name="username" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_role_id" class="form-label">ROLE</label>
                                <input type="text" class="form-control" id="view_role_id" name="role_id" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">EDIT USER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="editUserForm">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="edit_first_name_id" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="edit_first_name_id" name="first_name_id"
                                    value="{{ old('first_name_id') }}" />
                                @error('first_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_middle_name_id" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="edit_middle_name_id" name="middle_name_id"
                                    value="{{ old('middle_name_id') }}" />
                                @error('middle_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_last_name_id" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="edit_last_name_id" name="last_name_id"
                                    value="{{ old('last_name_id') }}" />
                                @error('last_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_suffix_name_id" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="edit_suffix_name_id" name="suffix_name_id"
                                    value="{{ old('suffix_name_id') }}" />
                                @error('suffix_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="edit_age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="edit_age" name="age" value="{{ old('age') }}" />
                                @error('age') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="edit_birth_date" name="birth_date"
                                    value="{{ old('birth_date') }}" />
                                @error('birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="edit_gender_id" name="gender_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($genders as $gender)
                                    <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                                    @if (old('gender_id') == $gender->gender_id)
                                    <option value="{{ $gender->gender_id }}" selected hidden>{{ $gender->gender }}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('gender_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="edit_address" name="address" value="{{ old('address') }}" />
                                @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="edit_contact_number" name="contact_number" value="{{ old('contact_number') }}" />
                                @error('contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="edit_email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="edit_email_address" name="email_address" value="{{ old('email_address') }}" />
                                @error('email_address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="edit_username" name="username" value="{{ old('username') }}" />
                                @error('username') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_role_id" class="form-label">ROLE</label>
                                <select class="form-select" id="edit_role_id" name="role_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                                    @if (old('role_id') == $role->role_id)
                                    <option value="{{ $role->role_id }}" selected hidden>{{ $role->role }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('role_id') <p class="text-danger">{{ $message }}</p> @enderror
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