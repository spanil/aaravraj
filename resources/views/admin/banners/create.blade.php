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
                                <h3 class="card-title">Add Banner</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('admin.banners.store')}}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
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
            <label for="exampleInputEmail1">Link</label>
            <input type="text" name="link"  class="form-control" id="link" placeholder="Enter Link" value="{{old('link')}}">
            @if ($errors->has('link'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
            @endif
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
            <label for="exampleInputEmail1">Is Active ? </label>
             <div class="form-check">
             <input type="radio" name="status" class="custom-control-input" value="1" 
                           checked>  <label class="form-check-label" for="active">Active</label>
                              </div>

    <div class="form-check">
             <input type="radio" name="status" class="custom-control-input" value = "0" 
                          ><label class="form-check-label" for="inactive">Inactive</label>
                      </div>

         
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Order</label>
            <input type="text" name="order"  class="form-control" id="order" placeholder="Enter Order" value="{{old('order')}}">
            @if ($errors->has('order'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('order') }}</strong>
                                </span>
            @endif
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
