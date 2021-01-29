<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Md.Ashanur Rahman',
            'email' => 'ashanour009@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 1
        ]);
    }
}
