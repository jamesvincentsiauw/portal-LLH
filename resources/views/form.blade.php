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
                <input class="form-control" name="name" type="text" placeholder="cth: John Doe" required>
            </div>
            <label>Unit Kerja</label>
            <div class="form-reg">
                <input class="form-control" name="workUnit" type="text" placeholder="PPID ITB" required>
            </div>
            <label>Email ITB</label>
            <div class="form-reg">
                <input class="form-control" name="ITBmail" type="text" placeholder="cth: johndoe@itb.ac.id" required>
            </div>
            <label>Judul Pengajuan</label>
            <div class="form-reg">
                <input class="form-control" name="title" type="text" placeholder="cth: Surat Keputusan PMB" required>
            </div>
            <div class="form-group">
                <label>Jenis Pengajuan</label>
                <select name="type" class="form-control" id="sel1">
                    <option value="sk">Surat Keputusan</option>
                    <option value="peraturan">Peraturan</option>
                    <option value="kerjasama">Kerjasama</option>
                </select>
            </div>
            <div>
                <label>Upload File</label>
                <div class=" upload-section ">
{{--                <div id="display-file"></div>--}}
{{--                <div class="upload-button" onchange="file_name_display()">--}}
{{--                    <input id='pict' type="file" name="draft_files" required/>Browse--}}
{{--                </div>--}}
                    <input id='pict' type="file" name="draft_files" required/>
                </div>
            </div>
            <input type="submit" class="btn btn-primary submit-button vertical-margin">
        </div>
    </form>
@endsection