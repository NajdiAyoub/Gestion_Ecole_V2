<?php
//ESPACE ADMIN
// Parametre->ANNE SCOLAIRE
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

// Parametre->NIVEAU
Breadcrumbs::for('admin.parametre.niveaux', function ($trail) {
    $trail->push(__('text.Niveaux.lbl'), route('niveaux.index'));
});
Breadcrumbs::for('admin.parametre.niveaux.add', function ($trail) {
    $trail->parent('niveaux');
    $trail->push(__('text.Niveaux.add'), route('niveaux.create'));
});
Breadcrumbs::for('admin.parametre.niveaux.edit', function ($trail, $id) {
    $trail->parent('niveaux');
    $trail->push(__('text.Niveaux.edit'), route('niveaux.edit', $id));
});

// Parametre->NIVEAU
Breadcrumbs::for('admin.parametre.salles.', function ($trail) {
    $trail->push(__('text.Salles.lbl'), route('salles.index'));
});
Breadcrumbs::for('admin.parametre.salles.add', function ($trail) {
    $trail->parent('salles');
    $trail->push(__('text.Salles.add'), route('salles.create'));
});
Breadcrumbs::for('admin.parametre.salles.edit', function ($trail, $id) {
    $trail->parent('salles');
    $trail->push(__('text.Salles.edit'), route('salles.edit', $id));
});

Breadcrumbs::for('admin.parametre.classes', function ($trail) {
    $trail->push(__('text.Classes.lbl'), route('classes.index'));
});
Breadcrumbs::for('admin.parametre.classes.add', function ($trail) {
    $trail->parent('classes');
    $trail->push(__('text.Classes.add'), route('classes.create'));
});
Breadcrumbs::for('admin.parametre.classes.edit', function ($trail, $id) {
    $trail->parent('classes');
    $trail->push(__('text.Classes.edit'), route('classes.edit', $id));
});

Breadcrumbs::for('admin.parametre.filieres', function ($trail) {
    $trail->push(__('text.Filieres.lbl'), route('filieres.index'));
});
Breadcrumbs::for('admin.parametre.filieres.add', function ($trail) {
    $trail->parent('filieres');
    $trail->push(__('text.Filieres.add'), route('filieres.create'));
});
Breadcrumbs::for('admin.parametre.filieres.edit', function ($trail, $id) {
    $trail->parent('filieres');
    $trail->push(__('text.Filieres.edit'), route('filieres.edit', $id));
});

Breadcrumbs::for('admin.parametre.controles', function ($trail) {
    $trail->push(__('text.Controles.lbl'), route('controles.index'));
});
Breadcrumbs::for('admin.parametre.controles.add', function ($trail) {
    $trail->parent('controles');
    $trail->push(__('text.Controles.add'), route('controle.create'));
});
Breadcrumbs::for('admin.parametre.controles.edit', function ($trail, $id) {
    $trail->parent('controles');
    $trail->push(__('text.Controles.edit'), route('controles.edit', $id));
});

Breadcrumbs::for('admin.parametre.exams', function ($trail) {
    $trail->push(__('text.Exams.lbl'), route('exams.index'));
});
Breadcrumbs::for('admin.parametre.exams.add', function ($trail) {
    $trail->parent('exams');
    $trail->push(__('text.Exams.add'), route('exams.create'));
});
Breadcrumbs::for('admin.parametre.exams.edit', function ($trail, $id) {
    $trail->parent('exams');
    $trail->push(__('text.Exams.edit'), route('exams.edit', $id));
});

Breadcrumbs::for('admin.parametre.evenements', function ($trail) {
    $trail->push(__('text.Evenements.lbl'), route('evenements.index'));
});
Breadcrumbs::for('admin.parametre.evenements.add', function ($trail) {
    $trail->parent('evenements');
    $trail->push(__('text.Evenements.add'), route('evenements.create'));
});
Breadcrumbs::for('admin.parametre.evenements.edit', function ($trail, $id) {
    $trail->parent('evenements');
    $trail->push(__('text.Evenements.edit'), route('evenements.edit', $id));
});

Breadcrumbs::for('admin.eleves.eleves', function ($trail) {
    $trail->push(__('text.Eleves.lbl'), route('eleves.index'));
});
Breadcrumbs::for('admin.eleves.eleves.add', function ($trail) {
    $trail->parent('eleves');
    $trail->push(__('text.Eleves.add'), route('eleves.create'));
});
Breadcrumbs::for('admin.eleves.eleves.edit', function ($trail, $id) {
    $trail->parent('eleves');
    $trail->push(__('text.Eleves.edit'), route('eleves.edit', $id));
});

Breadcrumbs::for('admin.eleves.absences', function ($trail) {
    $trail->push(__('text.Eleves.lbl'), route('eleves.index'));
});
Breadcrumbs::for('admin.eleves.absences.add', function ($trail) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.add'), route('absences.create'));
});
Breadcrumbs::for('admin.eleves.absences.edit', function ($trail, $id) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.edit'), route('absences.edit', $id));
});

