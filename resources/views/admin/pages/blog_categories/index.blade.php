@extends('admin.layouts.base')
@section('tittle', 'Blog Categories')
@section('content')


   <!-- Page Wrapper -->      
    <div id="wrapper">
    @include('admin.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            @include('admin.layouts.navbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Blog Categories</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List Of All Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Category 1</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Category 2</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Category 3</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


@endsection

@section('page_scripts')
 <!-- Page level plugins -->
 <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

@endsection