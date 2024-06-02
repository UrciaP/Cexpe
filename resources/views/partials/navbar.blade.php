
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ setActivo('home') }}">
                <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ setActivo('programas') }}">
                <a class="nav-link" href="programas">Programas</a>
            </li>

            <li class="nav-item {{ setActivo('talleres') }}">
                <a class="nav-link" href="talleres">Talleres</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Talleres
                </a>
                @yield('listtalleres')
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Danza</a>
                    <a class="dropdown-item" href="#">Baile</a>
                    <a class="dropdown-item" href="#">Oratoria</a>
                    <a class="dropdown-item" href="#">Liderazgo</a>
                </div>
            </li> -->
            <li class="nav-item {{ setActivo('asesoramiento') }}">
                <a class="nav-link" href="asesoramiento">Asesoramiento</a>
            </li>
            <li class="nav-item {{ setActivo('contacto') }}">
                <a class="nav-link" href="contacto">Contacto</a>
            </li>
        </ul>
    </div>
</nav>



















<!-- <thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a></th>
        <th scope="col" class="{{ setActivo('nosotros') }}"><a href="nosotros">Nosotros</a></th>
        <th scope="col" class="{{ setActivo('servicios') }}"><a href="servicios">Servicios</a></th>
        <th scope="col" class="{{ setActivo('contacto') }}"><a href="contacto">Contacto</a></th>
    </tr>
</thead> -->