@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <br><br>
    <center><h1 class="title">Employees</h1></center>
    <br><br>

    @if(count($employees) > 0)
        @foreach($employees as $employee)
            <div class="well">
                <center><h3> <a href="/employees/{{$employee->id}}">
                   {{$employee->name}} 
                   {{$employee->surname}}
                </h3></a>
                <small> Added on {{$employee->created_at}}</small>
                </center>
            </div><br>
        @endforeach
        <br>
        {{$employees->links()}}
    @else
        <center><p> No employees found</p></center>
    @endif
@endsection