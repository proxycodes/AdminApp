<?php

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

Route::get('/', function () {
    return view('aa-home');
});


Route::get("/contact", function () {
    return redirect("about"); // contact page should redirect to about as well
});


Route::get('/about', function () {
    return view('about');
});

//Route::view('contact', '/contact');  //the shortcut also works like above about page.
