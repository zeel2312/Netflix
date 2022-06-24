@extends('layouts.admin')
@section('title','Change Password')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Change Password</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('admin.changePassword') }}" id="changePassword" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                            {{ csrf_field() }}

                             <div class="item form-group{{ $errors->has('currentPassword') ? ' has-error' : '' }}">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="currentPassword">Current Password* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="currentPassword" name="currentPassword" class="form-control" placeholder="Enter Password" title="Please Enter Current Password" required=" ">
                                    @if ($errors->has('currentPassword'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('currentPassword') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group{{ $errors->has('newPassword') ? ' has-error' : '' }}">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="newPassword">New Password* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Enter Password" title="Please Enter New Password"  required=" ">
                                    <input type="hidden" name="id" value="{{ $admin->id }}">
                                    @if ($errors->has('newPassword'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('newPassword') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="newPasswordConfirm">Confirm New Password
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="newPasswordConfirm" name="newPasswordConfirm" class="form-control" placeholder="Confirm Password" title="Please Enter Confirm Password"  required=" ">
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