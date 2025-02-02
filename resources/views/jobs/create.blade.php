@extends('layout')

    
    @section('content')
    <h1>Create job</h1>
    <form  action="/jobs" ="POST">
     @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Create job</button>
    </form>
    @endsection