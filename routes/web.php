<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlaceController;

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
//Route::fallback(fn() => redirect('/'));

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
/*// view add car form old version*********
Route::get('addCar', [ExampleController::class,'addCar']);
//show data to other senddata webpage
Route::post('car', [ExampleController::class,'postData'])->name('cardata');
******/

/******static entry to send  Cars data from car form to Car database***************/
//view Add Carsform
Route::get('addcar', [CarController::class,'create']);
//static entry to send  Cars data from car form to Car database
Route::post('car', [CarController::class,'store'])->name('car');


//Dynamic entry of car data from car form to car database
// Route::controller(CarController::class)->group(function(){
//     Route::get('addcar','create');
//     Route::post('car','store')->name('car');
// });

/********4th Task*********/
//view Add News form
Route::get('addnews', [NewsController::class,'create']);

//send  News data in form to News database
Route::post('senddata', [NewsController::class,'store'])->name('senddata');

/**********5th session *************/
//show car list from db to cars webpage table
Route::get('cars', [CarController::class,'index'])->name('cars');

// display id value for car row in edit page url
Route::get('/editCars/{id}', [CarController::class,'edit']);

// put data from db to edit car element form
Route::put('/updateCars/{id}', [CarController::class,'update'])->name('updatecar');

/***********5th Task************* */
//show car list from db to cars webpage table
Route::get('news', [NewsController::class,'index']);

// display id value for car row in edit page url
Route::get('/editNews/{id}', [NewsController::class,'edit']);

// put data from db to edit car element form
Route::put('/updateNews/{id}', [NewsController::class,'update'])->name('updatenews');

/********6th sesstion ***************** */
Route::get('/showCar/{id}', [CarController::class,'show']);

Route::put('/detailsCar/{id}', [CarController::class,'update'])->name('detailscar');

Route::get('/deleteCar/{id}', [CarController::class,'destroy']);

/********6th Task ***************** */
Route::get('/showNews/{id}', [NewsController::class,'show']);

Route::put('/detailsnews/{id}', [NewsController::class,'update'])->name('detailsnews');

Route::get('/deleteNews/{id}', [NewsController::class,'destroy']);

/********7th session ***************** */
Route::get('trashedcar', [CarController::class,'trashed']);
Route::get('restoreCar/{id}', [CarController::class,'restore']);
Route::get('deleteCar/{id}', [CarController::class,'delete']);

/********7th task ***************** */
Route::get('trashednews', [NewsController::class,'trashed']);
Route::get('restorenews/{id}', [NewsController::class,'restore']);
Route::get('deletenews/{id}', [NewsController::class,'delete']);


/********8th task ***************** */

Route::get('showUpload',[ExampleController::class, 'showUpload']);

Route::post('upload',[ExampleController::class, 'upload'])->name('upload');

/***********9th session**************** */
Route::get('place',[ExampleController::class, 'place']);
Route::get('blog',[ExampleController::class, 'blog']);
Route::get('blog1',[ExampleController::class, 'blog1']);

/**************9th task ********************** */
Route::get('addplace', [PlaceController::class,'create']);
Route::post('place', [PlaceController::class,'store'])->name('place');

/***************10th task************************* */
Route::get('placestable', [PlaceController::class,'index']);
Route::get('/deletePlace/{id}', [PlaceController::class,'destroy']);
