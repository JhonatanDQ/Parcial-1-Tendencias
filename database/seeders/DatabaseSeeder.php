<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Testimonio;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        //Service::factory(10)->create();
        Testimonio::factory(5)->create();
        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
