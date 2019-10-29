@extends('layouts.home_layout')

@section('content')
  <!-- News Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item  active">
        <div class="carousel-bg" style="background-image: linear-gradient(
              rgba(0,0,20,.55),
              rgba(0,0,0,.65)),url('src/annex.jfif');">
          <img id="logo" src="src/logo-itb-1024px.png">
          <p id="intro-title">
            Lembaga Layanan Hukum
            Institut Teknologi Bandung
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-bg" style="background-image: linear-gradient(
              rgba(0,0,20,.55),
              rgba(0,0,0,.65)),url('src/image.jpg');">
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-bg" style="background-image: linear-gradient(
              rgba(0,0,20,.55),
              rgba(0,0,0,.65)),url('src/image.jpg');">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Pencarian SK -->
  <div class="main-search align-items-center blue-bg">
    <div class="container">
      <div class="row">
        <div id="search-bar-title" class="col-md-3 my-auto">
            Pencarian SK
        </div>
        <div class="col-md-9">

          <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
          <div class="input-group">
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Pencarian">
            <div class="input-group-append">
              <div class="input-group-text search-button" onclick="window.location.href = 'search_result.html';">
                <a class="fas fa-search"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>




  <div class="container main-menu">
    <div class="row row-eq-height card-container">
      <div class="col-sm">
        <div class="home-main-feature has-text-centered" data-aos="fade-up">
          <a href="form_page.html">
            <div class="text-center">
              <img src="src/search.jpg" style="width:200px; height:200px; margin-bottom:10px;" alt="Image">
            </div>
            <div class="text-center">
              <h1>Pengajuan</h1>
              <h4>Fitur untuk pengajuan dokumen.</h4>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm align-self-center">
        <div class="home-main-feature has-text-centered" data-aos="fade-up">
          <a href="track_page.html">
            <div class="text-center">
              <img src="src/search.jpg" style="width:200px; height:200px; margin-bottom:10px;" alt="Image">
            </div>
            <div class="text-center">
              <h1>Pelacakan</h1>
              <h4>Lihat progress pengerjaan dari SK yang diajukan.</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="blue-bg">
    <div class="container ">
      <div class="row">
        <div class="col text-center">
          <h1 style="color:#FFE66D; font-size:70px;">150</h1>
          <h3 style="color:white;">Pengajuan SK</h3>
        </div>
        <div class="col text-center">
          <h1 style="color:#FFE66D; font-size:70px;">80</h1>
          <h3 style="color:white;">SK Terbit</h3>
        </div>
        <div class="col text-center">
          <h1 style="color:#FFE66D; font-size:70px;">25</h1>
          <h3 style="color:white;">Pengajuan Peraturan</h3>
        </div>
        <div class="col text-center">
          <h1 style="color:#FFE66D; font-size:70px;">12</h1>
          <h3 style="color:white;">Pengajuan Kerjasama</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center" style="padding:4% 0;">
    <h2 style="margin-bottom: 40px;">Berita Terbaru</h2>
    <div class="row">
      <div class="col-md-4">
        <div class=" news-card">
          <div class="news-img" style="background-image: url(src/img_1.jpg)"></div>
          <div class="news-info">
            <h4>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet
              inimicu ut qui dolor oratio mnesarchum</h4>
            <p class="news-date"> 18 Oktober 2019</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class=" news-card">
          <div class="news-img" style="background-image: url(src/img_1.jpg)"></div>
          <div class="news-info">
            <h4>Lorem ipsum dolor sit amet sit lemnesarchum</h4>
            <p class="news-date"> 18 Oktober 2019</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class=" news-card">
          <div class="news-img" style="background-image: url(src/img_1.jpg)"></div>
          <div class="news-info">
            <h4>Lorem ipsum dolor </h4>
            <p class="news-date"> 18 Oktober 2019</p>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-primary news-button">Lihat berita lainnya...</button>
  </div>
  @endsection