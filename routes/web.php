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

//ADMIN->PROF->PROF
Route::get('profs/{id}/delete', 'ProfsController@destroy')->name('profs.destroy');
Route::resource('profs', 'ProfsController', ['except' => 'destroy', 'names' => [
    'index' => 'profs.index',
    'create' => 'profs.create',
    'update' => 'profs.update',
    'edit' => 'profs.edit',
    'store' => 'profs.store',
    'show' => 'profs.show',
]]);

//ADMIN->PROF->ABSENCES
Route::get('/{id}/delete', 'absencesprofsController@destroy')->name('absencesprofs.destroy');
Route::resource('absencesprofs', 'AbsencesProfsController', ['except' => 'destroy', 'names' => [
    'index' => 'absencesprofs.index',
    'create' => 'absencesprofs.create',
    'update' => 'absencesprofs.update',
    'edit' => 'absencesprofs.edit',
    'store' => 'absencesprofs.store',
    'show' => 'absencesprofs.show',
]]);

//ADMIN->PROF->PAIEMENT
Route::get('paiementsprofs/{id}/delete', 'PaiementsProfsController@destroy')->name('paiementsprofs.destroy');
Route::resource('paiementsprofs', 'PaiementsProfsController', ['except' => 'destroy', 'names' => [
    'index' => 'paiementsprofs.index',
    'create' => 'paiementsprofs.create',
    'update' => 'paiementsprofs.update',
    'edit' => 'paiementsprofs.edit',
    'store' => 'paiementsprofs.store',
    'show' => 'paiementsprofs.show',
]]);

//ADMIN->PROF->Emplois
Route::get('emploisdutempsprofs/{id}/delete', 'EmploisDuTempsProfsController@destroy')->name('emploisdutempsprofs.destroy');
Route::resource('emploisdutempsprofs', 'EmploisDuTempsProfsController', ['except' => 'destroy', 'names' => [
    'index' => 'emploisdutempsprofs.index',
    'create' => 'emploisdutempsprofs.create',
    'update' => 'emploisdutempsprofs.update',
    'edit' => 'emploisdutempsprofs.edit',
    'store' => 'emploisdutempsprofs.store',
    'show' => 'emploisdutempsprofs.show',
]]);

//ADMIN->Eleves->Eleves
Route::get('eleves/{id}/delete', 'ElevesController@destroy')->name('eleves.destroy');
Route::resource('eleves', 'ElevesController', ['except' => 'destroy', 'names' => [
    'index' => 'eleves.index',
    'create' => 'eleves.create',
    'update' => 'eleves.update',
    'edit' => 'eleves.edit',
    'store' => 'eleves.store',
    'show' => 'eleves.show',
]]);

//ADMIN->Eleves->ABSENCES
Route::get('absenceseleves/{id}/delete', 'AbsencesElevesController@destroy')->name('absenceseleves.destroy');
Route::resource('absenceseleves', 'AbsencesElevesController', ['except' => 'destroy', 'names' => [
    'index' => 'absenceseleves.index',
    'create' => 'absenceseleves.create',
    'update' => 'absenceseleves.update',
    'edit' => 'absenceseleves.edit',
    'store' => 'absenceseleves.store',
    'show' => 'absenceseleves.show',
]]);

//ADMIN->Eleves->PAIEMENT
Route::get('paiementseleves/{id}/delete', 'PaiementsElevesController@destroy')->name('paiementseleves.destroy');
Route::resource('paiementseleves', 'PaiementsElevesController', ['except' => 'destroy', 'names' => [
    'index' => 'paiementseleves.index',
    'create' => 'paiementseleves.create',
    'update' => 'paiementseleves.update',
    'edit' => 'paiementseleves.edit',
    'store' => 'paiementseleves.store',
    'show' => 'paiementseleves.show',
]]);

//ADMIN->Eleves->Emplois
Route::get('emploisdutempseleves/{id}/delete', 'EmploisDuTempsElevesController@destroy')->name('emploisdutempseleves.destroy');
Route::resource('emploisdutempseleves', 'EmploisDuTempsElevesController', ['except' => 'destroy', 'names' => [
    'index' => 'emploisdutempseleves.index',
    'create' => 'emploisdutempseleves.create',
    'update' => 'emploisdutempseleves.update',
    'edit' => 'emploisdutempseleves.edit',
    'store' => 'emploisdutempseleves.store',
    'show' => 'emploisdutempseleves.show',
]]);

