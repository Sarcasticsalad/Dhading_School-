<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body>
   <header class=""> 
    @include('layouts.nav')
   </header>

   <div class="mt-6 w-full sm:mt-7 md:mt-8 lg:mt-10 xl:mt-6 xl:h-screen xl:object-fill 2xl:mt-6">
    <img src="{{ asset('pictures/HS.jpg') }}">
   </div>

   <div class="mt-5 py-6">
    @include('layouts.schools')
   </div>

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
   <script src="{{ mix('/resources/js/hamburger.js') }}"></script>
</body>
</html>