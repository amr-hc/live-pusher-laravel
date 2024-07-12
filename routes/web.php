<?php

use App\Events\MyEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/send', function (){
    return view('live.send');
});

Route::post('send', function (Request $request){

    
    event(new MyEvent($request->message));

    return redirect()->back();
})->name('save.message');





Route::get('/receive', function (){
    return view('live.receive');
});
