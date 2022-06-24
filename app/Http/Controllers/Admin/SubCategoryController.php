<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function addSubCategoryForm(){
        $subcategory = Category::where('is_delete', 0)->get();
        return view('admin.subcategory.add_subcategory_form', ['subcategory' => $subcategory]);
    }

    public function uploadSubCategory(Request $request){
        
        $subcategory = new SubCategory;
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->priority = $request->priority;
        $subcategory->description = $request->description;
        $subcategory->save();

        return redirect(route('admin.allSubCategories'));
    }

    public function allSubCategories(){
        
        $category = Subcategory::with(['category'])->get();
        // echo "<pre>";
        // print_r($category->toArray());
        // exit;
        $subcategory = SubCategory::where('is_delete', 0)->get();
        
        return view('admin.subcategory.all_subcategories',compact('subcategory'));
    }

    public function editSubCategory($id){

        $subcategorya = SubCategory::where('id',$id)->first();

        // echo "<pre>";
        // print_r($subcategorya->toArray());
        // exit;
        $subcategory = Category::where('is_delete', 0)->get();
        return view('admin.subcategory.edit_subcategory',compact('subcategory','subcategorya'));
    }

    public function updateSubCategory(Request $request){
        
        $subcategory = SubCategory::findorfail($request->id);
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->priority = $request->priority;
        $subcategory->description = $request->description;
        $subcategory->save();

        return redirect(route('admin.allSubCategories'));
    }

    public function deleteSubCategory($id){

        $subcategory = SubCategory::where('id',$id)->update(['is_delete' => 1]);
        return redirect(route('admin.allSubCategories'));
    }

    public function checkSubCategory(Request $request){

        $query1 = SubCategory::where('name',$request->name);
        if(isset($request->id)){
            $query1->where('id','!=',$request->id);
        }
        $subcategory = $query1->first();

        return !is_null($subcategory) ? 'false' : 'true';
    }
}
