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
        $cars = Car::where('is_available',true)->orderBy('order_number','asc')->take(6)->get();
        return view('frontend.home',compact('cars','user'));
    }

    public function getCars(){
        $cars_without_driver = Car::where('is_available',true)->orderBy('order_number','asc')->take(6)->get()->toArray();
        $cars_with_driver = Car::where('is_available',true)->where('is_with_driver',true)->orderBy('order_number','asc')->take(6)->get()->toArray();
        $data['data'] =[
            'with_driver' => $cars_with_driver,
            'without_driver' => $cars_without_driver
        ] ;
        return response()->json(
            $data,200
        );
    }

    public function getCarsAll(){
        $cars_without_driver = Car::where('is_available',true)->orderBy('order_number','asc')->get()->toArray();
        $cars_with_driver = Car::where('is_available',true)->where('is_with_driver',true)->orderBy('order_number','asc')->get()->toArray();
        $data['data'] =[
            'with_driver' => $cars_with_driver,
            'without_driver' => $cars_without_driver
        ] ;
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

    public function cars(){
        $user = User::first();
        $cars = Car::where('is_available',true)->orderBy('order_number','asc')->get();
        return view('frontend.cars',compact('cars','user'));
    }

    public function contact(){
        $user = User::first();
        return view('frontend.contact',compact('user'));
    }
}
