<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $cars = Car::where('is_available',true)->get();
        $totalCars = count(Car::all());
        $countAvailableCars = $cars->count();
        return view('admin.dashboard',compact('cars','countAvailableCars', 'totalCars'));
    }
}
