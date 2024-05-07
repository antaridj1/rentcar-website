<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'name' => 'City Car',
            ],
            [
                'name' => 'Hatchback',
            ],
            [
                'name' => 'MPV',
            ],
            [
                'name' => 'SUV',
            ]
        ];

        foreach ($cars as $key => $car) {
            CarType::create($car);
        }
    }
}
