@extends('layout.admin_layout')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Pengajuan Permohonan Terbaru</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Tipe Regulasi</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Judul Pengajuan</th>
                                                <th class="text-center">Unit Kerja</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Status Sekarang</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        @foreach($submissions as $item)
                                            @if($item->status != 'Accepted')
                                                <tr>
                                                    <td>{{$item->created_at}}</td>
                                                    <td id="itemID">{{$item->id}}</td>
                                                    <td>{{$item->type}}</td>
                                                    <td>{{$item->submitterName}}</td>
                                                    <td>{{$item->title}}</td>
                                                    <td>{{$item->submitterWorkUnit}}</td>
                                                    <td>{{$item->submitterITBmail}}</td>
                                                    <td>
                                                        <form action="/submission/change/{{$item->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <select name="status" onchange="this.form.submit()">
                                                                <option value="{{$item->status}}">{{$item->status}}</option>
                                                                @if($item->status == 'Reviewed')
                                                                    <option value="Paraf UKA/UKP">Paraf UKA/UKP</option>
                                                                    <option value="Rektorat">Rektorat</option>
                                                                @elseif($item->status == 'Paraf UKA/UKP')
                                                                    <option value="Reviewed">Reviewed</option>
                                                                    <option value="Rektorat">Rektorat</option>
                                                                @elseif($item->status == 'Rektorat')
                                                                    <option value="Reviewed">Reviewed</option>
                                                                    <option value="Paraf UKA/UKP">Paraf UKA/UKP</option>
                                                                @endif
                                                            </select>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <div class="row" style="width:350px">
                                                            <div class="col">
                                                                <a href="{{$item->draft_files}}" target="_blank" type="button"
                                                                   class="btn btn-primary btn-sm">View</a>
                                                                <a href="{{$item->draft_files}}" download="{{"draft_file_".$item->submitterName}}" type="button"
                                                                   class="btn btn-primary btn-sm">Download</a>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" onclick="window.location.href='/submission/accept/{{$item->id}}'"
                                                                        class="btn btn-success btn-sm">Accept</button>
                                                                <form action="/submission/decline/{{$item->id}}" method="post" style="margin: 5px">
                                                                    {{csrf_field()}}
                                                                    <input type="submit" class="btn btn-danger btn-sm" value="Decline">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example" style="margin:20px 0 50px">
                                    <ul class="pagination justify-content-center">
                                        {{$submissions->links()}}
                                    </ul>
                                </nav>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection