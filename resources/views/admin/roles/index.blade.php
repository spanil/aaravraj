@extends('admin.layout')
@section('content')
            <div class="container-fluid">
                <div class="row mb-2">
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>                            
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
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
        </section>
        <!-- /.content -->
    @stop
@push('css')
    {{-- Load DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
    {{-- Load DataTables JS --}}
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

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
@endpush