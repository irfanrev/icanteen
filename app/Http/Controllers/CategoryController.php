<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use PhpParser\Node\Expr\New_;

class CategoryController extends Controller
{
    public function index()
    {
        return view('BackEnd.category.addCategory');
    }


    public function store(Request $request)
    {

        $category = new category();

        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->category_status = $request->category_status;
        $category->added_on = $request->added_on;
        $category->save();

        return back()->with('sms', 'Category Saved');
    }

    public function manage() 
    {
        $category =  category::all();
        
        return view('BackEnd.category.manageCategory', compact('category'));

    }
}
