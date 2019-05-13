@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <br><br>
    <center><h1 class="title">Companies</h1></center>
    <br><br>

    @if(count($companies) > 0)
        @foreach($companies as $company)
            <div class="well">
                <center><h3><a href="/companies/{{$company->id}}">
                   {{$company->name}} 
                   {{$company->website}}
                </h3></a>
                <small> Added on {{$company->created_at}}</small>
                </center>
            </div>
            <br>
        @endforeach
        {{$companies->links()}}
    @else
        <center><p> No companies found</p></center>
    @endif
@endsection