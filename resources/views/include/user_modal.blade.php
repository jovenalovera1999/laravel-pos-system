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
                                <input type="text" class="form-control" id="first_name_id" name="first_name_id"
                                    value="{{ old('first_name') }}" />
                                @error('first_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="middle_name_id" name="middle_name_id"
                                    value="{{ old('middle_name') }}" />
                                @error('middle_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="last_name_id" name="last_name_id"
                                    value="{{ old('last_name') }}" />
                                @error('last_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="suffix_name_id" name="suffix_name_id"
                                    value="{{ old('suffix_name') }}" />
                                @error('suffix_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}" />
                                @error('age') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date"
                                    value="{{ old('birth_date') }}" />
                                @error('birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="gender_id" name="gender_id">
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

<!-- View User Modal -->
<div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewUserModalLabel">ADD USER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="first_name_id" name="first_name_id"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="middle_name_id" name="middle_name_id"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="last_name_id" name="last_name_id"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="suffix_name_id" name="suffix_name_id"
                                    readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="age" name="age" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">BIRTH DATE</label>
                                <input type="text" class="form-control" id="birth_date" name="birth_date" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="gender_id" class="form-label">GENDER</label>
                                <input type="text" class="form-control" id="gender_id" name="gender_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="address" name="address" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number"
                                    readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="email_address" name="email_address"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="username" name="username" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="role_id" class="form-label">ROLE</label>
                                <input type="text" class="form-control" id="role_id" name="role_id" readonly />
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
                <form action="#" method="post" id="user_update_form">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="first_name_id" name="first_name_id"
                                    value="{{ old('first_name') }}" />
                                @error('first_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="middle_name_id" name="middle_name_id"
                                    value="{{ old('middle_name') }}" />
                                @error('middle_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="last_name_id" name="last_name_id"
                                    value="{{ old('last_name') }}" />
                                @error('last_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="suffix_name_id" name="suffix_name_id"
                                    value="{{ old('suffix_name') }}" />
                                @error('suffix_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}" />
                                @error('age') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date"
                                    value="{{ old('birth_date') }}" />
                                @error('birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="gender_id" name="gender_id">
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
                                <label for="role_id" class="form-label">ROLE</label>
                                <select class="form-select" id="role_id" name="role_id">
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