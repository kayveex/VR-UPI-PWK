<?php

use App\Http\Controllers\VirtualController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('vr.depan_gedung');
// });

Route::get('/', [VirtualController::class,'Home']);
Route::get('/home', [VirtualController::class,'GedungPancasila']);
Route::get('/normaal-school', [VirtualController::class,'NormaalSchool']);
Route::get('/lapangan-teater', [VirtualController::class,'LapanganTeaterTerbuka']);
Route::get('/hexapark', [VirtualController::class,'HexaPark']);
Route::get('/masjid-alfurqon', [VirtualController::class,'MasjidAlFurqon']);
Route::get('/perpustakaan', [VirtualController::class,'Perpustakaan']);
Route::get('/albar', [VirtualController::class,'AulaBarat']);
Route::get('/pamdal', [VirtualController::class,'PosPamdal']);
Route::get('/bem-upi-pwk', [VirtualController::class,'BEMUPIPWK']);
Route::get('/pkm-upi-pwk', [VirtualController::class,'pkmUPIpwk']);
Route::get('/rk-mkb', [VirtualController::class,'RuangPerkuliahanMKB']);
Route::get('/altim', [VirtualController::class,'AulaTimur']);
Route::get('/gazebo', [VirtualController::class,'Gazebo']);
Route::get('/labkom-psti', [VirtualController::class,'LABKOMPSTI']);

// Sisi Kanan
Route::get('/rk-psti', [VirtualController::class,'RuangPerkuliahanPSTI']);
Route::get('/gedung-reformasi', [VirtualController::class,'GedungReformasi']);
Route::get('/lobby-reformasi', [VirtualController::class,'LobbyGedungReformasi']);
Route::get('/lobby-pancasila', [VirtualController::class,'LobbyGedungPancasila']);
Route::get('/smartclass', [VirtualController::class,'SmartClassroom']);
Route::get('/prodi-psti', [VirtualController::class,'RuangPRODIPSTI']);
Route::get('/ruang-admin', [VirtualController::class,'RuangAdministrasiUPIPWK']);
Route::get('/ruang-dosen', [VirtualController::class,'RuangDosen']);
Route::get('/ruang-microteaching', [VirtualController::class,'RuangMicroteaching']);
Route::get('/lapbola', [VirtualController::class,'LapanganBola']);
Route::get('/lapvolly', [VirtualController::class,'LapanganVolly']);
Route::get('/asrama', [VirtualController::class,'Asrama']);