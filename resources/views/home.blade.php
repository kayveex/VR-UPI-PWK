<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSTI VR Tour Campus</title>
    <link rel="stylesheet" href="{{ asset('TemplateVR/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('TemplateVR/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="{{ asset('TemplateVR/js/bootstrap.js') }}"></script>
    <script src="{{ asset('TemplateVR/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
</head>

<body class="vh-100 overflow-hidden">
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" alt="Logo PSTI"></a>
        </div>
    </nav>

    <main>
        <section class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center text-white fs-1">
            <h1 id="title-home">Welcome To <br> Virtual Campus Tour <br> UPI Purwakarta</h1>

            <button type="button" id="home-btn" class="btn btn-lg"><a href="/home"
                    class="text-white text-decoration-none">Start
                    Tour</a></button>
        </section>
    </main>
</body>

</html>
