<?php include_once __DIR__ . "/../templates/header.php"; ?>

<section>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Breve historia del AFI.</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body card-text">
                En la creación del Alfabeto Fonético Internacional (AFI) se destaca la participación del fonetista francés Paul Édouard Passy, quien, en 1886, fundó la Asociación de Profesores Fonetistas, más tarde,
                convertida en la Asociación de Fonética Internacional (1897). La primera versión del Alfabeto se presentó en 1888, solo dos años después de la fundación de la Asociación
                de Profesores Fonetistas, y desde esos años ha tenidos varias revisiones, en las cuales ha modificado o aceptado símbolos propuestos para sonidos de las lenguas que no habían sido estudiadas. En sus orígenes,
                se basó en el alfabeto latino para representar los sonidos de las lenguas (consonantes y vocales) y poco a poco ha ido incorporando símbolos del griego y del árabe. Si bien en sus inicios el Alfabeto fue
                de utilidad en la enseñanza de lenguas, muy pronto se convirtió en la herramienta más usada entre los ling&uuml;istas para describir los sonidos de las lenguas. El Alfabeto organiza los sonidos consonánticos
                según su punto y modo de articulación; según la corriente de aire con la que se producen, los sonidos se dividen en pulmonares y no pulmonares. Por ejemplo, [<span class="textafi">p</span>]
                  se produce con corriente de aire pulmonar, mientras que [<span class="textafi">&#x253;</span>] requiere una corriente no pulmonar. Provee al usuario de una serie de diacríticos para indicar modificaciones en la articulación
                  del sonido. Por ejemplo, en algunas lenguas [<span class="textafi">t</span>] y [<span class="textafi">d</span>] se articulan en la parte dental, en cuyo caso se dispone del diacrítico [<span class="textafi">t&#x32A;</span>,<span class="textafi">d&#x32A;</span>]. Cuenta también con diacríticos para marcar el acento, el tono, la división silábica, la longitud vocálica y consonántica, entre otros. En su
                  conjunto, proporciona una nomenclatura común para describir los sonidos de las lenguas del mundo.
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Africada.</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">En el AFI, los sonidos africados se representan como coarticulaciones de dos sonidos unidos por una ligadura ( i.e <span class="textafi">t&#x361;s</span> ) y aparecen en &lsquo;Otros símbolos&rsquo;. Para mayor claridad,
                nosotros decidimos incluirlas después de las oclusivas y representarlas sin ligadura.
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <main class="flex-grow-1 container">
        <div class="mt-4 animated fadeIn fast">
          <h2 class="titulos fw-light">AFI - Alfabeto Fonético Internacional.<a title="Historia del AFI" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><img class="pluma" loading="lazy" src="../build/img/pluma.svg"></a></h2>
        </div>
        <div class="col-12 mt-4">
          <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item"><a class="nav-item nav-link" href="/afi/consonantes-pulmonares" aria-current="page">Consonantes pulmonares</a></li>
            <li class="nav-item"><a class="nav-item nav-link active" href="/afi/consonantes-no-pulmonares">Consonantes no pulmonares</a></li>
          </ul>
        </div>
        <div>
          <div class="row mt-2 table-responsive-xl">
            <div class="col mt-3"></div>
            <div>
              <table class="table">
                <thead class="text-center"></thead>
                <tr>
                  <th colspan="2"></th>
                  <th colspan="2">Bilabial</th>
                  <th colspan="2">Dental</th>
                  <th colspan="2">Alveolar</th>
                  <th colspan="2">Postalveolar</th>
                  <th colspan="2">Palatal</th>
                  <th colspan="2">Lateral</th>
                  <th colspan="2">Velar</th>
                  <th colspan="2">Uvular</th>
                  <tbody class="tablas"></tbody>
                  <!-- Oclusivas-->
                  <tr></tr>
                  <td>Clics</td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton64" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="mangbetu">ʘ</button>
                  </td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton65" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="khoekhoe (damara)"> ǀ</button>
                  </td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton66" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="mangbetu">ǃ</button>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton67" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="khoekhoe (damara)">ǂ</button>
                  </td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton68" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="khoekhoe (damara)">ǁ</button>
                  </td>
                  <tr></tr>
                  <td>Implosivas</td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton69" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="huasteco Ver.">ɓ</button>
                  </td>
                  <td></td>
                  <td></td>
                  <td> </td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton70" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="embera">ɗ</button>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a class="btn btn-outline-info botones" type="button" title="Implosiva palatal" href="/fonetica-articulatoria/implosivas/ʄ">ʄ</a></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a class="btn btn-outline-info botones" type="button" title="Implosiva velar" href="/fonetica-articulatoria/implosivas/ɠ">ɠ</a></td>
                  <td></td>
                  <td><a class="btn btn-outline-info botones" type="button" title="Implosiva uvular" href="/fonetica-articulatoria/implosivas/ʛ">ʛ</a></td>
                  <tr></tr>
                  <td>Glotalizadas</td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton74" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="tsotsil"> pˀ</button>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton75" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="tsotsil">tˀ</button><br>
                    <button class="btn btn-outline-info botones mt-2" id="playButton76" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="tsotsil">ʦˀ</button><br>
                    <button class="btn btn-outline-info botones mt-2" id="playButton80" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="otomí">sˀ</button>
                  </td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton78" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="tsotsil">ʧˀ</button>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-outline-info botones" id="playButton79" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="maya yucateco">kˀ</button>
                  </td>
                  <td></td>
                  <td><a class="btn btn-outline-info botones" href="/fonetica-articulatoria/glotalizadas/qˀ" title="Oclusiva glotalizada uvular sorda">qˀ</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-xl-4 mt-4">
              <div class="alert alert-dark" role="alert">
                <div><span class="text-charis">[ ʘ </span><span class="text-charis">ǃ </span><span class="text-charis"> ] </span>Cortesia del Profesor Didier Demolin</div>
                <div><span class="text-charis">[ ǀ </span><span class="text-charis">ǂ </span><span class="text-charis">ǁ</span><span class="text-charis"> ]</span> Cortesía del doctor Ángel Calderón</div>
              </div>
            </div>
          </div>
          <script src="/js/afiPulmonares.js"></script>
        </div>
      </main>



<?php include_once __DIR__ . "/../templates/footer.php"; ?>
<?php
    $script = "
        <script src='../../build/js/afi-no-pulmonares.js'></script>
         <script src='../../build/js/popover.js'></script>
    "
?>