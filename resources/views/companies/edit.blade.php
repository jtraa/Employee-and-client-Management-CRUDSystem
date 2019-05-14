@extends('layouts.app')
@section('content')
    <br><br>
    <center><h1 class="title">Edit Company</h1></center>
    <br><br>

    {!! Form::open(['action' => ['TablesController@update', $companies->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $companies->name, ['class' => 'form-control', 'placeholder' => 'Name', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $companies->email, ['class' => 'form-control', 'placeholder' => 'Email', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
            {{Form::file('logo')}}
    </div>
    <div class="form-group">
            {{Form::label('website', 'Website')}}
            {{Form::text('website', $companies->website, ['class' => 'form-control', 'placeholder' => 'URL', 'autocomplete' => 'off'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'float:right;'])}}
    {!! Form::close() !!}
@endsection