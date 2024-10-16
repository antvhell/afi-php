<?php include_once __DIR__ . "../../../../templates/header.php"; ?>
<main class="flex-grow-1 container">
        <div class="row">
          <div class="col mt-4">
            <div class="d-flex mb-3"><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover opacity-70 flecha" href="/fonetica-articulatoria/oclusivas/p" title="Regresar">
                <svg class="bi bi-arrow-left-circle" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewbox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                </svg></a>
              <h2 class="titulos fw-light">Oclusivas. Símbolos y características.</h2>
            </div>
          </div>
        </div>
        <div class="row mt-4 text-center">
          <div class="col-12 mt-4">
            <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-1" aria-current="page">Ejercicio 1</a></li>
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-2">Ejercicio 2</a></li>
              <li class="nav-item"><a class="nav-item nav-link active" href="/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-3">Ejercicio 3</a></li>
              <li class="nav-ite"><a class="nav-item nav-link" href="/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-4">Ejercicio 4</a></li>
              <li class="nav-ite"><a class="nav-item nav-link" href="/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-5">Ejercicio 5</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-4">
          <p>3. Arrastre <b>todos</b> los símbolos que corresponden a la información de cada corchete.</p>
        </div>
        <div class="row align-items-center justify-content-center mt-4">
          <p>[ Oclusivo, sonoro ]</p>
          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 mt-2">
            <div id="drop-target"></div>
          </div>
          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 mt-2">
            <div id="drag-elements">
              <div class="mal">t</div>
              <div class="bien">b</div>
              <div class="bien">d</div>
              <div class="bien"> ɟ</div>
              <div class="bien"> G</div>
              <div class="mal"> k</div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <p>[ Oclusivo, palatal ]</p>
          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 mt-2">
            <div id="drop-target2"></div>
          </div>
          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 mt-2">
            <div id="drag-elements2">
              <div class="bien">c</div>
              <div class="mal">k</div>
              <div class="bien">ɟ</div>
              <div class="mal">q</div>
              <div class="mal">ɡ</div>
              <div class="mal">d</div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <p>[ Oclusivo, sordo ]</p>
          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 mt-2">
            <div id="drop-target3"></div>
          </div>
          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 mt-2">
            <div id="drag-elements3">
              <div class="mal">ɡ</div>
              <div class="bien">c</div>
              <div class="bien">ʔ</div>
              <div class="bien">k</div>
              <div class="mal">ɖ</div>
              <div class="bien">q</div>
            </div>
          </div>
        </div>
        <div class="d-flex mb-3 mt-4"><a class="btn btn-outline-primary p-2" href="/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-2" role="button">
            <svg class="bi bi-arrow-left-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg>Ejercicio 2</a><a class="btn btn-outline-primary ml-auto js-btn-next ms-auto p-2" type="button" title="Siguiente" href="/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-4">Ejercicio 4
            <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg></a></div>
        <script src="../../../../assets/js/dragula.js"></script>
      </main>



<!-- Footer -->
<?php include_once __DIR__ . "../../../../templates/footer.php"; ?>

<?php
    $script = "
        <script src='https://rawgit.com/bevacqua/dragula/master/dist/dragula.js'></script>
        <script src='../../../build/js/dragula.js'></script>
    "
?>