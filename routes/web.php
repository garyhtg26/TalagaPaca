<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('components.about');
})->name('about');

Route::get('/atraksi-wisata', function () {
    return view('components.atraksi');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/jungle-tracking', function () {
    return view('components.atraksi.jungle-tracking');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/birdwatching', function () {
    return view('components.atraksi.birdwatching');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/gua', function () {
    return view('components.atraksi.goa');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/keliling-danau', function () {
    return view('components.atraksi.keliling-danau');
})->name('atraksi-wisata');

Route::get('/facility', function () {
    return view('components.facility');
})->name('facility');

Route::get('/product', function () {
    return view('components.product');
})->name('product');

Route::get('/product/pala', function () {
    return view('components.product.pala');
})->name('product');

Route::get('/product/kerajinan', function () {
    return view('components.product.kerajinan');
})->name('product');

Route::get('/event', function () {
    return view('components.eventNew');
})->name('event');

Route::get('/event/menembak', function () {
    return view('components.event.menembak');
})->name('event');

Route::get('/event/maraton', function () {
    return view('components.event.maraton');
})->name('event');

Route::get('/event/festival', function () {
    return view('components.event.festival');
})->name('event');

Route::get('/access', function () {
    return view('components.access');
})->name('access');

Route::get('/access/ternate', function () {
    return view('components.access.ternate');
})->name('access');

Route::get('/access/kao', function () {
    return view('components.access.kao');
})->name('access');


Route::get('/publikasi', function () {
    return view('components.publikasi');
})->name('publikasi');


Route::get('/comming-soon', function () {
    return view('components.commingsoon');
})->name('comming-soon');


Route::get('change/lang', [LocalizationController::class, 'lang_change'])->name('LangChange');
