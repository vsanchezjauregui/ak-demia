<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-red">
  <a class="navbar-brand" href="#">Akdemia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav">
        <a class="nav-link nav-item" href="{{ route('users.index') }}">Usuarios</a>  
      </div>
      <div class="navbar-nav">
        <a class="nav-link nav-item" href="{{ route('teachers.index') }}">Profesores</a>  
      </div>
      <div class="navbar-nav">
        <a class="nav-link nav-item" href="{{ route('faculties.index') }}">Facultades</a>  
      </div>
      <div class="navbar-nav">
        <a class="nav-link nav-item" href="{{ route('careers.index') }}">Carreras</a>  
      </div>
      <div class="navbar-nav">
          <a class="nav-link nav-item" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i></a>
      </div>
  </div>
</nav>    
</div>
