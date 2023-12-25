<?php

use App\Http\Controllers\addUser;
use Illuminate\Support\Facades\Route;
 use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CardPaginationController;
use App\Http\Controllers\testController;
use App\Http\Controllers\HomeController; 

use App\Http\Controllers\EvenementController; 


Route::get('/', function () {
    return view('welcome');
});
Route::view('/home','welcome');
Route::view('/session','session');

Route::get('/formulaire', function () {
    return view('formulaire');
});
 Route::get('/formulaire', [FormController::class, 'showForm']);
Route::post('/submit-form', [FormController::class, 'submitForm']);
Route::post('formulaire', 'FormController@submitForm')->name('formulaire');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class,
// 'index'])->name('home');
// Route::get('admin/home', [App\Http\Controllers\HomeController::class,
// 'adminHome'])->name('admin.home')->middleware('is_admin');
// Route::get('creator/home', [App\Http\Controllers\HomeController::class,
// 'creatorHome'])->name('creator.home')->middleware('is_admin');


///ajouter event 
Route::prefix('hh')->group(function(){
  Route::get('',[EventController::class, 'index']); 
Route::get('ajouter',[EventController::class, 'ajouter']);
Route::post('save',[EventController::class, 'save']); 
});


//details
Route::get('/cartvisiteur',[CardPaginationController::class,'index'])->name('event.details');
Route::get('details/{Eventname}',[testController::class, 'show']);


//routeprofilecreator
Route::get('/profilcreator',[CardPaginationController::class,'afficher'])->name('event.profil');

//route carte visitor buuton
Route::get('/card',[CardPaginationController::class,'index']);



//register login
Auth::routes();
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () { 
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
Route::middleware(['auth', 'user-access:creator'])->group(function () { 
    Route::get('/creator/home', [HomeController::class, 'creatorHome'])->name('creator.home');
});

///pp
Route::get('/view',[testController::class,'view']);
//routelogin button
Route::get('aj',[EventController::class, 'createevent']);

///route login register
Route::get('addU',[addUser::class, 'addUs']);
Route::post('save', [addUser::class, 'save']);

//crud -
Route::resource("/evenement", EvenementController::class);