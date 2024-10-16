<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/inicio"><img class="guiaPractica" src="../../../../build/img/guia2.svg" alt="Guia Práctica de Fonética" width="130">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/inicio">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/afi/consonantes-pulmonares">AFI</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fonética articulatoria</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/fonetica-articulatoria/consonantes-pulmonares">Consonantes</a></li>
                <li><a class="dropdown-item" href="/fonetica-articulatoria/vocales">Vocales</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/fonetica-acustica/acustica">Fonética acústica</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/obras/obras-consultadas">Obras consultadas</a></li>
            </ul>
            <div class="mt-4"> 
                <p><?php echo $nombre ?? '' ?></p>
            </div>
            <div class="m-2">
                <a class="btn btn-danger mt-2" href="/logout">Cerrar Sesión</a>
            </div>
        </div>
        </div>
    </nav>
</header>
