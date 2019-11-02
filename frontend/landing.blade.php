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
          <p id="home-title">
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
    <div class="row card-container">
      <div class="col-sm home-main-feature has-text-centered" data-aos="fade-up">
          <a href="form_page.html">
            <div class="text-center">
              <img class="main-feature-img" src="src/search.jpg" alt="Image">
            </div>
            <div class="text-center">
              <h2><strong>Pengajuan</strong></h2>
              <h5>Fitur untuk pengajuan dokumen</h5>
            </div>
          </a>
      </div>
      <div class="col-sm align-self-center home-main-feature has-text-centered" data-aos="fade-up">
          <a href="track_page.html">
            <div class="text-center">
              <img class="main-feature-img" src="src/search.jpg" alt="Image">
            </div>
            <div class="text-center">
              <h2><strong>Pelacakan</strong></h2>
              <h5>Lihat progress pengerjaan dari SK yang diajukan</h5>
            </div>
          </a>
      </div>
    </div>
  </div>

  <div class="blue-bg">
    <div class="container ">
      <div class="row">
        <div class="col text-center">
          <h1 id="statistic-1" class="gold-text">150</h1>
          <h4>Pengajuan SK</h4>
        </div>
        <div class="col text-center">
          <h1 id="statistic-2" class="gold-text">80</h1>
          <h4>SK Terbit</h4>
        </div>
        <div class="col text-center">
          <h1 id="statistic-3" class="gold-text">25</h1>
          <h4>Pengajuan Peraturan</h4>
        </div>
        <div class="col text-center">
          <h1 id="statistic-4" class="gold-text">12</h1>
          <h4>Pengajuan Kerjasama</h4>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center" style="padding:4% 0;">
    <h1 id="title-page"><strong>Berita Terbaru</strong></h1>
    <div class="row">
      <div class="col-md-4 news-card-gap">
        <div class=" news-card" data-aos="fade-up">
          <a>
              <div class="news-img" style="background-image: url(src/img_1.jpg)"></div>
              <div class="news-info">
                <h4>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet
                  inimicu ut qui dolor oratio mnesarchum</h4>
                <p class="news-date"> 18 Oktober 2019</p>
              </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 news-card-gap">
        <div class=" news-card" data-aos="fade-up">
          <a>
              <div class="news-img" style="background-image: url(src/img_1.jpg)"></div>
              <div class="news-info">
                <h4>Lorem ipsum dolor sit amet sit lemnesarchum</h4>
                <p class="news-date"> 18 Oktober 2019</p>
              </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 news-card-gap">
        <div class=" news-card" data-aos="fade-up">
          <a>
              <div class="news-img" style="background-image: url(src/img_1.jpg)"></div>
              <div class="news-info">
                <h4>Lorem ipsum dolor </h4>
                <p class="news-date"> 18 Oktober 2019</p>
              </div>
          </a>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-primary news-button vertical-margin">Lihat berita lainnya...</button>
  </div>
  @endsection