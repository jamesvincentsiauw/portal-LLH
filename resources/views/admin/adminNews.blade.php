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
                        <h2 class="title-1 m-b-25">Daftar Berita Terpublikasi</h2>
                        <button class="btn btn-outline-primary" onclick="window.location.href='/admin/news/add'">Add News</button>
                        <br><br>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Judul Berita</th>
                                    <th class="text-center">Konten</th>
                                    <th class="text-center">Author</th>
                                    <th class="text-center">Gambar Pendukung</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($news as $item)
                                    <tr>
                                        <td>{{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</td>
                                        <td id="itemID">{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->body}}</td>
                                        <td>{{$item->author}}</td>
                                        <td>{{$item->image}}</td>
                                        <td>
                                            <div class="row" style="width:350px">
                                                <div class="col">
                                                    <form action="/admin/news/delete/{{$item->id}}" method="post" style="margin: 5px">
                                                        {{csrf_field()}}
                                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation example" style="margin:20px 0 50px">
                            <ul class="pagination justify-content-center">
                                {{$news->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection