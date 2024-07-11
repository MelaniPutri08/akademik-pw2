@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: black; text-shadow: Limegreen 1px 1px 1px; font-size: xx-large; font-family: Times New Roman, Times, serif;"><i>Pembimbing Akademik</i></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pembimbing Akademik</li>
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
                <h3 class="card-title"><i>Selamat datang di halaman Pembimbing Akademik STT Terpadu Nurul Fikri! Kami berkomitmen untuk mendampingi 
                  dan membimbing mahasiswa dalam mencapai prestasi akademik terbaik. Di sini, Anda dapat menemukan berbagai informasi dan layanan yang 
                  dirancang untuk membantu perjalanan akademik Anda. Terima kasih telah mengunjungi kami, dan semoga sukses dalam studi Anda!</i></h3>
            </div>
            <div class="card-body" style="background-color: honeydew;">
                
            </div>
            <!-- /.card-body -->
            <div class="card-group">
  <div class="card">
    <img src="{{ asset('assets/akademik4.png') }}" class="card-img-top" alt="Akademik 4">
    <div class="card-body">
      <h5 class="card-title">Sistem Informasi</h5>
      <p class="card-text">Jurusan Sistem Informasi merupakan disiplin ilmu yang menggabungkan pengetahuan tentang teknologi 
        informasi dengan pemahaman mendalam tentang bagaimana teknologi tersebut dapat diterapkan secara efektif dalam organisasi dan bisnis.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('assets/akademik2.png') }}" class="card-img-top" alt="Akademik 2">
    <div class="card-body">
      <h5 class="card-title">Teknik Informatika</h5>
      <p class="card-text">Jurusan Teknik Informatika fokus pada pengembangan dan implementasi teknologi informasi. 
        Mahasiswa mempelajari teori dan praktek dalam bidang perangkat lunak, hardware komputer, dan jaringan komputer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('assets/akademik3.png') }}" class="card-img-top" alt="Akademik 3">
    <div class="card-body">
      <h5 class="card-title">Bisnis Digital </h5>
      <p class="card-text">Jurusan ini menawarkan kombinasi unik antara pendidikan dalam manajemen bisnis dan penerapan teknologi informasi. 
        Mahasiswa mempelajari cara-cara untuk menggunakan teknologi informasi guna mendukung operasi bisnis, meningkatkan efisiensi, dan menciptakan nilai tambah bagi perusahaan</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
    
  </div>
</div>
<div class="card text-center">
  <div class="card-body d-flex flex-column justify-content-center align-items-center">
    <h5 class="card-title">Kami Memiliki Pendidikan Terbaik</h5>
    <p class="card-text">Pendidikan yang berkualitas adalah kunci untuk membentuk pemimpin masa depan yang visioner dan bertanggung jawab.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
</div>

            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
