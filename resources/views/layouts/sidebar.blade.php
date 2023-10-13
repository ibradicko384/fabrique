<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{url('admin/assets/images/faces/face1.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
               
            @if(Auth::guard('admin')->user()->type=="apprenant")
            <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Apprenant</span>
                  <span class="text-secondary text-small">Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Gestion</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item"> <a class="nav-link" href="{{url('apprenant/demande')}}">Demmande</a></li>
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Gestion de l'accès</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-hospital-building menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/programme')}}">Programme</a></li>
                <span class="menu-title">Apprenants inscrits</span>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">17h à 20h</a></li>
                <span class="menu-title">Samedi et dimanche</span>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">9h à 20h</a></li>
                </ul>
              </div>
            </li> -->
            @else
            <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Admin</span>
                  <span class="text-secondary text-small">Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Gestion</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/admin/admin')}}">Admin</a></li>

                  <li class="nav-item"> <a class="nav-link" href="{{url('apprenants-inactifs')}}">Inscription en attente</a></li>

                  <li class="nav-item"> <a class="nav-link" href="{{url('apprenants-actifs')}}">Apprenant inscris</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Gestion de l'accès</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-hospital-building menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/programme')}}">Programme</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/demande')}}">Demmande en cours</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/demandeapprouver')}}">Demmande approuver</a></li>
                </ul>
              </div>
            </li>
            @endif

            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4"><a href="{{url('deconnexion')}}">Deconnexion</a></button>
                <div class="mt-4">
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li>
          </ul>
        </nav>