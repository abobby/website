<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('site.home');
});

//About Section
Route::get('/about/about-us', function () {
    return view('site.about.about-us');
});
Route::get('/about/our-team', function () {
    return view('site.about.our-team');
});

//Services Section
Route::get('/services/web-development', function () {
    return view('site.home');
});
Route::get('/services/design-and-multimedia', function () {
    return view('site.home');
});
Route::get('/services/mobile-development', function () {
    return view('site.home');
});
Route::get('/services/dedicated-hiring', function () {
    return view('site.home');
});

//Resources Section
Route::get('/resources/video', function () {
    return view('site.home');
});
Route::get('/resources/news', function () {
    return view('site.home');
});
Route::get('/resources/client-testimonials', function () {
    return view('site.home');
});
Route::get('/resources/portfolio', function () {
    return view('site.home');
});

//Career Section
Route::get('/career/current-openings', function () {
    return view('site.career.current-openings');
});
Route::get('/career/life-at-askforweb', function () {
    return view('site.home');
});
Route::get('/career/employees-corner', function () {
    return view('site.home');
});

//Contact us
Route::get('/contact-us', function () {
    return view('site.contact.contact-us');
});