<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
     @yield('meta_description', '<meta name="description" content="Elevate your business with MIT Solution – your go-to for custom software, website development, and comprehensive IT services. Our expert team crafts tailored solutions to enhance your digital presence. Partner with us for a seamless blend of innovation and implementation, and take your digital experience to the next level. ">')
    @yield('meta_keywords')
    {{-- <title>{{ config('app.name') }}</title> --}}
    <title> @yield('title', 'MIT Solution') </title>
        
</head>
<body class="m-0 p-0" style=" margin:0px; padding:0px; min-height: 45vw; background-image: url('{{ asset('images/medias/new-banner.png') }}'); " cz-shortcut-listen="true">

    <header>
        @include('layouts.frontend-layout.nav')
    </header>
    <main class="m-0 p-0">
        @yield('content')
    </main>
        @include('layouts.frontend-layout.footer')
  

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
