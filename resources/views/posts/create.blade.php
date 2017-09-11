@extends('layouts.app)
@section('content')

    <form method="post" action="/post">
        <input type="text" name="title" placeholder="titulo">
        <input type="submit" name="submit">
    </form>

@yield('footer')