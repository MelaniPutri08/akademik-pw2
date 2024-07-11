
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
                        
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create New Rombel</li>
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
                    <h3 class="card-title">Create New Rombel</h3>

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
                        <form action="{{ route('rombongan_belajar.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" style="border-radius: 5px;" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ $rombongan_belajar->kode }}" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="thn_masuk">Tahun Masuk</label>
                                <input type="number" style="border-radius: 5px;" class="form-control @error('thn_masuk') is-invalid @enderror" id="thn_masuk" name="thn_masuk" value="{{ $rombongan_belajar->thn_masuk }}" required>
                            </div>
                            <div class="form-group">
                                <label for="dosen_pa">Dosen Pembimbing</label>
                                <select name="dosen_pa" style="border-radius: 5px;" style="border-radius: 5px;" class="form-select form-select-lg mb-3" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach($list_dosen as $dosen)
                                        <option value="{{ $dosen->id }}" {{ $rombongan_belajar->dosen_pa == $dosen->id ? 'selected' : '' }}>{{ $dosen->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="id" value="{{ $rombongan_belajar->id }}">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('rombongan_belajar.index') }}" class="btn btn-secondary">Kembali</a>
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
