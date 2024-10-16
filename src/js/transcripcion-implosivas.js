//Función usada para cargar atributos y valores de elementos recibidos como parametro
//devolviendo una cadena con el codigo que insertaremos en la sección que deseemos
window.onload = function () {
  var letras = ["a", "ʧ", "e", "ɗ", "ɓ", "i", "o", "u", "l", "d"];

  var botones = cargaEventos(letras, "onclick", "button", "comprobarLetra(this.id)", "enabled", "btn btn-secondary");
  document.getElementById("formulario").innerHTML = botones + document.getElementById("formulario").innerHTML;

  function cargaEventos(letras, evento, tipo, funcion, activa, clase) {
    var aux = "";
    for (var i = 0; i < letras.length; i++)
      aux +=
        "<input type='" +
        tipo +
        "' value='" +
        letras[i] +
        "' id='" +
        letras[i] +
        "' " +
        evento +
        "='" +
        funcion +
        "' " +
        activa +
        " class='" +
        clase +
        "' >\n";
    return aux;
  }
};

var palabras = ["", "ɓaɗe", "ɗidi"];

var conFallos = 0,
  maxFallos = 4,
  indice = 0,
  repetidor;
var debug = true,
  empezado = false;

comienzo();
//Función usada para dar comienzo al juego inicializando variables globales, etc
function comienzo() {
  document.getElementById("ejercicios").innerHTML = `Ejercicio ${indice + 1} / ${palabras.length - 1}`;
  var eleccion = "";
  // console.log(indice)

  for (var i = 0; i < palabras[indice + 1].length; i++) eleccion += "_ ";

  for (var i = 0; i < document.forms[0].elements.length; i++) document.forms[0].elements[i].disabled = false;
  document.getElementById("empezar").disabled = false;
  document.getElementById("palabra").style.visibility = "visible";
  document.getElementById("texto").innerHTML = eleccion;

  document.getElementById("glosas").style.visibility = "visible";
  document.getElementById("transcripcion").style.visibility = "hidden";

  document.getElementById("ejercicios").style.visibility = "visible";
  document.getElementById("audio").style.visibility = "visible";
  document.getElementById("empezar").style.visibility = "hidden";

  empezado = true;
  cambiaAudio(indice++);
  if (debug) {
    //Si el "modo" debug esta activado, mostraremos el personaje al comienzo del juego
    // console.log(palabras[indice]); //y habilitaremos un botón para borrar los datos de la cookie que almacena el record
  }
}

function regresar() {
  conFallos = 0;
  document.getElementById("ejercicios").innerHTML = `Ejercicio ${indice - 1} / ${palabras.length - 1} `;
  var eleccion = "";
  for (var i = 0; i < palabras[indice - 1].length; i++) eleccion += "_ ";
  for (var i = 0; i < document.forms[0].elements.length; i++) document.forms[0].elements[i].disabled = false;

  document.getElementById("palabra").style.visibility = "visible";
  document.getElementById("texto").innerHTML = eleccion;
  document.getElementById("transcripcion").style.visibility = "hidden";
  document.getElementById("ejercicios").style.visibility = "visible";
  document.getElementById("audio").style.visibility = "visible";
  document.getElementById("transcripcion").innerHTML = ``;
  document.getElementById("glosa").style.visibility = "hidden";
  document.getElementById("transcripcion").classList.remove("alert", "alert-danger");

  empezado = true;
  cambiaAudio(indice--);

  if (debug) {
    //Si el "modo" debug esta activado, mostraremos el personaje al comienzo del juego
    // console.log(palabras[indice]); //y habilitaremos un botón para borrar los datos de la cookie que almacena el record
  }
  if (palabras[indice] === "ɓaɗe") {
    document.getElementById("reiniciar").style.visibility = "visible";
    document.getElementById("empezar").style.visibility = "hidden";
  }
  if (palabras[indice] === "ɗidi") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
}

//Función usada para reiniciar el juego, parando el reloj y reiniciando variables y botones
function reinicio() {
  conFallos = 0;
  empezado = false;
  cambiaAudio();
  clearInterval(repetidor);

  for (var i = 0; i < document.forms[0].elements.length; i++) document.forms[0].elements[i].disabled = true;
  document.getElementById("empezar").disabled = false;

  document.getElementById("glosa").style.visibility = "hidden";
  document.getElementById("transcripcion").style.visibility = "visible";
  document.getElementById("glosa").style.visibility = "hidden";
  document.getElementById("transcripcion").classList.remove("alert", "alert-danger");

  document.getElementById("transcripcion").innerHTML = ``;

  comienzo();
  if (palabras[indice] === "ɓaɗe") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "ɗidi") {
    document.getElementById("empezar").style.visibility = "visible";
    document.getElementById("reiniciar").style.visibility = "hidden";
  }
}

//Función usada para validar la letra pulsada recibida como parámetro y comprobar si la palabra a sido acertada o no
function comprobarLetra(letra) {
  if (empezado) {
    document.getElementById(letra).disabled = true; //Comprobacion usada por seguridad ante deshabilitacion de botones (via html)

    var cadena = document.getElementById("texto").innerHTML.split(" ");

    var cadenaAux = "",
      existeLetra = false;
    for (var i = 0; i < palabras[indice].length; i++) {
      if (palabras[indice].charAt(i) == letra) {
        cadenaAux += letra + " ";
        existeLetra = true;
      } else cadenaAux += cadena[i] + " ";
    }

    document.getElementById("texto").innerHTML = cadenaAux;
    if (cadenaAux.split(" ").indexOf("_") == -1) finJuego("Jugador");

    if (!existeLetra) {
      conFallos++;
      cambiaAudio();
      if (conFallos == maxFallos) finJuego("PC");
    }
  }
}

//Función para cambiar video y glosa
function cambiaAudio() {
  var nombre = empezado ? conFallos : "glosas";
  document.getElementById("glosas").src = "../../../build/sound/" + nombre + ".wav";
  document.getElementById("glosas").src = "../../../build/sound/" + palabras[indice] + ".wav";
}

//Función usada para comprobar ganador del juego a partir de cadena
//recibida como parámetro, si el ganador es el usuario se comprueba
//si el tiempo utilizado es inferior al record almacenado
function finJuego(cadena) {
  empezado = false;
  clearInterval(repetidor);
  // document.getElementById('glosa').innerHTML = "la Transcripción es: " + "[" + palabras[indice] + "]";
  document.getElementById("ejercicios").style.visibility = "visible";
  document.getElementById("glosa").style.visibility = "visible";
  document.getElementById("transcripcion").style.visibility = "visible";

  if (cadena == "PC") {
    document.getElementById("transcripcion").innerHTML = `Correción: [${palabras[indice]}]`;
    transcripcion.classList.add("alert", "alert-danger");
  }

  if (palabras[indice] === "ɓaɗe") {
    document.getElementById("glosa").innerHTML = `'hogar' en peul`;
    glosa.classList.add("alert", "alert-success");
  }

  if (palabras[indice] === "ɗidi") {
    document.getElementById("glosa").innerHTML = `'dos' en peul`;
    glosa.classList.add("alert", "alert-success");
  } else {
  }
}
