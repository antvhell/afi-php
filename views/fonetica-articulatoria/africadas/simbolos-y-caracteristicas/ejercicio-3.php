<?php include_once __DIR__ . "../../../../templates/header.php"; ?>

<main class="flex-grow-1 container">
        <div class="row">
          <div class="col mt-4">
            <div class="d-flex mb-3"><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover opacity-70 flecha" href="/fonetica-articulatoria/africadas/ʦ" title="Regresar">
                <svg class="bi bi-arrow-left-circle" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewbox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                </svg></a>
              <h2 class="titulos fw-light">Africadas. Símbolos y características.</h2>
            </div>
          </div>
        </div>
        <div class="row mt-4 text-center">
          <div class="col-12 mt-4">
            <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-1" aria-current="page">Ejercicio 1</a></li>
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-2">Ejercicio 2</a></li>
              <li class="nav-item"><a class="nav-item nav-link active" href="/fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-3">Ejercicio 3</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-4">
          <p>3. Pulse el símbolo correspondiente a la información del corchete.</p>
        </div>
        <div class="row col-sm-12 col-xl-12 align-items-center justify-content-center text-center mt-4">
          <div class="droparea col-6 ui-droppable">
            <p>[ Africado, sonoro, postalveolar ]</p>
            <div class="simbolFalse box">ʦ</div>
            <div class="simbolTrue box">ʤ</div>
            <div class="simbolFalse box">ʣ</div>
            <div class="simbolFalse box">ʧ</div>
          </div>
        </div>
        <div class="row col-sm-12 col-xl-12 align-items-center justify-content-center text-center mt-4">
          <div class="droparea col-6 ui-droppable">
            <p>[ Africado, sordo, alveolar ]</p>
            <div class="simbolFalse box">ʣ</div>
            <div class="simbolFalse box">ʧ</div>
            <div class="simbolFalse box">ʤ</div>
            <div class="simbolTrue box">ʦ</div>
          </div>
        </div>
        <div class="row col-sm-12 col-xl-12 align-items-center justify-content-center text-center mt-4">
          <div class="droparea col-6 ui-droppable">
            <p>[ Africado, sordo, postalveolar ]
              <div class="simbolFalse box">ʤ</div>
              <div class="simbolTrue box">ʧ</div>
              <div class="simbolFalse box">ʦ</div>
              <div class="simbolFalse box">ʣ</div>
            </p>
          </div>
        </div>
        <div class="row col-sm-12 col-xl-12 align-items-center justify-content-center text-center mt-4">
          <div class="droparea col-6 ui-droppable">
            <p>[ Africado, sonoro, alveolar ]</p>
            <div class="simbolTrue box">ʣ</div>
            <div class="simbolFalse box">ʤ</div>
            <div class="simbolFalse box">ʧ</div>
            <div class="simbolFalse box">ʦ</div>
          </div>
        </div>
        <div class="d-flex mb-3 mt-4"><a class="btn btn-outline-primary p-2" href="/fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-2" role="button">
            <svg class="bi bi-arrow-left-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg>Ejercicio 2</a></div>
        <script src="../../../../assets/js/clics_simbolos_oclusivas.js"></script>
      </main>



<!-- Footer -->
<?php include_once __DIR__ . "../../../../templates/footer.php"; ?>

<?php
    $script = "
        <script src='../../../build/js/click-simbolos-oclusivas.js'></script>
    "
?>