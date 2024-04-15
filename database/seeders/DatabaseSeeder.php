<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FirstName;
use App\Models\Gender;
use App\Models\LastName;
use App\Models\MiddleName;
use App\Models\Role;
use App\Models\SuffixName;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        MiddleName::factory()->create([
            'middle_name' => null,
        ]);

        LastName::factory()->create([
            'last_name' => null,
        ]);

        SuffixName::factory()->create([
            'suffix_name' => null,
        ]);

        Gender::factory()->create([
            'gender' => 'MALE',
        ]);

        Gender::factory()->create([
            'gender' => 'FEMALE',
        ]);

        Role::factory()->create([
            'role' => 'ADMINISTRATOR',
        ]);

        Role::factory()->create([
            'role' => 'EMPLOYEE',
        ]);

        FirstName::factory(20)->create();
        MiddleName::factory(20)->create();
        LastName::factory(20)->create();
        SuffixName::factory(20)->create();
        User::factory(40)->create();
    }
}
