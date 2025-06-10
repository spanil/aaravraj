@extends('admin.layout')
@section('content')
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
        @include('admin.partials.toast')
        <!--begin::Container-->
        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                                <h3 class="card-title" style="float: right"><a href="{{route('admin.roles.create')}}">+Add</a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="roles-table" class="table table-bordered table-striped">
                                    <thead>
                                   <tr>                                     
                                        <th>Module Name</th>                                     
                                        <th>Has View Access</th>
                                        <th>Has Create Access</th>
                                        <th>Has Update Access</th>
                                        <th>Has Delete Access</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($menus as $parentMenu)                                       
                                            <tr>
                                          
                                                <td>{{$i}} {{$parentMenu->menu_name}}</td>
                                                <td><div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault" value="checked">
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </td> 
                                                <td><div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </td> 
                                                <td><div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </td> 
                                                <td><div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </td>
                       
                                            </tr>
                                            @if($parentMenu->children->isNotEmpty())
                                                @php $j = 1; @endphp
                                                @foreach($parentMenu->children as $childMenu)
                                                
                                                    <tr>
                                                        <td><p style="padding-left: 15px;">{{$i}} . {{$j}} {{$childMenu->menu_name}}</p></td>
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td>

                                                            
                                                      
                               
                                                    </tr>
                                                    @if($childMenu->children->isNotEmpty())
                                                        @php $k = 1; @endphp
                                                        @foreach($childMenu->children as $grandChildMenu)                                                        
                                                            <tr>
                                                            <td><p style="padding-left: 35px;">{{$i}} . {{$j}} . {{$k}} {{$grandChildMenu->menu_name}}</p></td>

                                                                 <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" id="flexSwitchCheckDefault">
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </td>
                                                
                                        

                                                            </tr>
                                                          @php $k++; @endphp   
                                                        @endforeach
                                                    @endif    
                                                @php $j++; @endphp
                                                @endforeach
                                            @endif
                                            @php $i++; @endphp
                                        @endforeach
                                    </tbody>
                                  

                                </table>
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
<script>
$(document).ready(function() {
    $('.permission-switch').on('change', function() {
        const menuId = $(this).data('menu-id');
        const permissionType = $(this).data('permission-type');
        const isChecked = $(this).is(':checked'); // Or $(this).prop('checked');

        // Get CSRF token from meta tag
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/admin/permissions/update-menu-permission', // Your backend route
            method: 'POST', // Or PUT/PATCH if preferred for updates
            data: {
                _token: csrfToken, // Laravel's CSRF token
                menu_id: menuId,
                permission_type: permissionType,
                is_checked: isChecked
            },
            success: function(response) {
                if (response.success) {
                    // Optional: Show a success toast/alert
                    // Example with AdminLTE Toasts (requires AdminLTE JS)
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        body: response.message || 'Permission updated successfully!',
                        autohide: true,
                        delay: 3000
                    });
                } else {
                    // Optional: Show an error toast/alert
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        body: response.message || 'Failed to update permission.',
                        autohide: true,
                        delay: 5000
                    });
                    // Revert the switch state if update failed
                    $(this).prop('checked', !isChecked);
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX error (e.g., network issues, server errors)
                console.error("AJAX Error: ", status, error);
                console.error("Response Text: ", xhr.responseText);

                // Revert the switch state on AJAX error
                $(this).prop('checked', !isChecked);

                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Error',
                    body: 'Server error: ' + (xhr.responseJSON.message || 'Please try again.'),
                    autohide: true,
                    delay: 5000
                });
            }
        });
    });
});
</script>
@endpush