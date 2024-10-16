<?php include_once __DIR__ . "../../../../../templates/header.php"; ?>


<main class="flex-grow-1 container">
        <div class="row">
          <div class="col mt-4">
            <div class="d-flex mb-3"><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover opacity-70 flecha" href="/fonetica-articulatoria/fricativas/ɸ" title="Regresar">
                <svg class="bi bi-arrow-left-circle" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewbox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                </svg></a>
              <h2 class="titulos fw-light">Fricativas. Símbolos y características.</h2>
            </div>
          </div>
        </div>
        <div class="row mt-4 text-center">
          <div class="col-12 mt-4">
            <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-1" aria-current="page">Ejercicio 1</a></li>
              <li class="nav-item"><a class="nav-item nav-link active" href="/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-2">Ejercicio 2</a></li>
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-3">Ejercicio 3</a></li>
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-4">Ejercicio 4</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-4">
          <p>2. Use el teclado y escriba primero el punto de articulación y luego la sonoridad del símbolo dado; una vez hecho, valide.</p>
        </div>
        <div class="row mt-4 align-items-center justify-content-center d-flex justify-content-center">
          <div class="col-sm-1 col-md-1 col-lg-1 text-center">
            <button class="btn btn-info text-charis" type="button">v</button>
          </div>
          <div class="col-sm-11 col-md-11 col-lg-5">
            <input class="form-control p-2" id="btnTexto" type="text" placeholder="Punto de articulación y sonoridad">
            <p class="ms-auto p-2" id="texto"></p>
          </div>
        </div>
        <div class="row mt-4 align-items-center justify-content-center">
          <div class="col-sm-1 col-md-1 col-lg-1 text-center">
            <button class="btn btn-info text-charis" type="button">z</button>
          </div>
          <div class="col-sm-11 col-md-11 col-lg-5">
            <input class="form-control p-2" id="btnTexto2" type="text" placeholder="Punto de articulación y sonoridad">
            <p class="ms-auto p-2" id="texto2"></p>
          </div>
        </div>
        <div class="row mt-4 align-items-center justify-content-center">
          <div class="col-sm-1 col-md-1 col-lg-1 text-center">
            <button class="btn btn-info text-charis" type="button">f</button>
          </div>
          <div class="col-sm-11 col-md-11 col-lg-5">
            <input class="form-control p-2" id="btnTexto3" type="text" placeholder="Punto de articulación y sonoridad">
            <p class="ms-auto" id="texto3"></p>
            <div class="row text-center mt-4">
              <div class="col">
                <button class="btn btn-secondary" type="button" onclick="validarFricativas1()">Validar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mb-3 mt-4"><a class="btn btn-outline-primary p-2" href="/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-1" role="button">
            <svg class="bi bi-arrow-left-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg>Ejercicio 1</a><a class="btn btn-outline-primary ml-auto js-btn-next ms-auto p-2" type="button" title="Siguiente" href="/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-3">Ejercicio 3
            <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg></a></div>
        <script src="../../../../assets/js/fricativas-bloque1.js"></script>
      </main>



<!-- Footer -->
<?php include_once __DIR__ . "../../../../../templates/footer.php"; ?>

<?php
    $script = "
        <script src='../../../../build/js/fricativas-bloque1.js'></script>
    "
?>