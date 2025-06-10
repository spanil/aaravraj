@extends('admin.layout')
@section('content')
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
                                <h3 class="card-title">Edit User</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('admin.users.update', ['user' => $data->id]) }}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PATCH">
                                    <div class="card-body">
         <div class="form-group">
            <label for="exampleInputEmail1">Admin Role Type</label>
             <select name="role_id" id="role_id" class="form-control">
                @foreach($roles as $role)
                 <option value="{{$role->id}}" @if($role->id == $data->role_id) selected @endif>{{$role->name}}</option>
                @endforeach 
             </select>
            @if ($errors->has('roles'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('roles') }}</strong>
                                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name" placeholder="Enter Name">
            @if ($errors->has('name'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
            @endif
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" value="{{$data->email}}" class="form-control" id="email" placeholder="Enter Email">
            @if ($errors->has('email'))
                 <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mobile No</label>
            <input type="text" name="mobile_no" value="{{$data->mobile_no}}" class="form-control" id="mobile_no" placeholder="Enter Mobile No">
            @if ($errors->has('mobile_no'))
                <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('mobile_no') }}</strong>
                                </span>
            @endif
        </div>
     <div class="form-group">
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="change_password_check" name="change_password_check"
                   >
            <label class="form-check-label" for="change_password">Change Password</label>
        </div>
    </div>


         <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                           placeholder="Password" id="password" disabled>
            @if ($errors->has('password'))
                 <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
            @endif
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Password Confirmation</label>
             <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" 
                           placeholder="Retype password" disabled>
            @if ($errors->has('name'))
                 <span class="help-block" style="color: red;">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
            @endif
        </div>
       
              
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('#change_password_check').removeAttr('checked');
        $('#change_password_check').click(function () {
            //check if checkbox is checked
          if ($(this).is(':checked')) {
              $('#password').removeAttr('disabled'); //enable input
              $('#password_confirmation').removeAttr('disabled'); //enable input
          } else {
              $('#password').attr('disabled', true); //disable input
              $('#password_confirmation').attr('disabled', true); //disable input
          }
        });
    });
  </script>
@endpush