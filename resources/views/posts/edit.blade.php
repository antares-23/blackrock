@extends('layouts.app')
@section('content')
    <h1>Edit</h1>
    <form method="post" action="/posts/{{$posts->id}}">
        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="title" placeholder="titulo" value="{{$posts->title}}">
        <input type="submit" name="Edit">
        {{csrf_field()}}
    </form>

    <form method="post" action="/posts/{{$posts->id}}">
        <input type="hidden" name="_method" value="DELETE">
        {{csrf_field()}}
        <input type="submit" value="Ddelete">
    </form>
@endsection