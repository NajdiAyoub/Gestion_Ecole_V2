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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('Cours/listesCours', 'CoursController@index')->name('listesCours');
Route::get('Absences/listesAbsences', 'AbsencesController@index')->name('listesAbsences');
Route::get('EmploisDuTemps/emplois', 'EmploisDuTempsController@index')->name('emplois');
Route::get('Paiements/listesPaiements', 'PaiementsController@index')->name('listesPaiements');
Route::get('Evenements/listesEvenements', 'EvenementsController@index')->name('listesEvenements');
Route::get('BulletinsEtNotes/bulletins', 'BulletinsEtNotesController@index')->name('bulletins');
Route::get('Administrations/listesProfs', 'ProfsController@index')->name('listesProfs');
Route::get('Administrations/AbsencesProfs', 'AbsencesProfsController@index')->name('AbsencesProfs');
Route::get('Administrations/PaiementsProfs', 'PaiementsProfsController@index')->name('PaiementsProfs');
Route::get('Administrations/emploisdutempsprofs', 'EmploisDuTempsProfsController@index')->name('emploisdutempsprofs');
Route::get('Administrations/absenceseleves', 'AbsencesElevesController@index')->name('absenceseleves');
Route::get('Administrations/paiementseleves', 'PaiementsElevesController@index')->name('paiementseleves');
Route::get('Administrations/emploisdutempseleves', 'EmploisDuTempsElevesController@index')->name('emploisdutempseleves');
Route::get('Administrations', 'ElevesController@index')->name('listeseleves');
Route::get('listeniveaux/{id}/delete', 'NiveauxController@destroy')->name('listeniveaux.destroy');
Route::resource('listeniveaux', 'NiveauxController', ['except' => 'destroy']);
Route::get('Administrations/listesclasses', 'ClassesController@index')->name('listesclasses');
Route::resource('listesfilieres', 'FilieresController');
Route::resource('listesclasses', 'ClassesController');

Route::get('Administrations/listesexams', 'ExamsController@index')->name('listesexams');

Route::get('anneesscolaire/{id}/delete', 'AnneesScolaireController@destroy')->name('anneesscolaire.destroy');
Route::resource('anneesscolaire', 'AnneesScolaireController', ['except' => 'destroy', 'names' => [
    'index' => 'anneesscolaire.index',
    'create' => 'anneesscolaire.create',
    'update' => 'anneesscolaire.update',
    'edit' => 'anneesscolaire.edit',
    'store' => 'anneesscolaire.store',
    'show' => 'anneesscolaire.show',
]]);
Route::get('listessalles/{id}/delete', 'SallesController@destroy')->name('listessalles.destroy');
Route::resource('listessalles', 'SallesController', ['except' => 'destroy']);

Route::get('Administrations/profsmatiers', 'ProfsMatiersController@index')->name('profsmatiers');
Route::get('Administrations/classesexams', 'ClassesExamsController@index')->name('classesexams');
Route::get('Administrations/listesevenements', 'EvenementsController@index')->name('listesevenements');

Route::get('Administrations/listescontroles', 'ControlesController@index')->name('listescontroles');
Route::get('Administrations/listesclassesniveauxfilieres', 'ClassesNiveauxFilieresController@index')->name('listesclassesniveauxfilieres');
Route::get('Administrations/listesclassescontrolesmatieres', 'ClassesControlesMatieresController@index')->name('listesclassescontrolesmatieres');

Auth::routes();
