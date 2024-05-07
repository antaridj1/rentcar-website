<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'  => 'Bali Bagus',
            'email' => 'balibagus78@gmail.com',
            'phone' => '+6281932415124',
            'password'  => bcrypt('asdasdasd'),
            'instagram_link' => 'https://www.instagram.com/bali_bagus78/',
        ]);
    }
}
