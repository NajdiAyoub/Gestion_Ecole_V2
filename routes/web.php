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
Route::get('personnels/listesProfs', 'ProfsController@index')->name('listesProfs');
Route::get('personnels/AbsencesProfs', 'AbsencesProfsController@index')->name('AbsencesProfs');
Route::get('personnels/PaiementsProfs', 'PaiementsProfsController@index')->name('PaiementsProfs');
Route::get('personnels/emploisdutempsprofs', 'EmploisDuTempsProfsController@index')->name('emploisdutempsprofs');
Route::get('personnels/absenceseleves', 'AbsencesElevesController@index')->name('absenceseleves');
Route::get('personnels/paiementseleves', 'PaiementsElevesController@index')->name('paiementseleves');
Route::get('personnels/emploisdutempseleves', 'EmploisDuTempsElevesController@index')->name('emploisdutempseleves');
Route::get('listeseleves', 'ElevesController@index')->name('listeseleves');
Route::resource('listeniveaux', 'NiveauxController');
Route::get('personnels/listesclasses', 'ClassesController@index')->name('listesclasses');
Route::resource('listesfilieres', 'FilieresController');
Route::get('personnels/listesexams', 'ExamsController@index')->name('listesexams');
Route::resource('anneesscolaire', 'AnneesScolaireController');
Route::get('personnels/profsmatiers', 'ProfsMatiersController@index')->name('profsmatiers');
Route::get('personnels/classesexams', 'ClassesExamsController@index')->name('classesexams');
Route::get('personnels/listesevenements', 'EvenementsController@index')->name('listesevenements');
Route::resource('listessalles', 'SallesController');
Route::get('personnels/listescontroles', 'ControlesController@index')->name('listescontroles');
Route::get('personnels/listesclassesniveauxfilieres', 'ClassesNiveauxFilieresController@index')->name('listesclassesniveauxfilieres');
Route::get('personnels/listesclassescontrolesmatieres', 'ClassesControlesMatieresController@index')->name('listesclassescontrolesmatieres');




Auth::routes();
