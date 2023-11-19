<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\NewsController;


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

/********Task one*********/
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
/********2nd Session*********/
Route::fallback(fn() => redirect('/'));

Route::get('cv', function(){
    return view('Menna El Rouby CV');
});

Route::get('login', function(){
    return view('login');
});

Route::post('logged', function(){
    return 'Data received';
})->name('logged');

Route::get('test1', [ExampleController::class,'test1']);

/********2nd Task*********/
// Route::get('addcar', function(){
//     return view('addCar');
// });

Route::post('cardata', function(){
    return 'data received';
})->name('cardata');
// view add car form
Route::get('addCar', [ExampleController::class,'addCar']);

//get data and send to cars database
Route::get('car', [CarController::class,'store']);
//show data to other senddata webpage
Route::post('senddata', [ExampleController::class,'postData'])->name('senddata');

//view Add Carsform
Route::get('addcar', [CarController::class,'create']);

//send  Cars data in form to Cars database
Route::post('senddata', [CarController::class,'store'])->name('senddata');

/********4th Task*********/
//view Add News form
Route::get('addnews', [NewsController::class,'create']);

//send  News data in form to News database
Route::post('senddata', [NewsController::class,'store'])->name('senddata');
