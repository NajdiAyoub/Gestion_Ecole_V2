<?php
//ESPACE ADMIN

//  Admin->Parametre->ANNE SCOLAIRE
Breadcrumbs::for('admin.parametre.anneesscolaire', function ($trail) {
    $trail->push(__('text.AnneesScolaire.lbl'), route('anneesscolaire.index'));
});
Breadcrumbs::for('admin.parametre.anneesscolaire.add', function ($trail) {
    $trail->parent('admin.parametre.anneesscolaire');
    $trail->push(__('text.AnneesScolaire.add'), route('anneesscolaire.create'));
});
Breadcrumbs::for('admin.parametre.anneesscolaire.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.anneesscolaire');
    $trail->push(__('text.AnneesScolaire.edit'), route('anneesscolaire.edit', $id));
});

//  Admin->Parametre->Semestres
Breadcrumbs::for('admin.parametre.semestres', function ($trail) {
    $trail->push(__('text.Semestres.lbl'), route('semestres.index'));
});
Breadcrumbs::for('admin.parametre.semestres.add', function ($trail) {
    $trail->parent('admin.parametre.semestres');
    $trail->push(__('text.Semestres.add'), route('semestres.create'));
});
Breadcrumbs::for('admin.parametre.semestres.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.semestres');
    $trail->push(__('text.Semestres.edit'), route('semestres.edit', $id));
});


//  Admin->Parametre->Matieres

Breadcrumbs::for('admin.parametre.matieres', function ($trail) {
    $trail->push(__('text.Matieres.lbl'), route('matieres.index'));
});
Breadcrumbs::for('admin.parametre.matieres.add', function ($trail) {
    $trail->parent('admin.parametre.matieres');
    $trail->push(__('text.Matieres.add'), route('matieres.create'));
});
Breadcrumbs::for('admin.parametre.matieres.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.matieres');
    $trail->push(__('text.Matieres.edit'), route('matieres.edit', $id));
});

//  Admin->Parametre->NIVEAU
Breadcrumbs::for('admin.parametre.niveaux', function ($trail) {
    $trail->push(__('text.Niveaux.lbl'), route('niveaux.index'));
});
Breadcrumbs::for('admin.parametre.niveaux.add', function ($trail) {
    $trail->parent('admin.parametre.niveaux');
    $trail->push(__('text.Niveaux.add'), route('niveaux.create'));
});
Breadcrumbs::for('admin.parametre.niveaux.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.niveaux');
    $trail->push(__('text.Niveaux.edit'), route('niveaux.edit', $id));
});

//  Admin->Parametre->Salles


Breadcrumbs::for('admin.parametre.salles', function ($trail) {
    $trail->push(__('text.Salles.lbl'), route('salles.index'));
});
Breadcrumbs::for('admin.parametre.salles.add', function ($trail) {
    $trail->parent('admin.parametre.salles');
    $trail->push(__('text.Salles.add'), route('salles.create'));
});
Breadcrumbs::for('admin.parametre.salles.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.salles');
    $trail->push(__('text.Salles.edit'), route('salles.edit', $id));
});
//  Admin->Parametre->Classes

Breadcrumbs::for('admin.parametre.classes', function ($trail) {
    $trail->push(__('text.Classes.lbl'), route('classes.index'));
});
Breadcrumbs::for('admin.parametre.classes.add', function ($trail) {
    $trail->parent('admin.parametre.classes');
    $trail->push(__('text.Classes.add'), route('classes.create'));
});
Breadcrumbs::for('admin.parametre.classes.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.classes');
    $trail->push(__('text.Classes.edit'), route('classes.edit', $id));
});

//  Admin->Parametre->Filiere

Breadcrumbs::for('admin.parametre.filieres', function ($trail) {
    $trail->push(__('text.Filieres.lbl'), route('filieres.index'));
});
Breadcrumbs::for('admin.parametre.filieres.add', function ($trail) {
    $trail->parent('admin.parametre.filieres');
    $trail->push(__('text.Filieres.add'), route('filieres.create'));
});
Breadcrumbs::for('admin.parametre.filieres.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.filieres');
    $trail->push(__('text.Filieres.edit'), route('filieres.edit', $id));
});

// Admin->Parametre->Controles

Breadcrumbs::for('admin.parametre.controles', function ($trail) {
    $trail->push(__('text.Controles.lbl'), route('controles.index'));
});
Breadcrumbs::for('admin.parametre.controles.add', function ($trail) {
    $trail->parent('admin.parametre.controles');
    $trail->push(__('text.Controles.add'), route('controles.create'));
});
Breadcrumbs::for('admin.parametre.controles.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.controles');
    $trail->push(__('text.Controles.edit'), route('controles.edit', $id));
});

// Admin->Parametre->Exams

Breadcrumbs::for('admin.parametre.exams', function ($trail) {
    $trail->push(__('text.Exams.lbl'), route('exams.index'));
});
Breadcrumbs::for('admin.parametre.exams.add', function ($trail) {
    $trail->parent('admin.parametre.exams');
    $trail->push(__('text.Exams.add'), route('exams.create'));
});
Breadcrumbs::for('admin.parametre.exams.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.exams');
    $trail->push(__('text.Exams.edit'), route('exams.edit', $id));
});
// Admin->Parametre->EVENEMENTS

