<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_unique_id',
        'image_name',
        'image_path',
        'image_size',
        'image_type'
    ];
}
