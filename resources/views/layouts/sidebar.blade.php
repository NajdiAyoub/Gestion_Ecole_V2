<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{ asset('alte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"> {{__('text.GestionEcole.lbl') }}</span>
</a>
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('alte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()["name"]}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        @if(auth()->user()["role"] == 1)
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-{{isOpen('admin.prof',request())}}">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>
                        {{__('text.EspacesProfs.btn') }}
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('profs.index')}}" class="nav-link {{isActive('admin.prof.profs',request())}}">
                            <i class="far fa{{isChecked('admin.prof.profs',request())}}-circle nav-icon"></i>
                            <p> {{__('text.Profs.btn') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('absencesprofs.index')}}"
                            class="nav-link {{isActive('admin.prof.absences',request())}}">
                            <i class="far fa{{isChecked('admin.prof.absences',request())}}-circle nav-icon"></i>
                            <p> {{__('text.Absences.btn') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('paiementsprofs.index')}}"
                            class="nav-link {{isActive('admin.prof.paiements',request())}}">
                            <i class="far fa{{isChecked('admin.prof.paiements',request())}}-circle nav-icon"></i>
                            <p> {{__('text.Paiements.btn') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('emploisdutempsprofs.index')}}"
                            class="nav-link {{isActive('admin.prof.emploisdutemps',request())}}">
                            <i class="far fa{{isChecked('admin.prof.emploisdutemps',request())}}-circle nav-icon"></i>
                            <p>{{__('text.Emplois.btn') }}</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-pills nav-sidebar2 flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-{{isOpen('admin.eleves',request())}}">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                {{__('text.EspacesEleves.btn') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('eleves.index')}}"
                                    class="nav-link  {{isActive('admin.eleves.eleves',request())}}">
                                    <i class="far fa{{isChecked('admin.eleves.eleves',request())}}-circle nav-icon"></i>
                                    <p>{{__('text.Eleves.btn') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('absenceseleves.index')}}"
                                    class="nav-link  {{isActive('admin.eleves.absences',request())}}">
                                    <i
                                        class="far fa{{isChecked('admin.eleves.absences',request())}}-circle nav-icon"></i>
                                    <p>{{__('text.Absences.btn') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('paiementseleves.index')}}"
                                    class="nav-link {{isActive('admin.eleves.paiements',request())}} ? 'active' : ''}}">
                                    <i
                                        class="far fa{{isChecked('admin.eleves.paiements',request())}}-circle nav-icon"></i>
                                    <p>{{__('text.Paiements.btn') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('emploisdutempseleves.index')}}"
                                    class="nav-link {{isActive('admin.eleves.emploisdutempseleves',request())}}">
                                    <i
                                        class="far fa{{isChecked('admin.eleves.emploisdutempseleves',request())}}-circle nav-icon"></i>
                                    <p>{{__('text.EmploisDuTemps.btn') }} </p>
                                </a>
                            </li>
                        </ul>

                        <!--parametre!-->

                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-{{isOpen('admin.parametre',request())}}">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        {{__('text.Paramettres.btn') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="{{ route('anneesscolaire.index')}}"
                                            class="nav-link {{isActive('admin.parametre.anneesscolaire',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.anneesscolaire',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.AnneesScolaire.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('niveaux.index')}}"
                                            class="nav-link {{isActive('admin.parametre.niveaux',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.niveaux',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.Niveaux.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('salles.index')}}"
                                            class="nav-link {{isActive('admin.parametre.salles',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.salles',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.Salles.btn') }}</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('classes.index')}}"
                                            class="nav-link {{isActive('admin.parametre.classes',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.classes',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.Classes.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('filieres.index')}}"
                                            class="nav-link {{isActive('admin.parametre.filieres',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.filieres',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.Filieres.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('controles.index')}}"
                                            class="nav-link {{isActive('admin.parametre.controles',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.controles',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.Controles.btn') }}</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('exams.index')}}"
                                            class="nav-link {{isActive('admin.parametre.exams',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.exams',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.Exams.btn') }}</p>
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('evenements.index')}}"
                                            class="nav-link {{isActive('admin.parametre.evenements',request())}}">
                                            <i
                                                class="far fa{{isChecked('admin.parametre.evenements',request())}}-circle nav-icon"></i>
                                            <p>{{__('text.Evenements.btn') }}</p>
                                        </a>
                                    </li>

                                </ul>
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                    data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-{{isOpen('admin.affectations',request())}}">
                                        <a href="#" class="nav-link active">
                                            <i class="nav-icon fas fa-compress-arrows-alt"></i>
                                            <p>
                                                {{__('text.Affectations.btn') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('profsmatieres.index')}}"
                                                    class="nav-link {{isActive('admin.affectations.profsmatieres',request())}}">
                                                    <i
                                                        class="far fa{{isChecked('admin.affectations.profsmatieres',request())}}-circle nav-icon"></i>
                                                    <p>{{__('text.ProfsMatieres.btn') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('classesexams.index')}}"
                                                    class="nav-link  {{isActive('admin.affectations.classesexams',request())}}">
                                                    <i
                                                        class="far fa{{isChecked('admin.affectations.classesexams',request())}}-circle nav-icon"></i>
                                                    <p>{{__('text.ClassesExams.btn') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('classesniveauxfilieres.index')}}"
                                                    class="nav-link {{isActive('admin.affectations.classesniveauxfilieres',request())}}">
                                                    <i
                                                        class="far fa{{isChecked('admin.affectations.classesniveauxfilieres',request())}}-circle nav-icon"></i>
                                                    <p>{{__('text.ClassesNiveauxFilieres.btn')}}</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('classescontrolesmatieres.index')}}"
                                                    class="nav-link {{isActive('admin.affectations.classescontrolesmatieres',request())}}">
                                                    <i
                                                        class="far fa{{isChecked('admin.affectations.classescontrolesmatieres',request())}}-circle nav-icon"></i>
                                                    <p>{{__('text.ClassesControlesMatieres.btn')}}</p>
                                                </a>
                                            </li>
                                        </ul>

                                        @endif

                                        <!--menu Eleves -->

                                        @if(auth()->user()["role"] == 2)



                                        <nav class="mt-2">
                                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                                role="menu" data-accordion="false">
                                                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                                                <li class="nav-item has-treeview menu">
                                                    <a href="#" class="nav-link ">
                                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                                        <p> {{__('text.Acceuil.txt') }} </p>
                                                    </a>


                                                    <nav class="mt-2">
                                                        <ul class="nav nav-pills nav-sidebar flex-column"
                                                            data-widget="treeview" role="menu" data-accordion="false">
                                                            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                                                            <li class="nav-item has-treeview menu-open">
                                                                <a href="{{ route('Cours.index')}}"
                                                                    class="nav-link {{request()->is('Cours/Cours') ? 'active' : ''}}">
                                                                    <i class="nav-icon fas fa-folder"></i>


                                                                    <p>
                                                                        {{__('text.Cours.btn') }}
                                                                    </p>
                                                                </a>
                                                                <nav class="mt-2">
                                                                    <ul class="nav nav-pills nav-sidebar flex-column"
                                                                        data-widget="treeview" role="menu"
                                                                        data-accordion="false">
                                                                        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                                                                        <li class="nav-item has-treeview menu-open">
                                                                            <a href="{{ route('Absences.index')}}"
                                                                                class="nav-link  {{request()->is('Absences/Absences') ? 'active' : ''}}">
                                                                                <i class="nav-icon fas fa-list-alt"></i>

                                                                                <p>
                                                                                    {{__('text.Absences.btn') }}
                                                                                </p>
                                                                            </a>
                                                                            <nav class="mt-2">
                                                                                <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                    data-widget="treeview" role="menu"
                                                                                    data-accordion="false">
                                                                                    <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                                                                                    <li
                                                                                        class="nav-item has-treeview menu-open">
                                                                                        <a href="{{ route('emplois')}}"
                                                                                            class="nav-link {{request()->is('EmploisDuTemps/emplois') ? 'active' : ''}} ">
                                                                                            <i
                                                                                                class="nav-icon fas fa-calendar-alt"></i>

                                                                                            <p>
                                                                                                {{__('text.EmploisDuTemps.btn') }}
                                                                                            </p>
                                                                                        </a>

                                                                                        <nav class="mt-2">
                                                                                            <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                data-widget="treeview"
                                                                                                role="menu"
                                                                                                data-accordion="false">
                                                                                                <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                                                                                                <li
                                                                                                    class="nav-item has-treeview menu-open">
                                                                                                    <a href="{{ route('bulletins.index')}}"
                                                                                                        class="nav-link {{request()->is('BulletinsEtNotes/bulletins') ? 'active' : ''}}">
                                                                                                        <i
                                                                                                            class="nav-icon fas fa-sticky-note"></i>

                                                                                                        <p>
                                                                                                            {{__('text.BulletinsEtNotes.btn') }}
                                                                                                        </p>
                                                                                                    </a>
                                                                                                    <nav class="mt-2">
                                                                                                        <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                            data-widget="treeview"
                                                                                                            role="menu"
                                                                                                            data-accordion="false">
                                                                                                            <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                                                                                                            <li
                                                                                                                class="nav-item has-treeview menu-open">
                                                                                                                <a href="{{ route('Paiements.index')}}"
                                                                                                                    class="nav-link {{request()->is('Paiements/Paiements') ? 'active' : ''}}">
                                                                                                                    <i
                                                                                                                        class="nav-icon fas fa-money-bill-alt"></i>

                                                                                                                    <p>
                                                                                                                        {{__('text.Paiements.btn') }}

                                                                                                                    </p>
                                                                                                                </a>
                                                                                                                <nav
                                                                                                                    class="mt-2">
                                                                                                                    <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                                        data-widget="treeview"
                                                                                                                        role="menu"
                                                                                                                        data-accordion="false">
                                                                                                                        <!-- Add icons to the links using the .nav-icon class
                                         with font-awesome or any other icon font library -->
                                                                                                                        <li
                                                                                                                            class="nav-item has-treeview menu-open">
                                                                                                                            <a href="{{ route('Evenements.index')}}"
                                                                                                                                class="nav-link {{request()->is('Evenements/Evenements') ? 'active' : ''}}">
                                                                                                                                <i
                                                                                                                                    class="nav-icon fas fa-calendar-check"></i>

                                                                                                                                <p>
                                                                                                                                    {{__('text.EvenementsEtActualites.btn') }}
                                                                                                                                </p>
                                                                                                                            </a>




                                                                                                                            @endif
                                                                                                                            <!--menu Profs -->

                                                                                                                            @if(auth()->user()["role"]
                                                                                                                            ==
                                                                                                                            3)



                                                                                                                            <nav
                                                                                                                                class="mt-2">
                                                                                                                                <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                                                    data-widget="treeview"
                                                                                                                                    role="menu"
                                                                                                                                    data-accordion="false">
                                                                                                                                    <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                                                                                                                                    <li
                                                                                                                                        class="nav-item has-treeview menu-open">
                                                                                                                                        <a href="#"
                                                                                                                                            class="nav-link active">
                                                                                                                                            <i
                                                                                                                                                class="nav-icon fas fa-tachometer-alt"></i>
                                                                                                                                            <p>
                                                                                                                                                {{__('text.Dashboard.txt') }}
                                                                                                                                                <i
                                                                                                                                                    class="right fas fa-angle-left"></i>
                                                                                                                                            </p>
                                                                                                                                        </a>

                                                                                                                                        <nav
                                                                                                                                            class="mt-2">
                                                                                                                                            <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                                                                data-widget="treeview"
                                                                                                                                                role="menu"
                                                                                                                                                data-accordion="false">
                                                                                                                                                <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                                                                                                                                                <li
                                                                                                                                                    class="nav-item has-treeview menu-open">
                                                                                                                                                    <a href="#"
                                                                                                                                                        class="nav-link active">
                                                                                                                                                        <p>
                                                                                                                                                            {{__('text.Classes.btn') }}
                                                                                                                                                        </p>
                                                                                                                                                    </a>
                                                                                                                                                    <nav
                                                                                                                                                        class="mt-2">
                                                                                                                                                        <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                                                                            data-widget="treeview"
                                                                                                                                                            role="menu"
                                                                                                                                                            data-accordion="false">
                                                                                                                                                            <!-- Add icons to the links using the .nav-icon class
                                         with font-awesome or any other icon font library -->
                                                                                                                                                            <li
                                                                                                                                                                class="nav-item has-treeview menu-open">
                                                                                                                                                                <a href="#"
                                                                                                                                                                    class="nav-link active">
                                                                                                                                                                    <p>
                                                                                                                                                                        {{__('text.Absences.btn') }}
                                                                                                                                                                    </p>
                                                                                                                                                                </a>
                                                                                                                                                                <nav
                                                                                                                                                                    class="mt-2">
                                                                                                                                                                    <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                                                                                        data-widget="treeview"
                                                                                                                                                                        role="menu"
                                                                                                                                                                        data-accordion="false">
                                                                                                                                                                        <!-- Add icons to the links using the .nav-icon class
                                               with font-awesome or any other icon font library -->
                                                                                                                                                                        <li
                                                                                                                                                                            class="nav-item has-treeview menu-open">
                                                                                                                                                                            <a href="#"
                                                                                                                                                                                class="nav-link active">
                                                                                                                                                                                <p>
                                                                                                                                                                                    {{__('text.EmploisDuTemps.btn') }}
                                                                                                                                                                                </p>
                                                                                                                                                                            </a>
                                                                                                                                                                            <nav
                                                                                                                                                                                class="mt-2">
                                                                                                                                                                                <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                                                                                                    data-widget="treeview"
                                                                                                                                                                                    role="menu"
                                                                                                                                                                                    data-accordion="false">
                                                                                                                                                                                    <!-- Add icons to the links using the .nav-icon class
                                                     with font-awesome or any other icon font library -->
                                                                                                                                                                                    <li
                                                                                                                                                                                        class="nav-item has-treeview menu-open">
                                                                                                                                                                                        <a href="#"
                                                                                                                                                                                            class="nav-link active">
                                                                                                                                                                                            <p>
                                                                                                                                                                                                {{__('text.Paiements.btn') }}
                                                                                                                                                                                            </p>
                                                                                                                                                                                        </a>
                                                                                                                                                                                        <nav
                                                                                                                                                                                            class="mt-2">
                                                                                                                                                                                            <ul class="nav nav-pills nav-sidebar flex-column"
                                                                                                                                                                                                data-widget="treeview"
                                                                                                                                                                                                role="menu"
                                                                                                                                                                                                data-accordion="false">
                                                                                                                                                                                                <!-- Add icons to the links using the .nav-icon class
                                                           with font-awesome or any other icon font library -->
                                                                                                                                                                                                <li
                                                                                                                                                                                                    class="nav-item has-treeview menu-open">
                                                                                                                                                                                                    <a href="#"
                                                                                                                                                                                                        class="nav-link active">
                                                                                                                                                                                                        <p>
                                                                                                                                                                                                            {{__('text.Cours.btn') }}
                                                                                                                                                                                                        </p>
                                                                                                                                                                                                    </a>
                                                                                                                                                                                                </li>
                                                                                                                                                                                                @endif



                                                                                                                                                                                            </ul>
                                                                                                                                                                                        </nav>
                                                                                                                                                                                        <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->