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
            'first_name_id' => ['required', 'max:55'],
            'middle_name_id' => ['nullable', 'max:55'],
            'last_name_id' => ['required', 'max:55'],
            'suffix_name_id' => ['nullable', 'max:10'],
            'age' => ['required', 'numeric'],
            'birth_date' => ['required', 'date'],
            'gender_id' => ['required'],
            'address' => ['required', 'max:55'],
            'contact_number' => ['required', 'max:20'],
            'email_address' => ['required', 'email'],
            'username' => ['required', 'min:6', 'max:12', Rule::unique('users', 'username')],
            'password' => ['required', 'confirmed', 'min:6', 'max:15'],
            'password_confirmation' => ['required', 'min:6', 'max:15'],
            'role_id' => ['required'],
        ], [
            'first_name_id.required' => 'The first name field is required.',
            'middle_name_id.required' => 'The middle name field is required.',
            'last_name_id.required' => 'The last name field is required.',
            'suffix_name_id.required' => 'The suffix name field is required.',
            'gender_id.required' => 'The gender field is required.',
            'role_id.required' => 'The role field is required.',
        ]);

        $firstName = FirstName::firstOrCreate(['first_name' => $validated['first_name_id']]);
        $validated['first_name_id'] = $firstName->first_name_id;

        $middleName = MiddleName::firstOrCreate(['middle_name' => $validated['middle_name_id']]);
        $validated['middle_name_id'] = $middleName->middle_name_id;

        $lastName = LastName::firstOrCreate(['last_name' => $validated['last_name_id']]);
        $validated['last_name_id'] = $lastName->last_name_id;

        $suffixName = SuffixName::firstOrCreate(['suffix_name' => $validated['suffix_name_id']]);
        $validated['suffix_name_id'] = $suffixName->suffix_name_id;

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

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
            'first_name_id' => ['required', 'max:55'],
            'middle_name_id' => ['nullable', 'max:55'],
            'last_name_id' => ['required', 'max:55'],
            'suffix_name_id' => ['nullable', 'max:10'],
            'age' => ['required', 'numeric'],
            'birth_date' => ['required', 'date'],
            'gender_id' => ['required'],
            'address' => ['required', 'max:55'],
            'contact_number' => ['required', 'max:20'],
            'email_address' => ['required', 'email'],
            'username' => ['required', 'min:6', 'max:12'],
            'role_id' => ['required'],
        ], [
            'first_name_id.required' => 'The first name field is required.',
            'middle_name_id.required' => 'The middle name field is required.',
            'last_name_id.required' => 'The last name field is required.',
            'suffix_name_id.required' => 'The suffix name field is required.',
            'gender_id.required' => 'The gender field is required.',
            'role_id.required' => 'The role field is required.',
        ]);

        return dd($validated);
    }
}
