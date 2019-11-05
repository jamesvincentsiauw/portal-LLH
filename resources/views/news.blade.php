@extends('layout.home_layout')

@section('content')
<h1 id="title-page" class="text-center">
            Laman Berita
          </h1>

          <div class="container text-center" style="padding:4% 0;">
            <div class="row">
              <div class="col-md-4 news-card-gap">
                <div class=" news-card">
                  <a>
                      <div class="news-img" style="background-image: url({{asset('img/img_1.jpg')}})"></div>
                      <div class="news-info">
                        <h4>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet
                          inimicu ut qui dolor oratio mnesarchum</h4>
                        <p class="news-date"> 18 Oktober 2019</p>
                      </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 news-card-gap">
                <div class=" news-card">
                  <a>
                      <div class="news-img" style="background-image: url({{asset('img/img_1.jpg')}})"></div>
                      <div class="news-info">
                        <h4>Lorem ipsum dolor sit amet sit lemnesarchum</h4>
                        <p class="news-date"> 18 Oktober 2019</p>
                      </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 news-card-gap">
                <div class=" news-card">
                  <a>
                      <div class="news-img" style="background-image: url({{asset('img/img_1.jpg')}})"></div>
                      <div class="news-info">
                        <h4>Lorem ipsum dolor </h4>
                        <p class="news-date"> 18 Oktober 2019</p>
                      </div>
                  </a>
                </div>
              </div>

              <div class="col-md-4 news-card-gap">
                <div class=" news-card">
                  <a>
                      <div class="news-img" style="background-image: url({{asset('img/img_1.jpg')}})"></div>
                      <div class="news-info">
                        <h4>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet
                          inimicu ut qui dolor oratio mnesarchum</h4>
                        <p class="news-date"> 18 Oktober 2019</p>
                      </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 news-card-gap">
                <div class=" news-card">
                  <a>
                      <div class="news-img" style="background-image: url({{asset('img/img_1.jpg')}})"></div>
                      <div class="news-info">
                        <h4>Lorem ipsum dolor sit amet sit lemnesarchum</h4>
                        <p class="news-date"> 18 Oktober 2019</p>
                      </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 news-card-gap">
                <div class=" news-card">
                  <a>
                      <div class="news-img" style="background-image: url({{asset('img/img_1.jpg')}})"></div>
                      <div class="news-info">
                        <h4>Lorem ipsum dolor </h4>
                        <p class="news-date"> 18 Oktober 2019</p>
                      </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <nav class="vertical-margin" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
  @endsection