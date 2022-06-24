<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function addCategoryForm(){
        return view('admin.category.add_category_form');
    }

    public function uploadCategory(Request $request){
        
        $category = new Category;
        $category->name = $request->name;
        $category->priority = $request->priority;
        $category->save();

        return redirect(route('admin.allCategories'));
    }

    public function allCategories(){

        $category = Category::where('is_delete', 0)->get();
        return view('admin.category.all_categories',compact('category'));
    }

    public function editCategory($id){

        $category = Category::where('id',$id)->first();
        return view('admin.category.edit_category',compact('category'));
    }

    public function updateCategory(Request $request){
        
        $category = Category::findorfail($request->id);
        $category->name = $request->name;
        $category->priority = $request->priority;
        $category->save();

        return redirect(route('admin.allCategories'));
    }

    public function deleteCategory($id){

        $category = Category::where('id',$id)->update(['is_delete' => 1]);
        return redirect(route('admin.allCategories'));

    }

    public function checkCategorya(Request $request){

        $query = Category::where('name',$request->name);
        if(isset($request->id)){
            $query->where('id','!=',$request->id);
        }
        $category = $query->first();

        return !is_null($category) ? 'false' : 'true';
    }
}
