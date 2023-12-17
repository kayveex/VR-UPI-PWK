<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VirtualController extends Controller
{
    public function Home()
    {
        return view('home');
    }

    public function GedungPancasila()
    {
        return view('vr.Gedung_Pancasila');
    }
    public function NormaalSchool()
    {
        return view('vr.normaal_school');
    }

    public function LapanganTeaterTerbuka()
    {
        return view('vr.lapangan_teater_terbuka');
    }

    public function HexaPark()
    {
        return view('vr.hexa_park');
    }

    public function MasjidAlFurqon()
    {
        return view('vr.masjid_al-furqon');
    }

    public function Perpustakaan()
    {
        return view('vr.perpustakaan');
    }

    public function AulaBarat()
    {
        return view('vr.aula_barat');
    }

    public function PosPamdal()
    {
        return view('vr.pos_pamdal');
    }

    public function BEMUPIPWK()
    {
        return view('vr.BEM_UPI_PWK');
    }

    public function pkmUPIpwk()
    {
        return view('vr.pkm_UPI_pwk');
    }

    public function RuangPerkuliahanMKB()
    {
        return view('vr.ruang_perkuliahan_MKB');
    }

    public function AulaTimur()
    {
        return view('vr.aula_timur');
    }

    public function Gazebo()
    {
        return view('vr.gazebo');
    }

    public function LABKOMPSTI()
    {
        return view('vr.LABKOM_PSTI');
    }

    public function RuangPerkuliahanPSTI()
    {
        return view('vr.ruang_perkuliahan_psti');
    }

    public function GedungReformasi()
    {
        return view('vr.gedung_reformasi');
    }

    public function LobbyGedungReformasi()
    {
        return view('vr.lobby_gedung_reformasi');
    }

    public function LobbyGedungPancasila()
    {
        return view('vr.lobby_gedung_pancasila');
    }

    public function SmartClassroom()
    {
        return view('vr.smart_classroom');
    }

    public function RuangPRODIPSTI()
    {
        return view('vr.ruang_prodi_psti');
    }

    public function RuangDosen()
    {
        return view('vr.ruang_dosen');
    }

    public function LapanganBola()
    {
        return view('vr.lapangan_bola');
    }

    public function LapanganVolly()
    {
        return view('vr.lapangan_volly');
    }

    public function Asrama()
    {
        return view('vr.asrama');
    }

    public function RuangAdministrasiUPIPWK()
    {
        return view('vr.ruang_administrasi_upi_pwk');
    }

    public function RuangMicroteaching()
    {
        return view('vr.ruang_microteaching');
    }
}
