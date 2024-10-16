<?php include_once __DIR__ . "../../../../templates/header.php"; ?>


<main class="flex-grow-1 container">
        <div class="row">
          <div class="col mt-4">
            <div class="d-flex mb-3"><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover opacity-70 flecha" href="/fonetica-articulatoria/aproximantes/ʋ" title="Regresar">
                <svg class="bi bi-arrow-left-circle" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewbox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                </svg></a>
              <h2 class="titulos fw-light">Aproximantes. Símbolos y características</h2>
            </div>
          </div>
        </div>
        <div class="row mt-4 text-center">
          <div class="col-12 mt-4">
            <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item"><a class="nav-item nav-link active" href="/fonetica-articulatoria/aproximantes/simbolos-y-caracteristicas/ejercicio-1" aria-current="page">Ejercicio 1</a></li>
              <li class="nav-item"><a class="nav-item nav-link" href="/fonetica-articulatoria/aproximantes/simbolos-y-caracteristicas/ejercicio-2">Ejercicio 2</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-4">
          <p>1. Haga clic en la animación. Use el teclado y escriba el punto de articulación correspondiente.</p>
        </div>
        <div class="row mt-4 row mt-4 align-items-center justify-content-center">
          <div class="col-sm-5 col-xl-5">
            <video class="embed-responsive video" id="videoplay" src="../../../build/videos/j.mp4" controls controlslist="nodownload" poster="../../../build/img/j.jpg"></video>
            <div class="col mt-2">
              <input class="form-control p-2" id="btnTexto" type="text" placeholder="Punto de articulación">
              <p class="ms-auto p-2" id="texto"></p>
            </div>
          </div>
          <div class="col-sm-5 col-xl-5">
            <video class="embed-responsive video" id="videoplay" src="../../../build/videos/ɹ.mp4" controls controlslist="nodownload" poster="../../../build/img/ɹ.jpg"></video>
            <div class="col mt-2">
              <input class="form-control p-2" id="btnTexto2" type="text" placeholder="Punto de articulación">
              <p class="ms-auto p-2" id="texto2"></p>
            </div>
          </div>
          <div class="row mt-4"></div>
          <div class="col-sm-5 col-xl-5">
            <video class="embed-responsive video" id="videoplay" src="../../../build/videos/ʋ.mp4" controls controlslist="nodownload" poster="../../../build/img/ʋ.jpg"></video>
            <div class="col mt-2">
              <input class="form-control p-2" id="btnTexto3" type="text" placeholder="Punto de articulación">
              <p class="ms-auto p-2" id="texto3"></p>
            </div>
          </div>
          <div class="col-sm-5 col-xl-5">
            <video class="embed-responsive video" id="videoplay" src="../../../build/videos/ɻ.mp4" controls controlslist="nodownload" poster="../../../build/img/ɻ.jpg"></video>
            <div class="col mt-2">
              <input class="form-control p-2" id="btnTexto4" type="text" placeholder="Punto de articulación">
              <p class="ms-auto p-2" id="texto4"></p>
            </div>
          </div>
          <div class="row text-center mt-3">
            <div class="col">
              <button class="btn btn-secondary" type="button" onclick="validarTodosAproximantes()">Validar</button>
            </div>
          </div>
        </div>
        <div class="d-flex mb-3 mt-4"><a class="btn btn-outline-primary ml-auto js-btn-next ms-auto p-2" type="button" title="Siguiente" href="/fonetica-articulatoria/aproximantes/simbolos-y-caracteristicas/ejercicio-2">Ejercicio 2
            <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg></a></div>
        <script src="../../../../build/js/"></script>
      </main>


<!-- Footer -->
<?php include_once __DIR__ . "../../../../templates/footer.php"; ?>

<?php
    $script = "
        <script src='../../../build/js/aproximantes.js'></script>
    "
?>