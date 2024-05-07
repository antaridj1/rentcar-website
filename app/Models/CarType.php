<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function type(){
        $this->belongsTo(CarType::class, 'car_type_id');
    }
}
