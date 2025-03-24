<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail', 'image'
    ];
    //join 1 - n
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('name', 'like', '%' .$key.'%');
        }
        return $query;
    }
}
