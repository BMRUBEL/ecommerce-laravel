@extends('dashboard.layouts.main')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Employee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">


                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h2 class="card-title">Employee list
                                                        </h2>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <div class="float-right " style="margin-left:92%">

                                                            <a href="{{ route('employee.create') }}">Add New</a>

                                                        </div>
                                                        <table id="example2" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>EmployeeID</th>
                                                                    <th>Images</th>
                                                                    <th>Name</th>
                                                                    <th>Designation</th>
                                                                    <th>Address</th>
                                                                    <th>Phone</th>
                                                                    <th>Email</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($list as $k => $l)
                                                                    <tr>
                                                                        <td>{{ $k + 1 }}</td>
                                                                        <td>{{ $l->em_id }}</td>
                                                                        <td>{{ $l->images }}</td>
                                                                        <td>{{ $l->name }}</td>
                                                                        <td>{{ $l->designation }}</td>
                                                                        <td>{{ $l->address }}</td>
                                                                        <td>{{ $l->phone }}</td>
                                                                        <td>{{ $l->email }}</td>
                                                                        <td>
                                                                            <form action="{{ route('employee.destroy',$l->id) }}" method="POST">

                                                                                <a class="btn btn-primary" href="{{ route('employee.edit',$l->id) }}"><i class="fa fa-edit"></i></a>

                                                                                @csrf
                                                                                @method('DELETE')

                                                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                                            </form>
                                                                        </td>


                                                                    </tr>
                                                                @endforeach


                                                            </tbody>
                                                            {{-- <tfoot>
                                                                <tr>
                                                                    <th>Rendering engine</th>
                                                                    <th>Browser</th>
                                                                    <th>Platform(s)</th>
                                                                    <th>Engine version</th>
                                                                    <th>CSS grade</th>
                                                                </tr>
                                                            </tfoot> --}}
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
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        Footer
    </footer>
    </div>
@endsection
