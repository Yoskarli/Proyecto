<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo','project')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <header>
  {{-- Navbar --}}
@include ('layouts.navbar') 
</header>  
<main>
  <div class= "text-center bg-blue-100">
    <h1 class= "text-1g font-semibold m-4 uppercase">@yield('cabecera')</h1>

@yield('contenido')
</main>
<footer>
@include('layouts.footer')
</footer>
</body>
</html>