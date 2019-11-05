@extends('layout.home_layout')

@section('content')
<h1 id="title-page" class="text-center">
    Pengajuan Regulasi
  </h1>

  <div class="base-content" style="margin-top:50px;">

    <div class="form-reg">
      <label>Nama</label>
      <input class="form-control" type="text" placeholder="cth: John Doe" required>
    </div>
    <label>NIP</label>
    <div class="form-reg">
      <input class="form-control" type="text" placeholder="" required>
    </div>
    <label>Unit Kerja</label>
    <div class="form-reg">
      <input class="form-control" type="text" placeholder="" required>
    </div>
    <label>Nomor Telepon</label>
    <div class="form-reg">
      <input class="form-control" type="text" placeholder="cth: +628xxxxxxxxxx" required>
    </div>

    <div class="form-reg">
      <label>Email</label>
      <input class="form-control" type="text" placeholder="cth: john@doe.com" required>
    </div>

    
    <div class="form-group">
        <label>Jenis Pengajuan</label>
        <select class="form-control" id="sel1">
          <option value="sk">Surat Keputusan</option>
          <option value="peraturan">Peraturan</option>
          <option value="kerjasama">Kerjasama</option>
        </select>
      </div>

    <div>
      <label>Upload File</label>
      <div class=" upload-section ">
          <div id="display-file">

          </div>
          <div class="upload-button" onchange="file_name_display()">
              <input id='pict' type="file" name="myFile" accept="image/*" required/>
              Browse
          </div>
      </div>
  </div>
    <button type="button" class="btn btn-primary submit-button vertical-margin">Submit</button>
  </div>

@endsection