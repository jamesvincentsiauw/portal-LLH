@extends('layouts.home_layout')

@section('content')
<h1 id="title-page" class="text-center">
    Pengajuan Regulasi
  </h1>

  <div class="base-content" style="margin-top:50px;">

    <div class="form-reg">
      <label>Nama</label>
      <input class="form-control" type="text" placeholder="cth: John Doe">
    </div>
    <label>NIP</label>
    <div class="form-reg">
      <input class="form-control" type="text" placeholder="">
    </div>
    <label>Unit Kerja</label>
    <div class="form-reg">
      <input class="form-control" type="text" placeholder="">
    </div>
    <label>Nomor Telepon</label>
    <div class="form-reg">
      <input class="form-control" type="text" placeholder="cth: +628xxxxxxxxxx">
    </div>

    <div class="form-reg">
      <label>Email</label>
      <input class="form-control" type="text" placeholder="cth: john@doe.com">
    </div>

    
    <div class="form-group">
        <label>Jenis Pengajuan</label>
        <select class="form-control" id="sel1">
          <option>Surat Keputusan</option>
          <option>Peraturan</option>
          <option>Kerjasama</option>
        </select>
      </div>

    <div>
      <label>Upload File</label>
      <div class=" upload-section ">
          <div id="display-file">

          </div>
          <div class="upload-button" onchange="file_name_display()">
              <input id='pict' type="file" name="myFile" accept="image/*" />
              Browse
          </div>
      </div>
  </div>
    <button type="button" class="btn btn-primary submit-button vertical-margin">Submit</button>
  </div>

  @endsection