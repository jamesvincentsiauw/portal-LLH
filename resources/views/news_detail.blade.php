@extends('layout.home_layout')

@section('content')
    <div class="container vertical-margin">
        <div class="text-center">
            <h1 id="title-page">
                {{$news->title}}
            </h1>
        </div>

        <div class="base-content">
            <p >By <strong class="blue-text">{{$news->author}}</strong> - Bandung, {{$news->created_at->format('d-M-Y')}}</p>
            <div class="text-center">
                <img src="{{asset($news->image)}}" style="width:100%">
            </div>
            <p class="news-info">
                {{$news->body}}
            </p>
        </div>
    </div>
@endsection