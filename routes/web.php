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


//ADMIN->Parametres->Semestres
Route::get('semestres/{id}/delete', 'SemestresController@destroy')->name('semestres.destroy');
Route::resource('semestres', 'SemestresController', ['except' => 'destroy', 'names' => [
    'index' => 'semestres.index',
    'create' => 'semestres.create',
    'update' => 'semestres.update',
    'edit' => 'semestres.edit',
    'store' => 'semestres.store',
    'show' => 'semestres.show',
]]);


//ADMIN->Parametres->Matieres
Route::get('matieres/{id}/delete', 'MatieresController@destroy')->name('matieres.destroy');
Route::resource('matieres', 'MatieresController', ['except' => 'destroy', 'names' => [
    'index' => 'matieres.index',
    'create' => 'matieres.create',
    'update' => 'matieres.update',
    'edit' => 'matieres.edit',
    'store' => 'matieres.store',
    'show' => 'matieres.show',
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

//ADMIN->Parametres->Conges

Route::get('conges/{id}/delete', 'CongesController@destroy')->name('conges.destroy');
Route::resource('conges', 'CongesController', ['except' => 'destroy', 'names' => [
    'index' => 'conges.index',
    'create' => 'conges.create',
    'update' => 'conges.update',
    'edit' => 'conges.edit',
    'store' => 'conges.store',
    'show' => 'conges.show',
]]);

//ADMIN->Parametres->Parents

Route::get('parents/{id}/delete', 'ParentsController@destroy')->name('parents.destroy');
Route::get('parents/{id}', 'ParentsController@index')->name('parents.index');
Route::resource('parents', 'ParentsController', ['except' => 'destroy','names' => [
    'create' => 'parents.create',
    'update' => 'parents.update',
    'edit' => 'parents.edit',
    'store' => 'parents.store',
    'show' => 'parents.show',
]]);


//ADMIN->Parametres->Attachements

Route::get('attachments/{id}/delete', 'AttachementsController@destroy')->name('attachements.destroy');
Route::resource('attachements', 'AttachementsController', ['except' => 'destroy', 'names' => [
    'index' => 'attachements.index',
    'create' => 'attachements.create',
    'update' => 'attachements.update',
    'edit' => 'attachements.edit',
    'store' => 'attachements.store',
    'show' => 'attachements.show',
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

//// ElevesSpaces Routes 

Route::get('ElevesSpace/Acceuil/{id}/delete', 'AcceuilController@destroy')->name('acceuil.destroy');
Route::resource('Acceuil', 'AcceuilController', ['except' => 'destroy', 'names' => [
    'index' => 'acceuil.index',
    'create' => 'acceuil.create',
    'update' => 'acceuil.update',
    'edit' => 'acceuil.edit',
    'store' => 'acceuil.store',
    'show' => 'acceuil.show',
]]);

Route::get('ElevesSpace/Cours/{id}/delete', 'ElvCoursController@destroy')->name('elevescours.destroy');
Route::resource('ElevesCours', 'ElvCoursController', ['except' => 'destroy', 'names' => [
    'index' => 'elevescours.index',
    'create' => 'elevescours.create',
    'update' => 'elevescours.update',
    'edit' => 'elevescours.edit',
    'store' => 'elevescours.store',
    'show' => 'elevescours.show',
]]);

Route::get('ElevesSpace/ElvAbsences/{id}/delete', 'AbsElevesController@destroy')->name('elvabsences.destroy');
Route::resource('ElvAbsences', 'AbsElevesController', ['except' => 'destroy', 'names' => [
    'index' => 'elvabsences.index',
    'create' => 'elvabsences.create',
    'update' => 'elvabsences.update',
    'edit' => 'elvabsences.edit',
    'store' => 'elvabsences.store',
    'show' => 'elvabsences.show',
]]);

Route::get('ElevesSpace/ElvEmploisDuTemps/{id}/delete', 'ElvEmploisDuTempsController@destroy')->name('ElvEmploisDuTemps.destroy');
Route::resource('ElvEmploisDuTemps', 'ElvEmploisDuTempsController', ['except' => 'destroy', 'names' => [
    'index' => 'elvemploisdutemps.index',
    'create' => 'elvemploisdutemps.create',
    'update' => 'elvemploisdutemps.update',
    'edit' => 'elvemploisdutemps.edit',
    'store' => 'elvemploisdutemps.store',
    'show' => 'elvemploisdutemps.show',
]]);

Route::get('ElevesSpace/ElvBulletinsEtNotes/{id}/delete', 'ElvBulletinsEtNotesController@destroy')->name('ElvBulletinsEtNotes.destroy');
Route::resource('ElvBulletinsEtNotes', 'ElvBulletinsEtNotesController', ['except' => 'destroy', 'names' => [
    'index' => 'elvbulletinsetnotes.index',
    'create' => 'elvbulletinsetnotes.create',
    'update' => 'elvbulletinsetnotes.update',
    'edit' => 'elvbulletinsetnotes.edit',
    'store' => 'elvbulletinsetnotes.store',
    'show' => 'elvbulletinsetnotes.show',
]]);

Route::get('ElevesSpace/ElvPaiements/{id}/delete', 'ElvPaiementsController@destroy')->name('ElvPaiements.destroy');
Route::resource('ElvPaiements', 'ElvPaiementsController', ['except' => 'destroy', 'names' => [
    'index' => 'elvpaiements.index',
    'create' => 'elvpaiements.create',
    'update' => 'elvpaiements.update',
    'edit' => 'elvpaiements.edit',
    'store' => 'elvpaiements.store',
    'show' => 'elvpaiements.show',
]]);

Route::get('ElevesSpace/ElvEvenementsEtActualites/{id}/delete', 'ElvEvenementsEtActualitesController@destroy')->name('ElvEvenementsEtActualites.destroy');
Route::resource('ElvEvenementsEtActualites', 'ElvEvenementsEtActualitesController', ['except' => 'destroy', 'names' => [
    'index' => 'elvevenementsetactualites.index',
    'create' => 'elvevenementsetactualites.create',
    'update' => 'elvevenementsetactualites.update',
    'edit' => 'elvevenementsetactualites.edit',
    'store' => 'elvevenementsetactualites.store',
    'show' => 'elvevenementsetactualites.show',
]]);

///--- Profs Spaces Routes -----///

Route::get('ProfsSpace/Acceuil/{id}/delete', 'PrfAcceuilController@destroy')->name('profsacceuil.destroy');
Route::resource('PrfAcceuil', 'PrfAcceuilController', ['except' => 'destroy', 'names' => [
    'index' => 'profsacceuil.index',
    'create' => 'profsacceuil.create',
    'update' => 'profsacceuil.update',
    'edit' => 'profsacceuil.edit',
    'store' => 'profsacceuil.store',
    'show' => 'profsacceuil.show',
]]);

Route::get('ProfsSpace/Cours/{id}/delete', 'ProfsCoursController@destroy')->name('profscours.destroy');
Route::resource('Cours', 'ProfsCoursController', ['except' => 'destroy', 'names' => [
    'index' => 'profscours.index',
    'create' => 'profscours.create',
    'update' => 'profscours.update',
    'edit' => 'profscours.edit',
    'store' => 'profscours.store',
    'show' => 'profscours.show',
]]);

Route::get('ProfsSpace/Classes/{id}/delete', 'ProfsClassesController@destroy')->name('profsclasses.destroy');
Route::resource('ProfsClasses', 'ProfsClassesController', ['except' => 'destroy', 'names' => [
    'index' => 'profsclasses.index',
    'create' => 'profsclasses.create',
    'update' => 'profsclasses.update',
    'edit' => 'profsclasses.edit',
    'store' => 'profsclasses.store',
    'show' => 'profsclasses.show',
]]);

Route::get('ProfsSpace/Absences/{id}/delete', 'ProfsAbsencesController@destroy')->name('profsabsences.destroy');
Route::resource('ProfsAbsences', 'ProfsAbsencesController', ['except' => 'destroy', 'names' => [
    'index' => 'profsabsences.index',
    'create' => 'profsabsences.create',
    'update' => 'profsabsences.update',
    'edit' => 'profsabsences.edit',
    'store' => 'profsabsences.store',
    'show' => 'profsabsences.show',
]]);

Route::get('ProfsSpace/EmploisDuTemps/{id}/delete', 'ProfsEmploisDuTempsController@destroy')->name('profsemploisdutemps.destroy');
Route::resource('ProfsEmploisDuTemps', 'ProfsEmploisDuTempsController', ['except' => 'destroy', 'names' => [
    'index' => 'profsemploisdutemps.index',
    'create' => 'profsemploisdutemps.create',
    'update' => 'profsemploisdutemps.update',
    'edit' => 'profsemploisdutemps.edit',
    'store' => 'profsemploisdutemps.store',
    'show' => 'profsemploisdutemps.show',
]]);

Route::get('ProfsSpace/Paiements/{id}/delete', 'ProfsPaiementsController@destroy')->name('profspaiements.destroy');
Route::resource('ProfsPaiements', 'ProfsPaiementsController', ['except' => 'destroy', 'names' => [
    'index' => 'profspaiements.index',
    'create' => 'profspaiements.create',
    'update' => 'profspaiements.update',
    'edit' => 'profspaiements.edit',
    'store' => 'profspaiements.store',
    'show' => 'profspaiements.show',
]]);

















Route::get('Absences/listesAbsences', 'AbsencesController@index')->name('Absences.index');
Route::get('EmploisDuTemps/emplois', 'EmploisDuTempsController@index')->name('emplois');
Route::get('Paiements/listesPaiements', 'PaiementsController@index')->name('listesPaiements');
Route::get('Evenements/listesEvenements', 'EvenementsController@index')->name('listesEvenements');
Route::get('BulletinsEtNotes/bulletins', 'BulletinsEtNotesController@index')->name('bulletins.index');

Route::get('Administrations/PaiementsProfs', 'PaiementsProfsController@index')->name('PaiementsProfs');
Route::get('Administrations/emploisdutempsprofs', 'EmploisDuTempsProfsController@index')->name('emploisdutempsprofs');
Route::get('Administrations/absenceseleves', 'AbsencesElevesController@index')->name('absenceseleves');
Route::get('Administrations/paiementseleves', 'PaiementsElevesController@index')->name('Paiementseleves.index');
Route::get('Administrations/emploisdutempseleves', 'EmploisDuTempsElevesController@index')->name('emploisdutempseleves');
Route::get('Administrations', 'ElevesController@index')->name('listeseleves');
Route::get('listeniveaux/{id}/delete', 'NiveauxController@destroy')->name('listeniveaux.destroy');
Route::resource('listeniveaux', 'NiveauxController', ['except' => 'destroy']);
Route::get('Administrations/listesclasses', 'ClassesController@index')->name('listesclasses');


Route::get('listessalles/{id}/delete', 'SallesController@destroy')->name('listessalles.destroy');
Route::resource('listessalles', 'SallesController', ['except' => 'destroy']);

Route::get('Paiements/Paiements', 'PaiementsController@index')->name('paiements.index');
Route::get('Administrations/profsmatiers', 'ProfsMatiersController@index')->name('profsmatiers');
Route::get('Administrations/classesexams', 'ClassesExamsController@index')->name('classesexams');
Route::get('Administrations/listesevenements', 'EvenementsController@index')->name('Evenements.index');

Route::get('Administrations/listescontroles', 'ControlesController@index')->name('listescontroles');
Route::get('Administrations/listesclassesniveauxfilieres', 'ClassesNiveauxFilieresController@index')->name('listesclassesniveauxfilieres');
Route::get('Administrations/listesclassescontrolesmatieres', 'ClassesControlesMatieresController@index')->name('listesclassescontrolesmatieres');

Auth::routes();
