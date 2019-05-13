@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<br>
<a href="/companies" class="btn btn-primary">Go Back</a>
    <br><br>
    <center><h1 class="title">{{$companies->name}}</h1>
    <br><br>

    <img src={{$companies->logo}}><br><br>

    <br><br>
    <div>
        {{$companies->name}}<br>
        {{$companies->website}}<br>
        {{$companies->email}}<br>
        {{$companies->telephone}}<br>
    </div><br>
    

    <small> Added on {{$companies->created_at}}</small>
    <hr>
    
    @if(!Auth::guest()))
    <a href="/companies/{{$companies->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['TablesController@destroy', $companies->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger' ])}}
    {!!Form::close() !!}
    @endif
</center>
@endsection