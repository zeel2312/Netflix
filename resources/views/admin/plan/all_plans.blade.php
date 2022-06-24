@extends('layouts.admin')
@section('title','All Plans')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Plan Table</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="allPlans" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            No
                                        </th>
                                        <th class="column-title">Plan Name </th>
                                        <th class="column-title">Plan Price (INR)</th>
                                        <th class="column-title">No Of Devices </th>
                                        <th class="column-title">Description </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($plan as $pk => $pv) 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pv->name }}</td>
                                        <td>{{ $pv->price }}</td>
                                        <td>{{ $pv->no_of_devices }}</td>
                                        <td>{{ $pv->description }}</td>
                                        <td><a class="btn btn-info" href="{{ route('admin.editPlan', $pv->id)  }}" >Edit</a>&nbsp;
                                            <a class="btn btn-danger" href="{{ route('admin.deletePlan', $pv->id)  }}" onclick="return confirm('Are you sure want to delete this user?')">Delete</a>
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