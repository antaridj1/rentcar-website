<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'image_link',
        'formated_price',
        'formated_price_with_driver'
    ];


    public function getImageLinkAttribute(){
        return asset('storage/' . $this->image);
    }

    public function getFormatedPriceAttribute(){
        return number_format($this->price);
    }

    public function getFormatedPriceWithDriverAttribute(){
        return number_format($this->price_with_driver);
    }
}
