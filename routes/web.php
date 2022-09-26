<?php

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

//*route Home
Route::get('/', function () {
    $firstMessage = 'Hello Laravel!';
    $navLinks = [
                    [
                        'name' => 'About us',
                        'url' => 'about-us'
                    ],
                    [
                        'name' => 'Contacts',
                        'url' => 'contacts'
                    ],
                    [
                        'name' => 'Courses',
                        'url' => 'courses'
                    ],
    ];

    return view('home', [
        'message' => $firstMessage,
        'navLinks' => $navLinks
    ]);
})->name('home');

//*routes del programma

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('about-us');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');