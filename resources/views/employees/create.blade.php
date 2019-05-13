@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <br><br>
    <center><h1 class="title">Add Employee</h1></center>
    <br><br>

    {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
            {{Form::label('surname', 'Surname')}}
            {{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Surname', 'autocomplete' => 'off'])}}
        </div>
    <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
            {{Form::label('telephone', 'Telephone')}}
            {{Form::text('logo', '', ['class' => 'form-control', 'placeholder' => 'Telephone', 'autocomplete' => 'off'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'float:right;'])}}
    {!! Form::close() !!}

@endsection