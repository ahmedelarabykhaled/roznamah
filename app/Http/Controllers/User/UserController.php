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
    public function index(Request $request)
    {
        if (!isset($request->page)) {
            $page = 1;
            $first_date = Date::where('date','like','%-'.date('m').'-'.date('d'))->get();
            if (sizeof($first_date) == 0) {
                return redirect('/?page=1');
            }
            $dates = Date::orderBy('date','asc')->get();
            foreach ($dates as $key => $d) {
                if ($d->id == $first_date[0]->id) {
                    $page = $key+1;
                    break;
                }
            }
            return redirect('/?page='.$page);
        }
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
