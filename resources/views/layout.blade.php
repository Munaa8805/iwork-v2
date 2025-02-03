<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    @vite("resources/css/app.css")
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{$title ?? 'I like a job'}}</title>
</head>
<body class="bg-gray-100 ">
    {{-- @include('partials.navbar') --}}
    <x-header />
    @if(request()->is('/'))

    <x-hero />
    <x-top-banner heading='Hello World'/>
    @endif
 
   <main class="container mx-auto p-4 m-4">
   
    {{-- @yield('content') --}}
    {{
        $slot
    }}
    
   </main>
    <x-footer />
    <script src="{{asset('script/script.js')}}"></script>
</body>
</html>