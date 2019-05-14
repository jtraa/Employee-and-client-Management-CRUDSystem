    @extends('layouts.app')

    @section('content')
    <br><br>
    @if(auth::guest())
                <div class='jumbotron text-center'>
                <p class='title'> Welcome to the Admin Application </p>
                <p class='subtitle'> Admin login is at the right top of the screen</p>
                <p class ='text'> The purpose of this application is showing and/or managing company and employee lists</p>
                </div>
    @else
            <div class='jumbotron text-center'>
            <p class='title'> Welcome to the Admin Application </p>
            <p class='subtitle'> Above you can choose which list you want to see.</p>
            <p class ='text'> The purpose of this application is managing and/or showing relations and employees lists</p>
            </div>
    @endif
    @endsection
