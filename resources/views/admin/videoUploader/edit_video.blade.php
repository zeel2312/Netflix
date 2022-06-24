@extends('layouts.admin')
@section('title','Edit Video')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Video Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.updateVideo') }}" id="editVideo" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="CategoryId">Category Name*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="category_id" id="category_id" class="form-control" required=" ">
                                        <option value="">Select Category</option>
                                        @foreach($category as $ck => $cv)
                                            <option value='{{ $cv->id }}' @if($cv->id == $video->category_id) selected="selected" @endif >{{ $cv->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="SubCategoryId">Sub-Category Name*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="subcategory_id" id="subcategory_id" class="form-control" required=" ">
                                        @foreach($subcategory as $sc)
                                            <option value='{{ $sc->id }}' @if($sc->id == $video->subcategory_id) selected="selected" @endif >{{ $sc->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Name">Name* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required=" " class="form-control" value="{{ $videouploader->name }}" placeholder="Enter Name">
                                    <input type="hidden" name="id" id="subcategory_id" value="{{ $videouploader->id }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Upload Image </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="image" id="image" class="form-control dropify" data-default-file="{{ asset('thumbUploads/'.$videouploader->image) }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Duration">Duration* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="duration" name="duration" required=" " class="form-control" value="{{ $videouploader->duration }}" placeholder="Enter Duration">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Cast">Cast* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cast" name="cast" required=" " class="form-control" value="{{ $videouploader->cast }}" placeholder="Enter Cast">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Director">Director* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="director" name="director" required=" " class="form-control" value="{{ $videouploader->director }}" placeholder="Enter Director">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Priority">Year* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="integer" id="year" name="year" maxlength="4" required=" " class="form-control" value="{{ $videouploader->year }}" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Enter Year">
                                </div> 
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="UploadVideo">Upload Video* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="video" id="video" data-default-file="{{ asset('videoUploads/'.$videouploader->video) }}" class="form-control dropify" data-show-remove="false"/>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Description">Description* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="description" name="description" class="form-control" placeholder="Enter Description" required=" " rows="5" cols="3">{{ $videouploader->description }}</textarea>
                                </div>
                            </div>

                            
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin.allVideos') }}" class="btn btn-danger" type="button">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection