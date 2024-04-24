<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $cars = Car::all();
        $totalCars = count($cars);
        $countAvailableCars = Car::where('is_available',true)->count();
        return view('admin.dashboard',compact('cars','countAvailableCars', 'totalCars'));
    }
}
