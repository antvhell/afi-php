<!-- Header -->
<?php include_once __DIR__ . "/../../templates/header.php"; ?>


<main class="flex-grow-1 container">
        <div class="row mt-4">
          <div class="col">
            <div class="d-flex"><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover opacity-70 flecha" href="../aproximantes-laterales/l" title="Regresar">
                <svg class="bi bi-arrow-left-circle" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewbox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                </svg></a>
              <h2 class="fw-light">Transcripción. Aproximantes laterales</h2>
            </div>
            <p id="indice"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-4 d-flex justify-content-center align-items-center">
            <div class="audio-container">
              <audio id="glosas" controls="" controlslist="nodownload">
                <source src="../../../build/sound/apuʔ.wav" type="audio/ogg">
                <p id="audio">Reproducir audio</p>
              </audio>
            </div>
          </div>
          <div class="col-12" id="palabra">
            <p class="text-center mt-4" id="ejercicios"></p>
            <p class="text-center texto mt-3" id="texto"></p>
            <p class="text-center">Transcripción <i class="fas fa-pen"></i></p>
            <div class="mt-4">
              <div class="row d-flex justify-content-center align-items-center row-cols-1">
                <div class="col-sm-12 col-md-8 col-lg-5 col-xl-5">
                  <div class="p text-center" id="transcripcion"></div>
                </div>
              </div>
              <div class="row row d-flex justify-content-center align-items-center mt-2 row-cols-1">
                <div class="col-sm-12 col-md-8 col-lg-5 col-xl-5">
                  <div class="p text-center" id="glosa"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 text-center mt-3">
            <h3><i class="fas fa-keyboard"></i></h3>
            <form class="col-6" id="formulario"><br>
              <div class="d-flex mb-3 mt-4">
                <div class="input btn btn-outline-danger mt-4 p-2" id="empezar" type="button" value="Regresar" onclick="regresar();">
                  <svg class="bi bi-arrow-left-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                  </svg>Regresar
                </div>
                <div class="input btn btn-outline-primary mt-4 ms-auto p-2" id="reiniciar" type="button" value="Siguiente" onclick="reinicio();">Siguiente
                  <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </main>

<!-- Footer -->
<?php include_once __DIR__ . "/../../templates/footer.php"; ?>
<?php
    $script = "
        <script src='../../build/js/transcripcion-aproximantes-laterales.js'></script>
    "
?>