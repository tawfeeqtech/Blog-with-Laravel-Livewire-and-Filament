<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Post::factory(100)->create();
        // \App\Models\Category::factory(5)->create();

        $user1 = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        $role = Role::create(['name' => 'Admin']);

        $user1->assignRole($role);
    }
}
