@extends('layouts.standard')

@section('title'){{$news->title}}@endsection

@section('content')
    <h1>Жаңалық</h1>
    <div class="alert alert-info" style="margin-left: 10%; width: 500px;">
        <h3>{{ $news->title}}</h3>
        <p>{{ $news->author_name }}</p>
        <p><small>{{ $news->created_at}}</small></p>
        <img src="{{$news->image_url}}" alt="image text">
        <p name="message" id="message"  class="form-control">
            {{ $news->text }}
        </p>
        <a href="{{route('update-news-page', $news->id)}}"><button class="btn btn-primary">жаңарту</button></a>
        <a href=""><button class="btn btn-danger">жою</button></a>

    </div>
@endsection
