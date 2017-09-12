@extends('layouts.app')
@section('content')
    <h1>Create</h1>


    {!! Form::open(['method' =>'POST', 'action'=>'PostController@store']) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('create Post!',['class'=>'btn btn-primary']) !!}

    </div>

        <!--input type="text" name="title" placeholder="titulo"-->
        <!--input type="submit" name="submit"-->
        {{csrf_field()}}
    {!! Form::close() !!}

@endsection