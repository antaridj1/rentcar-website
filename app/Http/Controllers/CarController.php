<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carTypes = CarType::all();
        return view('admin.car.create',compact('carTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => 'required',
            'seat'  => 'required|numeric|min:1',
            'price' => 'required|numeric|min:1',
            'car_type_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ];

        if($request->is_with_driver == 1) {
            $data['price_with_driver'] = 'required|numeric|min:1';
        }

        $request->validate($data);

        $image_path = $request->file('image')->store('image', 'public');

        $car = [
            'name' => $request->name,
            'seat'  => $request->seat,
            'price' => $request->price,
            'car_type_id' => $request->car_type_id,
            'image' => $image_path,
            'order_number' => Car::get()->count() + 1
        ];

        if($request->is_with_driver == 1) {
            $data['price_with_driver'] = $request->price_with_driver;
        }

        Car::create($car);

        return redirect('car')
            ->with('status','success')
            ->with('message','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $carTypes = CarType::all();
        return view('admin.car.edit',compact('car','carTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $data = [
            'name' => 'required',
            'seat'  => 'required|numeric|min:1',
            'price' => 'required|numeric|min:1',
            'car_type_id' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,svg',
        ];

        if($request->is_with_driver == 1) {
            $data['price_with_driver'] = 'required|numeric|min:1';
        }

        if($request->image){
            $data['image'] = 'required|image|mimes:jpg,png,jpeg,svg';
        }

        $request->validate($data);

        $image_path = $car->image;

        if($request->image){
            $image_path = $request->file('image')->store('image', 'public');
        }

        $newData = [
            'name' => $request->name,
            'seat'  => $request->seat,
            'price' => $request->price,
            'image' => $image_path,
            'car_type_id' => $request->car_type_id,
            'is_with_driver' => $request->is_with_driver,
            'is_available' => $request->is_available
        ];

        if($request->is_with_driver == 1) {
            $newData['price_with_driver'] = $request->price_with_driver;
        } else {
            $newData['price_with_driver'] = null;
        }

        Car::where('id',$car->id)->update($newData);

        return redirect('car')
            ->with('status','success')
            ->with('message','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect('car')
            ->with('status','success')
            ->with('message','Mobil berhasil terhapus');
    }
}
