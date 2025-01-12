<?php

use App\Http\Controllers\DienkeController;
use App\Http\Controllers\GiaDienController;
use App\Http\Controllers\HoadonController;
use App\Http\Controllers\KhachhangController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
     'verified'
     ])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    // Gia dien
    Route::prefix('giadien-hientai')->group(function () {
        Route::get('/', [GiaDienController::class, 'showlist'])->name('giadien');
    });

    //DS Khách hàng
    Route::prefix('khachhang')->group(function () {
        Route::get('/',[KhachhangController::class,'all_kh'])->name('khachhang');
        // Route::get('/',[KhachhangController::class,'add_khachhang'])->name('add_khachhang');
        Route::post('add',[KhachhangController::class,'store'])->name('store');
        Route::get('delete/{makh}',[KhachhangController::class,'delete'])->name('delete');
        Route::get('update/{makh}',[KhachhangController::class,'edit'])->name('update');
        Route::post('update/{makh}',[KhachhangController::class,'update']);
    });


    Route::prefix('no')->group(function () {
        Route::get('/',[KhachhangController::class,'all_kh_no'])->name('no');
        // Route::get('updatett/{mahd}',[KhachhangController::class,'edit_tt'])->name('update_tt');
        Route::get('/updatett',[KhachhangController::class,'updatett'])->name('updatett');
    });

    // Resource Controllers
    Route::resources([
        'giadiens' => GiaDienController::class,
        'dienkes' => DienkeController::class,
     ]);
    //Hóa đơn
    Route::prefix('hoadon')->group(function () {
        Route::get('/',[HoadonController::class,'all_hoadon'])->name('hoadon');
        // Route::get('/print_hoadon/{mahd}','HoadonController@print_hoadon');
        Route::get('/print_hoadon/{mahd}',[HoadonController::class,'print_hoadon'])->name('print_hoadon');
        // Route::get('danhsachdk',[HoadonController::class,'all_dk'])->name('hoadon');
        Route::post('/tinhtien',[HoadonController::class,'tinhtien'])->name('tinhtien');
    });
   // Route::resource('photos', PhotoController::class);
});
// route::get('/kh/delete/{id}', function($id){
//     echo "delete $id";
//     });
