@extends('layouts.admin')
@section('title','Profile')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Admin Profile</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.updateAdmin') }}" id="updateAdmin" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required=" " class="form-control" value="{{ $admin->name }}" title="Please enter name" placeholder="Enter name">
                                    <input type="hidden" name="id" value="{{ $admin->id }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="email" id="email" name="email" required=" " class="form-control" value="{{ $admin->email }}" title="Please enter email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile_no">Mobile Number* 
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="mobile" name="mobile" required=" " class="form-control" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[1-9]{1}[0-9]{9}" value="{{ $admin->mobile }}" title="Please enter mobile number" placeholder="Enter mobile number">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="profile_image">Upload Profile </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="profile_image" id="profile_image" class="form-control dropify" data-default-file="{{ asset('admin-uploads/'.$admin->profile_image) }}">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger" type="button">Cancel</a>
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