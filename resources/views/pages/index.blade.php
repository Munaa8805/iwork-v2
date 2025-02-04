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
    <h2 class='text-center text-3xl mb-4 font-bold border border-gray-200 p-4'>
        Welcome to the Home Page    

    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <li>No jobs found</li>
        @endforelse
    </div>
    <a href="{{route('jobs.index')}}" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
      <i class="fas fa-arrow-alt-circle-right"> </i> All jobs
    </a>

</x-layout>