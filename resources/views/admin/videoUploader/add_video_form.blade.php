@extends('layouts.admin')
@section('title','Add Video')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add New Video Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.uploadVideo') }}" id="addVideo" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="CategoryId">Category Name*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="category_id" id="category_id" class="form-control" required=" ">
                                        <option value="">Select Category</option>
                                        @foreach($category as $c)
                                            <option value='{{ $c->id }}'>{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="SubCategoryId">Sub-Category Name*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="subcategory_id" id="subcategory_id" class="form-control" required=" " placeholder="Select Sub-Category">
                                        <option value="">Select Sub-Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Name">Name* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required=" ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Upload Image* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="image" id="image" required=" " class="form-control dropify" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Duration">Duration* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="duration" name="duration" class="form-control" placeholder="Enter Duration" required=" ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Cast">Cast* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="cast" name="cast" class="form-control" placeholder="Enter Cast" required=" ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Director">Director* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="director" name="director" class="form-control" placeholder="Enter Director" required=" ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Year">Year*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="integer" id="year" name="year" maxlength="4" required=" " class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');"placeholder="Enter Year">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="UploadVideo">Upload Video* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="video" id="video" required=" " class="form-control dropify" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Description">Description* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="description" name="description" class="form-control" placeholder="Enter Description" required=" ">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    <button class="btn btn-secondary" type="reset">Save & Add New</button>
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