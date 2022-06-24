@extends('layouts.admin')
@section('title','Edit Sub-Category')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Sub-Category Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.updateSubCategory') }}" id="addSubCategory" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="CategoryId">Category Name*</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="category_id" id="category_id" class="form-control" required=" ">
                                        @foreach($subcategory as $sc)
                                        <option value='{{ $sc->id }}' @if($sc->id == $subcategorya->category_id) selected="selected" @endif >{{ $sc->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="SubCategoryName">Sub-Category Name* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required=" " class="form-control" value="{{ $subcategorya->name }}" placeholder="Enter Category Name">
                                    <input type="hidden" name="id" id="subcategory_id" value="{{ $subcategorya->id }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Priority">Priority* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="integer" id="priority" name="priority" required=" " class="form-control" value="{{ $subcategorya->priority }}" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Enter Priority">
                                </div> 
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align unique" for="Description">Description* </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="description" name="description" class="form-control" value="{{ $subcategorya->description }}" placeholder="Enter Description" required=" ">
                                </div>
                            </div>

                            
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin.allSubCategories') }}" class="btn btn-danger" type="button">Cancel</a>
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