<?php
function isChecked($param, $request)
{
    return isActive($param, $request) === 'active' ? '-check' : '';
}
function isActive($param, $request)
{
    switch ($param) {
            //ADMIN->PROF
        case 'admin.prof.prof':
            if ($request->routeIs('listesProfs')) {
                return 'active';
            }
            break;
        case 'admin.prof.absences':
            if ($request->routeIs('AbsencesProfs')) {
                return 'active';
            }
            break;
        case 'admin.prof.paiement':
            if ($request->routeIs('PaiementsProfs')) {
                return 'active';
            }
            break;
        case 'admin.prof.emploi':
            if ($request->routeIs('emploisdutempsprofs')) {
                return 'active';
            }
            break;
            //Admin-> EspacesEleves
        case 'admin.eleves.eleves':
            if ($request->routeIs('listeseleves')) {
                return 'active';
            }
            break;
        case 'admin.eleves.absences':
            if ($request->routeIs('absenceseleves')) {
                return 'active';
            }
            break;
        case 'admin.eleves.paiements':
            if ($request->routeIs('paiementseleves')) {
                return 'active';
            }
            break;
        case 'admin.eleves.emploisdutempseleves':
            if ($request->routeIs('emploisdutempseleves')) {
                return 'active';
            }
            break;
            //Administartion->Parametres
        case 'admin.parametres.anneesscolaire':
            if ($request->routeIs('anneesscolaire.*')) {
                return 'active';
            }
            break;

        case 'admin.parametres.niveaux':
            if ($request->routeIs('listeniveaux*')) {
                return 'active';
            }
            break;
        case 'admin.parametres.salles':
            if ($request->routeIs('listessalles*')) {
                return 'active';
            }
            break;
        case 'admin.parametres.classes':
            if ($request->routeIs('listesclasses*')) {
                return 'active';
            }
            break;
        case 'admin.parametres.filieres':
            if ($request->routeIs('listesfilieres')) {
                return 'active';
            }
            break;
        case 'admin.parametres.controles':
            if ($request->routeIs('listescontroles')) {
                return 'active';
            }
            break;
        case 'admin.parametres.exams':
            if ($request->routeIs('listesexams')) {
                return 'active';
            }
            break;
        case 'admin.parametres.evenements':
            if ($request->routeIs('listesevenements')) {
                return 'active';
            }
            break;

            //Administration->Affectations
        case 'admin.affectations.profsmatieres':
            if ($request->routeIs('profsmatiers')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classesexams':
            if ($request->routeIs('classesexams')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classesniveauxfilieres':
            if ($request->routeIs('listesclassesniveauxfilieres')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classescontrolesmatieres':
            if ($request->routeIs('listesclassescontrolesmatieres')) {
                return 'active';
            }
            break;
    }
}

function isOpen($param, $request)
{
    switch ($param) {
        case 'admin.prof':
            if ($request->routeIs('AbsencesProfs') || $request->routeIs('listesProfs') || $request->routeIs('emploisdutempsprofs') || $request->routeIs('PaiementsProfs')) {
                return 'open';
            }
            break;
        case 'admin.eleve':
            if ($request->routeIs('absenceseleves') || $request->routeIs('paiementseleves') || $request->routeIs('emploisdutempseleves') || $request->routeIs('listeseleves')) {
                return 'open';
            }
            break;
        case 'admin.parametre':
            if ($request->routeIs('anneesscolaire') || $request->routeIs('listeniveaux') || $request->routeIs('listesclasses') || $request->routeIs('listesfilieres') || $request->routeIs('listescontroles') || $request->routeIs('listesexams') || $request->routeIs('listesevenements')) {
                return 'open';
            }
            break;
        case 'admin.affectation':
            if ($request->routeIs('profsmatiers') || $request->routeIs('classesexams') || $request->routeIs('listesclassesniveauxfilieres') || $request->routeIs('listesclassescontrolesmatieres')) {
                return 'open';
            }
            break;

        default:
            # code...
            break;
    }
    return '';
}
