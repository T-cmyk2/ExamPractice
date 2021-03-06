<!DOCTYPE html>
@extends('layouts.nonpersonal')
 
@section('title', 'Home')

@section('content')

    <div class="container mt-4 py-4 mx-auto">
        <h3 class="display-5 ">Online Education, Simplified.</h3>
        <p class="lead">GibJohn Tutoring provides a fun, user-friendly approach to education.<br>
        Our services allow students and teachers to exchange feedback on set tasks and challenges, and even allows students to compete for the top spot in their teaching group!    
    </p>
    </div>
    <hr>

    <div class="container mt-4 py-4 d-flex justify-content-center flex-column">
        <div class="homeListItem">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
            </svg>
            <h4 class="display-6 ms-4">A productive, easy to use online learning platform.</h4>
        </div>
        <hr>
        <div class="homeListItem mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
            </svg>
            <h4 class="display-6 ms-4">Free to use for teachers and students.</h4>
        </div>
        <hr>
        <div class="homeListItem mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
                <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
            </svg>
            <h4 class="display-6 ms-4">Designed with accessibility in mind.</h4>
        </div>
        <hr>
    </div>


    <div class="container my-3 py-4 border rounded-pill mx-auto">
        <h3 class="display-6 ">Create An Account.</h3>
        <p class="lead">Some text to convince the viewer</p>
        <button class="btn btn-outline-info" data-redir-loc="login.php?sign=1">Sign Up</button>
    </div>

    <div style="height: 5vh;"></div>
    
@stop