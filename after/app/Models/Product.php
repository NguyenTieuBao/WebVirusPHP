<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'link', 'category_id'
    ];
    public function cat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function scopeSearch($query) 
    {
        if ($key = request()->key) {
            $query = $query->where('name', 'like', '%' .$key.'%');
        }
        return $query;
    }
}
