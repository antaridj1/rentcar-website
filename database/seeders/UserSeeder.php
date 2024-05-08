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
            'address' => 'Jl. Merdeka, Kuta, Badung, Bali',
            'maps_link' => 'https://maps.app.goo.gl/gquSe3MT8Qhw6eRu5?g_st=atm',
            'embed_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.7725366275818!2d115.18198439999999!3d-8.7131375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246a486d6fbd3%3A0x2214b654dedd458d!2s75PJ%2BPQX%2C%20Kec.%20Kuta%2C%20Kabupaten%20Badung%2C%20Bali!5e0!3m2!1sid!2sid!4v1715083813705!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'instagram_username' => '@bali_bagus78'
        ]);
    }
}
