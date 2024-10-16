<?php include_once __DIR__ . "../../../../templates/header.php"; ?>

<main class="flex-grow-1 container">
        <div class="row">
          <div class="col mt-4">
            <div class="d-flex mb-3"><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover opacity-70 flecha" href="/fonetica-articulatoria/percusivas/ⱱ" title="Regresar">
                <svg class="bi bi-arrow-left-circle" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewbox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                </svg></a>
              <h2 class="titulos fw-light">Percusivas. Símbolos y características</h2>
            </div>
          </div>
        </div>
        <div class="row mt-4 text-center">
          <div class="col-12 mt-4">
            <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item"><a class="nav-item nav-link active" href="/fonetica-articulatoria/percusivas/simbolos-y-caracteristicas/ejercicio-1" aria-current="page">Ejercicio 1</a></li>
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/percusivas/simbolos-y-caracteristicas/ejercicio-2">Ejercicio 2</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-4">
          <p>1. Arrastre al interior de cada caja todos los símbolos que correspondan al modo de articulación dado.</p>
        </div>
        <div class="row mt-4">
          <div class="col-sm-12 mt-4 col-md-6 col-lg-6">
            <div class="droparea area3 text-center" data-area-numtype="simple">
              <p>[ Perscusiva ]</p>
            </div>
          </div>
          <div class="col-sm-12 mt-4 col-md-6 col-lg-6">
            <div class="droparea area3 text-center" data-area-numtype="multiple">
              <p>[ Vibrante ]</p>
            </div>
          </div>
        </div>
        <div class="container mt-4">
          <div class="row text-center">
            <div class="col">
              <div class="box" data-numtype="simple">ɽ</div>
              <div class="box" data-numtype="multiple">ʙ</div>
              <div class="box" data-numtype="multiple">r</div>
              <div class="box" data-numtype="simple">ɾ</div>
              <div class="box" data-numtype="multiple">ʀ</div>
              <div class="box" data-numtype="simple">ⱱ</div>
            </div>
          </div>
        </div>
        <div class="d-flex mb-3 mt-4"><a class="btn btn-outline-primary ml-auto js-btn-next ms-auto p-2" type="button" title="Siguiente" href="/fonetica-articulatoria/percusivas/simbolos-y-caracteristicas/ejercicio-2">Ejercicio 2
            <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg></a></div>
      </main>

<!-- Footer -->
<?php include_once __DIR__ . "../../../../templates/footer.php"; ?>

<?php
    $script = "
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
        <script src='../../../build/js/drag.js'></script>
    "
?>