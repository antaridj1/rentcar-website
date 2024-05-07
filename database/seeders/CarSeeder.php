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
        $cars = array(
            array('id' => '2','name' => 'Agya','car_type_id' => 1, 'seat' => '5','image' => 'image/L17jxnBSjei2180NYcGAHv1gzc6leq866qJ2ORB7.png','price' => '275000','is_with_driver' => '0','price_with_driver' => NULL,'is_available' => '1','order_number' => '1','created_at' => '2024-04-24 12:49:03','updated_at' => '2024-04-24 12:58:36'),
            array('id' => '3','name' => 'New Brio','car_type_id' => 1, 'seat' => '5','image' => 'image/WVQzTpfWHuvl0u2V44ZPL1mCcovy5G3gZfnR2m37.png','price' => '300000','is_with_driver' => '0','price_with_driver' => NULL,'is_available' => '1','order_number' => '2','created_at' => '2024-04-24 12:54:05','updated_at' => '2024-04-24 12:58:19'),
            array('id' => '4','name' => 'Jazz RS','car_type_id' => 2, 'seat' => '5','image' => 'image/STKdvjpTTsJQSEOKj2N6hHFB8tMnyNuX02Mjcnmv.jpg','price' => '350000','is_with_driver' => '0','price_with_driver' => NULL,'is_available' => '1','order_number' => '3','created_at' => '2024-04-24 13:00:10','updated_at' => '2024-04-24 13:00:10'),
            array('id' => '5','name' => 'Baleno','car_type_id' => 2, 'seat' => '5','image' => 'image/n0asCN8eZDwYbQu0l6GKj2UspFzCtA8oVCWyhoMt.png','price' => '325000','is_with_driver' => '0','price_with_driver' => NULL,'is_available' => '1','order_number' => '4','created_at' => '2024-04-24 13:02:53','updated_at' => '2024-04-24 13:02:53'),
            array('id' => '6','name' => 'HRV','car_type_id' => 2, 'seat' => '5','image' => 'image/HFKWGFMsZb4stvyT8ZADPrdh5JSlcrXP5KAWu77g.jpg','price' => '450000','is_with_driver' => '0','price_with_driver' => NULL,'is_available' => '1','order_number' => '5','created_at' => '2024-04-24 13:05:19','updated_at' => '2024-04-24 13:05:19'),
            array('id' => '7','name' => 'XPander','car_type_id' => 3, 'seat' => '7','image' => 'image/Z6FLvNJ2sgQAKwU6Awe39oozyVTuDCgv5lFLFmWu.png','price' => '375000','is_with_driver' => '1','price_with_driver' => '700000','is_available' => '1','order_number' => '6','created_at' => '2024-04-24 13:06:46','updated_at' => '2024-04-24 13:15:15'),
            array('id' => '8','name' => 'New Avanza','car_type_id' => 3, 'seat' => '7','image' => 'image/vH93ZHDXYY7ZLA6ERy63cm4XjCJQ9BdvTzFEYLxL.png','price' => '350000','is_with_driver' => '1','price_with_driver' => '700000','is_available' => '1','order_number' => '7','created_at' => '2024-04-24 13:08:06','updated_at' => '2024-04-24 13:15:50'),
            array('id' => '9','name' => 'Raize','car_type_id' => 3, 'seat' => '5','image' => 'image/sNRMGtm6L7DRA6SG3mheOrCRLIHxT2GOOccSeki3.png','price' => '350000','is_with_driver' => '0','price_with_driver' => NULL,'is_available' => '1','order_number' => '8','created_at' => '2024-04-24 13:09:06','updated_at' => '2024-04-24 13:09:06'),
            array('id' => '10','name' => 'New Rush','car_type_id' => 4, 'seat' => '7','image' => 'image/SBwl1UQWwhQEuwg5FW16qbHKsiFXBVijqfL64Xa7.png','price' => '400000','is_with_driver' => '1','price_with_driver' => '750000','is_available' => '1','order_number' => '9','created_at' => '2024-04-24 13:10:41','updated_at' => '2024-04-24 13:16:16'),
            array('id' => '11','name' => 'Inova Reborn','car_type_id' => 4, 'seat' => '7','image' => 'image/0G0qTx8gISbFNsnaskhuxF2cpdCFRY24oFdcmjDf.png','price' => '500000','is_with_driver' => '1','price_with_driver' => '850000','is_available' => '1','order_number' => '10','created_at' => '2024-04-24 13:12:48','updated_at' => '2024-04-24 13:16:31'),
            array('id' => '12','name' => 'Sienta','car_type_id' => 3, 'seat' => '7','image' => 'image/OBiZ2nntn6tVn3IfkwsgH6ynuEzcvKTOIMhz3pMl.png','price' => '350000','is_with_driver' => '0','price_with_driver' => NULL,'is_available' => '1','order_number' => '11','created_at' => '2024-04-24 13:14:48','updated_at' => '2024-04-24 13:14:48')
            
          );

        foreach ($cars as $key => $car) {
            Car::create($car);
        }
    }
}
