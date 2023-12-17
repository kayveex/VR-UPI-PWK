    <!-- Modal Setting 1 -->
    <div class="modal fade" id="settings1" tabindex="-1" aria-labelledby="settings1" aria-hidden="true">
        <div class="modal-dialog">
            {{-- <img class="vector-1" src="/assets/img/vector-1.svg" alt="vector 1" /> --}}
            <!-- Exic Icon -->
            <div id="setting_content" class="modal-content">
                <button id="close_btn_sett" type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row align-items-center">
                            <div class="col ">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#settings2">
                                    <img class="navs" src="/assets/img/MAP.png">
                                </a>
                            </div>
                            <div class="col ">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#settings3">
                                    <img class="navs" src="/assets/img/LIST.png">
                                </a>
                            </div>
                            <div class="col ">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#settings4">
                                    <img class="navs" src="/assets/img/favorit_blue.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- Modal Setting 2 - Map UPI Purwakarta --}}
    <div class="modal fade" id="settings2" tabindex="-1" aria-labelledby="settings2" aria-hidden="true">
        <div class="modal-dialog">
            <div id="setting_content2" class="modal-content">
                <a id="close_btn_sett" href="/home" class="btn-close btn-close-white" aria-label="Close"></a>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col">
                                <img src="/assets/img/map_white.png" alt="">
                            </div>
                            <div class="col">
                                <img src="/assets/img/denah.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Modal Setting 3 - List Tempat  --}}
    <div class="modal fade" id="settings3" tabindex="-1" aria-labelledby="settings3" aria-hidden="true">
        <div class="modal-dialog">
            <div id="setting_content3" class="modal-content">
                <a id="close_btn_sett" href="/home" class="btn-close btn-close-white" aria-label="Close"></a>
                <div class="modal-body">
                    <div class="container text-center text-white">
                        <img id="list-white" src="/assets/img/list_white.png" alt="">
                        <div class="row align-items-start">
                            <div class="col text-start ">
                                <ul>
                                    <li><a class="list-link" href="/normaal-school">Normaal School</a></li>
                                    <li><a class="list-link" href="/lapangan-teater">Lapangan Teater Terbuka</a></li>
                                    <li><a class="list-link" href="/hexapark">Hexa Park</a></li>
                                    <li><a class="list-link" href="/masjid-alfurqon">Masjid Al-Furqon</a></li>
                                    <li><a class="list-link" href="/perpustakaan">Perpustakaan</a></li>
                                    <li><a class="list-link" href="/albar">Aula Barat</a></li>
                                    <li><a class="list-link" href="/pamdal">Pos Pamdal</a></li>
                                    <li><a class="list-link" href="/bem-upi-pwk">BEM UPI PWK</a></li>
                                    <li><a class="list-link" href="/pkm-upi-pwk">PKM UPI PWK</a></li>
                                    <li><a class="list-link" href="/rk-mkb">Ruang Perkualiahan MKB</a></li>
                                    <li><a class="list-link" href="/altim">Aula Timur</a></li>
                                    <li><a class="list-link" href="/gazebo">Gazebo</a></li>
                                    <li><a class="list-link" href="/labkom-psti">LABKOM PSTI</a></li>
                                </ul>
                            </div>
                            <div class="col text-start ">
                                <ul>
                                    <li><a class="list-link" href="/rk-psti">Ruang Perkuliahan PSTI</a></li>
                                    <li><a class="list-link" href="/gedung-reformasi">Gedung Reformasi</a></li>
                                    <li><a class="list-link" href="/lobby-reformasi">Lobby Gedung Reformasi</a></li>
                                    <li><a class="list-link" href="/home">Gedung Pancasila</a></li>
                                    <li><a class="list-link" href="/lobby-pancasila">Lobby Gedung Pancasila</a></li>
                                    <li><a class="list-link" href="/smartclass">Smart Classroom</a></li>
                                    <li><a class="list-link" href="/prodi-psti">Ruang Prodi PSTI</a></li>
                                    <li><a class="list-link" href="/ruang-admin">Ruang Administrasi UPI PWK</a></li>
                                    <li><a class="list-link" href="/ruang-dosen">Ruang Dosen</a></li>
                                    <li><a class="list-link" href="/ruang-microteaching">Ruang Microteaching</a></li>
                                    <li><a class="list-link" href="/lapbola">Lapangan Bola</a></li>
                                    <li><a class="list-link" href="/lapvolly">Lapangan Volly</a></li>
                                    <li><a class="list-link" href="/asrama">Asrama</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Modal Setting 3 - Tempat Favorit --}}
    <div class="modal fade" id="settings4" tabindex="-1" aria-labelledby="settings4" aria-hidden="true">
    <div class="modal-dialog">
        <div id="setting_content3" class="modal-content">
            <a id="close_btn_sett" href="/home" class="btn-close btn-close-white" aria-label="Close"></a>
            <div class="modal-body">
                <div class="container text-center text-white">
                    <img id="list-white" src="/assets/img/favorit.png" alt="">
                    <div class="row align-items-start">
                        <div class="container-left">
                            <img href="/home" src="/assets/img/Fav_GedungPancasila.png" alt="Image 1">
                            <img href="/lapangan-teater" src="/assets/img/Fav_LapanganTeaterTerbuka.png" alt="Image 2">
                        </div>
                        <div class="container-mid">
                            <img href="/masjid-alfurqon" src="/assets/img/Fav_Masjid.png" alt="Image 3">
                        </div>
                        <div class="container-right">
                            <img href="/normaal-school" src="/assets/img/Fav_NormaaSchool.png" alt="Image 4">
                            <img href="/smartclass" src="/assets/img/Fav_SmartClass.png" alt="Image 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <style>
    .container-left img,
    .container-right img,
    .container-mid img {
        max-width: 150px; 
        max-height: 550px;  
    }

    .container-left{
        margin-right:300px;
    }
    .margin-right{
        margin-left:300px;
    }
    </style>

