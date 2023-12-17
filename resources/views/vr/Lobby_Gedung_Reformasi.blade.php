<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSTI VR Tour Campus</title>
    <link rel="stylesheet" href="{{ asset('TemplateVR/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('TemplateVR/css/bootstrap.min.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('assets/pannellum/pannellum.css') }}">
    <link rel="stylesheet" type="text/css" href="/assets/css/bar.css">

    <script src="{{ asset('TemplateVR/js/bootstrap.js') }}"></script>
    <script src="{{ asset('TemplateVR/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('assets/pannellum/pannellum.js') }}"></script>
    {{-- CSS for Navbars --}}
    <style>
        .navbar {
            background-color: #214478;
            position: absolute;
            top: 0;
            width: 1945px;
        }

        .navbar img {
            width: 70%;
            margin-left: 10%;
        }

        #settingBtn {
            position: absolute;
            top: 6rem;
            left: 1rem;
            z-index: 100;
        }

        .navs {
            height: 8rem;
        }

        #iconsett {
            height: 32px;
            width: 32px;
        }

        #panorama {
            filter: brightness(0.9);
        }

        #informasi {
            position: absolute;
            bottom: 4rem;
            right: 2rem;
            z-index: 100;
        }

        #infocon {
            height: 32px;
        }

        /* Bagian Modals */
        #setting_content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1378px;
            /* Set your desired width */
            height: 300px;
            /* Set your desired height */
            background-size: cover;
            background-position: center;
            background-color: #252525;
            opacity: 80% !important;
        }

        #setting_content2 {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1378px;
            /* Set your desired width */
            height: auto;
            /* Set your desired height */
            background-size: cover;
            background-position: center;
            background-color: #252525;
            opacity: 80% !important;
        }

        #setting_content3 {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1378px;
            /* Set your desired width */
            height: auto;
            /* Set your desired height */
            background-size: cover;
            background-position: center;
            background-color: #252525;
            opacity: 80% !important;
        }

        /* Bagian Modals - End */

        #list-white {
            height: 6rem;
            margin-bottom: 2rem;
        }

        #close_btn_sett {
            position: relative;
            left: 83rem;
            padding-top: 2rem;
            padding-right: -4rem;
        }

        #informasiSide {
            opacity: 80% !important;
            width: 650px;
            padding: 2rem 2rem;
        }

        .offcanvas-title {
            font-size: 36px;
            font-weight: bold;
        }

        #offcanvasRightLabel {
            text-align: center !important;
            align-items: center;
        }

        .canvas-para {
            font-size: 26px;
            text-align: justify;
        }

        .list-link {
            font-size: 24px;
            text-decoration: none !important;
            color: #ffffff
        }

        .list-link:hover {
            color: #C28B5B;
        }
    </style>
</head>

<body class="vh-100 overflow-hidden">
    {{-- Navbar PSTI --}}
    @include('Partials.topbar')
    <!-- Button trigger setting -->
    <button id="settingBtn" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#settings1">
        <img id="iconsett" src="/assets/img/sett.png" alt="">
    </button>
    {{-- Sidebar Modals --}}
    @include('Partials.sidebar')


    {{-- Sidebar Informasi --}}
    <button id="informasi" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#informasiSide"
        aria-controls="offcanvasRight"><img id="infocon" src="/assets/img/infobtn.png" alt=""></button>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="informasiSide"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Lobby Gedung Reformasi</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p class="canvas-para">Lobby ini merupakan pintu masuk dari gedung reformasi, yang dimana tempat tersebut
                biasanya digunakan mahasiswa untuk melakukan forum diskusi dan kerja kelompok.</p>
        </div>
    </div>
    {{-- Foto 360 nya --}}
    <div id="panorama">
    </div>

    {{-- Script JS buat Foto 360 --}}
    <script>
        viewer = pannellum.viewer('panorama', {
            "panorama": "/assets/img/footage/lobby gedung reformasi.jpg",
            "autoLoad": true,
            "showControls": false
        });

        // Make buttons work
        document.getElementById('pan-up').addEventListener('click', function(e) {
            viewer.setPitch(viewer.getPitch() + 10);
        });
        document.getElementById('pan-down').addEventListener('click', function(e) {
            viewer.setPitch(viewer.getPitch() - 10);
        });
        document.getElementById('pan-left').addEventListener('click', function(e) {
            viewer.setYaw(viewer.getYaw() - 10);
        });
        document.getElementById('pan-right').addEventListener('click', function(e) {
            viewer.setYaw(viewer.getYaw() + 10);
        });
        document.getElementById('zoom-in').addEventListener('click', function(e) {
            viewer.setHfov(viewer.getHfov() - 10);
        });
        document.getElementById('zoom-out').addEventListener('click', function(e) {
            viewer.setHfov(viewer.getHfov() + 10);
        });
        document.getElementById('fullscreen').addEventListener('click', function(e) {
            viewer.toggleFullscreen();
        });
    </script>
</body>

</html>
