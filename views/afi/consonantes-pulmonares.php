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
          <h2 class="titulos fw-light">AFI - Alfabeto Fonético Internacional.<a title="Historia del AFI" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><img class="pluma" src="../../build/img/pluma.svg" width="26"></a></h2>
        </div>
        <div class="col-12 mt-4">
          <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item"><a class="nav-item nav-link active" href="/afi/consonantes-pulmonares" aria-current="page">Consonantes pulmonares</a></li>
            <li class="nav-item"><a class="nav-item nav-link" href="/afi/consonantes-no-pulmonares">Consonantes no pulmonares</a></li>
          </ul>
        </div>
        <div>
        <div class="row table-responsive-xl">
        <div>
        <table class="table mt-4">
                <thead class="text-center"></thead>
                <tr>
                  <th colspan="2"></th>
                  <th colspan="2">Bilabial</th>
                  <th colspan="2">Labiodental</th>
                  <th colspan="2">Interdental</th>
                  <th colspan="2">Alveolar</th>
                  <th colspan="2">Postalveolar</th>
                  <th colspan="2">Retrofleja</th>
                  <th colspan="2">Palatal</th>
                  <th colspan="2">Velar</th>
                  <th colspan="2">Uvular</th>
                  <th colspan="2">Faríngea</th>
                  <th colspan="2">Glotal</th>
                </tr>
                <tbody class="tablas">
                  <tr>
                    <td>Oclusiva</td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="miná">p</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton2" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="tlapaneco">b</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton3" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="huasteco">t</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton4" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="yoruba">d</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton5" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="bengalí">ʈ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton6" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="bengalí">ɖ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton7" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zoque popoluca">c</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton8" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="ocuilteco">ɟ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton9" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zoque Chis.">k</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton10" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="tlapaneco">ɡ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton11" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="totonaco">q</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton12" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="totonaco">ɢ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton13" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zoque popoluca">ʔ</button>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Africada<a title="Nota Africada" data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">
                        <svg class="bi bi-outline-info-circle nota" width="1.2em" height="1.2em" viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                          <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"></path>
                          <circle cx="8" cy="4.5" r="1"></circle>
                        </svg></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton14" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="huasteco">ʦ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton15" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zoque Chis.">ʣ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton16" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="ocuilteco">ʧ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton17" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="yoruba">ʤ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Fricativa</td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton18" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="huasteco SLP">ɸ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton19" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="huasteco SLP">β</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton20" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="miná">f</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton21" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="miná">v</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton22" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="español peninsular">θ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton23" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="español americano">ð</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton24" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="tepehua">s</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton25" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="miná">z</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton26" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="ocuilteco">ʃ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton27" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="francés">ʒ</button>
                    </td>
                    <td class="text-charis">
                      <button class="btn btn-outline-primary botones" id="playButton28" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zapoteco">ʂ</button>
                    </td>
                    <td class="text-charis">
                      <button class="btn btn-outline-info botones" id="playButton29" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zapoteco">ʐ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton30" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="ocuilteco">ç</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton31" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="yoruba">ʝ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton32" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="kiliwa">x</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton33" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="nawa Ver.">ɣ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton34" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="mam">χ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton35" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="árabe">ʁ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton36" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="árabe">ħ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton37" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="árabe">ʕ</button>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton38" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zoque popoluca">h</button>
                    </td>
                    <td class="text-charis">
                      <button class="btn btn-outline-info botones" id="playButton39" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="huasteco Ver.">ɦ</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Fricativa lateral</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-primary botones" id="playButton40" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="totonaco">ɬ</button>
                    </td>
                    <td class="text-charis"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Nasal</td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton42" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="huasteco SLP">m</button>
                    </td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton43" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="yoruba">ɱ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton44" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="totonaco">n</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-charis">
                      <button class="btn btn-outline-info botones" id="playButton45" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="bengalí">ɳ</button>
                    </td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info" id="playButton46" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="wolof">ɲ</button>
                    </td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info" id="playButton47" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zoque Chis.">ŋ</button>
                    </td>
                    <td></td>
                    <td class="text-charis"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Vibrante</td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info" id="playButton49" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="mangbetu">ʙ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info" id="playButton50" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zapoteco">r</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info" id="playButton51" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="francés">ʀ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Percusiva</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info" id="playButton52" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="mangbetu">ⱱ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton53" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="popoloca">ɾ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton54" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="bengalí">ɽ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Aproximante</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton55" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="mixteco">ʋ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton56" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="yoruba">ɹ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-charis"></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton58" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="zoque Chis.">j</button>
                    </td>
                    <td></td>
                    <td class="text-charis"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Aproximante lateral</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton60" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="mixteco">l</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-charis"></td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton62" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="catalán">ʎ</button>
                    </td>
                    <td></td>
                    <td>
                      <button class="btn btn-outline-info botones" id="playButton63" type="button" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="" data-bs-content="chinanteco">ʟ</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
          </div>
          </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-xl-4 mt-4">
              <div class="alert alert-dark" role="alert">
                <div><span class="text-charis">[ ʙ </span><span class="text-charis">ѵ</span><span class="text-charis"> ] </span>Cortesia del Profesor Didier Demolin</div>
                <div><span class="text-charis">[ ʂ </span><span class="text-charis">ʐ</span><span class="text-charis"> ]</span> Cortesia de Adela Covarrubias</div>
              </div>
            </div>
      </main>
<?php include_once __DIR__ . "/../templates/footer.php"; ?>

<?php
    $script = "
        <script src='../../build/js/afi-pulmonares.js'></script>
        <script src='../../build/js/popover.js'></script>
    "
?>