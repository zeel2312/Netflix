@extends('layouts.admin')
@section('title','All User')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <form action="{{ route('admin.allUsers') }}" method="post" >
            @csrf
            <div class="col-md-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left">
                            <div class="item form-group">
                                <div class="col-md-4 col-sm-4 ">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option @if($genderName == 'MALE') selected @endif value="MALE">Male</option>
                                        <option @if($genderName == 'FEMALE') selected @endif value="FEMALE">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
        <div class="page-title">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Table</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="allusers" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            No
                                        </th>
                                        <th class="column-title">Profile-Image </th>
                                        <th class="column-title">Name </th>
                                        <th class="column-title">Gender </th>
                                        <th class="column-title">DOB </th>
                                        <th class="column-title">Email </th>
                                        <th class="column-title">Mobile N0. </th>
                                        <th class="column-title">Address </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $uk => $uv) 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/'.$uv->profile_image) }}" style="width: 50px; height: 50px;">
                                        </td>
                                        <td>{{ $uv->name }}</td>
                                        <td>{{ $uv->gender }}</td>
                                        <td>{{ $uv->date_of_birth }}</td>
                                        <td>{{ $uv->email }}</td>
                                        <td>{{ $uv->mobile_no }}</td>
                                        <td>{{ $uv->address_line1}} {{$uv->address_line2}} {{$uv->city}} {{$uv->state}} {{$uv->zipcode}}</td>
                                        <td><a class="btn btn-info" href="{{ route('admin.editUser', $uv->id)  }}" >Edit</a>&nbsp;
                                            <a class="btn btn-danger" href="{{ route('admin.deleteUser', $uv->id)  }}" onclick="return confirm('Are you sure want to delete this user?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->
@endsection