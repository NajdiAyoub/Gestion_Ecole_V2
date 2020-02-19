<?php

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



    //

use App\Http\Middleware\IsRole;

Route::get('/', function () {
    if (auth()->user() == null) {
       return view('/auth/login');
    } else {
        return view('dashboard.index');
    }
});

Route::get('locale/{locale}',function ($locale){
    
//dd($locale);
 Session::put('locale',$locale);
   // session(['locale' => $locale]);
    //Session::save();
     //::setLocale($locale);
    return redirect()->back();
});



Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('Cours/listesCours', 'CoursController@index')->name('listesCours');
Route::get('Absences/listesAbsences', 'AbsencesController@index')->name('listesAbsences');
Route::get('EmploisDuTemps/emplois', 'EmploisDuTempsController@index')->name('emplois');
Route::get('Paiements/listesPaiements', 'PaiementsController@index')->name('listesPaiements');
Route::get('Evenements/listesEvenements', 'EvenementsController@index')->name('listesEvenements');
Route::get('BulletinsEtNotes/bulletins', 'BulletinsEtNotesController@index')->name('bulletins');




Auth::routes();
