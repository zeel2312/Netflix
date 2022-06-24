@extends('layouts.admin')
@section('title','All Categories')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Category Table</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="allCategories" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            No
                                        </th>
                                        <th class="column-title">Category Name </th>
                                        <th class="column-title">Prority </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $ck => $cv) 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cv->name }}</td>
                                        <td>{{ $cv->priority }}</td>
                                        <td><a class="btn btn-info" href="{{ route('admin.editCategory', $cv->id)  }}" >Edit</a>&nbsp;
                                            <a class="btn btn-danger" href="{{ route('admin.deleteCategory', $cv->id)  }}" onclick="return confirm('Are you sure want to delete this Category?')">Delete</a>
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