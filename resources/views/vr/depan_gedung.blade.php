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

    <script src="{{ asset('TemplateVR/js/bootstrap.js') }}"></script>
    <script src="{{ asset('TemplateVR/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('assets/pannellum/pannellum.js') }}"></script>



    <style>
        #navbar {
            background-color: #000;
            /*whichever you want*/
            opacity: 0.5;
            filter: (opacity=50);
            z-index: 3;
        }

        #panorama {
            width: 100vw;
            height: 100vh;
            margin-left: -16.75rem;
        }
    </style>
</head>

<body class="vh-100 overflow-hidden">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div id="navbar" class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 transparent">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">HOME</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"><img src="/assets/img/logo.png" alt="logo">
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Map UPI
                                    PWK</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-white">
                                <i class="fs-4 bi-table"></i> <span
                                    class="ms-1 d-none d-sm-inline">Recommendations</span></a>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span
                                    class="ms-1 d-none d-sm-inline text-white">Informasi</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

            <div id="panorama">
            </div>

        </div>
    </div>

    <script>
        viewer = pannellum.viewer('panorama', {
            "panorama": "/assets/img/footage/lobby_gedunglt4.jpg",
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
