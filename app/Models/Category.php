<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Category.php
//    protected $fillable = ['category_name'];


    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