//ADMIN->Parametres->AnneeScolaire
Route::get('anneesscolaire/{id}/delete', 'AnneesScolaireController@destroy')->name('anneesscolaire.destroy');
Route::resource('anneesscolaire', 'AnneesScolaireController', ['except' => 'destroy', 'names' => [
    'index' => 'anneesscolaire.index',
    'create' => 'anneesscolaire.create',
    'update' => 'anneesscolaire.update',
    'edit' => 'anneesscolaire.edit',
    'store' => 'anneesscolaire.store',
    'show' => 'anneesscolaire.show',
]]);

//ADMIN->Parametres->Niveaux
Route::get('niveaux/{id}/delete', 'NiveauxController@destroy')->name('niveaux.destroy');
Route::resource('niveaux', 'NiveauxController', ['except' => 'destroy', 'names' => [
    'index' => 'niveaux.index',
    'create' => 'niveaux.create',
    'update' => 'niveaux.update',
    'edit' => 'niveaux.edit',
    'store' => 'niveaux.store',
    'show' => 'niveaux.show',
]]);

//ADMIN->Parametres->Salles
Route::get('salles/{id}/delete', 'SallesController@destroy')->name('salles.destroy');
Route::resource('salles', 'SallesController', ['except' => 'destroy', 'names' => [
    'index' => 'salles.index',
    'create' => 'salles.create',
    'update' => 'salles.update',
    'edit' => 'salles.edit',
    'store' => 'salles.store',
    'show' => 'salles.show',
]]);

//ADMIN->Parametres->Classes
Route::get('classes/{id}/delete', 'ClassesController@destroy')->name('classes.destroy');
Route::resource('classes', 'ClassesController', ['except' => 'destroy', 'names' => [
    'index' => 'classes.index',
    'create' => 'classes.create',
    'update' => 'classes.update',
    'edit' => 'classes.edit',
    'store' => 'classes.store',
    'show' => 'classes.show',
]]);

//ADMIN->Parametres->Filieres

Route::get('filieres/{id}/delete', 'FilieresController@destroy')->name('filieres.destroy');
Route::resource('filieres', 'FilieresController', ['except' => 'destroy', 'names' => [
    'index' => 'filieres.index',
    'create' => 'filieres.create',
    'update' => 'filieres.update',
    'edit' => 'filieres.edit',
    'store' => 'filieres.store',
    'show' => 'filieres.show',
]]);

//ADMIN->Parametres->Controles

Route::get('controles/{id}/delete', 'ControlesController@destroy')->name('controles.destroy');
Route::resource('controles', 'ControlesController', ['except' => 'destroy', 'names' => [
    'index' => 'controles.index',
    'create' => 'controles.create',
    'update' => 'controles.update',
    'edit' => 'controles.edit',
    'store' => 'controles.store',
    'show' => 'controles.show',
]]);

//ADMIN->Parametres->Exams

Route::get('exams/{id}/delete', 'ExamController@destroy')->name('exams.destroy');
Route::resource('exams', 'ExamController', ['except' => 'destroy', 'names' => [
    'index' => 'exams.index',
    'create' => 'exams.create',
    'update' => 'exams.update',
    'edit' => 'exams.edit',
    'store' => 'exams.store',
    'show' => 'exams.show',
]]);

//ADMIN->Parametres->Evenements

Route::get('evenements/{id}/delete', 'EvenementsController@destroy')->name('evenements.destroy');
Route::resource('evenements', 'EvenementsController', ['except' => 'destroy', 'names' => [
    'index' => 'evenements.index',
    'create' => 'evenements.create',
    'update' => 'evenements.update',
    'edit' => 'evenements.edit',
    'store' => 'evenements.store',
    'show' => 'evenements.show',
]]);

//ADMIN->Affectations->ProfsMatieres

Route::get('profsmatieres/{id}/delete', 'ProfsMatieresController@destroy')->name('profsmatieres.destroy');
Route::resource('profsmatieres', 'ProfsMatieresController', ['except' => 'destroy', 'names' => [
    'index' => 'profsmatieres.index',
    'create' => 'profsmatieres.create',
    'update' => 'profsmatieres.update',
    'edit' => 'profsmatieres.edit',
    'store' => 'profsmatieres.store',
    'show' => 'profsmatieres.show',
]]);

