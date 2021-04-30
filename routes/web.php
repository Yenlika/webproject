<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ForContact;

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


Route::get('contact/{lang}',function ($lang){
 App()->setLocale($lang);
 session()->put('locale',$lang);
 return view('order.contact');
})->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('mycontact');
Route::get('mail/send',[MailController::class,'send'])->name('mail');
Route::get('store/{lang}', [LocalController::class, 'index'])->name('store');

