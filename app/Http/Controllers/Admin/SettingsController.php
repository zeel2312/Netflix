<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function addSettingsForm(){
        return view('admin.settings.add_settings_form');
    }

    public function uploadSettings(Request $request){
        
        $settings = new Settings;
        $settings->key = $request->key;
        $settings->text = $request->text;
        $settings->value = $request->value;
        $settings->save();

        return redirect(route('admin.allSettings'));
    }

    public function allSettings(){

        $settings = Settings::all();
        return view('admin.settings.all_settings',compact('settings'));
    }

    public function editSettings($id){

        $settings = Settings::where('id',$id)->first();
        return view('admin.settings.edit_settings',compact('settings'));
    }

    public function updateSettings(Request $request){
        
        $settings = Settings::findorfail($request->id);
        $settings->key = $request->key;
        $settings->text = $request->text;
        $settings->value = $request->value;
        $settings->save();

        return redirect(route('admin.allSettings'));
    }

    public function deleteSettings($id){

        $settings = Settings::where('id',$id)->delete();
        return redirect(route('admin.allSettings'));
    }
}
