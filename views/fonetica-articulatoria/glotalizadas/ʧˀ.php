<!-- Header -->
<?php include_once __DIR__ . "/../../templates/header.php"; ?>


<main class="flex-grow-1 container">
        <div class="row mt-4">
          <div class="col-s-12 col-md-6 col-l-6 col-xl-6">
            <section>
                <?php include_once __DIR__ . "../../../fonetica-articulatoria/glotalizadas/blocks/simbolos.php"; ?>
            </section>
          </div>
          <div class="col-s-12 col-md-6 col-l-6 col-xl-6 videos mt-4">
            <video class="embed-responsive video ratio ratio-16x9" id="videoplay" controlslist="nodownload" poster="../../../build/img/ʧˀ.jpg">
              <source src="../../build/videos/ʧˀ.mp4" type="video/mp4">
            </video>
            <div class="d-grid gap-2">
              <button class="btn btn-danger" type="button" title="Dar click" onclick="document.getElementById('videoplay').play()">
                <svg class="bi bi-play-fill" width="1.3em" height="1.3em" viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"></path>
                </svg>Reproducir
              </button>
            </div>
            <p class="card-text mt-3">Es una consonante africada glotalizada postalveolar <b>sorda</b>. En su articulación no hay vibración de las cuerdas. Su producción se realiza en dos momentos: la parte anterior de la lengua (lámina) entra en contacto con la zona postalveolar impidiendo el paso del aire. Después de la soltura de la oclusión se forma un canal por donde sale el aire de manera continua y con fricción. A la par de la articulación oral se produce un cierre laríngeo. La laringe asciende y desciende como un pistón y se expulsa el aire de la cavidad oral. Una vez finalizada la oclusión oral se libera el cierre de la glotis. La soltura es enérgica.</p>
          </div>
        </div>
      </main>



<!-- Footer -->
<?php include_once __DIR__ . "/../../templates/footer.php"; ?>
<?php
    $script = "
        <script src='../../build/js/video-play-slow.js'></script>
    "
?>