<?php
require_once __DIR__ . '/../includes/app.php';

use Controllers\InicioController;
use Controllers\AdminController;
use Controllers\AfiController;
use Controllers\ArticulatoriaController;
use Controllers\AfricadasController;
use Controllers\FricativasLatController;
use Controllers\NasalesController;
use Controllers\VibrantesController;
use Controllers\PercusivosController;
use Controllers\AproximantesController;
use Controllers\AproximantesLateralesController;
use Controllers\ClicsController;
use Controllers\ImplosivasController;
use Controllers\GlotalizadasController;
use Controllers\FricativasController;
use Controllers\VocalesController;
use Controllers\AcusticaController;
use Controllers\ObrasController;

use Controllers\LoginController;
use MVC\Router;
$router = new Router();


// Iniciar Sesión
$router->get("/", [LoginController::class, "login"]);
$router->post("/", [LoginController::class, "login"]);

// Cerrar Sesion
$router->get("/logout", [LoginController::class, "logout"]);

// Recuperar Password
$router->get("/olvide", [LoginController::class, "olvide"]);
$router->post("/olvide", [LoginController::class, "olvide"]);

$router->get("/recuperar", [LoginController::class, "recuperar"]);
$router->post("/recuperar", [LoginController::class, "recuperar"]);

// Crear Cuenta
$router->get("/crear-cuenta", [LoginController::class, "crear"]);
$router->post("/crear-cuenta", [LoginController::class, "crear"]);

// Confirmar cuenta
$router->get("/confirmar-cuenta", [LoginController::class, "confirmar"]);
$router->get("/mensaje", [LoginController::class, "mensaje"]);

// Area privada
$router->get("/inicio",[InicioController::class, "index"]);
$router->get("/admin",[AdminController::class, "index"]);
$router->get("/admin/editar-usuario",[AdminController::class, "editarUsuario"]);
$router->post("/admin/editar-usuario",[AdminController::class, "editarUsuario"]);
// $router->get("/admin",[AdminController::class, "index"]);


// AFI
$router->get("/afi/consonantes-pulmonares",[AfiController::class, "consonantes_pulmonares"]);
$router->get("/afi/consonantes-no-pulmonares",[AfiController::class, "consonantes_no_pulmonares"]);


// Fonetica Articulatoria
$router->get("/fonetica-articulatoria/consonantes-pulmonares",[ArticulatoriaController::class, "consonantes_pulmonares"]);
$router->get("/fonetica-articulatoria/consonantes-no-pulmonares",[ArticulatoriaController::class, "consonantes_no_pulmonares"]);
$router->get("/fonetica-articulatoria/vocales",[ArticulatoriaController::class, "vocales"]);



// Oclusivas
$router->get("/fonetica-articulatoria/oclusivas/p",[ArticulatoriaController::class, "p"]);
$router->get("/fonetica-articulatoria/oclusivas/b",[ArticulatoriaController::class, "b"]);
$router->get("/fonetica-articulatoria/oclusivas/t",[ArticulatoriaController::class, "t"]);
$router->get("/fonetica-articulatoria/oclusivas/d",[ArticulatoriaController::class, "d"]);
$router->get("/fonetica-articulatoria/oclusivas/ʈ",[ArticulatoriaController::class, "ʈ"]);
$router->get("/fonetica-articulatoria/oclusivas/ɖ",[ArticulatoriaController::class, "ɖ"]);
$router->get("/fonetica-articulatoria/oclusivas/c",[ArticulatoriaController::class, "c"]);
$router->get("/fonetica-articulatoria/oclusivas/ɟ",[ArticulatoriaController::class, "ɟ"]);
$router->get("/fonetica-articulatoria/oclusivas/k",[ArticulatoriaController::class, "k"]);
$router->get("/fonetica-articulatoria/oclusivas/ɡ",[ArticulatoriaController::class, "ɡ"]);
$router->get("/fonetica-articulatoria/oclusivas/q",[ArticulatoriaController::class, "q"]);
$router->get("/fonetica-articulatoria/oclusivas/ɢ",[ArticulatoriaController::class, "ɢ"]);
$router->get("/fonetica-articulatoria/oclusivas/ʔ",[ArticulatoriaController::class, "ʔ"]);

