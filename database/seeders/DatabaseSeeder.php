<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'hi@admin.me',
            'password'=>bcrypt('password'),
            'year' =>'2013',
            'mobile' => '01317684842',
        ]);

        User::factory(100)->create();
    }
}
