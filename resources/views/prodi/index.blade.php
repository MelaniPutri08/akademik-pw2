@include('layouts.header')
@include('layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px; font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Data Prodi</i></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Prodi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="color: red;"><i>Jika Ingin Melihat Data Lain Klik Dashboard di Sidebar</i></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="background-color: honeydew;">
                <div class="mb-2">
                    <a href="{{ route('prodi.create') }}" class="btn btn-warning"><i class="fas fa-plus"> Tambah</i></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: white;">
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Prodi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_prodi as $prodi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $prodi->kode }}</td>
                                <td>{{ $prodi->nama }}</td>
                                <td>
                                    <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST">
                                        <a href="{{ route('prodi.view', $prodi->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-success">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Add more rows if needed -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <br>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