// Simbolos y características Oclusivas
$router->get("/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-1",[ArticulatoriaController::class, "ejercicio1"]);
$router->get("/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-2",[ArticulatoriaController::class, "ejercicio2"]);
$router->get("/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-3",[ArticulatoriaController::class, "ejercicio3"]);
$router->get("/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-4",[ArticulatoriaController::class, "ejercicio4"]);
$router->get("/fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-5",[ArticulatoriaController::class, "ejercicio5"]);

// Africadas
$router->get("/fonetica-articulatoria/africadas/ʦ",[AfricadasController::class, "ʦ"]);
$router->get("/fonetica-articulatoria/africadas/ʣ",[AfricadasController::class, "ʣ"]);
$router->get("/fonetica-articulatoria/africadas/ʧ",[AfricadasController::class, "ʧ"]);
$router->get("/fonetica-articulatoria/africadas/ʤ",[AfricadasController::class, "ʤ"]);
$router->get("/fonetica-articulatoria/africadas/transcripcion",[AfricadasController::class, "transcripcionAfricadas"]);
// Simbolos y características Africadas
$router->get("/fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-1",[AfricadasController::class, "ejercicio1Africadas"]);
$router->get("/fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-2",[AfricadasController::class, "ejercicio2Africadas"]);
$router->get("/fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-3",[AfricadasController::class, "ejercicio3Africadas"]);

// Fricativas Laterales
$router->get("/fonetica-articulatoria/fricativas-laterales/ɬ",[FricativasLatController::class, "ɬ"]);
$router->get("/fonetica-articulatoria/fricativas-laterales/transcripcion",[FricativasLatController::class, "transcripcionFricativasLat"]);

// Nasales
$router->get("/fonetica-articulatoria/nasales/m",[NasalesController::class, "m"]);
$router->get("/fonetica-articulatoria/nasales/ɱ",[NasalesController::class, "ɱ"]);
$router->get("/fonetica-articulatoria/nasales/n",[NasalesController::class, "n"]);
$router->get("/fonetica-articulatoria/nasales/ɳ",[NasalesController::class, "ɳ"]);
$router->get("/fonetica-articulatoria/nasales/ɲ",[NasalesController::class, "ɲ"]);
$router->get("/fonetica-articulatoria/nasales/ŋ",[NasalesController::class, "ŋ"]);
$router->get("/fonetica-articulatoria/nasales/transcripcion",[NasalesController::class, "transcripcionNasales"]);

$router->get("/fonetica-articulatoria/nasales/simbolos-y-caracteristicas/ejercicio-1",[NasalesController::class, "ejercicio1Nasales"]);
$router->get("/fonetica-articulatoria/nasales/simbolos-y-caracteristicas/ejercicio-2",[NasalesController::class, "ejercicio2Nasales"]);


// Vibrantes Multiples
$router->get("/fonetica-articulatoria/vibrantes/ʙ",[VibrantesController::class, "ʙ"]);
$router->get("/fonetica-articulatoria/vibrantes/r",[VibrantesController::class, "r"]);
$router->get("/fonetica-articulatoria/vibrantes/ʀ",[VibrantesController::class, "ʀ"]);
$router->get("/fonetica-articulatoria/vibrantes/transcripcion",[VibrantesController::class, "transcripcionVibrantes"]);
$router->get("/fonetica-articulatoria/vibrantes/simbolos-y-caracteristicas/ejercicio-1",[VibrantesController::class, "ejercicio1Vibrantes"]);
$router->get("/fonetica-articulatoria/vibrantes/simbolos-y-caracteristicas/ejercicio-2",[VibrantesController::class, "ejercicio2Vibrantes"]);


