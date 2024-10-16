<!-- Header -->
<?php include_once __DIR__ . "/../../templates/header.php"; ?>
<main class="flex-grow-1 container">
        <div class="row mt-4">
          <div class="col-s-12 col-md-6 col-l-6 col-xl-6">
            <section>
            <?php include_once __DIR__ . "../../../fonetica-articulatoria/oclusivas/blocks/simbolos.php"; ?>
            </section>
          </div>
          <div class="col-s-12 col-md-6 col-l-6 col-xl-6 videos mt-4">
            <video class="embed-responsive video ratio ratio-16x9" id="videoplay" controlslist="nodownload" poster="../../build/img/p.jpg">
              <source src="../../build/videos/p.mp4" type="video/mp4">
            </video>
            <div class="d-grid gap-2">
              <button class="btn btn-danger" type="button" title="Dar click" onclick="document.getElementById('videoplay').play()">
                <svg class="bi bi-play-fill" width="1.3em" height="1.3em" viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"></path>
                </svg>Reproducir
              </button>
            </div>
            <p class="card-text mt-3">Es un sonido oclusivo, bilabial, <b>sordo</b>. El aire que viene de los pulmones pasa a través de la glotis, las cuerdas vocales están separadas y permiten que el aire salga por la cavidad bucal. En su articulación los labios forman una oclusión total del paso del aire, cuando se suelta la articulación, el aire sale abruptamente.</p>
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