<?php
function isChecked($param, $request)
{
    return isActive($param, $request) === 'active' ? '-check' : '';
}
function isActive($param, $request)
{
    switch ($param) {
        //ADMIN->PROF
        case 'admin.prof.profs':
            if ($request->routeIs('profs.*')) {
                return 'active';
            }
            break;
        case 'admin.prof.absences':
            if ($request->routeIs('absencesprofs.*')) {
                return 'active';
            }
            break;
        case 'admin.prof.paiements':
            if ($request->routeIs('paiementsprofs.*')) {
                return 'active';
            }
            break;
        case 'admin.prof.emploisdutemps':
            if ($request->routeIs('emploisdutempsprofs.*')) {
                return 'active';
            }
            break;
        //Admin-> EspacesEleves
        case 'admin.eleves.eleves':
            if ($request->routeIs('eleves.*')) {
                return 'active';
            }
            break;
        case 'admin.eleves.absences':
            if ($request->routeIs('absenceseleves.*')) {
                return 'active';
            }
            break;
        case 'admin.eleves.paiements':
            if ($request->routeIs('paiementseleves.*')) {
                return 'active';
            }
            break;
        case 'admin.eleves.emploisdutemps':
            if ($request->routeIs('emploisdutempseleves.*')) {
                return 'active';
            }
            break;
        //Administartion->Parametres
        case 'admin.parametre.anneesscolaire':
            if ($request->routeIs('anneesscolaire.*')) {
                return 'active';
            }
            break;

            case 'admin.parametre.semestres':
                if ($request->routeIs('semestres.*')) {
                    return 'active';
                }
                break;

                case 'admin.parametre.matieres':
                    if ($request->routeIs('matieres.*')) {
                        return 'active';
                    }
                    break;

        case 'admin.parametre.niveaux':
            if ($request->routeIs('niveaux.*')) {
                return 'active';
            }
            break;
        case 'admin.parametre.salles':
            if ($request->routeIs('salles.*')) {
                return 'active';
            }
            break;
        case 'admin.parametre.classes':
            if ($request->routeIs('classes.*')) {
                return 'active';
            }
            break;
        case 'admin.parametre.filieres':
            if ($request->routeIs('filieres.*')) {
                return 'active';
            }
            break;
        case 'admin.parametre.controles':
            if ($request->routeIs('controles.*')) {
                return 'active';
            }
            break;
        case 'admin.parametre.exams':
            if ($request->routeIs('exams.*')) {
                return 'active';
            }
            break;
        case 'admin.parametre.evenements':
            if ($request->routeIs('evenements.*')) {
                return 'active';
            }
            break;

            case 'admin.parametre.conges':
                if ($request->routeIs('conges.*')) {
                    return 'active';
                }
                break;

                case 'admin.parametre.parents':
                    if ($request->routeIs('parents.*')) {
                        return 'active';
                    }
                    break;

        //Administration->Affectations
        case 'admin.affectations.profsmatieres':
            if ($request->routeIs('profsmatieres.*')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classesexams':
            if ($request->routeIs('classesexams.*')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classesniveauxfilieres':
            if ($request->routeIs('classesniveauxfilieres.*')) {
                return 'active';
            }
            break;
        case 'admin.affectations.classescontrolesmatieres':
            if ($request->routeIs('classescontrolesmatieres.*')) {
                return 'active';
            }
            break;
    }
}

function isOpen($param, $request)
{
    switch ($param) {
        case 'admin.prof':
            if ($request->routeIs('absencesprofs.*') || $request->routeIs('profs.*') || $request->routeIs('emploisdutempsprofs.*') || $request->routeIs('paiementsprofs.*')) {
                return 'open';
            }
            break;
        case 'admin.eleves':
            if ($request->routeIs('absenceseleves.*') || $request->routeIs('paiementseleves.*') || $request->routeIs('emploisdutempseleves.*') || $request->routeIs('eleves.*')) {
                return 'open';
            }
            break;
        case 'admin.parametre':
            if ($request->routeIs('anneesscolaire.*') || $request->routeIs('semestres.*') ||$request->routeIs('matieres.*') || $request->routeIs('niveaux.*') || $request->routeIs('classes.*') || $request->routeIs('salles.*')|| $request->routeIs('filieres.*') || $request->routeIs('controles.*') || $request->routeIs('exams.*') || $request->routeIs('evenements.*')|| $request->routeIs('conges.*')|| $request->routeIs('parents.*')) {
                return 'open';
            }
            break;
        case 'admin.affectations':
            if ($request->routeIs('profsmatieres.*') || $request->routeIs('classesexams.*') || $request->routeIs('classesniveauxfilieres.*') || $request->routeIs('classescontrolesmatieres.*')) {
                return 'open';
            }
            break;

        default:
            # code...
            break;
    }
    return '';
}