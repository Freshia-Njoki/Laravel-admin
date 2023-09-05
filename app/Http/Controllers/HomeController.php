<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        return Inertia::render('Products', [
            'categories'=>Category::all(),
            'products'=>Product::all(),//pass product to react
        ]);
    }

    public function storeProduct(Request $request){
        $request->validate([
            'category_id'=>'required',
            'name'=>'required|string|max:20',
            'display'=>'required|numeric',
            'stand'=>'required|numeric',
            'adapter'=>'required|numeric',
            'total'=>'required|numeric',
        ]);
        $product= new Product();
        $product->fill($request->all());
        $product->save();
        // $product->image_url='icon.jpg';
    
    }

    public function updateProduct(Request $request, $id){
        $request->validate([
            'category_id'=>'required',
            'name'=>'required|string|max:20',
            'display'=>'required|numeric',
            'stand'=>'required|numeric',
            'adapter'=>'required|numeric',
            'total'=>'required|numeric',
        ]);
        $product= Product::query()->find($id);
        $product->fill($request->all());
        $product->save();
    
    }
    public function list(){
        return Inertia::render('ListAll', [
            'products'=>Product::all(),
        ]);
    }

    public function deleteProduct($id){
        
        Product::query()->find($id)->delete();
       
}
}