<!DOCTYPE html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal LLH</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.css" />
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/tes" style="color:#007EA7; font-weight: bold;">Portal LLH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        style="margin :2px 0;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="/tes">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/forms">Pengajuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tracks">Pelacakan <span class="sr-only">(current)</span></a>
          </li>
          @guest
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
    </div>
  </nav>
</header>

<body>
@yield('content')


  <footer class="footer bg-dark text-light" style="background-color: black; height: 100%;">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 footer-content">
          <h2>Lembaga Layanan Hukum</h2>
          <p>Gedung CCAR ITB Lantai 5
            Jalan Tamansari 64 Bandung
            Telp : 022-2500939
            Fax: 022-2500939
            Waktu Layanan
            07.30-16.30 WIB ( Senin-Jumat )</p>
        </div>
        <div class="col-lg-4 footer-content">
          <a href="http://seabaditb.id"><img src="{{asset('img/100.png')}}" style="width:70%; "></a>
        </div>
        <div class="col-lg-4 footer-content">
          <p>Didukung oleh</p>
          <a href="https://ppid.itb.ac.id"><img src="{{asset('img/ppid.png')}}" style="width:70%; margin-top:10px;"></a>
        </div>
      </div>
      <div class="text-center" style="padding: 20px;">Tim Pengembang PPID ITB</div>
    </div>
  </footer>

  <script>
    AOS.init();
  </script>
</body>
</html>