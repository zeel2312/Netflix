<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\VideoUploader;

class VideoUploaderController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function addVideoForm(){
        $category = Category::where('is_delete', 0)->get();
        return view('admin.videoUploader.add_video_form', compact('category'));
    }

    public function uploadVideo(Request $request){
        
        $videouploader = new VideoUploader;
        $videouploader->category_id = $request->category_id;
        $videouploader->subcategory_id = $request->subcategory_id;
        $videouploader->name = $request->name;
        $imageName = $this->uploadimageFiles($request->image,'thumbUploads'); 
        $videouploader->image = $imageName;
        $videoName = $this->uploadvideoFiles($request->video,'videoUploads'); 
        $videouploader->video = $videoName;
        $videouploader->duration = $request->duration;
        $videouploader->cast = $request->cast;
        $videouploader->director = $request->director;
        $videouploader->year = $request->year;
        $videouploader->description = $request->description;
        $videouploader->save();

        return redirect(route('admin.allVideos'));
    }

    public function uploadimageFiles($image,$path){

        $imageName = $image->getClientOriginalName();  
        $image->move($path, $imageName);
        return $imageName;
    }

    public function uploadvideoFiles($video,$path){

        $videoName = $video->getClientOriginalName();  
        $video->move($path, $videoName);
        return $videoName;
    }

    public function allVideos(){
   
        $videouploader = VideoUploader::with(['subcategory'])->get();
        return view('admin.videoUploader.all_videos',compact('videouploader'));
    }

    public function editVideo($id){

        $videouploader = VideoUploader::where('id',$id)->first();
        $category = Category::where('is_delete', 0)->get();
        $video = VideoUploader::where('id',$id)->first();
        $subcategory = SubCategory::where('category_id',$id)->get();

        return view('admin.videoUploader.edit_video',compact('videouploader','category','video','subcategory'));
    }

    public function updateVideo(Request $request){
        
        $videouploader = VideoUploader::findorfail($request->id);
        $videouploader->category_id = $request->category_id;
        $videouploader->subcategory_id = $request->subcategory_id;
        if ($request->image != '') {
            $imageName = $this->uploadimageFiles($request->image,'thumbUploads'); 
            $videouploader->image = $imageName;
        }
        $videouploader->name = $request->name;
        $videouploader->duration = $request->duration;
        $videouploader->cast = $request->cast;
        $videouploader->director = $request->director;
        $videouploader->year = $request->year;
        if ($request->video != '') {
            $videoName = $this->uploadvideoFiles($request->video,'videoUploads'); 
            $videouploader->video = $videoName;
        }
        $videouploader->description = $request->description;
        $videouploader->save();

        return redirect(route('admin.allVideos'));
    }

    public function deleteVideo($id){

        $videouploader = VideoUploader::where('id',$id)->update(['is_delete' => 1]);
        return redirect(route('admin.allVideos'));
    }

    public function checkCategory(Request $request){

        $data['subcategory'] = SubCategory::where("category_id",$request->category_id)->get(["name","id"]);
        return response()->json($data);
    }
}
