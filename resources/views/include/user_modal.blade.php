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
                                <input type="text" class="form-control" id="add_first_name_id" name="add_first_name_id"
                                    value="{{ old('add_first_name_id') }}" />
                                @error('add_first_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_middle_name_id" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="add_middle_name_id" name="add_middle_name_id"
                                    value="{{ old('add_middle_name_id') }}" />
                                @error('add_middle_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_last_name_id" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="add_last_name_id" name="add_last_name_id"
                                    value="{{ old('add_last_name_id') }}" />
                                @error('add_last_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_suffix_name_id" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="add_suffix_name_id" name="add_suffix_name_id"
                                    value="{{ old('add_suffix_name_id') }}" />
                                @error('add_suffix_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="add_age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="add_age" name="add_age" value="{{ old('add_age') }}" />
                                @error('add_age') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="add_birth_date" name="add_birth_date"
                                    value="{{ old('add_birth_date') }}" />
                                @error('add_birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="add_gender_id" name="add_gender_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($genders as $gender)
                                    <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                                        @if (old('add_gender_id') == $gender->gender_id)
                                            <option value="{{ $gender->gender_id }}" selected hidden>{{ $gender->gender }}
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('add_gender_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="add_address" name="add_address" value="{{ old('add_address') }}" />
                                @error('add_address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="add_contact_number" name="add_contact_number" value="{{ old('add_contact_number') }}" />
                                @error('add_contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="add_email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="add_email_address" name="add_email_address" value="{{ old('add_email_address') }}" />
                                @error('add_email_address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="add_username" name="add_username" />
                                @error('add_username') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_password" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" id="add_password" name="add_password" />
                                @error('add_password') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_password_confirmation" class="form-label">CONFIRM PASSWORD</label>
                                <input type="password" class="form-control" id="add_password_confirmation"
                                    name="add_password_confirmation" />
                                @error('add_password_confirmation') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="add_role_id" class="form-label">ROLE</label>
                                <select class="form-select" id="add_role_id" name="add_role_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                                        @if (old('add_role_id') == $role->role_id)
                                            <option value="{{ $role->role_id }}" selected hidden>{{ $role->role }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('add_role_id') <p class="text-danger">{{ $message }}</p> @enderror
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
                                <input type="text" class="form-control" id="view_first_name_id" name="view_first_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="view_middle_name_id" name="view_middle_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="view_last_name_id" name="view_last_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="view_suffix_name_id" name="view_suffix_name_id" readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="view_age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="view_age" name="view_age" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_birth_date" class="form-label">BIRTH DATE</label>
                                <input type="text" class="form-control" id="view_birth_date" name="view_birth_date" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_gender_id" class="form-label">GENDER</label>
                                <input type="text" class="form-control" id="view_gender_id" name="view_gender_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="view_address" name="view_address" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="view_contact_number" name="view_contact_number"
                                    readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="view_email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="view_email_address" name="view_email_address"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="view_username" name="view_username" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_role_id" class="form-label">ROLE</label>
                                <input type="text" class="form-control" id="view_role_id" name="view_role_id" readonly />
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
                                <input type="text" class="form-control" id="edit_first_name_id" name="edit_first_name_id"
                                    value="{{ old('edit_first_name_id') }}" />
                                @error('edit_first_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_middle_name_id" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="edit_middle_name_id" name="edit_middle_name_id"
                                    value="{{ old('edit_middle_name_id') }}" />
                                @error('edit_middle_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_last_name_id" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="edit_last_name_id" name="edit_last_name_id"
                                    value="{{ old('edit_last_name_id') }}" />
                                @error('edit_last_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_suffix_name_id" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="edit_suffix_name_id" name="edit_suffix_name_id"
                                    value="{{ old('edit_suffix_name_id') }}" />
                                @error('edit_suffix_name_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="edit_age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="edit_age" name="edit_age" value="{{ old('edit_age') }}" />
                                @error('edit_age') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_birth_date" class="form-label">BIRTH DATE</label>
                                <input type="date" class="form-control" id="edit_birth_date" name="edit_birth_date"
                                    value="{{ old('edit_birth_date') }}" />
                                @error('edit_birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_gender_id" class="form-label">GENDER</label>
                                <select class="form-select" id="edit_gender_id" name="edit_gender_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                                        @if (old('edit_gender_id') == $gender->gender_id)
                                            <option value="{{ $gender->gender_id }}" selected hidden>{{ $gender->gender }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('edit_gender_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="edit_address" name="edit_address" value="{{ old('edit_address') }}" />
                                @error('edit_address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="edit_contact_number" name="edit_contact_number" value="{{ old('edit_contact_number') }}" />
                                @error('edit_contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="edit_email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="edit_email_address" name="edit_email_address" value="{{ old('edit_email_address') }}" />
                                @error('edit_email_address') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="edit_username" name="edit_username" value="{{ old('edit_username') }}" />
                                @error('edit_username') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="edit_role_id" class="form-label">ROLE</label>
                                <select class="form-select" id="edit_role_id" name="edit_role_id">
                                    <option value="" selected>N/A</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                                        @if (old('edit_role_id') == $role->role_id)
                                            <option value="{{ $role->role_id }}" selected hidden>{{ $role->role }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('edit_role_id') <p class="text-danger">{{ $message }}</p> @enderror
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

<!-- Delete User Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">ARE YOU SURE DO YOU WANT TO DELETE THIS USER?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="deleteUserForm">
                    @method('DELETE')
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="delete_first_name" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="delete_first_name_id"
                                    name="delete_first_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_middle_name" class="form-label">MIDDLE NAME</label>
                                <input type="text" class="form-control" id="delete_middle_name_id"
                                    name="delete_middle_name_id" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_last_name" class="form-label">LAST NAME</label>
                                <input type="text" class="form-control" id="delete_last_name_id" name="view_last_name_id"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_suffix_name" class="form-label">SUFFIX NAME</label>
                                <input type="text" class="form-control" id="delete_suffix_name_id"
                                    name="delete_suffix_name_id" readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="delete_age" class="form-label">AGE</label>
                                <input type="text" class="form-control" id="delete_age" name="delete_age" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_birth_date" class="form-label">BIRTH DATE</label>
                                <input type="text" class="form-control" id="delete_birth_date" name="delete_birth_date"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_gender_id" class="form-label">GENDER</label>
                                <input type="text" class="form-control" id="delete_gender_id" name="delete_gender_id"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_address" class="form-label">ADDRESS</label>
                                <input type="text" class="form-control" id="delete_address" name="delete_address"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_contact_number" class="form-label">CONTACT NUMBER</label>
                                <input type="text" class="form-control" id="delete_contact_number"
                                    name="delete_contact_number" readonly />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="delete_email_address" class="form-label">EMAIL ADDRESS</label>
                                <input type="text" class="form-control" id="delete_email_address"
                                    name="delete_email_address" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="delete_username" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="delete_username" name="delete_username"
                                    readonly />
                            </div>
                            <div class="mb-3">
                                <label for="view_role_id" class="form-label">ROLE</label>
                                <input type="text" class="form-control" id="delete_role_id" name="delete_role_id"
                                    readonly />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-danger">YES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>