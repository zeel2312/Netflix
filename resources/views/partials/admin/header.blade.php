<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    @if (File::exists(public_path("admin-uploads/".Auth()->guard('admin')->user()->profile_image)))
                        <img src="{{ asset('admin-uploads/' . Auth()->guard('admin')->user()->profile_image) }}" alt="...">
                    @else 
                        <img src="{{ asset('images/img.jpg') }}" alt="...">
                    @endif
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{ route('admin.editAdmin', Auth()->guard('admin')->user()->id ) }}"> Profile</a>
                        <a class="dropdown-item"  href="{{ route('admin.editPassword', Auth()->guard('admin')->user()->id ) }}">Change Password</a>
                        <a class="dropdown-item"  href="{{ route('admin.logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>