<?php
//ESPACE ADMIN
// Parametre
Breadcrumbs::for('anneesscolaire', function ($trail) {
    $trail->push(__('text.AnneesScolaire.lbl'), route('anneesscolaire.index'));
});

// Home > About
Breadcrumbs::for('anneesscolaire_add', function ($trail) {
    $trail->parent('anneesscolaire');
    $trail->push(__('text.AnneesScolaire.add'), route('anneesscolaire.create'));
});

// Home > About
Breadcrumbs::for('anneesscolaire_edit', function ($trail, $id) {
    $trail->parent('anneesscolaire');
    $trail->push(__('text.AnneesScolaire.edit'), route('anneesscolaire.edit', $id));
});