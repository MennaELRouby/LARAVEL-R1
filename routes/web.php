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
    return view('welcome');
});


Route::get('about', function(){
    return 'Welcome to about page';
});
Route::get('contactus', function(){
    return 'Welcome to contact us page';
});

Route::prefix('support')->group(function () {
    Route::get('/', function(){
        return 'Welcome to Support page';
    });
    Route::get('chat', function(){
        return 'Welcome to Chat page';
    });
    Route::get('call', function(){
        return 'Welcome to Call page';
    });
    Route::get('ticket', function(){
        return 'Welcome to Ticket page';
    });
});

Route::prefix('training')->group(function () {
    Route::get('/', function(){
        return 'Welcome to trainging page';
    });
    Route::get('hr', function(){
        return 'Welcome to HR page';
    });
    Route::get('ict', function(){
        return 'Welcome to ICT page';
    });
    Route::get('marketing', function(){
        return 'Welcome to Marketing page';
    });
    Route::get('logistics', function(){
        return 'Welcome to Logistics page';
    });
});