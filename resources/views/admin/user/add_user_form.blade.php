@extends('layouts.admin')
@section('title','Add User')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add New User Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.upload') }}" id="adduser" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required=" ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Gender*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="MALE"> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="FEMALE"> Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="date_of_birth" name="date_of_birth" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required=" " onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                    <script>
                                        function timeFunctionLong(input) {
                                        	setTimeout(function() {
                                        		input.type = 'text';
                                        	}, 60000);
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="address_line1">Address Line 1*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="address_line1" name="address_line1" required=" " class="form-control" placeholder="Block No./Society" title="Please enter address line 1">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="address_line2">Address Line 2*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="address_line2" name="address_line2" required=" " class="form-control" placeholder="Area/Street/Landmark" title="Please enter address line 2">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="city">City* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="city" name="city" required=" " class="form-control" placeholder="Enter your city" title="Please enter city name">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="state">State <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="state" name="state" required=" " class="form-control" placeholder="Enter your state" title="Please enter state name">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="zipcode">Zip Code* 
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="integer" id="zipcode" name="zipcode" required=" " class="form-control" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Enter your city zipcode" title="Please enter zipcode ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile_no">Mobile No.* 
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="mobile_no" name="mobile_no" required=" " class="form-control" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter 10 digit mobile number" title="Please enter mobile number">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="email" id="email" name="email" required="required" class="form-control" placeholder="Enter your email id" title="Please enter valid email id">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password* 
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="password" name="password" minlength="8" required=" " class="form-control" placeholder="Enter Password" title="Please enter a valid password">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="confirm_password">Confirm Password* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="password" id="confirm_password" name="confirm_password" required=" " class="form-control" placeholder="Confirm Password" title="Please enter a password that match">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="profile_image">Upload Profile* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="profile_image" id="profile_image" required=" " class="form-control dropify" />
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    <button class="btn btn-secondary" type="reset">Save & Add New</button>
                                    <a href="{{ route('admin.allUsers') }}" class="btn btn-danger" type="button">Cancel</a>
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