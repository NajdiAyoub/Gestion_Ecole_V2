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

                    case 'admin.parametre.attachements':
                        if ($request->routeIs('attachements.*')) {
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

//// Eleves Space ----------------- Eleves Space ////           
            
case 'elevesspace.acceuil':
                if ($request->routeIs('acceuil.*')) {
                    return 'active';
                }
                break;

            case 'elevesspace.cours':
                if ($request->routeIs('elevescours.*')) {
                    return 'active';
                }
                break;

                case 'elevesspace.elvabsences':
                    if ($request->routeIs('elvabsences.*')) {
                        return 'active';
                    }
                    break;

                    case 'elevesspace.elvemploisdutemps':
                        if ($request->routeIs('elvemploisdutemps.*')) {
                            return 'active';
                        }
                        break;

                        case 'elevesspace.elvbulletinsetnotes':
                            if ($request->routeIs('elvbulletinsetnotes.*')) {
                                return 'active';
                            }
                            break;
                            case 'elevesspace.elvbulletinsetnotes':
                                if ($request->routeIs('elvbulletinsetnotes.*')) {
                                    return 'active';
                                }
                                break;

                                case 'elevesspace.elvpaiements':
                                    if ($request->routeIs('elvpaiements.*')) {
                                        return 'active';
                                    }
                                    break;
                
                                case 'elevesspace.elvevenementsetactualites':
                                    if ($request->routeIs('elvevenementsetactualites.*')) {
                                        return 'active';
                                    }
                                    break;   

       ////End Eleves Space -----------------  End Eleves Space ////  
       
              ////End Profs Space -----------------  End Profs Space ////      

              
              case 'profsspace.profsacceuil':
                if ($request->routeIs('profsacceuil.*')) {
                    return 'active';
                }
                break;  
                
                  
              case 'profsspace.profsclasses':
                if ($request->routeIs('profsclasses.*')) {
                    return 'active';
                }
                break;  
                  
              case 'profsspace.profsabsences':
                if ($request->routeIs('profsabsences.*')) {
                    return 'active';
                }
                break;  

                  
              case 'profsspace.emploisdutempsprofs':
                if ($request->routeIs('profsemploisdutemps.*')) {
                    return 'active';
                }
                break;

                case 'profsspace.profspaiements':
                    if ($request->routeIs('profspaiements.*')) {
                        return 'active';
                    }
                    break;

                    case 'profsspace.profscours':
                        if ($request->routeIs('profscours.*')) {
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
            if ($request->routeIs('anneesscolaire.*') || $request->routeIs('semestres.*') ||$request->routeIs('matieres.*') || $request->routeIs('niveaux.*') || $request->routeIs('classes.*') || $request->routeIs('salles.*')|| $request->routeIs('filieres.*') || $request->routeIs('controles.*') || $request->routeIs('exams.*') || $request->routeIs('evenements.*')|| $request->routeIs('conges.*')|| $request->routeIs('parents.*') || $request->routeIs('attachements.*')) {
                return 'open';
            }
            break;
        case 'admin.affectations':
            if ($request->routeIs('profsmatieres.*') || $request->routeIs('classesexams.*') || $request->routeIs('classesniveauxfilieres.*') || $request->routeIs('classescontrolesmatieres.*')) {
                return 'open';
            }
            break;
          
            case 'elevesspace':
                if ($request->routeIs('acceuil.*') || $request->routeIs('cours.*') || $request->routeIs('elvabsences.*') || $request->routeIs('elvemploisdutemps.*')||  $request->routeIs('elvbulletinsetnotes.*')|| $request->routeIs('elvpaiements.*')|| $request->routeIs('elvevenementsetactulaites.*')) {
                    return 'open';
                }
                break;

                case 'profsspace':
                    if ($request->routeIs('profsacceuil.*') || $request->routeIs('profscours.*') || $request->routeIs('profsabsences.*') || $request->routeIs('emploisdutempsprofs.*')||  $request->routeIs('profsclasses.*')|| $request->routeIs('profspaiements.*')) {
                        return 'open';
                    }
                    break;
    

        default:
            # code...
            break;
    }
    return '';
}