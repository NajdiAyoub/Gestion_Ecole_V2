<?php
function isChecked($param, $request)
{
    return isActive($param, $request) == 'active' ? '-check' : '';
}

function isActive($param, $request)
{
    switch ($param) {
//ADMIN -> PROF
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
//ADMIN -> eleves
        case 'admin.eleves.eleves':
            if ($request->routeIs('listesProfs')) {
                return 'active';
            }
            break;
        case 'admin.eleves.abcenses':
            if ($request->routeIs('AbsencesProfs')) {
                return 'active';
            }
            break;
        case 'admin.eleves.paiements':
            if ($request->routeIs('PaiementsProfs')) {
                return 'active';
            }
            break;
        case 'admin.eleves.emplois':
            if ($request->routeIs('emploisdutempsprofs')) {
                return 'active';
            }
            break;

//ADMIN -> SETTING
        case 'admin.setting.anneesscolaires':
            if ($request->routeIs('listesProfs')) {
                return 'active';
            }
            break;
        case 'admin.setting.niveaux':
            if ($request->routeIs('AbsencesProfs')) {
                return 'active';
            }
            break;
        case 'admin.setting.salles':
            if ($request->routeIs('PaiementsProfs')) {
                return 'active';
            }
            break;
        case 'admin.setting.classes':
            if ($request->routeIs('emploisdutempsprofs')) {
                return 'active';
            }
            break;
        case 'admin.setting.filiers':
            if ($request->routeIs('listesProfs')) {
                return 'active';
            }
            break;
        case 'admin.setting.controles':
            if ($request->routeIs('AbsencesProfs')) {
                return 'active';
            }
            break;
        case 'admin.setting.exams':
            if ($request->routeIs('PaiementsProfs')) {
                return 'active';
            }
            break;
        case 'admin.setting.evenements':
            if ($request->routeIs('emploisdutempsprofs')) {
                return 'active';
            }
            break;
//ADMIN -> AFFECTATION
        case 'admin.affectations.profsmatiers':
            if ($request->routeIs('listesProfs')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classesexams':
            if ($request->routeIs('AbsencesProfs')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classesniveauxfilieres':
            if ($request->routeIs('PaiementsProfs')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classescontrolesmatieres':
            if ($request->routeIs('emploisdutempsprofs')) {
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
    }
    return '';
}