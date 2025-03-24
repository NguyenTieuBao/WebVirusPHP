<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function cat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}