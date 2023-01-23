<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\EspecificacaoController;
use App\Http\Controllers\ConsultaController;
//use Date;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/teste', function () {
    $d = date("Y-m-d H:i:s");
    echo $d;
    echo "<br>".date('now')."<br>";
    $i = strtotime(date('now'));
    echo $i;
    $timestamp = strtotime($d);
    echo"<br>". $timestamp;
    $date = new DateTime();
    $h = $timestamp+30;
    $date->setTimestamp($h);
    echo "<br>". $date->format('Y-m-d H:i:s'); 
    $date->setTimestamp($i);
    echo "<br>".$date->format('Y-m-d H:i:s');
});

Route::resource('/agenda', 'App\Http\Controllers\AgendaController');
Route::resource('/especificacao', 'App\Http\Controllers\AgendaController');
Route::resource('/consulta', 'App\Http\Controllers\AgendaController');

// atendente
Route::middleware('atendente')->group(function () {
   
});
//usuario
Route::middleware('usuario')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/',[SistemController::class, 'indexUser']);
});
//medico
Route::middleware('medico')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// admin
Route::middleware('admin')->group(function () {
   Route::get('/teste/admin', function(){
        echo "sou admin";
   });
   Route::get('/dashboard', [SistemController::class, 'dashboardAdmin'])->name('dashboard');
});







require __DIR__.'/auth.php';
































/*
 Route::get('/atendente', function () {
    echo "Você é o atendente ";
})->middleware(['atendente', 'verified']);
Route::get('/user', function () {
    echo "Você é o usuario";
})->middleware(['usuario', 'verified']);
Route::get('/medico', function () {
    echo "Você é o medico";
})->middleware(['medico', 'verified']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 */