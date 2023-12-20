<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addform()
    {
        $parentcats=Category::where('category_id',null)->get();
        return view('backend.category.add',compact('parentcats'));    
    }

    public function store(request $request)
    {
        // dd($request->name);
        $request->validate([
            'name'=>'required',
        ]);

        $data=array(
         'name'=>$request->name,
        'category_id'=>$request->category_id,
         );
         
        $create=Category::create($data);
        return redirect()->back();

    }

}


