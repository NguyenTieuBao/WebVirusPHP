<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Users;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index() 
    {
        $category = Category::all();
        return view('User.index', compact('category'));
    }

    public function virus(Category $category)
    {
        $category = Category::orderBy('created_at', 'DESC')->paginate(1);
        $products = Product::orderBy('name', 'ASC')->select('id', 'name', 'link')->get();
        return view('User.showVirus', compact('category', 'products'));
    }
}