// Percusivos
$router->get("/fonetica-articulatoria/percusivas/ⱱ",[PercusivosController::class, "ⱱ"]);
$router->get("/fonetica-articulatoria/percusivas/ɾ",[PercusivosController::class, "ɾ"]);
$router->get("/fonetica-articulatoria/percusivas/ɽ",[PercusivosController::class, "ɽ"]);
$router->get("/fonetica-articulatoria/percusivas/simbolos-y-caracteristicas/ejercicio-1",[PercusivosController::class, "ejercicio1Percusivas"]);
$router->get("/fonetica-articulatoria/percusivas/simbolos-y-caracteristicas/ejercicio-2",[PercusivosController::class, "ejercicio2Percusivas"]);
$router->get("/fonetica-articulatoria/percusivas/transcripcion",[PercusivosController::class, "transcripcionPercusiva"]);


// Aproximantes
$router->get("/fonetica-articulatoria/aproximantes/ʋ",[AproximantesController::class, "ʋ"]);
$router->get("/fonetica-articulatoria/aproximantes/ɹ",[AproximantesController::class, "ɹ"]);
$router->get("/fonetica-articulatoria/aproximantes/j",[AproximantesController::class, "j"]);
$router->get("/fonetica-articulatoria/aproximantes/transcripcion",[AproximantesController::class, "transcripcionAproximantes"]);

$router->get("/fonetica-articulatoria/aproximantes/simbolos-y-caracteristicas/ejercicio-1",[AproximantesController::class, "ejercicio1Aproximantes"]);
$router->get("/fonetica-articulatoria/aproximantes/simbolos-y-caracteristicas/ejercicio-2",[AproximantesController::class, "ejercicio2Aproximantes"]);


// Aproximantes Laterales
$router->get("/fonetica-articulatoria/aproximantes-laterales/l",[AproximantesLateralesController::class, "l"]);
$router->get("/fonetica-articulatoria/aproximantes-laterales/ʎ",[AproximantesLateralesController::class, "ʎ"]);
$router->get("/fonetica-articulatoria/aproximantes-laterales/ʟ",[AproximantesLateralesController::class, "ʟ"]);
$router->get("/fonetica-articulatoria/aproximantes-laterales/transcripcion",[AproximantesLateralesController::class, "transcripcionAproximantesLaterales"]);

$router->get("/fonetica-articulatoria/aproximantes-laterales/simbolos-y-caracteristicas/ejercicio-1",[AproximantesLateralesController::class, "ejercicio1AproximantesLaterales"]);
$router->get("/fonetica-articulatoria/aproximantes-laterales/simbolos-y-caracteristicas/ejercicio-2",[AproximantesLateralesController::class, "ejercicio2AproximantesLaterales"]);

// Clics
$router->get("/fonetica-articulatoria/clics/ʘ",[ClicsController::class, "ʘ"]);
$router->get("/fonetica-articulatoria/clics/ǀ",[ClicsController::class, "ǀ"]);
$router->get("/fonetica-articulatoria/clics/ǃ",[ClicsController::class, "ǃ"]);
$router->get("/fonetica-articulatoria/clics/ǂ",[ClicsController::class, "ǂ"]);
$router->get("/fonetica-articulatoria/clics/ǁ",[ClicsController::class, "ǁ"]);
$router->get("/fonetica-articulatoria/clics/transcripcion",[ClicsController::class, "transcripcionClics"]);

$router->get("/fonetica-articulatoria/clics/simbolos-y-caracteristicas/ejercicio-1",[ClicsController::class, "ejercicio1Clics"]);
$router->get("/fonetica-articulatoria/clics/simbolos-y-caracteristicas/ejercicio-2",[ClicsController::class, "ejercicio2Clics"]);

// Implosivas
$router->get("/fonetica-articulatoria/implosivas/ɓ",[ImplosivasController::class, "ɓ"]);
$router->get("/fonetica-articulatoria/implosivas/ɗ",[ImplosivasController::class, "ɗ"]);
$router->get("/fonetica-articulatoria/implosivas/ʄ",[ImplosivasController::class, "ʄ"]);
$router->get("/fonetica-articulatoria/implosivas/ɠ",[ImplosivasController::class, "ɠ"]);
$router->get("/fonetica-articulatoria/implosivas/ʛ",[ImplosivasController::class, "ʛ"]);
$router->get("/fonetica-articulatoria/implosivas/transcripcion",[ImplosivasController::class, "transcripcionImplosivas"]);

