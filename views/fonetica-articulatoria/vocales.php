<?php include_once __DIR__ . "/../templates/header.php"; ?>

<main class="flex-grow-1 container">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Espectrograma de la vocal [ i ]</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col"><img class="img-fluid" src="../../../build/img/i-espect.png" alt="Espectrograma"></div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Oscilograma de un fragmento de la vocal [ a ]</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container"></div>
                <div class="row">
                  <div class="col"></div><img class="img-fluid" src="../../../build/img/oscilograma-a.png" alt="Espectrograma">
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="animated fadeIn fast mt-4">
          <h2 class="fw-light">Fonética articulatoria.</h2>
          <div class="nav nav-tabs mt-4 ul nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-pulmonares-tab" data-bs-toggle="tab" data-bs-target="#nav-pulmonares" type="button" role="tab" aria-controls="nav-pulmonares" aria-selected="true">Vocales</button>
          </div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-pulmonares" role="tabpanel" aria-labelledby="nav-pulmonares-tab" tabindex="0">
              <div class="row">
                <div class="col mt-3">
                  <div class="card">
                    <div class="row g-0 card-text">
                      <div class="col-xl-4 col-md-6 col-sm-12"><img class="card-img-top" src="../../../build/img/vocales.svg" alt="vocales"></div>
                      <div class="col-xl-8 col-md-6 col-sm-12">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text"></p>Las vocales son sonidos que se producen sin ningún obstáculo en la cavidad bucal. El aire proveniente de los pulmones pasa a través de la glotis y las cuerdas vocales vibran a intervalos regulares. Se articulan gracias a la postura que adopta el cuerpo de la lengua en relación con las zonas del paladar. En ellas interviene también la postura de los labios que pueden redondearse o extenderse. Cuando el velo del paladar desciende, el flujo de aire pasa por la nariz produciendo vocales nasales (transcritas con una tilde por encima del símbolo <span class="textafi">ṽ</span>). La mejor forma de conocer los distintos timbres vocálicos es a través del análisis de su estructura acústica. La vibración regular de las cuerdas produce una onda periódica en la cual los ciclos se repiten. Esta característica se visualiza claramente en un <a class="link-primary text-decoration-none" href="" data-bs-toggle="modal" ="" data-bs-target="#exampleModal2">oscilograma</a>. Cuando el aire entra en la laringe, la cavidad bucal se convierte en un resonador que realza y reduce ciertas frecuencias dependiendo de su postura. Esta propiedad del sonido se aprecia en un <a class="link-primary text-decoration-none" href="" data-bs-toggle="modal" ="" data-bs-target="#exampleModal">espectrograma</a>, en el cual las zonas de mayor concentración de energía se llaman formantes, que son los puntos de mayor respuesta de los resonadores. Por ello cada timbre vocálico desplegará los formantes en alturas distintas.
                          <p class="mt-4 text-end"><a class="btn btn-outline-primary" href="./vocales/i">Ver más...</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>



<?php include_once __DIR__ . "/../templates/footer.php"; ?>
