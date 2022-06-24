<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function addUserForm(){
        return view('admin.user.add_user_form');
    }

    public function upload(Request $request){
        
        $user = new User;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->address_line1 = $request->address_line1;
        $user->address_line2 = $request->address_line2;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zipcode = $request->zipcode;
        $user->mobile_no = $request->mobile_no;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $imageName = $this->uploadFiles($request->profile_image,'uploads'); 
        $user->profile_image = $imageName;
        $user->save();

        return redirect(route('admin.allUsers'));

    }

    public function uploadFiles($image,$path){

        $imageName = $image->getClientOriginalName();  
        $image->move($path, $imageName);
        return $imageName;
    }

    public function allUsers(Request $request){

        /*echo "<pre>";
        print_r($request->all());
        exit;*/
        $genderName = '';
        
        $query = User::where('is_delete', 0);

        if ($request->gender != '' && isset($request->gender)) {
            $genderName = $request->gender;
            $query->where('gender', $genderName);
        }

        $user = $query->get();
        return view('admin.user.all_users',compact('user', 'genderName'));
    }

    public function editUser($id){

        $user = User::where('id',$id)->first();
        return view('admin.user.edit_user',compact('user'));
    }

    public function updateUser(Request $request){
        
        $user = User::findorfail($request->id);
        $user->name = $request->name;
        if ($request->gender != '') {
            $user->gender = $request->gender;
        }
        $user->date_of_birth = $request->date_of_birth;
        $user->address_line1 = $request->address_line1;
        $user->address_line2 = $request->address_line2;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zipcode = $request->zipcode;
        $user->mobile_no = $request->mobile_no;
        $user->email = $request->email;
        if ($request->password != '') {
            $user->password = Hash::make($request->password);
        }
        if ($request->profile_image != '') {
            $imageName = $this->uploadFiles($request->profile_image,'uploads'); 
            $user->profile_image = $imageName;
        }
        $user->save();

        return redirect(route('admin.allUsers'));
    }

    public function deleteUser($id){

        $user = User::where('id',$id)->update(['is_delete' => 1]);
        return redirect(route('admin.allUsers'));

    }

}
