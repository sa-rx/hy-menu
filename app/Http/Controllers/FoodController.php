<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:الاصناف|اضافة صنف', ['only' => ['index']]);
        $this->middleware('permission:اضافة صنف|تعديل صنف', ['only' => ['create','store']]);
        $this->middleware('permission:تعديل صنف', ['only' => ['edit','update']]);
        $this->middleware('permission:حذف صنف', ['only' => ['destroy']]);
    }


    public function index()
    {   
        $foods = Food::get();
        $categories = Category::select('id','title')->get();
        return view('foods.index',compact('foods','categories'));
    }

    
    public function create()
    {
        $categories = Category::select('id','title')->get();
        return view('foods.create',compact('categories'));
    }

    
    
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'price'=>'required'  
        ]);
       
        $food = new Food(request()->all());
        $food->user_id = Auth::id();

        $category = Category::find($request->get('category_id'));
        $category->foods()->save($food);

        return  redirect()->to('foods')->with('message','تمت اضافة البيانات بنجاح');

    }

    
    public function show(Category $category)
    {
        //
    }

    
     
    public function edit(Food $food)
    {
        $categories = Category::select('id','title')->get();
        return view('foods.edit',compact('food','categories'));
    }

  
    public function update(Request $request, Food $food)
    {   
        $request->validate([

            'name'=>'required',
            'price'=>'required'  
        ]);
        
        $food->update($request->all());
      //  dd($food);
        $category = Category::find($request->get('category_id'));
        $category->foods()->save($food);
        return  redirect()->to('foods')->with('message','تم تعديل البيانات بنجاح'); 
    }

    
    public function destroy(Food $food)
    {
        $food->delete();
        return  redirect()->to('foods')->with('message','تم الحذف  بنجاح');
    }
}
