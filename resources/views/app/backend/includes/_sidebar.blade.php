
<style type="text/css">
  
  #side-menu {
    min-height: 100vh;
  }
  #side-menu li {
    color: #7b919e;
  }
  a.waves-effect:hover {
    color: #d7e4ec;
  }
  .mm-active {
    color: #d7e4ec!important;
  }
</style>

<!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

      <div data-simplebar class="h-100">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
              <!-- Left Menu Start -->
              <ul class="metismenu list-unstyled" id="side-menu">
                  <li class="menu-title">Menu</li>

                  <li>
                      <a href="{{ route('home') }}" class="waves-effect">
                          <i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-success float-right">3</span>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="mdi mdi-pencil-box-multiple"></i>
                          <span>Blog</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="{{ route('posts.index') }}">Posts</a></li>
                          <li><a href="#">Categorias</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="#" class="waves-effect">
                          <i class="mdi mdi-account-multiple-outline"></i>
                          <span>Membros</span>
                      </a>
                  </li>

                  <li>
                      <a href="#" class="waves-effect">
                          <i class="mdi mdi-layers-triple"></i>
                          <span>Clientes</span>
                      </a>
                  </li>

                  <li>
                      <a href="#" class="waves-effect">
                          <i class="mdi mdi-account-lock"></i>
                          <span>Ver Perfil</span>
                      </a>
                  </li>

              </ul>

              <div class="sidebar-section mt-5 mb-3">
                  <h6 class="text-reset font-weight-medium">
                      Project Completed
                      <span class="float-right">67%</span>
                  </h6>
                  <div class="progress mt-3" style="height: 4px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
          <!-- Sidebar -->
      </div>
  </div>
  <!-- Left Sidebar End -->

