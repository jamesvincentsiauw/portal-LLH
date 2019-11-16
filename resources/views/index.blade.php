@extends('layout.home_layout')

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
              rgba(0,0,0,.65)),url('{{asset('img/annex.jfif')}}');">
                    <img id="logo" src="{{asset('img/logo-itb-1024px.png')}}">
                    <p id="home-title">
                        Lembaga Layanan Hukum
                        Institut Teknologi Bandung
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-bg" style="background-image: linear-gradient(
              rgba(0,0,20,.55),
              rgba(0,0,0,.65)),url('{{asset('img/image.jpg')}}');">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-bg" style="background-image: linear-gradient(
              rgba(0,0,20,.55),
              rgba(0,0,0,.65)),url('{{asset('img/image.jpg')}}');">
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
                <a href="/forms">
                    <div class="text-center">
                        <img class="main-feature-img" src="{{asset('img/search.jpg')}}" alt="Image">
                    </div>
                    <div class="text-center">
                        <h2><strong>Pengajuan</strong></h2>
                        <h5>Fitur untuk pengajuan dokumen</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm align-self-center home-main-feature has-text-centered" data-aos="fade-up">
                <a href="/tracks">
                    <div class="text-center">
                        <img class="main-feature-img" src="{{asset('img/search.jpg')}}" alt="Image">
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
                    <h1 id="statistic-1" class="gold-text">{{$sk}}</h1>
                    <h4>Pengajuan SK</h4>
                </div>
                <div class="col text-center">
                    <h1 id="statistic-2" class="gold-text">{{$skpub}}</h1>
                    <h4>SK Terbit</h4>
                </div>
                <div class="col text-center">
                    <h1 id="statistic-3" class="gold-text">{{$peraturan}}</h1>
                    <h4>Pengajuan Peraturan</h4>
                </div>
                <div class="col text-center">
                    <h1 id="statistic-4" class="gold-text">{{$kerjasama}}</h1>
                    <h4>Pengajuan Kerjasama</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center" style="padding:4% 0;">
        <h1 id="title-page"><strong>Berita Terbaru</strong></h1>
        <div class="row">
            @foreach($news as $item)
            <div class="col-md-4 news-card-gap">
                <div class=" news-card" data-aos="fade-up">
                    <a>
                        <div class="news-img" style="background-image: url({{asset('img/img_1.jpg')}})"></div>
                        <div class="news-info">
                            <h4>{{$item->title}}</h4>
                            <p class="news-date"> {{$item->created_at}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <button type="button" onclick="window.location.href = '/news';" class="btn btn-primary news-button vertical-margin">Lihat berita lainnya...</button>
    </div>
@endsection