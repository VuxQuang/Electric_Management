<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::insert(
            [
                [
                    'name' => 'duongvankhai2022001@gmail.com',
                    'email' => 'duongvankhai2022001@gmail.com',
                    'password' => Hash::make(1),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
