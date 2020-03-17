<?php
//ESPACE ADMIN
// Parametre->ANNE SCOLAIRE
Breadcrumbs::for('admin.parametre.anneesscolaire', function ($trail) {
    $trail->push(__('text.AnneesScolaire.lbl'), route('anneesscolaire.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.anneesscolaire_add', function ($trail) {
    $trail->parent('anneesscolaire');
    $trail->push(__('text.AnneesScolaire.add'), route('anneesscolaire.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.anneesscolaire_edit', function ($trail, $id) {
    $trail->parent('anneesscolaire');
    $trail->push(__('text.AnneesScolaire.edit'), route('anneesscolaire.edit', $id));
});

Breadcrumbs::for('admin.parametre.niveaux', function ($trail) {
    $trail->push(__('text.Niveaux.lbl'), route('niveaux.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.niveaux_add', function ($trail) {
    $trail->parent('niveaux');
    $trail->push(__('text.Niveaux.add'), route('niveaux.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.niveaux_edit', function ($trail, $id) {
    $trail->parent('niveaux');
    $trail->push(__('text.Niveaux.edit'), route('niveaux.edit', $id));
});

Breadcrumbs::for('admin.parametre.salles.', function ($trail) {
    $trail->push(__('text.Salles.lbl'), route('salles.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.salles_add', function ($trail) {
    $trail->parent('salles');
    $trail->push(__('text.Salles.add'), route('salles.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.salles_edit', function ($trail, $id) {
    $trail->parent('salles');
    $trail->push(__('text.Salles.edit'), route('salles.edit', $id));
});

Breadcrumbs::for('admin.parametre.classes', function ($trail) {
    $trail->push(__('text.Classes.lbl'), route('classes.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.classes_add', function ($trail) {
    $trail->parent('classes');
    $trail->push(__('text.Classes.add'), route('classes.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.classes_edit', function ($trail, $id) {
    $trail->parent('classes');
    $trail->push(__('text.Classes.edit'), route('classes.edit', $id));
});

Breadcrumbs::for('admin.parametre.filieres', function ($trail) {
    $trail->push(__('text.Filieres.lbl'), route('filieres.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.filieres_add', function ($trail) {
    $trail->parent('filieres');
    $trail->push(__('text.Filieres.add'), route('filieres.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.filieres_edit', function ($trail, $id) {
    $trail->parent('filieres');
    $trail->push(__('text.Filieres.edit'), route('filieres.edit', $id));
});

Breadcrumbs::for('admin.parametre.controles', function ($trail) {
    $trail->push(__('text.Controles.lbl'), route('controles.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.controles_add', function ($trail) {
    $trail->parent('controles');
    $trail->push(__('text.Controles.add'), route('controle.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.controles_edit', function ($trail, $id) {
    $trail->parent('controles');
    $trail->push(__('text.Controles.edit'), route('controles.edit', $id));
});
Breadcrumbs::for('admin.parametre.exams', function ($trail) {
    $trail->push(__('text.Exams.lbl'), route('exams.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.exams_add', function ($trail) {
    $trail->parent('exams');
    $trail->push(__('text.Exams.add'), route('exams.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.exams_edit', function ($trail, $id) {
    $trail->parent('exams');
    $trail->push(__('text.Exams.edit'), route('exams.edit', $id));
});

Breadcrumbs::for('admin.parametre.evenements', function ($trail) {
    $trail->push(__('text.Evenements.lbl'), route('evenements.index'));
});

// Home > About
Breadcrumbs::for('admin.parametre.evenements_add', function ($trail) {
    $trail->parent('evenements');
    $trail->push(__('text.Evenements.add'), route('evenements.create'));
});

// Home > About
Breadcrumbs::for('admin.parametre.evenements_edit', function ($trail, $id) {
    $trail->parent('evenements');
    $trail->push(__('text.Evenements.edit'), route('evenements.edit', $id));
});



Breadcrumbs::for('admin.eleves.eleves', function ($trail) {
    $trail->push(__('text.Eleves.lbl'), route('eleves.index'));
});

// Home > About
Breadcrumbs::for('admin.eleves.eleves_add', function ($trail) {
    $trail->parent('eleves');
    $trail->push(__('text.Eleves.add'), route('eleves.create'));
});

// Home > About
Breadcrumbs::for('admin.eleves.eleves_edit', function ($trail, $id) {
    $trail->parent('eleves');
    $trail->push(__('text.Eleves.edit'), route('eleves.edit', $id));
});


Breadcrumbs::for('admin.eleves.absences', function ($trail) {
    $trail->push(__('text.Eleves.lbl'), route('eleves.index'));
});

// Home > About
Breadcrumbs::for('admin.eleves.absences_add', function ($trail) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.add'), route('absences.create'));
});

// Home > About
Breadcrumbs::for('admin.eleves.absences_edit', function ($trail, $id) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.edit'), route('absences.edit', $id));
});
Breadcrumbs::for('admin.eleves.paiements', function ($trail) {
    $trail->push(__('text.Paiemenets.lbl'), route('paiemenets.index'));
});

// Home > About
Breadcrumbs::for('admin.eleves.paiements_add', function ($trail) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.add'), route('paiements.create'));
});

// Home > About
Breadcrumbs::for('admin.eleves.paiements_edit', function ($trail, $id) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.edit'), route('paiements.edit', $id));
});

Breadcrumbs::for('admin.eleves.emploisdutemps', function ($trail) {
    $trail->push(__('text.EmploisDuTemps.lbl'), route('emploisdutemps.index'));
});

// Home > About
Breadcrumbs::for('admin.eleves.emploisdutemps_add', function ($trail) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisDuTemps.add'), route('emploisdutemps.create'));
});

// Home > About
Breadcrumbs::for('admin.eleves.emploisdutemps_edit', function ($trail, $id) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisduTemps.edit'), route('empoisdutemps.edit', $id));
});
Breadcrumbs::for('admin.prof.profs', function ($trail) {
    $trail->push(__('text.Profs.lbl'), route('profs.index'));
});

// Home > About
Breadcrumbs::for('admin.prof.profs_add', function ($trail) {
    $trail->parent('profs');
    $trail->push(__('text.Profs.add'), route('profs.create'));
});

// Home > About
Breadcrumbs::for('admin.profs.profs_edit', function ($trail, $id) {
    $trail->parent('profs');
    $trail->push(__('text.Profs.edit'), route('profs.edit', $id));
});


Breadcrumbs::for('admin.profs.absences', function ($trail) {
    $trail->push(__('text.Absences.lbl'), route('absences.index'));
});

// Home > About
Breadcrumbs::for('admin.profs.absences_add', function ($trail) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.add'), route('absences.create'));
});

// Home > About
Breadcrumbs::for('admin.profs.absences_edit', function ($trail, $id) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.edit'), route('absences.edit', $id));
});
Breadcrumbs::for('admin.profs.paiements', function ($trail) {
    $trail->push(__('text.Paiemenets.lbl'), route('paiemenets.index'));
});

// Home > About
Breadcrumbs::for('admin.profs.paiements_add', function ($trail) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.add'), route('paiements.create'));
});

// Home > About
Breadcrumbs::for('admin.profs.paiements_edit', function ($trail, $id) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.edit'), route('paiements.edit', $id));
});

Breadcrumbs::for('admin.profs.emploisdutemps', function ($trail) {
    $trail->push(__('text.EmploisDuTemps.lbl'), route('emploisdutemps.index'));
});

// Home > About
Breadcrumbs::for('admin.profs.emploisdutemps_add', function ($trail) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisDuTemps.add'), route('emploisdutemps.create'));
});

// Home > About
Breadcrumbs::for('admin.profs.emploisdutemps_edit', function ($trail, $id) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisduTemps.edit'), route('empoisdutemps.edit', $id));
});

Breadcrumbs::for('admin.affectations.profsmatieres', function ($trail) {
    $trail->push(__('text.ProfsMatieres.lbl'), route('profsMatieres.index'));
});

// Home > About
Breadcrumbs::for('admin.affectations.profsmatieres_add', function ($trail) {
    $trail->parent('profsmatieres');
    $trail->push(__('text.ProfsMatieres.add'), route('profsmatieres.create'));
});

// Home > About
Breadcrumbs::for('admin.affectations.profsmatieres_edit', function ($trail, $id) {
    $trail->parent('profsmatieres');
    $trail->push(__('text.ProfsMatieres.edit'), route('profsmatieres.edit', $id));
});

Breadcrumbs::for('admin.affectations.classesexams', function ($trail) {
    $trail->push(__('text.ClassesExams.lbl'), route('classesexams.index'));
});

// Home > About
Breadcrumbs::for('admin.affectations.classesexams_add', function ($trail) {
    $trail->parent('classesexams');
    $trail->push(__('text.ClassesExams.add'), route('classesexams.create'));
});

// Home > About
Breadcrumbs::for('admin.affectations.classesexams_edit', function ($trail, $id) {
    $trail->parent('classesexams');
    $trail->push(__('text.classesexams.edit'), route('classesexams.edit', $id));
});

Breadcrumbs::for('admin.affectations.classesniveauxfilieres', function ($trail) {
    $trail->push(__('text.ClassesNiveauxFilieres.lbl'), route('classesniveauxfilieres.index'));
});

// Home > About
Breadcrumbs::for('admin.affectations.classesniveauxfilieres_add', function ($trail) {
    $trail->parent('classesniveauxfilieres');
    $trail->push(__('text.ClassesNiveauxFilieres.add'), route('classesniveauxfilieres.create'));
});

// Home > About
Breadcrumbs::for('admin.affectations.classesniveauxfilieres_edit', function ($trail, $id) {
    $trail->parent('classesniveauxfilieres');
    $trail->push(__('text.classesniveauxfilieres.edit'), route('classesniveauxfilieres.edit', $id));
});