Breadcrumbs::for('admin.eleves.paiements', function ($trail) {
    $trail->push(__('text.Paiemenets.lbl'), route('paiemenets.index'));
});
Breadcrumbs::for('admin.eleves.paiements.add', function ($trail) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.add'), route('paiements.create'));
});
Breadcrumbs::for('admin.eleves.paiements.edit', function ($trail, $id) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.edit'), route('paiements.edit', $id));
});

Breadcrumbs::for('admin.eleves.emploisdutemps', function ($trail) {
    $trail->push(__('text.EmploisDuTemps.lbl'), route('emploisdutemps.index'));
});
Breadcrumbs::for('admin.eleves.emploisdutemps.add', function ($trail) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisDuTemps.add'), route('emploisdutemps.create'));
});
Breadcrumbs::for('admin.eleves.emploisdutemps.edit', function ($trail, $id) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisduTemps.edit'), route('empoisdutemps.edit', $id));
});

Breadcrumbs::for('admin.prof.profs', function ($trail) {
    $trail->push(__('text.Profs.lbl'), route('profs.index'));
});
Breadcrumbs::for('admin.prof.profs.add', function ($trail) {
    $trail->parent('profs');
    $trail->push(__('text.Profs.add'), route('profs.create'));
});
Breadcrumbs::for('admin.profs.profs.edit', function ($trail, $id) {
    $trail->parent('profs');
    $trail->push(__('text.Profs.edit'), route('profs.edit', $id));
});

Breadcrumbs::for('admin.profs.absences', function ($trail) {
    $trail->push(__('text.Absences.lbl'), route('absences.index'));
});
Breadcrumbs::for('admin.profs.absences.add', function ($trail) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.add'), route('absences.create'));
});
Breadcrumbs::for('admin.profs.absences.edit', function ($trail, $id) {
    $trail->parent('absences');
    $trail->push(__('text.Absences.edit'), route('absences.edit', $id));
});

Breadcrumbs::for('admin.profs.paiements', function ($trail) {
    $trail->push(__('text.Paiemenets.lbl'), route('paiemenets.index'));
});
Breadcrumbs::for('admin.profs.paiements.add', function ($trail) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.add'), route('paiements.create'));
});
Breadcrumbs::for('admin.profs.paiements.edit', function ($trail, $id) {
    $trail->parent('paiements');
    $trail->push(__('text.Paiements.edit'), route('paiements.edit', $id));
});

Breadcrumbs::for('admin.profs.emploisdutemps', function ($trail) {
    $trail->push(__('text.EmploisDuTemps.lbl'), route('emploisdutemps.index'));
});
Breadcrumbs::for('admin.profs.emploisdutemps.add', function ($trail) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisDuTemps.add'), route('emploisdutemps.create'));
});
Breadcrumbs::for('admin.profs.emploisdutemps.edit', function ($trail, $id) {
    $trail->parent('emploisdutemps');
    $trail->push(__('text.EmploisduTemps.edit'), route('empoisdutemps.edit', $id));
});

Breadcrumbs::for('admin.affectations.profsmatieres', function ($trail) {
    $trail->push(__('text.ProfsMatieres.lbl'), route('profsMatieres.index'));
});
Breadcrumbs::for('admin.affectations.profsmatieres.add', function ($trail) {
    $trail->parent('profsmatieres');
    $trail->push(__('text.ProfsMatieres.add'), route('profsmatieres.create'));
});
Breadcrumbs::for('admin.affectations.profsmatieres.edit', function ($trail, $id) {
    $trail->parent('profsmatieres');
    $trail->push(__('text.ProfsMatieres.edit'), route('profsmatieres.edit', $id));
});

Breadcrumbs::for('admin.affectations.classesexams', function ($trail) {
    $trail->push(__('text.ClassesExams.lbl'), route('classesexams.index'));
});
Breadcrumbs::for('admin.affectations.classesexams.add', function ($trail) {
    $trail->parent('classesexams');
    $trail->push(__('text.ClassesExams.add'), route('classesexams.create'));
});
Breadcrumbs::for('admin.affectations.classesexams.edit', function ($trail, $id) {
    $trail->parent('classesexams');
    $trail->push(__('text.classesexams.edit'), route('classesexams.edit', $id));
});

Breadcrumbs::for('admin.affectations.classesniveauxfilieres', function ($trail) {
    $trail->push(__('text.ClassesNiveauxFilieres.lbl'), route('classesniveauxfilieres.index'));
});
Breadcrumbs::for('admin.affectations.classesniveauxfilieres.add', function ($trail) {
    $trail->parent('classesniveauxfilieres');
    $trail->push(__('text.ClassesNiveauxFilieres.add'), route('classesniveauxfilieres.create'));
});
Breadcrumbs::for('admin.affectations.classesniveauxfilieres.edit', function ($trail, $id) {
    $trail->parent('classesniveauxfilieres');
    $trail->push(__('text.classesniveauxfilieres.edit'), route('classesniveauxfilieres.edit', $id));
});