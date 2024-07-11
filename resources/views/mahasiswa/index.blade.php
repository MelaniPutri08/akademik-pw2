@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px; font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Data Mahasiswa</i></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa</li>
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
                <h3 class="card-title"><i>Jika Ingin Melihat Data Lain Klik Dashboard di Sidebar</i></h3>
            </div>
            <div class="card-body" style="background-color: honeydew;">
                <div class="mb-2">
                    @auth
                        @if(Auth::user()->role == 'administrator')
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-warning"><i class="fas fa-plus"> Tambah</i></a>
                        @endif
                    @endauth 
                </div>
                <div class="table-responsive" style="background-color: honeydew;">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: white;">
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $ms)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ms->nim }}</td>
                                    <td>{{ $ms->nama }}</td>
                                    <td>{{ $ms->tmp_lahir }}</td>
                                    <td>{{ $ms->tgl_lahir }}</td>
                                    <td>
                                        @auth
                                            <form action="{{ route('mahasiswa.destroy', $ms->id) }}" method="POST" style="display:inline;">
                                                <a href="{{ route('mahasiswa.view', $ms->id) }}" class="btn btn-primary">View</a>
                                                @if(Auth::user()->role == 'administrator')
                                                    <a href="{{ route('mahasiswa.edit', $ms->id) }}" class="btn btn-success">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                @endif
                                            </form>
                                        @endauth 
                                    </td>
                                </tr>
                            @endforeach
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