$router->get("/fonetica-articulatoria/implosivas/simbolos-y-caracteristicas/ejercicio-1",[ImplosivasController::class, "ejercicio1Implosivas"]);
$router->get("/fonetica-articulatoria/implosivas/simbolos-y-caracteristicas/ejercicio-2",[ImplosivasController::class, "ejercicio2Implosivas"]);


// Glotalizadas
$router->get("/fonetica-articulatoria/glotalizadas/pˀ",[GlotalizadasController::class, "pˀ"]);
$router->get("/fonetica-articulatoria/glotalizadas/tˀ",[GlotalizadasController::class, "tˀ"]);
$router->get("/fonetica-articulatoria/glotalizadas/kˀ",[GlotalizadasController::class, "kˀ"]);
$router->get("/fonetica-articulatoria/glotalizadas/qˀ",[GlotalizadasController::class, "qˀ"]);
$router->get("/fonetica-articulatoria/glotalizadas/sˀ",[GlotalizadasController::class, "sˀ"]);
$router->get("/fonetica-articulatoria/glotalizadas/ʦˀ",[GlotalizadasController::class, "ʦˀ"]);
$router->get("/fonetica-articulatoria/glotalizadas/ʧˀ",[GlotalizadasController::class, "ʧˀ"]);

$router->get("/fonetica-articulatoria/glotalizadas/simbolos-y-caracteristicas/ejercicio-1",[GlotalizadasController::class, "ejercicio1Glotalizadas"]);
$router->get("/fonetica-articulatoria/glotalizadas/simbolos-y-caracteristicas/ejercicio-2",[GlotalizadasController::class, "ejercicio2Glotalizadas"]);
$router->get("/fonetica-articulatoria/glotalizadas/simbolos-y-caracteristicas/ejercicio-3",[GlotalizadasController::class, "ejercicio3Glotalizadas"]);


// Fricativas
$router->get("/fonetica-articulatoria/fricativas/ɸ",[FricativasController::class, "ɸ"]);
$router->get("/fonetica-articulatoria/fricativas/β",[FricativasController::class, "β"]);
$router->get("/fonetica-articulatoria/fricativas/f",[FricativasController::class, "f"]);
$router->get("/fonetica-articulatoria/fricativas/v",[FricativasController::class, "v"]);
$router->get("/fonetica-articulatoria/fricativas/θ",[FricativasController::class, "θ"]);
$router->get("/fonetica-articulatoria/fricativas/ð",[FricativasController::class, "ð"]);
$router->get("/fonetica-articulatoria/fricativas/s",[FricativasController::class, "s"]);
$router->get("/fonetica-articulatoria/fricativas/z",[FricativasController::class, "z"]);
$router->get("/fonetica-articulatoria/fricativas/ʃ",[FricativasController::class, "ʃ"]);
$router->get("/fonetica-articulatoria/fricativas/ʒ",[FricativasController::class, "ʒ"]);
$router->get("/fonetica-articulatoria/fricativas/ʂ",[FricativasController::class, "ʂ"]);
$router->get("/fonetica-articulatoria/fricativas/ʐ",[FricativasController::class, "ʐ"]);
$router->get("/fonetica-articulatoria/fricativas/ç",[FricativasController::class, "ç"]);
$router->get("/fonetica-articulatoria/fricativas/ʝ",[FricativasController::class, "ʝ"]);
$router->get("/fonetica-articulatoria/fricativas/x",[FricativasController::class, "x"]);
$router->get("/fonetica-articulatoria/fricativas/ɣ",[FricativasController::class, "ɣ"]);
$router->get("/fonetica-articulatoria/fricativas/χ",[FricativasController::class, "χ"]);
$router->get("/fonetica-articulatoria/fricativas/ʁ",[FricativasController::class, "ʁ"]);
$router->get("/fonetica-articulatoria/fricativas/ħ",[FricativasController::class, "ħ"]);
$router->get("/fonetica-articulatoria/fricativas/ʕ",[FricativasController::class, "ʕ"]);
$router->get("/fonetica-articulatoria/fricativas/h",[FricativasController::class, "h"]);
$router->get("/fonetica-articulatoria/fricativas/ɦ",[FricativasController::class, "ɦ"]);

