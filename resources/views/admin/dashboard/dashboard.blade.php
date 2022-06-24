@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-4 col-sm-4 ">
            <div class="x_panel tile fixed_height_250">
                <div class="x_title">
                    <h5>
                    	<a href="{{ route('admin.allUsers') }}">
                    		<center>
                    			Total Users
                    		</center>
                    	</a>
                    </h5>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div>
                    	<center>
                    		<h1>{{ $user }}</h1>
                    	</center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 ">
            <div class="x_panel tile fixed_height_250">
                <div class="x_title">
                    <h5><a href="{{ route('admin.allPlans') }}">Total Plans</a></h5>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div>
                    	<center>
                    	<h1>{{ $plan }}</h1>
                    	</center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 ">
            <div class="x_panel tile fixed_height_250">
                <div class="x_title">
                    <h5><a href="{{ route('admin.allCategories') }}">Total Categories</a></h5>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div>
                    	<center>
                    	<h1>{{ $category }}</h1>
                    	</center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 ">
            <div class="x_panel tile fixed_height_250">
                <div class="x_title">
                    <h5><a href="{{ route('admin.allSubCategories') }}">Total Sub-Categories</a></h5>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div>
                    	<center>
                    	<h1>{{ $subcategory }}</h1>
                    	</center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 ">
            <div class="x_panel tile fixed_height_250">
                <div class="x_title">
                    <h5><a href="{{ route('admin.allVideos') }}">Total Videos</a></h5>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div>
                    	<center>
                    		<h1>{{ $videouploader }}</h1>
                    	</center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 ">
		    <div class="x_panel tile fixed_height_250">
		        <div class="x_title">
		            <h5><a href="{{ route('admin.allSettings') }}">Quick Settings</a></h5>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		            <div class="dashboard-widget-content">
		                <ul class="quick-list">
		                    <li><i class="fa fa-user"></i><a href="{{ route('admin.addUserForm') }}">Add User</a></li>
		                    <li><i class="fa fa-database"></i><a href="{{ route('admin.addPlanForm') }}">Add Plan</a></li>
		                    <li><i class="fa fa-tasks"></i><a href="{{ route('admin.addCategoryForm') }}">Add Category</a> </li>
		                    <li><i class="fa fa-plus-square"></i><a href="{{ route('admin.addSubCategoryForm') }}">Add Subcategory</a></li>
		                    <li><i class="fa fa-bar-chart"></i><a href="{{ route('admin.addVideoForm') }}">Add Video</a> </li>
		                    </li>
		                    <li><i class="fa fa-play-circle"></i><a href="{{ route('admin.addSettingsForm') }}">Add Settings</a> </li>
		                    </li>
		                    <li><i class="fa fa-cog"></i><a href="{{ route('admin.logout') }}">Logout</a>
		                    </li>
		                </ul>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
    <div class="row">
    	<!-- bar chart -->
    	<div class="col-md-6 col-sm-6  ">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>Bar Charts <small>Plans</small></h2>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		            <div id="graph_bar" style="width:100%; height:280px;"></div>
		        </div>
		    </div>
		</div>      
        <!-- /bar charts -->
        <!-- line graph -->
		<div class="col-md-6 col-sm-6  ">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>Line Graph <small>Videos</small></h2>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content2">
		            <div id="graph_line" style="width:100%; height:300px;"></div>
		        </div>
		    </divx>
		</div>      
        <!-- /line graph -->
    </div>
</div>
<!-- /page content -->
@endsection