<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Toyota',
                'seat'  => 4,
                'image' => 'test.jpg',
                'price' => 250000,
                'order_number' => 1,
            ]
        ];

        foreach ($cars as $key => $car) {
            Car::create($car);
        }
    }
}
