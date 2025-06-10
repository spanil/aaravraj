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
                                <h3 class="card-title">Add User</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('admin.products.store')}}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="card-body">
         <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            @foreach($categories as $category)
             <div class="form-group">
            <input type="checkbox" class="form-check-input" name="category_id[]" value="{{$category->id}}" 
            {{ is_array(old('category_id')) && in_array($category->id, old('category_id')) ? 'checked' : '' }}>{{$category->name}}
        </div>
            @endforeach
            @if ($errors->has('roles'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('roles') }}</strong>
                                </span>
            @endif
        </div>
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
            <label for="exampleInputEmail1">Short Description</label>
            <textarea id="editorshortdescription" name="short_description">{{old('short_description')}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
             <textarea id="editordescription" name="description">{{old('description')}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" name="price"  class="form-control" id="price" placeholder="Enter Price" value="{{old('price')}}">
            @if ($errors->has('price'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
            @endif
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Stock</label>
            <input type="text" name="stock_quantity"  class="form-control" id="stock_quantity" placeholder="Enter stock_quantity" value="{{old('stock_quantity')}}">
            @if ($errors->has('stock_quantity'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('stock_quantity') }}</strong>
                                </span>
            @endif
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" name="image"  class="form-control">
            @if ($errors->has('image'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Is Active ? </label>
             <div class="form-check">
             <input type="radio" name="is_active" class="custom-control-input" value="1" 
                           checked>  <label class="form-check-label" for="active">Yes</label>
                              </div>

    <div class="form-check">
             <input type="radio" name="is_active" class="custom-control-input" value = "0" 
                          ><label class="form-check-label" for="inactive">No</label>
                      </div>

         
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Is Featured ? </label>
             <div class="form-check">
             <input type="radio" name="is_featured" class="custom-control-input" value="1" 
                           checked>  <label class="form-check-label" for="active">Yes</label>
                              </div>

    <div class="form-check">
             <input type="radio" name="is_featured" class="custom-control-input" value = "0" 
                          ><label class="form-check-label" for="inactive">No</label>
                      </div>

         
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