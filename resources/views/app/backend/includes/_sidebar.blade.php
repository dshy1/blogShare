

<!-- ########## START: LEFT PANEL ########## -->
<div class="container">
    <div class="br-logo"><a href="{{ route('home') }}"><span>[</span>jana <i>admin</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">

      {{-- Menu --}}
      <label class="sidebar-label">Navegação</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ route('home') }}" class="{{ (request()->is('dashboard')) ? 'br-menu-link active' : 'br-menu-link' }}"> 
            <i class="material-icons">dashboard</i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
          <a href="#" class="{{ (request()->is('posts')) || (request()->is('posts/create'))  ? 'br-menu-link active' : 'br-menu-link' }}">
            <i class="material-icons">photo</i>
            <span class="menu-item-label">Posts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('posts.create') }}" class="sub-link">Novo Post</a></li>
            <li class="sub-item"><a href="{{ route('posts.index') }}" class="sub-link">Todos os Posts</a></li>
          </ul>
        </li>
        
        @can('cria-categoria')
          <li class="br-menu-item">
            <a href="#" class="{{ (request()->is('categorias')) || (request()->is('categorias/create'))? 'br-menu-link active' : 'br-menu-link' }}">
              <i class="material-icons">class</i>
              <span class="menu-item-label">Categorias</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item"><a href="{{ route('categorias.create') }}" class="sub-link">Nova Categoria</a></li>
              <li class="sub-item"><a href="{{ route('categorias.index') }}" class="sub-link">Todas as Categorias</a></li>
            </ul>
          </li><!-- br-menu-item -->
        @endcan
        
        @can('cria-user')
          <li class="br-menu-item">
            <a href="#" class="{{ (request()->is('users')) || (request()->is('users/create'))? 'br-menu-link active' : 'br-menu-link' }}">
              <i class="material-icons">group</i>
              <span class="menu-item-label">Membros</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item"><a href="{{ route('users.create') }}" class="sub-link">Novo Membro</a></li>
              <li class="sub-item"><a href="{{ route('users.index') }}" class="sub-link">Todos os Membros</a></li>
            </ul>
          </li><!-- br-menu-item -->
        @endcan
        
        <li class="br-menu-item">
          <a href="{{ route('users.edit', Auth::user()->id) }}" class="{{ (request()->is('users/*/edit')) ? 'br-menu-link active' : 'br-menu-link' }}">
            <i class="material-icons">person</i>
            <span class="menu-item-label">Ver Perfil</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

      </ul><!-- br-sideleft-menu -->

      <br>
    </div><!-- br-sideleft -->
</div>
<!-- ########## END: LEFT PANEL ########## -->


