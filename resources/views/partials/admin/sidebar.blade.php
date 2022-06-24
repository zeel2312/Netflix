<div class="clearfix"></div>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">

        @if (File::exists(public_path("admin-uploads/".Auth()->guard('admin')->user()->profile_image)))
            <img src="{{ asset('admin-uploads/' . Auth()->guard('admin')->user()->profile_image) }}" alt="..." class="img-circle profile_img" >
        @else 
            <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
        @endif
            
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ Auth()->guard('admin')->user()->name }}</h2>
    </div>
</div>
<!-- /menu profile quick info -->
<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li>
                <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                </ul>
            </li>
            <li>
              <a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('admin.addUserForm') }}">Add User</a></li>
                <li><a href="{{ route('admin.allUsers') }}">All Users</a></li>
              </ul>
            </li>
            <li>
              <a><i class="fa fa-database"></i> Plans <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('admin.addPlanForm') }}">Add Plan</a></li>
                <li><a href="{{ route('admin.allPlans') }}">All Plans</a></li>
              </ul>
            </li>
            <li>
              <a><i class="fa fa-tasks"></i> Category <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('admin.addCategoryForm') }}">Add Category</a></li>
                <li><a href="{{ route('admin.allCategories') }}">All Categories</a></li>
              </ul>
            </li>
            <li>
              <a><i class="fa fa-plus-square"></i> Sub-Category <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('admin.addSubCategoryForm') }}">Add Sub-Category</a></li>
                <li><a href="{{ route('admin.allSubCategories') }}">All Sub-Categories</a></li>
              </ul>
            </li>
            <li>
              <a><i class="fa fa-play-circle"></i> Video Uploader <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('admin.addVideoForm') }}">Add Video</a></li>
                <li><a href="{{ route('admin.allVideos') }}">All Videos</a></li>
              </ul>
            </li>
            <li>
              <a><i class="fa fa-cog"></i> Setting <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('admin.addSettingsForm') }}">Add Settings</a></li>
                <li><a href="{{ route('admin.allSettings') }}">All Settings</a></li>
              </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->