@extends('layout.admin_layout')
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
    <div class="card container justify-content-center">
        <form action="/submission/accept/{{$submission->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="base-content" style="margin-top:50px;">
                <div class="form-group">
                    <label>ID Pengajuan</label>
                    <input class="form-control" name="submissionID" type="text" value="{{$submission->id}}" disabled>
                </div>
                <div class="form-group">
                    <label>Nama Pengaju</label>
                    <input class="form-control" name="submitterName" type="text" value="{{$submission->submitterName}}" disabled>
                </div>
                <div class="form-group">
                    <label>Email Pengaju</label>
                    <input class="form-control" name="ITBmail" type="text" value="{{$submission->submitterITBmail}}" disabled>
                </div>
                <div class="form-group">
                    <label>Judul Pengajuan</label>
                    <input class="form-control" name="title" type="text" value="{{$submission->title}}" disabled>
                </div>
                <div class="form-group">
                    <label>Upload File</label>
                    <div class=" upload-section ">
                        <input class="form-control-file" id='pict' type="file" name="document" value="{{old('document')}}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary submit-button vertical-margin">
                </div>
            </div>
        </form>
    </div>
@endsection