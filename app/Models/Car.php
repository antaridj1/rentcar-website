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
    ];


    public function getImageLinkAttribute(){
        return asset('storage/' . $this->image);
    }
}
