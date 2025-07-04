<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Fun Playstation WEB</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/kaiadmin.min.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      {{-- AWAL SIDEBAR --}}
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="/home" class="logo">
              <h5 class="text-white mb-0 me-2">FUN PLAYSTATION</h5>
              <i class="fas fa-gamepad fa-2x text-white" style="font-size: 24px;"></i>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
               
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>

              {{-- AWAL KELOLA DATA --}}
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="fas fa-layer-group"></i>
                  <p>Kelola Data</p>
                  <span class="caret"></span>
                </a>

                <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('pelanggan.index') }}">
                        <span class="sub-item">🧑🏻 Pelanggan</span>
                      </a>
                    </li>
                    <li>
                        <a href="{{ route('playstation.index') }}">
                          <span class="sub-item">🎮 Playstation</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi.index') }}">
                          <span class="sub-item">📝 Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pembayaran.index') }}">
                          <span class="sub-item">💸 Pembayaran</span>
                        </a>
                    </li>
                  </ul>
                </div>
              </li>
              {{-- KELOLA DATA --}}

              {{-- AWAL MAPS --}}
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Maps</p>
                  <span class="caret"></span>
                </a>

                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="https://maps.app.goo.gl/CNfJYFwUJJHkMQvy6">
                        <span class="sub-item">Google Maps</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              {{-- AKHIR MAPS --}}
            </ul>
          </div>
        </div>
      </div>
      {{-- AKHIR SIDEBAR --}}

      {{-- MAIN PANEL --}}
      <div class="main-panel">
        <div class="main-header">

            {{-- AWAL LOGO --}}
          <div class="main-header-logo">
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
          </div>
          {{-- AKHIR LOGO --}}
          
          <!-- AWAL NAVBAR -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            {{-- AWAL SEARCH BAR --}}
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                {{-- AKHIR SEARCH BAR --}}

                {{-- AWAL NOTIFIKASI --}}
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-bell"></i>
                    <span class="notification">{{ count($notifikasi ?? []) }}</span>
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                        You have {{ count($notifikasi ?? []) }} new notification{{ (count($notifikasi ?? []) > 1) ? 's' : '' }}
                      </div>
                    </li>
                    <li>
                      <div class="notif-scroll scrollbar-outer">
                        <div class="notif-center">
                          @forelse($notifikasi ?? [] as $notif)
                          <a href="#">
                            <div class="notif-icon notif-primary">
                              <i class="fa {{ $notif['icon'] ?? 'fa-info-circle' }}"></i>
                            </div>
                            <div class="notif-content">
                              <span class="block"> {{ $notif['pesan'] }} </span>
                              <span class="time">{{ $notif['waktu'] }}</span>
                            </div>
                          </a>
                          @empty
                          <div class="text-center text-muted py-2">No notifications</div>
                          @endforelse
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="see-all" href="javascript:void(0);"
                        >See all notifications<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                {{-- AKHIR NOTIFIKASI --}}

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">{{ Auth::user()->name }}</span>

                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="assets/img/profile.jpg"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('login') }}">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        {{-- AKHIR NAVBAR --}}

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard Fun Playstation</h3>
                <h6 class="op-7 mb-2">Welcome to Our Dashboard</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="/pelanggan/create" class="btn btn-primary btn-round">Tambah pelanggan</a>
              </div>
            </div>

            <div class="row">

              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Pelanggan</p>
                          <h4 class="card-title">{{ $jumlahPelanggan }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-gamepad"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Unit Playstation</p>
                          <h4 class="card-title">{{ $jumlahPlaystation }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-money-bill-wave"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Total Pemasukan</p>
                          <h4 class="card-title">Rp {{ number_format($totalPemasukan,0,',','.') }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="far fa-clock"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Rata Rata Durasi Sewa</p>
                          <h4 class="card-title">{{ $rataRataDurasi }} Hari</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                
                {{-- AWAL PELANGGAN BARU --}}
              <div class="col-md-4">
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Pelanggan Baru</div>
                      <div class="card-tools">
                       
                      </div>
                    </div>

                    <div class="card-list py-4 scrollable-list" style="max-height: 320px; overflow-y: auto;">
                      @foreach($pelangganBaru->take(4) as $pelanggan)
                      <div class="item-list">
                        <div class="avatar">
                          @if(isset($pelanggan->avatar) && $pelanggan->avatar)
                            <img src="{{ asset($pelanggan->avatar) }}" alt="..." class="avatar-img rounded-circle" />
                          @else
                            <span class="avatar-title rounded-circle border border-white">
                              {{ strtoupper(substr($pelanggan->nama,0,2)) }}
                            </span>
                          @endif
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">{{ $pelanggan->nama }}</div>
                        </div>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <a href="{{ route('pelanggan.delete', $pelanggan->id) }}"> 🗑️ </a>
                        </button>
                      </div>
                      @endforeach
                      @if($pelangganBaru->count() > 4)
                        @foreach($pelangganBaru->slice(4) as $pelanggan)
                        <div class="item-list">
                          <div class="avatar">
                            @if(isset($pelanggan->avatar) && $pelanggan->avatar)
                              <img src="{{ asset($pelanggan->avatar) }}" alt="..." class="avatar-img rounded-circle" />
                            @else
                              <span class="avatar-title rounded-circle border border-white">
                                {{ strtoupper(substr($pelanggan->nama,0,2)) }}
                              </span>
                            @endif
                          </div>
                          <div class="info-user ms-3">
                            <div class="username">{{ $pelanggan->nama }}</div>
                          </div>
                          <button class="btn btn-icon btn-link btn-danger op-8">
                            <a href="{{ route('pelanggan.delete', $pelanggan->id) }}"> 🗑️ </a>
                          </button>
                        </div>
                        @endforeach
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              {{-- AKHIR PELANGGAN BARU --}}

              {{-- AWAL HISTORI PEMBAYARAN --}}
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Histori Pembayaran</div>
                      <div class="card-tools">
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-body p-0" style="max-height: 320px; overflow-y: auto;">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">ID PEMBAYARAN</th>
                            <th scope="col" class="text-end">Date</th>
                            <th scope="col" class="text-end">Amount</th>
                            <th scope="col" class="text-end">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($historiPembayaran->take(4) as $pembayaran)
                          <tr>
                            <th scope="row">
                              <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #{{ $pembayaran->id }}
                            </th>
                            <td class="text-end">{{ \Carbon\Carbon::parse($pembayaran->tanggal_pembayaran)->format('d M Y') }}</td>
                            <td class="text-end">{{ number_format($pembayaran->jumlah_bayar,0,',','.') }}</td>
                            <td class="text-end">
                              <span class="badge badge-success">{{ $pembayaran->transaksi->status ?? '-' }}</span>
                            </td>
                          </tr>
                          @endforeach
                          @if($historiPembayaran->count() > 4)
                            @foreach($historiPembayaran->slice(4) as $pembayaran)
                            <tr>
                              <th scope="row">
                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                  <i class="fa fa-check"></i>
                                </button>
                                Payment from #{{ $pembayaran->id }}
                              </th>
                              <td class="text-end">{{ \Carbon\Carbon::parse($pembayaran->tanggal_pembayaran)->format('d M Y') }}</td>
                              <td class="text-end">{{ number_format($pembayaran->jumlah_bayar,0,',','.') }}</td>
                              <td class="text-end">
                                <span class="badge badge-success">{{ $pembayaran->transaksi->status ?? '-' }}</span>
                              </td>
                            </tr>
                            @endforeach
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
              </div>
              {{-- AKHIR HISTORI TRANSAKSI --}}
            </div>

            <div class="row">

              
              <!-- AWAL DIAGRAM STATISTIK -->
              <div class="col-12 mt-4">
                <div class="card card-round">
                  <div class="card-body">
                    <h4 class="card-title mb-4">Statistik Jumlah Pelanggan per Bulan</h4>
                    <canvas id="chartPelangganPerBulan" height="100"></canvas>
                  </div>
                </div>
              </div>
              <!-- AKHIR DIAGRAM STATISTIK -->
            </div>

          </div>
        </div>

        {{-- AWAL FOOTER --}}
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#"> Help </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              2025, made with <i class="fa fa-heart heart text-danger"></i> by Darrel Radhitya
            </div>
            <div>
              Project of Praktikum CMS
            </div>
          </div>
        </footer>
        {{-- AKHIR FOOTER --}}
      </div>
      {{-- AKHIR MAIN PANEL --}}

      {{-- AWAL FITUR UBAH WARNA --}}
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div>
      {{-- AKHIR FITUR UBAH WARNA --}}
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    {{-- methods --}}
    <script src="assets/js/setting-colour.js"></script>
    <script src="assets/js/stats.js"></script>
    <script src="assets/js/income.js"></script>
    
    <!-- Chart.js: Statistik Pelanggan per Bulan -->
    <script>
      // Data dari controller (pastikan variabel ini dikirim dari controller)
      const pelangganLabels = @json($pelangganPerBulan['labels'] ?? []);
      const pelangganData = @json($pelangganPerBulan['data'] ?? []);

      if (document.getElementById('chartPelangganPerBulan')) {
        const ctx = document.getElementById('chartPelangganPerBulan').getContext('2d');
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: pelangganLabels,
            datasets: [{
              label: 'Jumlah Pelanggan',
              data: pelangganData,
              backgroundColor: 'rgba(54, 162, 235, 0.5)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      }
    </script>
    
    </script>
  </body>
</html>
