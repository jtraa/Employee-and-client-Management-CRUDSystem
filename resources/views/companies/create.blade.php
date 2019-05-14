@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <br><br>
    <center><h1 class="title">Add Company</h1></center>
    <br><br>

    {!! Form::open(['action' => 'TablesController@store', 'method' => 'POST', 'enctype' =>  'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
            {{Form::file('logo')}}
    </div>
    <div class="form-group">
            {{Form::label('website', 'Website')}}
            {{Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'URL', 'autocomplete' => 'off'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'float:right;'])}}
    {!! Form::close() !!}
@endsection