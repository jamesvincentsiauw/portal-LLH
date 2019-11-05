@extends('layout.home_layout')

@section('content')
<div class="base-content">
    <h1 id="title-page" class="text-center">
      Pelacakan SK
    </h1>

    <div id="track-search-bar">
      <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
      <div class="input-group track-search">
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Pencarian">
        <div class="input-group-append">
          <div class="input-group-text search-button" onclick="show_result()">
            <a class="fas fa-search"></a>
          </div>
        </div>
      </div>
    </div>

    <div id="track-result">
        <div id="track-result-id-info">
            <p id="track-result-number">Result for ID2286</p>
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th scope="row">Nama</th>
                  <td>Bambang</td>
                </tr>
                <tr>
                  <th scope="row">Tanggal Pengajuan</th>
                  <td>29 Januari 2019</td>
                </tr>
                <tr>
                  <th scope="row">Tanggal Selesai</th>
                  <td>-</td>
                </tr>
              </tbody>
            </table>
          </div>
      
        <div id="track-result-container">
      
          <ul class="progress-indicator">
            <li class="info">
              <span class="bubble"></span> Review Permohonan
            </li>
            <li class="info">
              <span class="bubble"></span> Paraf UKA/UKP
            </li>
      
            <li>
              <span class="bubble"></span> Rektorat
            </li>
            <li>
              <span class="bubble"></span> Permohonan Selesai
            </li>
          </ul>
      
        </div>
    </div>
 
  </div>
  
  <script>
    function show_result() {
      document.getElementById("track-result").setAttribute("style","display :block;");
      document.getElementById("track-search-bar").setAttribute("style","margin-bottom:10%");
    }
  </script>
  @endsection