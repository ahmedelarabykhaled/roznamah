<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Date;
use App\Models\Category;
use App\Models\SubCategory;

class UserController extends Controller
{
    public function index()
    {
    	$date = Date::with('day','aldor','star','alfajr','altala')->orderBy('date', 'asc')->paginate(1);
    	$categories = Category::get();
    	return view('welcome',compact('date','categories'));
    }
    public function category($id)
    {
    	$category = Category::with('subcategories')->find($id);
    	return view('user.category',compact('category'));
    }
    public function subcategory($id)
    {
    	$subcategory = SubCategory::with('category')->find($id);
    	return view('user.subcategory',compact('subcategory'));
    }
}
