@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <br><center>
    <a href="/employees" class="btn btn-primary">Go Back</a>
    <br><br>
    <h1 class="title">{{$employees->name}} {{$employees->surname}}</h1>
    <br>
    <h1> Details: </h1>
    <br>
    <div>
        {{$employees->name}}
        {{$employees->surname}}<br>
        {{$employees->email}}<br>
        {{$employees->telephone}}<br>
    </div><br>
    

    <small> Added on {{$employees->created_at}}</small>
    <hr>
    <a href="/employees/{{$employees->id}}/edit" class="btn btn-default">Edit</a>
    @if(!Auth::guest()))
    {!!Form::open(['action' => ['EmployeesController@destroy', $employees->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger' ])}}
    {!!Form::close() !!}
    @endif
</center>
@endsection