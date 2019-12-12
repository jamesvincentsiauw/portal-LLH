@extends('layout.home_layout')

@section('content')
    <h1 id="title-page" class="text-center">
        Pengajuan Regulasi
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
    <form action="/submission/add" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="base-content" style="margin-top:50px;">
            <div class="form-reg">
                <label>Nama</label>
                <input class="form-control" name="name" type="text" placeholder="cth: John Doe" value="{{old('name')}}" required>
            </div>
            <label>Unit Kerja</label>
            <div class="form-reg">
                <input class="form-control" name="workUnit" type="text" placeholder="PPID ITB" value="{{old('workunit')}}" required>
            </div>
            <label>Email ITB</label>
            <div class="form-reg">
                <input class="form-control" name="ITBmail" type="text" placeholder="cth: johndoe@itb.ac.id" value="{{old('ITBmail')}}" required>
            </div>
            <div class="form-group">
                <label>Jenis Pengajuan</label>
                <select name="type" class="form-control" id="sel1" value="{{old('type')}}">
                    <option value="sk">Surat Keputusan</option>
                    <option value="peraturan">Peraturan</option>
                    <option value="kerjasama">Kerja Sama</option>
                </select>
            </div>
            <div class="form-group">
                <label>Judul Keputusan/Peraturan/Kerja Sama</label>
                <input class="form-control" name="title" type="text" placeholder="cth: Surat Keputusan PMB" value="{{old('title')}}" required>
            </div>
            <div>
                <label>Upload File</label>
                <a style="font-size: 5px; color: red" class="font-weight-bold alert">PLEASE UPLOAD .ZIP FILES</a>
                <div class=" upload-section ">
                    <input id='pict' type="file" name="draft_files" accept="application/zip" value="{{old('draft_files')}}" required/>
                </div>
            </div>
            <input type="submit" class="btn btn-primary submit-button vertical-margin">
        </div>
    </form>
@endsection