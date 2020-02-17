
    @if (auth()->user()["role"] == 1)
        
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('alte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
          <span class="brand-text font-weight-light">Welcome Admin</span>
    </a>    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @endif
 

     @if (auth()->user()["role"] == 2)
    

       <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('alte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
          <span class="brand-text font-weight-light">{{__('text.Welcome')}} {{__('text.Students')}}</span>
    </a>  
    @endif  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
       <!-- Brand Logo -->
       @if (auth()->user()["role"] == 3)
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('alte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
          <span class="brand-text font-weight-light">Welcome Professor</span>
    </a>    
    @endif
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
                Espaces Profs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absences</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paeiments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Emplois</p>
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
                      Espaces Eleves
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Absences</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Paiements</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Emplois Du Temps </p>
                      </a>
                    </li>
                  </ul>


                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-compress-arrows-alt"></i>
                      <p>
                        Affectations
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="./index.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Profs Matieres</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Classes Exams </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Emplois Du Temps</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Evenements</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Reunions</p>
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
          <p>
            Acceuil
          </p>
        </a>


        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-folder"></i>

              
                <p>
                  Cours
                </p>
              </a>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-list-alt"></i>

                <p>
                  Absences
                </p>
              </a>
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-calendar-alt"></i>

                      <p>
                        Emplois Du Temps
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
                              Bulletins Et Notes
                            </p>
                          </a>
                          <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                              <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                  <i class="nav-icon fas fa-money-bill-alt"></i>

                                  <p>
                                    Paiements
                                  </p>
                                </a>
                                <nav class="mt-2">
                                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                                         with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-open">
                                      <a href="#" class="nav-link active">
                                        <i class="nav-icon fas fa-folder"></i>

                                        <p>
                                          Evenements Et Actualites
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
                              Dashboard
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
                                    Classes
                                  </p>
                                </a>
                                <nav class="mt-2">
                                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                                         with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-open">
                                      <a href="#" class="nav-link active">
                                        <p>
                                          Absences
                                        </p>
                                      </a>
                                      <nav class="mt-2">
                                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                          <!-- Add icons to the links using the .nav-icon class
                                               with font-awesome or any other icon font library -->
                                          <li class="nav-item has-treeview menu-open">
                                            <a href="#" class="nav-link active">
                                              <p>
                                                Emplois Du Temps
                                              </p>
                                            </a>
                                            <nav class="mt-2">
                                              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                                <!-- Add icons to the links using the .nav-icon class
                                                     with font-awesome or any other icon font library -->
                                                <li class="nav-item has-treeview menu-open">
                                                  <a href="#" class="nav-link active">
                                                    <p>
                                                      Paiements
                                                    </p>
                                                  </a>
                                                  <nav class="mt-2">
                                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                                      <!-- Add icons to the links using the .nav-icon class
                                                           with font-awesome or any other icon font library -->
                                                      <li class="nav-item has-treeview menu-open">
                                                        <a href="#" class="nav-link active">
                                                          <p>
                                                            Cours
                                               </p>
                                               </a>
                                              </li>
                                            @endif
  

              
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  