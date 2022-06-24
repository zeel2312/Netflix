@extends('layouts.login')
@section('title','Admin Reset Password')
@section('content')

<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ route('admin.postlogin') }}" method="post">
                    @csrf
                    <h1>Reset Password</h1>

                    <input type="hidden" name="token" value="{{ $token }}">
                    `
                    <div class="form-group">
                        <span style="color:red;float:right;" class="pull-right">* is mandatory</span>
                    </div>

                    <div class="form-group hide" style="display: none;">
                        <label for="username">Email<span class="mandatory">*</span></label>
                        <input type="text" name="email" class="form-control" id="username" placeholder="Enter email" value="{{ $email }}">
                    </div>
                    <div class="mb-3">
                        <label for="userpassword">New Password<span class="mandatory red">*</span></label>
                        <input type="password" name="password" class="form-control pr-password" id="password" placeholder="Enter password" required>
                    </div>

                    <div class="mb-3">
                         <label for="userpassword">Comfirm Password<span class="mandatory red">*</span></label>
                        <input type="password" class="form-control" id="userpassword" placeholder="Enter comfirm password" name="password_confirmation" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit" href="Javascript: void(0);">Log in</button>
                        <a class="reset_pass" href="{{ route('admin.auth.password.reset') }}">Lost your password?</a>
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
                <form class="form-horizontal" action="{{ route('admin.resetpassword') }}" id="resetPassword" autocomplete="off" method="post">
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
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
