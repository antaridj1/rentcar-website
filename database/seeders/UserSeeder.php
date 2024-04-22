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
            'name'  => 'Bali Bagus 78',
            'email' => 'balibagus78@gmail.com',
            'phone' => '085157734785',
            'password'  => bcrypt('asdasdasd')
        ]);
    }
}
