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
            <p id="track-result-number"></p>
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th scope="row">Nama</th>
                  <td id="name"></td>
                </tr>
                <tr>
                  <th scope="row">Tanggal Pengajuan</th>
                  <td id="tanggalMulai"></td>
                </tr>
                <tr>
                  <th scope="row">Tanggal Selesai</th>
                  <td id="tanggalSelesai">-</td>
                </tr>
                <tr>
                    <th scope="row">Status Saat Ini</th>
                    <td id="status">-</td>
                </tr>
              </tbody>
            </table>
          </div>
      
        <div id="track-result-container">
        </div>
    </div>
 
  </div>
  
  <script>
    // function show_result() {
    //   document.getElementById("track-result").setAttribute("style","display :block;");
    //   document.getElementById("track-search-bar").setAttribute("style","margin-bottom:10%");
    // }
      function show_result() {
          document.getElementById("track-result").setAttribute("style","display :block;");
          document.getElementById("track-search-bar").setAttribute("style","margin-bottom:10%");
          var id = $('#inlineFormInputGroupUsername').val().trim();

          if (id!=null){
              fetchRecords(id);
          }
      }
      function fetchRecords(id) {
          $.ajax({
              url: 'SOPAWUASUUW82901SSL/submission/track/'+id,
              type: 'get',
              dataType: 'json',
              success: function (response) {
                  if (response['results']!=null){
                      $('#track-result-number').html('Result for '+response['results']['id']);
                      $('#name').html(response['results']['submitterName']);
                      $('#tanggalMulai').html(response['results']['created_at']);
                      $('#status').html(response['results']['status']);
                      if (response['results']['status'] === 'Reviewed'){
                          $('#track-result-container').html('<center><img src="{{asset('img/1.png')}}"></center>')
                      }
                      else if (response['results']['status'] === 'Paraf UKA/UKP'){
                          $('#track-result-container').html('<center><img src="{{asset('img/2.png')}}"></center>')
                      }
                      else if (response['results']['status'] === 'Rektorat'){
                          $('#track-result-container').html('<center><img src="{{asset('img/3.png')}}"></center>')
                      }
                      else if (response['results']['status'] === 'Accepted'){
                          $('#track-result-container').html('<center><img src="{{asset('img/4.png')}}"></center>')
                      }
                      else if (response['results']['status'] === 'Declined'){
                          $('#track-result-container').html('<center><h2><strong>Permohonan DITOLAK!</strong></h2></center>')
                      }
                  }
                  console.log(response);
              },
              error: function (response) {
                  alert(response);
                  console.log(response);
              }
          })
      }
  </script>
  @endsection