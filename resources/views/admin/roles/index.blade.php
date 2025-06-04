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
                                        <th>ID</th>
                                        <th>Name</th>                                     
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                  

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
@push('css')
    {{-- Load DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('admins/dist/css/jquery-confirm.min.css')}}">
@endpush

@push('scripts')
    {{-- Load DataTables JS --}}
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('admins/dist/js/jquery-confirm.min.js')}}"></script>
    

    <script>
        $(function () {
            $('#roles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.roles.data') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const toastEl = document.getElementById('toast-message');
        if (toastEl) {
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    });
    toastEl.addEventListener('shown.bs.toast', () => {
    setTimeout(() => {
        toast.hide();
    }, 3000);
});
</script>
@endpush
