@extends('admin.layout')
@section('content')
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard v3</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Page</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('admin.pages.store')}}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="card-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name"  class="form-control" id="name" placeholder="Enter Name" value="{{old('name')}}">
            @if ($errors->has('name'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
             <textarea id="editordescription" name="description">{{old('description')}}</textarea>
        </div>
   
        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" name="image" class="form-control" id="image" placeholder="Image">
            @if ($errors->has('image'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Meta Title</label>
            <input type="text" name="meta_title"  class="form-control" id="meta_title" placeholder="Enter Name" value="{{old('meta_title')}}">
            @if ($errors->has('meta_title'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                </span>
            @endif
        </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Meta Description</label>
             <textarea id="editormetadescription" name="meta_description">{{old('meta_description')}}</textarea>
        </div>
       
              
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
@stop
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof ClassicEditor !== 'undefined') {
            ClassicEditor
                .create(document.querySelector('#editormetadescription'))

                .catch(error => {
                    console.error('CKEditor init error:', error);
                });
        } else {
            console.error('ClassicEditor is not defined.');
        }

        if (typeof ClassicEditor !== 'undefined') {
            ClassicEditor
                .create(document.querySelector('#editordescription'))

                .catch(error => {
                    console.error('CKEditor init error:', error);
                });
        } else {
            console.error('ClassicEditor is not defined.');
        }
    });
</script>
@endpush
