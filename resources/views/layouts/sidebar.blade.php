<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary" >
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
          <span class="brand-text font-weight-light" style="color: aqua;"><b>Bimbingan Akademik</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('assets/img/avatar.png') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                @auth
                @if (Auth::check())
                  <a href="{{route('profile.edit')}}" class="d-block">
                    {{ strtoupper(Auth::user()->name) ?? ""}}
                  </a>
                  <span class="text-primary">Role : {{Auth::user()->role}}</span>
              </div>
                @endif
                @endauth
                @guest
                <a href="#" class="d-block">Guest</a>
                @endguest
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column active" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item ">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                        @auth
                            <li class="nav-item">
                                <form method="POST" action="{{ route('mahasiswa.home') }}">
                                    @csrf

                                    <a href="{{ route('mahasiswa.home') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Home</p>
                                    </a>
                                </form>
                            </li>
                            @if (Auth::user()->role=='administrator')
                            <li class="nav-item">
                                    <form method="POST" action="{{ route('prodi.index') }}">
                                        @csrf

                                        <a href="{{route('prodi.index')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Prodi</p>
                                        </a>
                                    </form>
                            </li>
                            <li class="nav-item">
                                    <form method="POST" action="{{ route('dosen.index') }}">
                                        @csrf

                                        <a href="{{route('dosen.index')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Dosen</p>
                                        </a>
                                    </form>
                            </li>
                            <li class="nav-item">
                                    <form method="POST" action="{{ route('rombongan_belajar.index') }}">
                                        @csrf

                                        <a href="{{route('rombongan_belajar.index')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Rombel</p>
                                        </a>
                                    </form>
                            </li>
                            <li class="nav-item">
                                    <form method="POST" action="{{ route('mahasiswa.index') }}">
                                        @csrf

                                        <a href="{{route('mahasiswa.index')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Mahasiswa</p>
                                        </a>
                                    </form>
                            </li>
                            @endif
                        @endauth
                            <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="route('logout')" class="nav-link"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <i class="far fa-circle nav-icon"></i>
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                            </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