Breadcrumbs::for('admin.parametre.evenements', function ($trail) {
    $trail->push(__('text.Evenements.lbl'), route('evenements.index'));
});
Breadcrumbs::for('admin.parametre.evenements.add', function ($trail) {
    $trail->parent('admin.parametre.evenements');
    $trail->push(__('text.Evenements.add'), route('evenements.create'));
});
Breadcrumbs::for('admin.parametre.evenements.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.evenements');
    $trail->push(__('text.Evenements.edit'), route('evenements.edit', $id));
});

// Admin->Parametre->CONGES

Breadcrumbs::for('admin.parametre.conges', function ($trail) {
    $trail->push(__('text.Conges.lbl'), route('conges.index'));
});
Breadcrumbs::for('admin.parametre.conges.add', function ($trail) {
    $trail->parent('admin.parametre.evenements');
    $trail->push(__('text.Conges.add'), route('conges.create'));
});
Breadcrumbs::for('admin.parametre.conges.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.conges');
    $trail->push(__('text.Conges.edit'), route('conges.edit', $id));
});

// Admin->Parametre->Parents

Breadcrumbs::for('admin.parametre.parents', function ($trail) {
    $trail->push(__('text.Parents.lbl'), route('parents.index'));
});
Breadcrumbs::for('admin.parametre.parents.add', function ($trail) {
    $trail->parent('admin.parametre.parents');
    $trail->push(__('text.Parents.add'), route('parents.create'));
});
Breadcrumbs::for('admin.parametre.parents.edit', function ($trail, $id) {
    $trail->parent('admin.parametre.parents');
    $trail->push(__('text.Parents.edit'), route('parents.edit', $id));
});

// Admin->Eleves->Eleves

Breadcrumbs::for('admin.eleves.eleves', function ($trail) {
    $trail->push(__('text.Eleves.lbl'), route('eleves.index'));
});
Breadcrumbs::for('admin.eleves.eleves.add', function ($trail) {
    $trail->parent('admin.eleves.eleves');
    $trail->push(__('text.Eleves.add'), route('eleves.create'));
});
Breadcrumbs::for('admin.eleves.eleves.edit', function ($trail, $id) {
    $trail->parent('admin.eleves.eleves');
    $trail->push(__('text.Eleves.edit'), route('eleves.edit', $id));
});

// Admin->Eleves->Absences

Breadcrumbs::for('admin.eleves.absences', function ($trail) {
    $trail->push(__('text.Eleves.lbl'), route('eleves.index'));
});
Breadcrumbs::for('admin.eleves.absences.add', function ($trail) {
    $trail->parent('admin.eleves.absences');
    $trail->push(__('text.Absences.add'), route('absences.create'));
});
Breadcrumbs::for('admin.eleves.absences.edit', function ($trail, $id) {
    $trail->parent('admin.eleves.absences');
    $trail->push(__('text.Absences.edit'), route('absences.edit', $id));
});

// Admin->Eleves->Paiements


Breadcrumbs::for('admin.eleves.paiements', function ($trail) {
    $trail->push(__('text.Paiemenets.lbl'), route('paiementseleves.index'));
});
Breadcrumbs::for('admin.eleves.paiements.add', function ($trail) {
    $trail->parent('admin.eleves.paiements');
    $trail->push(__('text.Paiements.add'), route('paiementseleves.create'));
});
Breadcrumbs::for('admin.eleves.paiements.edit', function ($trail, $id) {
    $trail->parent('admin.eleves.paiements');
    $trail->push(__('text.Paiements.edit'), route('paiementseleves.edit', $id));
});

// Admin->Eleves->EmploisDuTemps


Breadcrumbs::for('admin.eleves.emploisdutemps', function ($trail) {
    $trail->push(__('text.EmploisDuTemps.lbl'), route('emploisdutemps.index'));
});
Breadcrumbs::for('admin.eleves.emploisdutemps.add', function ($trail) {
    $trail->parent('admin.eleves.emploisdutemps');
    $trail->push(__('text.EmploisDuTemps.add'), route('emploisdutemps.create'));
});
Breadcrumbs::for('admin.eleves.emploisdutemps.edit', function ($trail, $id) {
    $trail->parent('admin.eleves.emploisdutemps');
    $trail->push(__('text.EmploisduTemps.edit'), route('empoisdutemps.edit', $id));
});

// Admin->Profs->Profs


Breadcrumbs::for('admin.prof.profs', function ($trail) {
    $trail->push(__('text.Profs.lbl'), route('profs.index'));
});
Breadcrumbs::for('admin.prof.profs.add', function ($trail) {
    $trail->parent('admin.prof.profs');
    $trail->push(__('text.Profs.add'), route('profs.create'));
});
Breadcrumbs::for('admin.prof.profs.edit', function ($trail, $id) {
    $trail->parent('admin.prof.profs');
    $trail->push(__('text.Prof.edit'), route('profs.edit', $id));
});

