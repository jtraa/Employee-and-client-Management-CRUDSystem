    @extends('layouts.app')

    @section('content')
    <br><br>
       
            <div class='jumbotron text-center'>
            <p class='title'> Welcome to the Admin Application </p>
            <p class='subtitle'> You can log in or register by clicking the login button at the top of your screen.</p>
            <p class ='text'> The purpose of this application is managing relations and employees lists</p>
            <br>
            <p> <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a> </p>
            </div>
       
    @endsection
