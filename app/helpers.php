<?php

function isActive($param, $request)
{
    switch ($param) {
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