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
                            <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
                        </div>
                        <div class="card-body">
                            <p>Note: Implement Create Form</p>
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
