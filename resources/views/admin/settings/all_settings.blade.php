@extends('layouts.admin')
@section('title','All Settings')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Settings Table</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="allSettings" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            No
                                        </th>
                                        <th class="column-title">Key </th>
                                        <th class="column-title">Text </th>
                                        <th class="column-title">Value </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($settings as $sk => $sv) 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sv->key }}</td>
                                        <td>{{ $sv->text }}</td>
                                        <td>{{ $sv->value }}</td>
                                        <td><a class="btn btn-info" href="{{ route('admin.editSettings', $sv->id)  }}" >Edit</a>&nbsp;
                                            <a class="btn btn-danger" href="{{ route('admin.deleteSettings', $sv->id)  }}" onclick="return confirm('Are you sure want to delete this user?')">Delete</a>
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