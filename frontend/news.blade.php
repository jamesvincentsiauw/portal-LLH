@extends('layouts.home_layout')

@section('content')
<h1 id="title-page" class="text-center">
            Laman Berita
          </h1>

          <div class="container">
            <div class="row">
              <div class="col">
                <div class="row" style="padding:2% 0;">
                  <div class="col">
                    <img src="src/img_1.jpg" style="width:300px; height:200px;">
                  </div>
                  <div class="col">
                      <h1>Berita Pertama</h1>
                  </div>
                </div>
                <div class="row" style="padding:2% 0;">
                  <div class="col">
                    <img src="src/img_1.jpg" style="width:300px; height:200px;">
                  </div>
                  <div class="col">
                      <h1>Berita Kedua</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <img src="src/img_1.jpg" style="width:300px; height:200px;">
                  </div>
                  <div class="col">
                      <h1>Berita Ketiga</h1>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="row" style="padding:2% 0;">
                  <div class="col">
                    <img src="src/img_1.jpg" style="width:300px; height:200px;">
                  </div>
                  <div class="col">
                      <h1>Berita Keempat</h1>
                  </div>
                </div>
                <div class="row" style="padding:2% 0;">
                  <div class="col">
                    <img src="src/img_1.jpg" style="width:300px; height:200px;">
                  </div>
                  <div class="col">
                      <h1>Berita Kelima</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <img src="src/img_1.jpg" style="width:300px; height:200px;">
                  </div>
                  <div class="col">
                      <h1>Berita Keenam</h1>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div style="height:40px;"></div>
          <nav aria-label="Page navigation example">
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
          <div style="height:40px;"></div>
  @endsection