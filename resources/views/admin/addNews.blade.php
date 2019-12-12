@extends('layout.admin_layout')
@section('title')
    <h1 id="title-page" class="text-center">
        Penyebaran Berita
    </h1>
@endsection
@section('content')
    <h1 id="title-page" class="text-center" style="color: transparent">
        Penyebaran Berita
    </h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block center-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('alert'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="card container justify-content-center">
        <form action="/admin/news/add" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="base-content" style="margin-top:50px;">
                <div class="form-group">
                    <label>Judul Berita</label>
                    <input class="form-control" name="title" type="text" required>
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <input class="form-control" name="body" type="text" required>
                </div>
                <div class="form-group">
                    <label>Penulis</label>
                    <input class="form-control" name="author" type="text" value="Admin Lembaga Layanan Hukum ITB" disabled>
                </div>
                <div class="form-group">
                    <label>Upload Gambar Pendukung</label>
                    <div class=" upload-section ">
                        <input class="form-control-file" id='pict' type="file" name="image" value="{{old('document')}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary submit-button vertical-margin">
                </div>
            </div>
        </form>
    </div>
@endsection