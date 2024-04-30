<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\FirstName;
use App\Models\Gender;
use App\Models\LastName;
use App\Models\MiddleName;
use App\Models\Product;
use App\Models\ProductName;
use App\Models\Role;
use App\Models\SuffixName;
use App\Models\Supplier;
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

        FirstName::factory()->create([
            'first_name' => 'JOVEN JOSHUA',
        ]);

        MiddleName::factory(20)->create();

        MiddleName::factory()->create([
            'middle_name' => 'CELIZ',
        ]);

        LastName::factory(20)->create();

        LastName::factory()->create([
            'last_name' => 'ALOVERA',
        ]);

        SuffixName::factory(20)->create();
        User::factory(47)->create();

        User::factory()->create([
            'first_name_id' => 21,
            'middle_name_id' =>21,
            'last_name_id' => 21,
            'suffix_name_id' => 1,
            'age' => 24,
            'birth_date' => '1999-10-25',
            'gender_id' => 1,
            'address' => '1696 SAN ROQUE ST. ROXAS CITY, CAPIZ, PHILIPPINES 5800',
            'contact_number' => '09434071429',
            'email_address' => 'aloverajovenjoshua99@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        Category::factory()->create([
            'category' => null,
        ]);

        Category::factory()->create([
            'category' => 'SNACKS',
        ]);

        Category::factory()->create([
            'category' => 'RICE MEALS',
        ]);

        Category::factory()->create([
            'category' => 'BISCUITS',
        ]);

        Category::factory()->create([
            'category' => 'CANNED',
        ]);

        Category::factory()->create([
            'category' => 'CANDIES',
        ]);

        Category::factory()->create([
            'category' => 'SOFTDRINKS',
        ]);

        Category::factory()->create([
            'category' => 'JUICES',
        ]);

        Category::factory()->create([
            'category' => 'MILK SHAKES',
        ]);

        Supplier::factory()->create([
            'supplier' => null,
        ]);

        Supplier::factory()->create([
            'supplier' => 'JOLLIBEE INC.',
        ]);

        Supplier::factory()->create([
            'supplier' => 'NATIONAL RICE INC.',
        ]);

        Supplier::factory()->create([
            'supplier' => 'CALS INC.',
        ]);

        ProductName::factory()->create([
            'product_name' => 'FITA',
        ]);

        ProductName::factory()->create([
            'product_name' => 'COKE',
        ]);

        ProductName::factory()->create([
            'product_name' => 'SPRITE',
        ]);

        ProductName::factory()->create([
            'product_name' => 'TAPSILOG',
        ]);

        ProductName::factory()->create([
            'product_name' => 'BEEF PARES',
        ]);

        ProductName::factory()->create([
            'product_name' => 'EGG',
        ]);

        ProductName::factory()->create([
            'product_name' => 'SIZZLING SISIG',
        ]);

        ProductName::factory()->create([
            'product_name' => 'CHICKEN NOODLE SOUP',
        ]);

        ProductName::factory()->create([
            'product_name' => 'FRENCH FRIES',
        ]);

        ProductName::factory()->create([
            'product_name' => 'MAX',
        ]);

        ProductName::factory()->create([
            'product_name' => 'SNOWBEAR',
        ]);

        ProductName::factory()->create([
            'product_name' => 'LUCKY ME LAPAZ BATCHOY',
        ]);

        ProductName::factory()->create([
            'product_name' => 'LECHON MANOK WITH RICE',
        ]);

        ProductName::factory()->create([
            'product_name' => 'PORK LIEMPO WITH RICE',
        ]);

        Product::factory(148)->create();
    }
}
