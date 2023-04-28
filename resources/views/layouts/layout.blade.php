<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <title>Document</title>

    @livewireStyles

    <style>


  </style>

    {{-- </style> --}}


    
</head>
<body>

  <x-notifications />
 
        <x-notifications z-index="z-50" />
        <x-notifications position="top-left" />
        <x-notifications position="top-center" />
        <x-notifications position="top-right" />
        <x-notifications position="bottom-left" />
        <x-notifications position="bottom-center" />
        <x-notifications position="bottom-right" />
    <header>
        @livewire('nav-bar')
    </header>

    <main>

        @yield('content')

    </main>
    @livewireScripts
</body>
</html>