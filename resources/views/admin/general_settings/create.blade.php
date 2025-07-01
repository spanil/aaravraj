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
                                <h3 class="card-title">Setting</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('admin.general_settings.store')}}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="card-body">
         <div class="form-group">
            <label for="exampleInputEmail1">Company Name</label>
           <input type="text" class="form-control" name="company_name"
                                            value="{{old('company_name' , $data->company_name ?? '' )}}">

            @if ($errors->has('roles'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('company_name') }}</strong>
                                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="email"
                                            value="{{old('email' , $data->email ?? '' )}}">
            @if ($errors->has('email'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" name="phone"
                                            value="{{old('phone' , $data->phone ?? '' )}}">
            @if ($errors->has('phone'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" name="address"
                                            value="{{old('address' , $data->address ?? '' )}}">
            @if ($errors->has('address'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
            @endif
        </div>
       <div class="form-group">
            <label for="exampleInputEmail1">Meta Title</label>
            <input type="text" class="form-control" name="meta_title"
                                            value="{{old('meta_title' , $data->meta_title ?? '' )}}">
            @if ($errors->has('meta_title'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Meta Description</label>
             <textarea id="editordescription" name="meta_description">{{old('meta_description', $data->meta_description ?? '' )}}</textarea>
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
                .create(document.querySelector('#editorshortdescription'))

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