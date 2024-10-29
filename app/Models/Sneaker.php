<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'colorway',
        'year_release',
        'retail_price',
        'actual_price',
        'img_url',
    ];
}
