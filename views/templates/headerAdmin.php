<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">
                <img class="guiaPractica" src="../../../../build/img/guia2.svg" alt="Guia Práctica de Fonética" width="130">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="ms-auto d-flex align-items-center">
                    <p class="mb-0 me-3"><?php echo $nombre ?? '' ?></p>
                    <a class="btn btn-danger" href="/logout">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </nav>
</header>
