<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\VideoUploader;
use App\Models\Contact;
use Mail;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function home(){
        $videouploader = VideoUploader::where('is_active', 1)->where('is_delete', 0)->orderBy('id', 'DESC')->limit(4)->get();
        $video = VideoUploader::where('is_active', 1)->where('is_delete', 0)->orderBy('id', 'DESC')->limit(8)->get();
        return view('app.home',compact('videouploader','video'));
    }

    public function movie(){
        $videouploader = VideoUploader::where('is_delete',0)->paginate(4);
        return view('app.movie.movie',compact('videouploader'));
    }

    public function movieDetails($id){
        $video = VideoUploader::where('id',$id)->first();
        return view('app.movie.movie_details',compact('video'));
    }

    public function tvShow(){
        return view('app.tvShow.tv_show');
    }

    public function pricing(){
        $pricing = Plan::where('is_delete', 0)->get();
        // echo"<pre>";
        // print_r($plan->toArray());
        // exit;

        return view('app.pricing.pricing',compact('pricing'));
    }

    public function details($id){
        $videouploader = VideoUploader::where('subcategory_id',$id)->where('is_delete',0)->paginate(4);
        return view('app.details.details',compact('videouploader'));
    }

    public function contact(){
        return view('app.contact.contact');
    }

    public function save(Request $request) {

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        // echo $request->email;
        // exit;

        $contact->save();

        $to_email = $request->email;
        $name = "User";
        $subject = $request->subject;
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ];
        Mail::send('app.contact.contact_email', $data, function ($m) use ($to_email, $name, $subject) {
            $m->to($to_email, $name)->subject($subject);
            $m->from('zeelthakkar25@gmail.com', 'Owner');
        });

        $to_admin = 'sani.finlark@gmail.com';
        $name1 = "Admin";

        Mail::send('app.contact.contact_admin', $data, function ($m1) use ($to_admin, $name1, $subject) {
            $m1->to($to_admin, $name1)->subject($subject);
            $m1->from('zeelthakkar25@gmail.com', 'Owner');
        });

        
        return back()->with('success', 'Thank you for contact us!');
    }       

}
