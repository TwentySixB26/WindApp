<!DOCTYPE html >
<html lang="en" class="h-full  scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $head }}</title>
    @vite('resources/css/app.css')

    <link rel="icon" type="image/png" sizes="32x32" href="/img/logo.png">

    {{-- font inter   --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    {{-- font css  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bree+Serif&family=Carter+One&family=Lilita+One&family=Permanent+Marker&family=Protest+Strike&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- alpine js  --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    {{-- my css  --}}
    <link rel="stylesheet" href="css/styleLogin.css">

    {{-- logo svg --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    {{-- logo --}}
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    {{-- animation --}}
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

</head>
<body class="h-full overflow-x-hidden max-w-[100vw] ">
    @yield('content')
</body>

<script src="/js/auth.js"></script>

</html>
