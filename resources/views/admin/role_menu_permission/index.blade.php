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
                            <form method="GET" action="{{ route('admin.roleMenuPermission.index') }}">
                            <div class="card-header">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Role Type</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="">--Choose Role--</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}" @if(request('role_id') == $role->id) selected @endif>{{$role->name}}</option>
                                    @endforeach 
                                </select>                               
                                </div>
                                 <div class="form-group">
                                     <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                        <a href="{{ route('admin.roleMenuPermission.index') }}" class="btn btn-danger">Reset</a>
                                    </div>
                                                                
                                </div>
                            </div>
                            </form>
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
                                         @php $parentPermission = $parentMenu->roleMenuPermissions->first(); @endphp                                       
                                            <tr>
                                          
                                                <td>{{$i}} . {{$parentMenu->menu_name}}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox"
                                                id="menu-{{$parentMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$parentMenu->id}} 
                                                data-permission="has_view_access" {{ $parentPermission?->has_view_access ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </td> 
                                                <td><div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox"
                                                 id="menu-{{$parentMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$parentMenu->id}} 
                                                data-permission="has_create_access" {{ $parentPermission?->has_create_access ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </td> 
                                                <td><div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox"
                                                 id="menu-{{$parentMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$parentMenu->id}} 
                                                data-permission="has_update_access"  {{ $parentPermission?->has_update_access ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </td> 
                                                <td><div class="form-check form-switch">
                                                <input class="form-check-input permission-switch" type="checkbox"
                                                 id="menu-{{$parentMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$parentMenu->id}} 
                                                data-permission="has_delete_access" {{ $parentPermission?->has_delete_access ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </td>
                       
                                            </tr>
                                            @if($parentMenu->children->isNotEmpty())
                                                @php $j = 1; @endphp
                                                @foreach($parentMenu->children as $childMenu)
                                                 @php $childPermission = $childMenu->roleMenuPermissions->first(); @endphp
                                                
                                                    <tr>
                                                        <td><p style="padding-left: 15px;">{{$i}} . {{$j}} {{$childMenu->menu_name}}</p></td>
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" 
                                                           id="menu-{{$childMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$childMenu->id}} 
                                                data-permission="has_view_access"
                                                {{ $childPermission?->has_view_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td> 
                                                        <td><div class="form-check form-switch">
                                                         <input class="form-check-input permission-switch" type="checkbox" 
                                                            id="menu-{{$childMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$childMenu->id}} 
                                                data-permission="has_create_access"
                                                {{ $childPermission?->has_create_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" 
                                                           id="menu-{{$childMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$childMenu->id}} 
                                                data-permission="has_update_access"
                                                {{ $childPermission?->has_update_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" 
                                                           id="menu-{{$childMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$childMenu->id}} 
                                                data-permission="has_delete_access"
                                                {{ $childPermission?->has_delete_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td>

                                                            
                                                      
                               
                                                    </tr>
                                                    @if($childMenu->children->isNotEmpty())
                                                        @php $k = 1; @endphp
                                                        @foreach($childMenu->children as $grandChildMenu)
                                                         @php $grandChildPermission = $grandChildMenu->roleMenuPermissions->first(); @endphp                                                        
                                                            <tr>
                                                            <td><p style="padding-left: 35px;">{{$i}} . {{$j}} . {{$k}} {{$grandChildMenu->menu_name}}</p></td>

                                                                 <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" 
                                                           id="menu-{{$grandChildMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$grandChildMenu->id}} 
                                                data-permission="has_view_access"
                                                {{ $grandChildPermission?->has_view_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td> 
                                                        <td><div class="form-check form-switch">
                                                           <input class="form-check-input permission-switch" type="checkbox" 
                                                            id="menu-{{$grandChildMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$grandChildMenu->id}} 
                                                data-permission="has_create_access"
                                                {{ $grandChildPermission?->has_create_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td> 
                                                        <td><div class="form-check form-switch">
                                                         <input class="form-check-input permission-switch" type="checkbox" 
                                                           id="menu-{{$grandChildMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$grandChildMenu->id}} 
                                                data-permission="has_update_access"
                                                {{ $grandChildPermission?->has_update_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td> 
                                                        <td><div class="form-check form-switch">
                                                          <input class="form-check-input permission-switch" type="checkbox" 
                                                           id="menu-{{$grandChildMenu->id}}" 
                                                data-role-id={{request('role_id')}} 
                                                data-menu-id={{$grandChildMenu->id}} 
                                                data-permission="has_delete_access"
                                                {{ $grandChildPermission?->has_delete_access ? 'checked' : '' }}>
                                                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                        </div></td>
                                                
                                        

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
    $(document).on('change', '.permission-switch', function () {
        let roleId = $(this).data('role-id');
        let menuId = $(this).data('menu-id');
        let permission = $(this).data('permission');
        let isChecked = $(this).is(':checked');

        $.ajax({
            url: '/admin/role_menu_permission/update_permission',
            method: 'POST',
            data: {
                role_id: roleId,
                menu_id: menuId,
                permission: permission,
                value: isChecked ? 1 : 0,
                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            success: function (response) {
                console.log('Permission updated:', response.message);
                // You might want to add success toasts/alerts here
            },
            error: function (xhr) {
                console.error('An error occurred:', xhr.responseText); // Log full error
                alert('An error occurred while updating permission.');
                // Revert the switch state on error to indicate failure
                $(this).prop('checked', !isChecked);
            }
        });
    });
});

</script>
@endpush