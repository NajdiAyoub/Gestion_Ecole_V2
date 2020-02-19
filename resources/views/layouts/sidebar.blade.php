
   
        
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('alte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
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
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        @if(auth()->user()["role"] == 1) 
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                {{__('text.EspacesProfs.btn') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{__('text.Absences.btn') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{__('text.Paiements.btn') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__('text.Emplois.btn') }}</p>
                </a>
              </li>
            </ul>





              
              <ul class="nav nav-pills nav-sidebar2 flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                      {{__('text.EspacesEleves.btn') }}
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{__('text.Absences.btn') }}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{__('text.Paiements.btn') }}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{__('text.EmploisDuTemps.btn') }} </p>
                      </a>
                    </li>
                  </ul>

                  <!--parametre!-->

                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-compress-arrows-alt"></i>
                    <p>
                      Paramettres
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Eleves</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Niveaux</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Classes</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fileres</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Annees Scolaire</p>
                      </a>
                    </li>







                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-compress-arrows-alt"></i>
                      <p>
                        {{__('text.Affectations.btn') }}
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="./index.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{__('text.ProfsMatieres.btn') }}</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{__('text.ClassesExams.btn') }}</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Eleves Classes</p>
                        </a>
                      </li>

                     
                    </ul>

                      @endif

                <!--menu Eleves -->

                @if(auth()->user()["role"] == 2) 

 

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p> {{__('text.Acceuil.txt') }}  </p>
        </a>


        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('listesCours')}}"  class="nav-link active">
            <i class="nav-icon fas fa-folder"></i>

              
                <p>
                  {{__('text.Cours.btn') }}
                </p>
              </a>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="{{ route('listesAbsences')}}" class="nav-link active">
                <i class="nav-icon fas fa-list-alt"></i>

                <p>
                  {{__('text.Absences.btn') }}
                </p>
              </a>
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('emplois')}}" class="nav-link active">
                      <i class="nav-icon fas fa-calendar-alt"></i>

                      <p>
                        {{__('text.EmploisDuTemps.btn') }}
                      </p>
                    </a>

                    <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                          <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-sticky-note"></i>

                            <p>
                              {{__('text.BulletinsEtNotes.btn') }}
                            </p>
                          </a>
                          <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview menu-open">
                                <a href="{{ route('listesPaiements')}}" class="nav-link active">
                                  <i class="nav-icon fas fa-money-bill-alt"></i>

                                  <p>
                                    {{__('text.Paiements.btn') }}

                                  </p>
                                </a>
                                <nav class="mt-2">
                                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                                         with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-open">
                                      <a href="{{ route('listesEvenements')}}" class="nav-link active">
                                        <i class="nav-icon fas fa-calendar-check"></i>

                                        <p>
                           {{__('text.EvenementsEtActualites.btn') }}
                                        </p>
                                      </a>
      
        
        
        
          @endif
                     <!--menu Profs -->

                     @if(auth()->user()["role"] == 3) 

                       

                     <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                          <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                              {{__('text.Dashboard.txt') }}
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                  <p>
                                    {{__('text.Classes.btn') }}
                                  </p>
                                </a>
                                <nav class="mt-2">
                                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                                         with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-open">
                                      <a href="#" class="nav-link active">
                                        <p>
                                          {{__('text.Absences.btn') }}
                                        </p>
                                      </a>
                                      <nav class="mt-2">
                                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                          <!-- Add icons to the links using the .nav-icon class
                                               with font-awesome or any other icon font library -->
                                          <li class="nav-item has-treeview menu-open">
                                            <a href="#" class="nav-link active">
                                              <p>
                                                {{__('text.EmploisDuTemps.btn') }}
                                              </p>
                                            </a>
                                            <nav class="mt-2">
                                              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                                <!-- Add icons to the links using the .nav-icon class
                                                     with font-awesome or any other icon font library -->
                                                <li class="nav-item has-treeview menu-open">
                                                  <a href="#" class="nav-link active">
                                                    <p>
                                                      {{__('text.Paiements.btn') }}
                                                    </p>
                                                  </a>
                                                  <nav class="mt-2">
                                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                                      <!-- Add icons to the links using the .nav-icon class
                                                           with font-awesome or any other icon font library -->
                                                      <li class="nav-item has-treeview menu-open">
                                                        <a href="#" class="nav-link active">
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
  