@extends('layouts.admin')
@section('title','Add Category')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add New Category Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.uploadCategory') }}" id="addCategory" method="POST" class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="CategoryName">Category Name* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Category Name" required=" ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Priority">Priority*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="integer" id="priority" name="priority" required=" " class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Enter Priority">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    <button class="btn btn-secondary" type="reset">Save & Add New</button>
                                    <a href="{{ route('admin.allCategories') }}" class="btn btn-danger" type="button">Cancel</a>
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