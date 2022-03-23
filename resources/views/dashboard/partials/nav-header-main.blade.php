<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">


        <a class="navbar-brand" href="{{ route('home') }}">Larablog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">


                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false">CRUD</a>
                    <div class="dropdown-menu">

                      <a class="dropdown-item" href="{{route('posts.index')}}">Post</a>
                      <a class="dropdown-item" href="{{route('category.index')}}">Categorias</a>

                      <div class="dropdown-divider"></div>
                    </div>
                </div>
             </li>
            </ul>
              {{--  BARRA DE NAVEGACION DE LOGIN  --}}
         <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Login <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout<span class="sr-only"></span></a>
              </li>

            </a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Perfil</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <div class="dropdown-divider"></div>
                </div>

          </li>
     </ul>

{{-- FIN DE  BARRA DE NAVEGACION DE LOGIN  --}}
    </div>
</nav>
