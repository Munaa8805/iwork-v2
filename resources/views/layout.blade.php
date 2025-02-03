<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/css/app.css")
    <title>{{$title ?? 'I like a job'}}</title>
</head>
<body class="bg-gray-100 ">
    {{-- @include('partials.navbar') --}}
    <x-header />
   <main class="container mx-auto p-4 m-4">
   
    {{-- @yield('content') --}}
    {{
        $slot
    }}
    
   </main>
    <x-footer />
    {{-- @include('partials.footer') --}}
</body>
</html>