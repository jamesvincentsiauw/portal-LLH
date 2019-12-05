@extends('layout.admin_layout')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Regulasi Terpublish</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nomor Regulasi</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Tanggal Rilis</th>
                                                <th scope="col" style="width:110px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($submissions as $item)
                                            <?php
                                                $i=1
                                            ?>
                                            <tr>
                                                <th scope="row">{{$i}}</th>
                                                <td style="width:40px">{{$item->id}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="{{$item->files}}" target="_blank" type="button"
                                                               class="btn btn-primary btn-sm">View</a>
                                                            <a href="{{$item->files}}" download="{{"File_".$item->title}}" type="button"
                                                               class="btn btn-primary btn-sm">Download</a>
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
                                        {{$submissions->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
  @endsection