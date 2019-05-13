@extends('layouts.app')

@section('content')
<br><br>
<center><h1 class="title">Edit Employee</h1></center>
<br><br>

{!! Form::open(['action' => ['EmployeesController@update', $employees->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', $employees->name, ['class' => 'form-control', 'placeholder' => 'Name', 'autocomplete' => 'off'])}}
</div>
<div class="form-group">
        {{Form::label('surname', 'Surname')}}
        {{Form::text('surname', $employees->surname, ['class' => 'form-control', 'placeholder' => 'Surname', 'autocomplete' => 'off'])}}
    </div>
<div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', $employees->email, ['class' => 'form-control', 'placeholder' => 'Email', 'autocomplete' => 'off'])}}
</div>
<div class="form-group">
        {{Form::label('telephone', 'Telephone')}}
        {{Form::text('logo', $employees->telephone, ['class' => 'form-control', 'placeholder' => 'Telephone', 'autocomplete' => 'off'])}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'float:right;'])}}
{!! Form::close() !!}

@endsection