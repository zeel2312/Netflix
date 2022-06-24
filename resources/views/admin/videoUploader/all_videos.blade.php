@extends('layouts.admin')
@section('title','All Videos')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Video Table</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="allVideos" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            No
                                        </th>
                                        <th class="column-title">Thumbnail </th>
                                        <th class="column-title">Category Name</th>
                                        <th class="column-title">Sub-Category Name </th>
                                        <th class="column-title">Name </th>
                                        <th class="column-title">Duration </th>
                                        <th class="column-title">Cast </th>
                                        <th class="column-title">Director </th>
                                        <th class="column-title">Year </th>
                                        <th class="column-title">Video </th>
                                        <th class="column-title">Description</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($videouploader as $vuk => $vuv) 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('thumbUploads/'.$vuv->image) }}" style="width: 50px; height: 50px;">
                                        </td>
                                        <td>{{ $vuv->category->name }}</td>
                                        <td>{{ $vuv->subcategory->name }}</td>
                                        <td>{{ $vuv->name }}</td>
                                        <td>{{ $vuv->duration }}</td>
                                        <td>{{ $vuv->cast }}</td>
                                        <td>{{ $vuv->director }}</td>
                                        <td>{{ $vuv->year }}</td>
                                        <td>{{ $vuv->video }}</td>
                                        <td>{{ $vuv->description }}</td>
                                        <td><a class="btn btn-info" href="{{ route('admin.editVideo', $vuv->id)  }}" >Edit</a>&nbsp;
                                            <a class="btn btn-danger" href="{{ route('admin.deleteVideo', $vuv->id)  }}" onclick="return confirm('Are you sure want to delete this Video?')">Delete</a>
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