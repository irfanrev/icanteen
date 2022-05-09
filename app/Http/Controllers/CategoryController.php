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

    public function active($category_id){
        $category = category::find($category_id);

        $category->category_status=1;
        $category->save();
        return back();
    }
    public function inactive($category_id){
        $category = category::find($category_id);

        $category->category_status=0;
        $category->save();
        return back();
    }
    
    public function delete($category_id)
    {
        $category = category::find($category_id);

        $category->delete();
        return back();
    }
    
    public function update(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->save();

        return redirect('/category/manage')->with('sms','Kategori Berhasil Diupdate');
    }
}