//ADMIN->Affectations->ClassesExams

Route::get('classesexams/{id}/delete', 'ClassesExamsController@destroy')->name('classesexams.destroy');
Route::resource('classesexams', 'ClassesExamsController', ['except' => 'destroy', 'names' => [
    'index' => 'classesexams.index',
    'create' => 'classesexams.create',
    'update' => 'classesexams.update',
    'edit' => 'classesexams.edit',
    'store' => 'classesexams.store',
    'show' => 'classesexams.show',
]]);

//ADMIN->Affectations->ClassesNiveauxFilieres

Route::get('classesniveauxfilieres/{id}/delete', 'ClassesNiveauxFilieresController@destroy')->name('classesniveauxfilieres.destroy');
Route::resource('classesniveauxfilieres', 'ClassesNiveauxFilieresController', ['except' => 'destroy', 'names' => [
    'index' => 'classesniveauxfilieres.index',
    'create' => 'classesniveauxfilieres.create',
    'update' => 'classesniveauxfilieres.update',
    'edit' => 'classesniveauxfilieres.edit',
    'store' => 'classesniveauxfilieres.store',
    'show' => 'classesniveauxfilieres.show',
]]);

//ADMIN->Affectations->ClassesControlesMatieres

Route::get('classescontrolesmatieres/{id}/delete', 'ClassesControlesMatieresController@destroy')->name('classescontrolesmatieres.destroy');
Route::resource('classescontrolesmatieres', 'ClassesControlesMatieresController', ['except' => 'destroy', 'names' => [
    'index' => 'classescontrolesmatieres.index',
    'create' => 'classescontrolesmatieres.create',
    'update' => 'classescontrolesmatieres.update',
    'edit' => 'classescontrolesmatieres.edit',
    'store' => 'classescontrolesmatieres.store',
    'show' => 'classescontrolesmatieres.show',
]]);

Route::get('ElevesSpace/Cours', 'CoursController@index')->name('Cours.index');
Route::get('Absences/listesAbsences', 'AbsencesController@index')->name('Absences.index');
Route::get('EmploisDuTemps/emplois', 'EmploisDuTempsController@index')->name('emplois');
Route::get('Paiements/listesPaiements', 'PaiementsController@index')->name('listesPaiements');
Route::get('Evenements/listesEvenements', 'EvenementsController@index')->name('listesEvenements');
Route::get('BulletinsEtNotes/bulletins', 'BulletinsEtNotesController@index')->name('bulletins.index');

Route::get('Administrations/PaiementsProfs', 'PaiementsProfsController@index')->name('PaiementsProfs');
Route::get('Administrations/emploisdutempsprofs', 'EmploisDuTempsProfsController@index')->name('emploisdutempsprofs');
Route::get('Administrations/absenceseleves', 'AbsencesElevesController@index')->name('absenceseleves');
Route::get('Administrations/paiementseleves', 'PaiementsElevesController@index')->name('Paiements.index');
Route::get('Administrations/emploisdutempseleves', 'EmploisDuTempsElevesController@index')->name('emploisdutempseleves');
Route::get('Administrations', 'ElevesController@index')->name('listeseleves');
Route::get('listeniveaux/{id}/delete', 'NiveauxController@destroy')->name('listeniveaux.destroy');
Route::resource('listeniveaux', 'NiveauxController', ['except' => 'destroy']);
Route::get('Administrations/listesclasses', 'ClassesController@index')->name('listesclasses');

Route::resource('listesclasses', 'ClassesController');

Route::get('listessalles/{id}/delete', 'SallesController@destroy')->name('listessalles.destroy');
Route::resource('listessalles', 'SallesController', ['except' => 'destroy']);

Route::get('Administrations/profsmatiers', 'ProfsMatiersController@index')->name('profsmatiers');
Route::get('Administrations/classesexams', 'ClassesExamsController@index')->name('classesexams');
Route::get('Administrations/listesevenements', 'EvenementsController@index')->name('Evenements.index');

Route::get('Administrations/listescontroles', 'ControlesController@index')->name('listescontroles');
Route::get('Administrations/listesclassesniveauxfilieres', 'ClassesNiveauxFilieresController@index')->name('listesclassesniveauxfilieres');
Route::get('Administrations/listesclassescontrolesmatieres', 'ClassesControlesMatieresController@index')->name('listesclassescontrolesmatieres');

Auth::routes();
