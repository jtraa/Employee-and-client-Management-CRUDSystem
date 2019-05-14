@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <br><br>
    <center><h1 class="title">Companies</h1></center>
    <br><br>

    @if(count($companies) > 0)
        @foreach($companies as $company)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                            <center><img style="width: 100%" src="/storage/logos/{{$company->logo}}"></center>
                    </div>
                    <div class="col-md-4 col-sm-4">
                            <center><h3><a href="/companies/{{$company->id}}">
                                {{$company->name}} 
                                {{$company->website}}
                             </h3></a>
                             <small> Added on {{$company->created_at}}</small>
                             </center>
                        </div>
                </div>
                
            </div>
            <br>
            {{$companies->links()}}
        @endforeach
        
    @else
        <center><p> No companies found</p></center>
    @endif
@endsection