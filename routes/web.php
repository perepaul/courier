<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('front.index');
});

Route::post('tracking', [ShipmentController::class,'tracking'])->name('shipment.tracking');
Route::post('cantact',[EmailController::class,'sendMail'])->name('send-mail');
// Route::get('tracking',[ShipmentController::class,'trackingPage'])->name('shipment.tracking.get');


Route::middleware('auth:sanctum')->group(function() {
    Route::get('logout',function(){
        // dd('here');
        \Illuminate\Support\Facades\Auth::guard('web')->logout();
        return redirect()->to('/');
    })->name('logout');
    Route::get('admin',function() {
        return view('admin.index');
    });
    Route::resource('shipment',ShipmentController::class);
    Route::post('shipment/{id}/update-status',[ShipmentController::class,'updateStatus'])->name('shipment.update-status');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
