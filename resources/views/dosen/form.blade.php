
@include('layouts.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Form Dosen</li>
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
                    <h3 class="card-title">Form Dosen</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('dosen.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nidn">NIDN</label>
                            <input type="text" class="form-control" style="border-radius: 5px;" id="nidn" name="nidn" value="{{ $dosen->nidn }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Dosen</label>
                            <input type="text" class="form-control" style="border-radius: 5px;" id="nama" name="nama" value="{{ $dosen->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" style="border-radius: 5px;" id="tmp_lahir" name="tmp_lahir" value="{{ $dosen->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" style="border-radius: 5px;" id="tgl_lahir" name="tgl_lahir" value="{{ $dosen->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="jk" id="jk1" value="L" {{ $dosen->jk == 'L' ? 'checked' : '' }}>
                                <label for="jk1" class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="jk" id="jk2" value="P" {{ $dosen->jk == 'P' ? 'checked' : '' }}>
                                <label for="jk2" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prodi_id">Program Studi</label>
                            <select name="prodi_id" style="border-radius: 5px;" class="form-select form-select-lg mb-3" required>
                                <option value="">-- Pilih --</option>
                                @foreach($list_prodi as $prodi)
                                    <option value="{{ $prodi->id }}" {{ $dosen->prodi_id == $prodi->id ? 'selected' : '' }}>{{ $prodi->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{ $dosen->id }}">
                        <a href="{{ route('dosen.index') }}" class="btn btn-success mr-2">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('layouts.footer')