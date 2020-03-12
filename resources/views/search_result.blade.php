@extends('layout.home_layout')

@section('content')
<h1 id="title-page" class="text-center">
    Hasil Pencarian
  </h1>

  <div class="container section">
{{--    <form action="">--}}
{{--      <div class="input-group">--}}
{{--        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Pencarian">--}}
{{--        <div class="input-group-append">--}}
{{--          <a class="fas fa-search"></a>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </form>--}}
    <form action="/search">
      <div class="input-group">
        <input type="text" name="keyword" class="form-control" id="inlineFormInputGroupUsername" placeholder="Pencarian" required>
        <div class="input-group-append" style="background: white">
          <button id="button-addon1" class="btn btn-link text-primary"><i
                    class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
  <div id="search-result" class="container table-responsive">
    <h2 class="justify-content-center"><strong class="text-danger">{{$documents->count()}}</strong> results were found</h2>
    <table class="table table-striped text-center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nomor SK</th>
          <th scope="col">Judul</th>
          <th scope="col" style="width:200px">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1 ?>
        @foreach($documents as $item)
          <tr>
            <th scope="row">{{$i}}</th>
            <td style="width:40px">{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>
              <div class="row">
                <div class="col">
                  <a href="{{$item->files}}" target="_blank" type="button"
                     class="btn btn-primary btn-sm">View</a>
                  <a href="{{$item->files}}" download="{{"FILE_".$item->title}}" type="button"
                     class="btn btn-primary btn-sm">Download</a>
                </div>
              </div>
            </td>
          </tr>
          <?php $i++ ?>
        @endforeach
      </tbody>
    </table>

    <div style="height:40px;"></div>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  

  <!-- Modal -->
{{--  <div class="modal fade" id="myModal" role="dialog" style="overflow: hidden;">--}}

{{--      <!-- Modal content-->--}}
{{--      <object data="https://pdfobject.com/pdf/sample-3pp.pdf#page=2" type="application/not-a-pee-dee-eff-type" width="100%" height="100%" style="padding: 0px; display: inline-block;">--}}
{{--        <iframe src="chrome-extension://oemmndcbldboiebfnladdacbdfmadadm/content/web/viewer.html?file=https%3A%2F%2Fpdfobject.com%2Fpdf%2Fsample-3pp.pdf#page=2" style="background: none; border: none; box-shadow: none; float: none; display: block; height: 100%; margin: 0px; max-height: none; max-width: none; position: static; transform: none; visibility: visible; width: 100%;"></iframe>--}}
{{--      </object>--}}

{{--  </div>--}}
  @endsection
  