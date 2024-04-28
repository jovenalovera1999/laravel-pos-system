<?php

namespace App\Http\Controllers;

use App\Models\FirstName;
use App\Models\Gender;
use App\Models\LastName;
use App\Models\MiddleName;
use App\Models\Role;
use App\Models\SuffixName;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        $genders = Gender::all();
        $roles = Role::all();
        $users = User::leftJoin('first_names', 'users.first_name_id', '=', 'first_names.first_name_id')
            ->leftJoin('middle_names', 'users.middle_name_id', '=', 'middle_names.middle_name_id')
            ->leftJoin('last_names', 'users.last_name_id', '=', 'last_names.last_name_id')
            ->leftJoin('suffix_names', 'users.suffix_name_id', '=', 'suffix_names.suffix_name_id')
            ->leftJoin('genders', 'users.gender_id', '=', 'genders.gender_id')
            ->leftJoin('roles', 'users.role_id', '=', 'roles.role_id')
            ->orderBy('last_names.last_name', 'asc');

        if(request()->has('search')) {
            $searchTerm = request()->get('search');

            if($searchTerm) {
                $users = $users->where(function($query) use ($searchTerm) {
                    $query->where('first_names.first_name', 'like', "%$searchTerm%")
                        ->orWhere('middle_names.middle_name', 'like', "%$searchTerm%")
                        ->orWhere('last_names.last_name', 'like', "%$searchTerm%")
                        ->orWhere('users.email_address', 'like', "%$searchTerm%")
                        ->orWhere('roles.role', 'like', "%$searchTerm%");
                });
            }
        }

        $users = $users->paginate(25)
            ->appends(['search' => request()->get('search')]);

        return view('user.index', compact('genders', 'roles', 'users'));
    }

    public function show($id) {
        $user = User::leftJoin('first_names', 'users.first_name_id', '=', 'first_names.first_name_id')
            ->leftJoin('middle_names', 'users.middle_name_id', '=', 'middle_names.middle_name_id')
            ->leftJoin('last_names', 'users.last_name_id', '=', 'last_names.last_name_id')
            ->leftJoin('suffix_names', 'users.suffix_name_id', '=', 'suffix_names.suffix_name_id')
            ->leftJoin('genders', 'users.gender_id', '=', 'genders.gender_id')
            ->leftJoin('roles', 'users.role_id', '=', 'roles.role_id')
            ->find($id);

        return response()->json($user);
    }

    public function store(Request $request) {
        session(['action' => 'store']);
        $validated = $request->validate([
            'add_first_name_id' => ['required', 'max:55'],
            'add_middle_name_id' => ['nullable', 'max:55'],
            'add_last_name_id' => ['required', 'max:55'],
            'add_suffix_name_id' => ['nullable', 'max:10'],
            'add_age' => ['required', 'numeric'],
            'add_birth_date' => ['required', 'date'],
            'add_gender_id' => ['required'],
            'add_address' => ['required', 'max:55'],
            'add_contact_number' => ['required', 'max:20'],
            'add_email_address' => ['required', 'email'],
            'add_username' => ['required', 'min:6', 'max:12', Rule::unique('users', 'username')],
            'add_password' => ['required', 'confirmed', 'min:6', 'max:15'],
            'add_password_confirmation' => ['required', 'min:6', 'max:15'],
            'add_role_id' => ['required'],
        ], [
            'add_first_name_id.required' => 'The first name field is required.',
            'add_middle_name_id.required' => 'The middle name field is required.',
            'add_last_name_id.required' => 'The last name field is required.',
            'add_suffix_name_id.required' => 'The suffix name field is required.',
            'add_age.required' => 'The age field is required.',
            'add_age.numeric' => 'The age field must be a number.',
            'add_birth_date.required' => 'The birth date field is required.',
            'add_birth_date.date' => 'The birth date field must be date.',
            'add_gender_id.required' => 'The gender field is required.',
            'add_address.required' => 'The address field is required.',
            'add_address.max' => 'The address field must not greater than 55 characters.',
            'add_contact_number.required' => 'The contact number field is required.',
            'add_contact_number.max' => 'The contact number must not greater than 20 characters.',
            'add_email_address.required' => 'The email address field is required.',
            'add_email_address.email' => 'The email address field must contain a valid email address.',
            'add_username.required' => 'The username field is required.',
            'add_username.min' => 'The username field must be at least 6 characters.',
            'add_username.max' => 'The username field must not greater than 55 characters.',
            'add_username.unique' => 'The username is already taken.',
            'add_password.required' => 'The password field is required.',
            'add_password.confirmed' => 'The password fied must match with confirm password field.',
            'add_password.min' => 'The password field must be at least 6 characters.',
            'add_password.max' => 'The password field must not greater than 15 characters.',
            'add_password_confirmation.required' => 'The confirm password field is required.',
            'add_password_confirmation.min' => 'The confirm password field must be at least 6 characters.',
            'add_password_confirmation.max' => 'The confirm password field must not greater than 15 characters.',
            'add_role_id.required' => 'The role field is required.',
        ]);

        $firstName = FirstName::firstOrCreate(['first_name' => $validated['add_first_name_id']]);
        $validated['add_first_name_id'] = $firstName->first_name_id;

        $middleName = MiddleName::firstOrCreate(['middle_name' => $validated['add_middle_name_id']]);
        $validated['add_middle_name_id'] = $middleName->middle_name_id;

        $lastName = LastName::firstOrCreate(['last_name' => $validated['add_last_name_id']]);
        $validated['add_last_name_id'] = $lastName->last_name_id;

        $suffixName = SuffixName::firstOrCreate(['suffix_name' => $validated['add_suffix_name_id']]);
        $validated['add_suffix_name_id'] = $suffixName->suffix_name_id;

        $validated['add_password'] = bcrypt($validated['add_password']);

        User::create([
            'first_name_id' => $validated['add_first_name_id'],
            'middle_name_id' => $validated['add_middle_name_id'],
            'last_name_id' => $validated['add_last_name_id'],
            'suffix_name_id' => $validated['add_suffix_name_id'],
            'age' => $validated['add_age'],
            'birth_date' => $validated['add_birth_date'],
            'gender_id' => $validated['add_gender_id'],
            'address' => $validated['add_address'],
            'contact_number' => $validated['add_contact_number'],
            'email_address' => $validated['add_email_address'],
            'username' => $validated['add_username'],
            'password' => $validated['add_password'],
            'role_id' => $validated['add_role_id'],
        ]);

        return back()->with('message_success', 'User successfully added.');
        
        // return dd($validated);
    }

    public function edit($id)
    {
        $user = User::leftJoin('first_names', 'users.first_name_id', '=', 'first_names.first_name_id')
            ->leftJoin('middle_names', 'users.middle_name_id', '=', 'middle_names.middle_name_id')
            ->leftJoin('last_names', 'users.last_name_id', '=', 'last_names.last_name_id')
            ->leftJoin('suffix_names', 'users.suffix_name_id', '=', 'suffix_names.suffix_name_id')
            ->leftJoin('genders', 'users.gender_id', '=', 'genders.gender_id')
            ->leftJoin('roles', 'users.role_id', '=', 'roles.role_id')
            ->find($id);

        return response()->json($user);
    }

    public function update(Request $request, User $user) {
        session(['action' => 'update']);
        $validated = $request->validate([
            'edit_first_name_id' => ['required', 'max:55'],
            'edit_middle_name_id' => ['nullable', 'max:55'],
            'edit_last_name_id' => ['required', 'max:55'],
            'edit_suffix_name_id' => ['nullable', 'max:10'],
            'edit_age' => ['required', 'numeric'],
            'edit_birth_date' => ['required', 'date'],
            'edit_gender_id' => ['required'],
            'edit_address' => ['required', 'max:55'],
            'edit_contact_number' => ['required', 'max:20'],
            'edit_email_address' => ['required', 'email'],
            'edit_username' => ['required', 'min:6', 'max:12', Rule::unique('users', 'username')->ignore($user)],
            'edit_role_id' => ['required'],
        ], [
            'edit_first_name_id.required' => 'The first name field is required.',
            'edit_middle_name_id.required' => 'The middle name field is required.',
            'edit_last_name_id.required' => 'The last name field is required.',
            'edit_suffix_name_id.required' => 'The suffix name field is required.',
            'edit_age.required' => 'The age field is required.',
            'edit_age.numeric' => 'The age field must be a number.',
            'edit_birth_date.required' => 'The birth date field is required.',
            'edit_birth_date.date' => 'The birth date field must be date.',
            'edit_gender_id.required' => 'The gender field is required.',
            'edit_address.required' => 'The address field is required.',
            'edit_address.max' => 'The address field must not greater than 55 characters.',
            'edit_contact_number.required' => 'The contact number field is required.',
            'edit_contact_number.max' => 'The contact number must not greater than 20 characters.',
            'edit_email_address.required' => 'The email address field is required.',
            'edit_email_address.email' => 'The email address field must contain a valid email address.',
            'edit_username.required' => 'The username field is required.',
            'edit_username.min' => 'The username field must be at least 6 characters.',
            'edit_username.max' => 'The username field must not greater than 55 characters.',
            'edit_username.unique' => 'The username is already taken.',
            'edit_role_id.required' => 'The role field is required.',
        ]);

        // $firstName = FirstName::firstOrCreate(['first_name' => $validated['first_name_id']]);
        // $validated['first_name_id'] = $firstName->first_name_id;

        // $middleName = MiddleName::firstOrCreate(['middle_name' => $validated['middle_name_id']]);
        // $validated['middle_name_id'] = $middleName->middle_name_id;

        // $lastName = LastName::firstOrCreate(['last_name' => $validated['last_name_id']]);
        // $validated['last_name_id'] = $lastName->last_name_id;

        // $suffixName = SuffixName::firstOrCreate(['suffix_name' => $validated['suffix_name_id']]);
        // $validated['suffix_name_id'] = $suffixName->suffix_name_id;

        // $user->update($validated);

        // return back()->with('message_success', ($middleName) ? $firstName->first_name . ' ' . $middleName->middle_name . ' ' . $lastName->last_name . ' SUCCESSFULLY UPDATED.' : $firstName->first_name . ' ' . $lastName->last_name . ' SUCCESSFULLY UPDATED.');

        return dd($validated);
    }
}
