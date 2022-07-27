<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=category::orderBy('id', 'desc')->get();
        return view('main.add_category',compact('categories'));
    }


    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'company_name' => 'required',
            'product_model' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required',



        ]);
      
        $data = $validator->validated();
        $data['price']=$request->price;
        $data['discount']=$request->discount;
        $data['total_price']=$request->total_price;
        
        $student = category::insert($data);
            
       
        return redirect()->back()->with('success', 'Successfully data added');
    }


    public function store()
    {
        //
    }


    public function show(category $category)
    {
        //
    }


    public function edit(category $category)
    {
        //
    }


    public function update(Request $request, category $category)
    {
        //
    }


    public function destroy(category $category)
    {
        //
    }
}
