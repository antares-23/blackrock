@extends('layouts.app')

@section('content')

<ul>
    @foreach($posts as $post)
        <ul>
            <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
            <a href="{{route('posts.edit',$post->id)}}" >  --Editar</a>
        </ul>
    @endforeach
</ul>


@endsection