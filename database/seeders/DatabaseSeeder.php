<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Admin::factory()->create([
            'name' => 'Mina Fawzy',
            'email' => 'minaAdmin@gmail.com',
            'phone' => '01220652351',
            'password' => bcrypt('Superadmin123456')
        ]);
    }
}