$router->get("/fonetica-articulatoria/fricativas/transcripcion",[FricativasController::class, "transcripcionFricativas"]);


$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-1",[FricativasController::class, "ejercicio1Fricativas"]);
$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-2/ejercicio2-1",[FricativasController::class, "ejercicio1Bloque2Fricativas"]);


$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-2",[FricativasController::class, "ejercicio2Fricativas"]);
$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-2/ejercicio2-2",[FricativasController::class, "ejercicio2Bloque2Fricativas"]);

$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-3",[FricativasController::class, "ejercicio3Fricativas"]);
$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-2/ejercicio2-3",[FricativasController::class, "ejercicio3Bloque2Fricativas"]);


$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-1/ejercicio1-4",[FricativasController::class, "ejercicio4Fricativas"]);
$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-2/ejercicio2-4",[FricativasController::class, "ejercicio4Bloque2Fricativas"]);

$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-3/ejercicio3-1",[FricativasController::class, "ejercicio1Bloque3Fricativas"]);
$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-3/ejercicio3-2",[FricativasController::class, "ejercicio2Bloque3Fricativas"]);
$router->get("/fonetica-articulatoria/fricativas/simbolos-y-caracteristicas/bloque-3/ejercicio3-3",[FricativasController::class, "ejercicio3Bloque3Fricativas"]);


// Vocales
$router->get("/fonetica-articulatoria/vocales/i",[VocalesController::class, "i"]);
$router->get("/fonetica-articulatoria/vocales/e",[VocalesController::class, "e"]);
$router->get("/fonetica-articulatoria/vocales/a",[VocalesController::class, "a"]);
$router->get("/fonetica-articulatoria/vocales/o",[VocalesController::class, "o"]);
$router->get("/fonetica-articulatoria/vocales/u",[VocalesController::class, "u"]);
$router->get("/fonetica-articulatoria/vocales/transcripcion",[VocalesController::class, "transcripcionVocales"]);
$router->get("/fonetica-articulatoria/vocales/simbolos-y-caracteristicas/ejercicio-1",[VocalesController::class, "ejercicio1Vocales"]);
$router->get("/fonetica-articulatoria/vocales/simbolos-y-caracteristicas/ejercicio-2",[VocalesController::class, "ejercicio2Vocales"]);
$router->get("/fonetica-articulatoria/vocales/simbolos-y-caracteristicas/ejercicio-3",[VocalesController::class, "ejercicio3Vocales"]);


// Acustica
$router->get("/fonetica-acustica/acustica",[AcusticaController::class, "acustica"]);
$router->get("/fonetica-acustica/tipos-de-ondas/ejercicio-1",[AcusticaController::class, "ejercicio1Ondas"]);
$router->get("/fonetica-acustica/tipos-de-ondas/ejercicio-2",[AcusticaController::class, "ejercicio2Ondas"]);
$router->get("/fonetica-acustica/tipos-de-ondas/ejercicio-3",[AcusticaController::class, "ejercicio3Ondas"]);
$router->get("/fonetica-acustica/tipos-de-ondas/ejercicio-4",[AcusticaController::class, "ejercicio4Ondas"]);
$router->get("/fonetica-acustica/tipos-de-ondas/ejercicio-5",[AcusticaController::class, "ejercicio5Ondas"]);
$router->get("/fonetica-acustica/tipos-de-ondas/ejercicio-6",[AcusticaController::class, "ejercicio6Ondas"]);

// Obras
$router->get("/obras/obras-consultadas",[ObrasController::class, "obrasConsultadas"]);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
