<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::where('is_available',true)->orderBy('order_number','asc')->get();
        return view('frontend.home',compact('cars'));
    }

    public function getSelfDriveCar(){
        $cars = Car::where('is_available',true)->orderBy('order_number','asc')->get()->toArray();
        $data['data'] = $cars;
        return response()->json(
            $data,200
        );
    }
}
