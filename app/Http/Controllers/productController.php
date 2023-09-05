<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function show (Request $request)
    //all, where.get, find, with
    {
        $products = Product::query()->limit(3)->get();
        // $products = Product::query()->where('id', '>', 1)->get();//where(field, operator, criteria)
        $products = Product::query()->with('Category')->get();
        return view('test', ['products'=> $products]);
    }

    public function list (Request $request)
    {

        return view('about');
    }
  
}


  
  




// return view('test', ['name'=> $name]); //template and php takes the value in the variable //view used to access views folder--php_test
