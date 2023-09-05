<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
class categoriesController extends Controller
{
    public function index(){
        return Inertia::render('categories', [
            // 'categories'=>Category::all(),
            'categories'=>Category::all(),
        ]);
    }

    public function storeCategory(Request $request){
        $request->validate([
            'id'=>'required',
            'name'=>'required|string|max:20',
            'description'=>'required|string|max:50',
        ]);
        $category= new Category();
        $category->fill($request->all());
        $category->save();
        // $product->image_url='icon.jpg';
    
    }
    public function updateCategory(Request $request, $id){
        $request->validate([
            // 'id'=>'required',
            'name'=>'required|string|max:20',
            'description'=>'required|string|max:50',

        ]);
        $category= Category::query()->find($id);
        $category->fill($request->all());
        $category->save();
    
    }
    public function list(){
        return Inertia::render('ListAll', [
            'categories'=>Category::all(),
        ]);
    }

    public function deleteCategory($id){
        
        category::query()->find($id)->delete();
       
}
    
}