<!-- Header -->
<?php include_once __DIR__ . "/../../templates/header.php"; ?>
<main class="flex-grow-1 container">
        <div class="row mt-4">
          <div class="col-s-12 col-md-6 col-l-6 col-xl-6">
            <section>
            <?php include_once __DIR__ . "../../../fonetica-articulatoria/africadas/blocks/simbolos.php"; ?>
            </section>
          </div>
          <div class="col-s-12 col-md-6 col-l-6 col-xl-6 videos mt-4">
            <video class="embed-responsive video ratio ratio-16x9" id="videoplay" controlslist="nodownload" poster="../../../build/img/ʧ.jpg">
              <source src="../../build/videos/ʧ.mp4" type="video/mp4">
            </video>
            <div class="d-grid gap-2">
              <button class="btn btn-danger" type="button" title="Dar click" onclick="document.getElementById('videoplay').play()">
                <svg class="bi bi-play-fill" width="1.3em" height="1.3em" viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"></path>
                </svg>Reproducir
              </button>
            </div>
            <p class="card-text mt-3">Es una consonante africada postalveolar <b>sorda</b>. En su articulación no hay vibración de las cuerdas. Se produce mediante dos momentos articulatorios, el primero es de oclusión e impide la salida del aire. Al soltarse la oclusión se forma un estrechamiento por el cual sale la corriente de aire provocando fricción. La oclusión y la fricción se produce mediante el contacto de la parte anterior de la lengua con la región postalveolar.</p>
          </div>
        </div>
      </main>


<!-- Footer -->
<?php include_once __DIR__ . "/../../templates/footer.php"; ?>
<?php
    $script = "
        <script src='../../build/js/video-play.js'></script>
    "
?>