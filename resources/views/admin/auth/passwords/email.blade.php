@extends('layouts.login')
@section('title','Admin Login')
@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ route('admin.postlogin') }}" method="post">
                    @csrf
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit" href="Javascript: void(0);">Log in</button>
                        <a class="reset_pass" href="{{ route('admin.passwordemail') }}">Lost your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <!-- <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p> -->
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-video-camera"></i> Netflix!</h1>
                            <p>©2022 All Rights Reserved. Finlark Technologies. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form class="form-horizontal" action="{{ route('admin.passwordemail') }}" id="forgotPassword" method="post">
                    <h1>Reset Email</h1>

                    <div class="form-group">
                        <span style="color:red;float:right;" class="pull-right">* is mandatory</span>
                    </div>

                    <div class="form-group">
                        <label for="username">Email<span class="mandatory red">*</span></label>
                        <input type="email" class="form-control" name="email" id="username" placeholder="Enter email" required>
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-video-camera"></i> Gentelella Alela!</h1>
                            <p>©2022 All Rights Reserved. Finlark Technologies. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection  