<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // CategorySeeder::class,
            // ProjectSeeder::class,
            // DemoSeeder::class
        ]);
        \App\Models\User::create([
            "name" => "abdelaziz bardich",
            "email" => "abdelazizbardich@gmail.com",
            "password" => Hash::make("azeraziz1995"),
            "remember_token" => now()
        ]);
    }
}