// Admin->Profs->Absences


Breadcrumbs::for('admin.prof.absences', function ($trail) {
    $trail->push(__('text.AbsencesProfs.lbl'), route('absencesprofs.index'));
});
Breadcrumbs::for('admin.prof.absences.add', function ($trail) {
    $trail->parent('admin.prof.absences');
    $trail->push(__('text.AbsencesProfs.add'), route('absencesprofs.create'));
});
Breadcrumbs::for('admin.prof.absences.edit', function ($trail, $id) {
    $trail->parent('admin.prof.absences');
    $trail->push(__('text.Absences.edit'), route('absencesprofs.edit', $id));
});

// Admin->Profs->Paiemenets


Breadcrumbs::for('admin.prof.paiements', function ($trail) {
    $trail->push(__('text.Paiemenets.lbl'), route('paiementseleves.index'));
});
Breadcrumbs::for('admin.prof.paiementsprofs.add', function ($trail) {
    $trail->parent('admin.prof.paiements');
    $trail->push(__('text.PaiementsProfs.add'), route('paiementseleves.create'));
});
Breadcrumbs::for('admin.prof.paiements.edit', function ($trail, $id) {
    $trail->parent('admin.prof.paiements');
    $trail->push(__('text.Paiements.edit'), route('paiementseleves.edit', $id));
});

// Admin->Profs->EmploisDuTemps

Breadcrumbs::for('admin.prof.emploisdutemps', function ($trail) {
    $trail->push(__('text.EmploisDuTemps.lbl'), route('emploisdutempseleves.index'));
});
Breadcrumbs::for('admin.prof.emploisdutemps.add', function ($trail) {
    $trail->parent('admin.prof.emploisdutemps');
    $trail->push(__('text.EmploisDuTemps.add'), route('emploisdutempseleves.create'));
});
Breadcrumbs::for('admin.prof.emploisdutemps.edit', function ($trail, $id) {
    $trail->parent('admin.prof.emploisdutemps');
    $trail->push(__('text.EmploisduTemps.edit'), route('empoisdutempseleves.edit', $id));
});

// Admin->Affectations->ProfMatiere


Breadcrumbs::for('admin.affectations.profsmatieres', function ($trail) {
    $trail->push(__('text.ProfsMatieres.lbl'), route('profsmatieres.index'));
});
Breadcrumbs::for('admin.affectations.profsmatieres.add', function ($trail) {
    $trail->parent('admin.affectations.profsmatieres');
    $trail->push(__('text.ProfsMatieres.add'), route('profsmatieres.create'));
});
Breadcrumbs::for('admin.affectations.profsmatieres.edit', function ($trail, $id) {
    $trail->parent('admin.affectations.profsmatieres');
    $trail->push(__('text.ProfsMatieres.edit'), route('profsmatieres.edit', $id));
});

// Admin->Affectations->ClasseExam


Breadcrumbs::for('admin.affectations.classesexams', function ($trail) {
    $trail->push(__('text.ClassesExams.lbl'), route('classesexams.index'));
});
Breadcrumbs::for('admin.affectations.classesexams.add', function ($trail) {
    $trail->parent('admin.affectations.classesexams');
    $trail->push(__('text.ClassesExams.add'), route('classesexams.create'));
});
Breadcrumbs::for('admin.affectations.classesexams.edit', function ($trail, $id) {
    $trail->parent('admin.affectations.classesexams');
    $trail->push(__('text.classesexams.edit'), route('classesexams.edit', $id));
});

// Admin->Affectations->ClasseNiveauFiliere


Breadcrumbs::for('admin.affectations.classesniveauxfilieres', function ($trail) {
    $trail->push(__('text.ClassesNiveauxFilieres.lbl'), route('classesniveauxfilieres.index'));
});
Breadcrumbs::for('admin.affectations.classesniveauxfilieres.add', function ($trail) {
    $trail->parent('admin.affectations.classesniveauxfilieres');
    $trail->push(__('text.ClassesNiveauxFilieres.add'), route('classesniveauxfilieres.create'));
});
Breadcrumbs::for('admin.affectations.classesniveauxfilieres.edit', function ($trail, $id) {
    $trail->parent('admin.affectations.classesniveauxfilieres');
    $trail->push(__('text.classesniveauxfilieres.edit'), route('classesniveauxfilieres.edit', $id));
});

Breadcrumbs::for('admin.affectations.classescontrolesmatieres', function ($trail) {
    $trail->push(__('text.ClassesControlesMatieres.lbl'), route('classescontrolesmatieres.index'));
});
Breadcrumbs::for('admin.affectations.classescontrolesmatieres.add', function ($trail) {
    $trail->parent('admin.affectations.classescontrolesmatieres');
    $trail->push(__('text.ClassesControlesMatieres.add'), route('classescontrolesmatieres.create'));
});
Breadcrumbs::for('admin.affectations.classescontrolesmatieres.edit', function ($trail, $id) {
    $trail->parent('admin.affectations.classescontrolesmatieres');
    $trail->push(__('text.ClassesControlesMatieres.edit'), route('classescontrolesmatieres.edit', $id));
});