<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\AdminControllers\BalitasController;
use App\Http\Controllers\AdminControllers\BumilsController;
use App\Http\Controllers\AdminControllers\KadersController;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use GuzzleHttp\Middleware;

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

Route::get('/', [Home::class, 'index']);


Route::group(['middleware' => ['auth']], function () {
    //menampilkan dashboard
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
        ->name('dashboard');
});


//// ----> ROUTER BALITA <---- ////
Route::group(['middleware' => ['auth']], function () {
    //menampilkan balita view
    Route::get('/balita', 'App\Http\Controllers\AdminControllers\BalitasController@index')
        ->name('balita');

    //menghapus data balita
    Route::delete('/delete-balita/{id}', 'App\Http\Controllers\AdminControllers\BalitasController@destroy')
        ->name('delete-balita');

    //menampilkan tambah data balita
    Route::get('/tambah-data-balita', [BalitasController::class, 'create'])
        ->name('addBalitas');
    Route::post('/tambah-data-balita', [BalitasController::class, 'store'])
        ->name('addBalitas');

    //update data balita
    Route::get('/update-data-balita/{id}', [BalitasController::class, 'formUpdateBalita'])
        ->name('update-data-balita');

    Route::put('/update-data-balita/{id}', [BalitasController::class, 'update'])
        ->name('update-data-balita');
});


//// ----> ROUTER IBU HAMIL <---- ////
Route::group(['middleware' => ['auth']], function () {
    //menampilkan ibu hamil view
    Route::get('/ibu-hamil', 'App\Http\Controllers\AdminControllers\BumilsController@index')
        ->name('ibuHamil');

    //menghapus data ibu hamil
     Route::delete('/delete-bumil/{id}', 'App\Http\Controllers\AdminControllers\BumilsController@destroy')
        ->name('delete-bumil');

    //menampilkan tambah data ibu hamil
    Route::get('/tambah-data-bumil', [BumilsController::class, 'create'])
        ->name('addBumils');
    Route::post('/tambah-data-bumil', [BumilsController::class, 'store'])
        ->name('addBumils');

    //update data bumil
    Route::get('/update-data-bumil/{id}', [BumilsController::class, 'formUpdateBumil'])
        ->name('update-data-bumil');

    Route::put('/update-data-bumil/{id}', [BumilsController::class, 'update'])
        ->name('update-data-bumil');
});


//// ----> ROUTER KADER <----R ////
Route::group(['middleware' => ['auth']], function () {
    //menampilkan kader view
    Route::get('/petugas-posyandu', 'App\Http\Controllers\AdminControllers\KadersController@index')
            ->name('kader');

    //menghapus data kader
    Route::delete('/delete-kader/{id}', 'App\Http\Controllers\AdminControllers\KadersController@destroy')
        ->name('delete-kader');

    //menampilkan tambah data kader
    Route::get('/tambah-data-kader', [KadersController::class, 'create'])->name('addKaders');
    Route::post('/tambah-data-kader', [KadersController::class, 'store'])->name('addKaders');

    //update data kader
    Route::get('/update-data-kader/{id}', [KadersController::class, 'formUpdateKader'])
        ->name('update-data-kader');

    Route::put('/update-data-kader/{id}', [KadersController::class, 'update'])
        ->name('update-data-kader');

});


Route::get('user-show-data/{id}', function () {
    return view('user.userShowData');
})->name('userShowData');

//go to view statistikPosyandu
Route::get('statistik-posyandu', function () {
    return view('admin.statistikPosyandu');
})->middleware(['auth'])->name('statistikPosyandu');

//go to view event
Route::get('event', function () {
    return view('admin.event');
})->middleware(['auth'])->name('event');








require __DIR__ . '/auth.php';
