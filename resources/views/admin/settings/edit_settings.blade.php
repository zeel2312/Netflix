@extends('layouts.admin')
@section('title','Edit Settings')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Settings Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.updateSettings') }}" id="addSettings" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Key">Key* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="key" name="key" required=" " class="form-control" value="{{ $settings->key }}"  placeholder="Enter name">
                                    <input type="hidden" name="id" value="{{ $settings->id }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Text">Text* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="text" name="text" required=" " class="form-control" value="{{ $settings->text }}" placeholder="Enter Text">
                                </div> 
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Value">Value* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="value" name="value" required=" " class="form-control" value="{{ $settings->value }}" placeholder="Enter Value">
                                </div>
                            </div>
                            
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin.allSettings') }}" class="btn btn-danger" type="button">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection