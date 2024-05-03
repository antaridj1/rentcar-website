<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::first();
        $cars = Car::where('is_available',true)->orderBy('order_number','asc')->get();
        return view('frontend.home',compact('cars','user'));
    }

    public function getSelfDriveCar(){
        $cars = Car::where('is_available',true)->orderBy('order_number','asc')->get()->toArray();
        $data['data'] = $cars;
        return response()->json(
            $data,200
        );
    }

    public function detail(Car $car){
        $isWithDriver = false;
        if(request()->with_driver == 1){
            if($car->is_with_driver == 1){
                $isWithDriver = true;
            }
            
        }
        $user = User::first();
        return view('frontend.detail',compact('car','isWithDriver','user'));
    }
}
