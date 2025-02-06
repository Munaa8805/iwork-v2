{{-- @php
    $currentPage = request()->routeIs('jobs.*') ? 'jobs' : 'home';
    $currentRoute = request()->routeIs('jobs.*') ? 'jobs' : 'home';
@endphp --}}

<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a  href="{{url('/')}}">iWork</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/" :active="request()->is('/')" icon='home' >Home</x-nav-link>
        
            <x-nav-link url="/jobs" :active="request()->is('jobs')">All Jobs</x-nav-link>
            <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')">Saved Jobs</x-nav-link>
            <x-nav-link url="/login" :active="request()->is('login')" icon='user'>Login</x-nav-link>
           
            <x-nav-link url="/register" :active="request()->is('register')">Register</x-nav-link>
            <a
                href="{{url('/dashboard')}}"
               class="text-white py-2 {{request()->is('dashboard') ? 'border-b-2 border-yellow-500 text-yellow-500 font-bold' : ''}}"
            >
                <i class="fa fa-gauge mr-1"></i> Dashboard
            </a>
            <x-buttonlink url='/jobs/create' icon='edit'>Create Job
            </x-buttonlink>
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav x-show="open" id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-nav-link>
      
        <x-nav-link url="/bookmarks" :active="request()->is('bookmarks')" :mobile="true">Saved Jobs</x-nav-link>
        <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true">Dashbaord</x-nav-link>
        {{-- <x-logout-link/> --}}
        <div class="pt-2"></div>
        <x-buttonlink url='/jobs/create' icon='edit' :block="true">Create Job
        </x-buttonlink>
    
        <x-nav-link url="/login" :active="request()->is('login')" :mobile="true">Login</x-nav-link>
        <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">Register</x-nav-link>
    </nav>
</header>