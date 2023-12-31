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
    </style>
</head>

<body class="vh-100 overflow-hidden">
    {{-- Navbar PSTI --}}
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" alt="Logo PSTI"></a>
        </div>
    </nav>
    <!-- Button trigger setting -->
    <button id="settingBtn" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#settings">
        <img id="iconsett" src="/assets/img/sett.png" alt="">
    </button>

    <!-- Modal Setting -->
    <div class="modal fade" id="settings" tabindex="-1" data-backdrop="false" aria-labelledby="settings"
        aria-hidden="true">
        <div class="modal-dialog">
            <img class="vector-1" src="/assets/img/vector-1.svg" alt="vector 1" />
            <!-- Exic Icon -->
            <img class="exit-icon" alt="" src="./public/exit-icon.svg" id="exitIcon" />

            <div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid-center">
                                <div class="image-container-center">
                                    <img src="/assets/img/MAP.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="row" style="justify-content: space-between">
                        <div class="col-md-6 text-right">
                            <div class="grid-center">
                                <div class="image-container-center">
                                    <img src="/assets/img/LIST.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="grid-center">
                                <div class="image-container-center">
                                    <img src="/assets/img/FAVORIT.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- Sidebar Informasi --}}
    <button id="informasi" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#informasiSide"
        aria-controls="offcanvasRight"><img id="infocon" src="/assets/img/infobtn.png" alt=""></button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="informasiSide" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>
    {{-- Foto 360 nya --}}
    <div id="panorama">
    </div>

    {{-- Script JS buat Foto 360 --}}
    {{-- <script>
        viewer = pannellum.viewer('panorama', {
            "panorama": "/assets/img/footage/gedung pancasila 2.jpg",
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
    </script> --}}
</body>

</html>
