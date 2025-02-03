{{-- @extends('layout')
@section('title')
    Home
    @endsection
    
    
    @section('content')
    <h1>Welcome to the Home Page</h1>
    @endsection --}}




<x-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <h1 class="text-4xl font-bold underline">
        Hello world!
      </h1>

</x-layout>