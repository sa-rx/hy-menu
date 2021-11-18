<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    


    function __construct()
    {
        $this->middleware('permission:الفئات|اضافة فئه', ['only' => ['index']]);
        $this->middleware('permission:اضافة فئه|تعديل فئه', ['only' => ['create','store']]);
        $this->middleware('permission:تعديل فئه', ['only' => ['edit','update']]);
        $this->middleware('permission:حذف فئه', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required'
            ]);

        $category = new Category ();
        $category->create($request->all());
        return  redirect()->to('categories')->with('message','تمت اضافة البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $foods = Food::orderBy('id','DESC')->get();
        
      

        return view('category.show', compact('category','foods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {   
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
        'title'=>'required'
        ]);
    
      $category->update($request->all());
      return redirect()->to('categories')->with('message','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return  redirect()->to('categories')->with('message','تم حذف الفئه بنجاح');
    }
}
