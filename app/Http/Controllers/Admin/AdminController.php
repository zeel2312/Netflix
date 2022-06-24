<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Plan;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\VideoUploader;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    // Dashboard 
    public function index(){

        $user = User::where('is_delete',0)->where('is_active',1)->count();
        $plan = Plan::where('is_delete',0)->where('is_active',1)->count();
        $category = Category::where('is_delete',0)->where('is_active',1)->count();
        $subcategory = SubCategory::where('is_delete',0)->where('is_active',1)->count();
        $videouploader = VideoUploader::where('is_delete',0)->where('is_active',1)->count();
        return view('admin.dashboard.dashboard', compact('user', 'plan', 'category','subcategory','videouploader'));
    }

    public function editAdmin($id){

        $admin = Admin::where('id',$id)->first();
        return view('admin.dashboard.profile',compact('admin'));
    }

    public function updateAdmin(Request $request){
        
        $admin = Admin::findorfail($request->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->mobile = $request->mobile;
        // if ($request->password != '') {
        //     $admin->password = Hash::make($request->password);
        // }
        if ($request->profile_image != '') {
            $imageName = $this->uploadFiles($request->profile_image,'admin-uploads'); 
            $admin->profile_image = $imageName;
        }
        $admin->save();

        return redirect(route('admin.dashboard'));
    }

    public function uploadFiles($image,$path){

        $imageName = $image->getClientOriginalName();  
        $image->move($path, $imageName);
        return $imageName;
    }

    public function editPassword($id){

        $admin = Admin::where('id',$id)->first();
        return view('admin.dashboard.change_password',compact('admin'));
    }

    public function changePassword(Request $request){

        //Change Password
        $adminId = Auth::guard('admin')->user()->id;
        $admin = Admin::where('id', '=', $adminId)->first();
        // $np = Hash::make($request->currentPassword);

        if(Hash::check($request->currentPassword, $admin->password)){

            $admin = Admin::findorfail($adminId);   
            $admin->password = Hash::make($request->newPassword);
            $admin->save();

            return redirect(route('admin.dashboard'))->with('messages', [
                [
                    'type' => 'success',
                    'title' => 'Password',
                    'message' => 'Password Successfully changed',
                ],
            ]); 
        }
        else{
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
    }

    public function chart(){
        
        $query = User::where('is_delete',0)->get(['created_at']);
        echo"<pre>";
        print_r($query->toArray());
        exit;
    }
}
