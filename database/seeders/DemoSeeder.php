<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Demo;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Demo::factory()->count(24)->create();
    }
}
