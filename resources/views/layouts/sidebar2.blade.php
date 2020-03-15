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
                        <a href="{{ route('listesProfs')}}"
                            class="nav-link  {{request()->is('Administrations/listesProfs') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> {{__('text.Profs.btn') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('AbsencesProfs')}}"
                            class="nav-link  {{request()->is('Administrations/AbsencesProfs') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> {{__('text.Absences.btn') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('PaiementsProfs')}}"
                            class="nav-link {{request()->is('Administrations/PaiementsProfs') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> {{__('text.Paiements.btn') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('emploisdutempsprofs')}}"
                            class="nav-link  {{request()->is('Administrations/emploisdutempsprofs') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('text.Emplois.btn') }}</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-pills nav-sidebar2 flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-{{isOpen('admin.eleve',request())}}">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                {{__('text.EspacesEleves.btn') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('listeseleves')}}"
                                    class="nav-link {{request()->is('listeseleves') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('text.Eleves.btn') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('absenceseleves')}}"
                                    class="nav-link {{request()->is('Administrations/absenceseleves') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('text.Absences.btn') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('paiementseleves')}}"
                                    class="nav-link {{request()->is('Administrations/paiementseleves') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('text.Paiements.btn') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('emploisdutempseleves')}}"
                                    class="nav-link {{request()->is('Administrations/emploisdutempseleves') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
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
                                            class="nav-link {{request()->is('anneesscolaire') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.AnneesScolaire.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('listeniveaux.index')}}"
                                            class="nav-link {{request()->is('listeniveaux') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.Niveaux.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('listessalles.index')}}"
                                            class="nav-link {{request()->is('listessalles') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.Salles.btn') }}</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('listesclasses.index')}}"
                                            class="nav-link {{request()->is('listesclasses') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.Classes.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('listesfilieres.index')}}"
                                            class="nav-link {{request()->is('listesfilieres') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.Filieres.btn') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('listescontroles')}}"
                                            class="nav-link {{request()->is('Administrations/listescontroles') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.Controles.btn') }}</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('listesexams')}}"
                                            class="nav-link {{request()->is('Administrations/listesexams') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.Exams.btn') }}</p>
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('listesevenements')}}"
                                            class="nav-link {{request()->is('Administrations/listesevenements') ? 'active' : ''}}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{__('text.Evenements.btn') }}</p>
                                        </a>
                                    </li>

                                </ul>
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                    data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-{{isOpen('admin.affectation',request())}}">
                                        <a href="#" class="nav-link active">
                                            <i class="nav-icon fas fa-compress-arrows-alt"></i>
                                            <p>
                                                {{__('text.Affectations.btn') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('profsmatiers')}}"
                                                    class="nav-link  {{request()->is('classesexams') ? 'active' : ''}}">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>{{__('text.ProfsMatieres.btn') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('classesexams')}}"
                                                    class="nav-link  {{request()->is('Administrations/classesexams') ? 'active' : ''}}">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>{{__('text.ClassesExams.btn') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('listesclassesniveauxfilieres')}}"
                                                    class="nav-link  {{request()->is('Administrations/listesclassesniveauxfilieres') ? 'active' : ''}}">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>{{__('text.ClassesNiveauxFilieres.btn')}}</p>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('listesclassescontrolesmatieres')}}"
                                                    class="nav-link  {{request()->is('Administrations/listescontrolesmatieres') ? 'active' : ''}}">
                                                    <i class="far fa-circle nav-icon"></i>
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
                                                                <a href="{{ route('listesCours')}}"
                                                                    class="nav-link {{request()->is('Cours/listesCours') ? 'active' : ''}}">
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
                                                                            <a href="{{ route('listesAbsences')}}"
                                                                                class="nav-link  {{request()->is('Absences/listesAbsences') ? 'active' : ''}}">
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
                                                                                                    <a href="{{ route('bulletins')}}"
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
                                                                                                                <a href="{{ route('listesPaiements')}}"
                                                                                                                    class="nav-link {{request()->is('Paiements/listesPaiements') ? 'active' : ''}}">
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
                                                                                                                            <a href="{{ route('listesEvenements')}}"
                                                                                                                                class="nav-link {{request()->is('Evenements/listesEvenements') ? 'active' : ''}}">
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
