//Función usada para cargar atributos y valores de elementos recibidos como parametro
//devolviendo una cadena con el codigo que insertaremos en la sección que deseemos
window.onload = function () {
  var letras = [
    "l",
    "e",
    "ʔ",
    "s",
    "β",
    "χ",
    "ʤ",
    "ʒ",
    "u",
    "ɡ",
    "f",
    "θ",
    "ʃ",
    "ð",
    "t",
    "x",
    "ȿ",
    "ħ",
    "ʧ",
    "ɣ",
    "ʁ",
    "o",
    "ç",
    "ɸ",
    "ɀ",
    "p",
    "a",
    "ʦ",
    "d",
    "ʕ",
    "i",
    "h",
    "k",
    "c",
    "z",
    "v",
    "b",
    "n",
    "m",
    "ɦ",
  ];
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

var palabras = [
  "",
  "boɦol",
  "huθun",
  "axaʔ",
  "eðem",
  "ʧoɣo",
  "saχ",
  "kuβat",
  "tehame",
  "pakaɸ",
  "çe",
  "iʃapu",
  "aχsis",
  "za",
  "movi",
  "baðaɣa",
  "efa",
  "ezo",
  "ʒina",
  "aʕam",
  "baʁa",
  "aħad",
  "ɡeȿ",
  "ɀibɀi",
  "sese",
];

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
  document.getElementById("ejercicios").innerHTML = `Ejercicio ${indice - 1} / ${palabras.length - 1}`;
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
  if (palabras[indice] === "boɦol") {
    document.getElementById("reiniciar").style.visibility = "visible";
    document.getElementById("empezar").style.visibility = "hidden";
  }
  if (palabras[indice] === "huθun") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "axaʔ") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "eðem") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "ʧoɣo") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "saχ") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }

  if (palabras[indice] === "kuβat") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "tehame") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "pakaɸ") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "çe") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }

  if (palabras[indice] === "iʃapu") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }

  if (palabras[indice] === "aχsis") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "za") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "movi") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "baðaɣa") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "efa") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "ezo") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "ʒina") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "aʕam") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "baʁa") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "aħad") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "ɡeȿ") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }
  if (palabras[indice] === "ɀibɀi") {
    document.getElementById("reiniciar").style.visibility = "visible";
    // document.getElementById("reiniciar").style.visibility = "hidden";
  }

  if (palabras[indice] === "sese") {
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
  if (palabras[indice] === "boɦol") {
    document.getElementById("reiniciar").style.visibility = "visible";
  }
  if (palabras[indice] === "huθun") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "axaʔ") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "eðem") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "ʧoɣo") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "saχ") {
    document.getElementById("empezar").style.visibility = "visible";
  }

  if (palabras[indice] === "kuβat") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "tehame") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "pakaɸ") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "çe") {
    document.getElementById("empezar").style.visibility = "visible";
  }

  if (palabras[indice] === "iʃapu") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "aχsis") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "za") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "movi") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "baðaɣa") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "efa") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "ezo") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "ʒina") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "aʕam") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "baʁa") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "aħad") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "ɡeȿ") {
    document.getElementById("empezar").style.visibility = "visible";
  }
  if (palabras[indice] === "ɀibɀi") {
    document.getElementById("empezar").style.visibility = "visible";
  }

  if (palabras[indice] === "sese") {
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

      // document.getElementById('fallos').innerHTML = `Fallos: ${conFallos} de 4`

      // console.log(conFallos);
    }
  }
}

//Función para cambiar video y glosa
function cambiaAudio() {
  var nombre = empezado ? conFallos : "glosas";
  document.getElementById("glosas").src = "../../../build/sound/" + nombre + ".wav";
  document.getElementById("glosas").src = "../../../build/sound/" + palabras[indice] + ".wav";
  document.getElementById("transcripcion").innerHTML = ``;
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
    // console.log("Correción: " + palabras[indice]);
    document.getElementById("transcripcion").innerHTML = `Correción: [${palabras[indice]}]`;
    transcripcion.classList.add("alert", "alert-danger");
  }

  if (palabras[indice] === "boɦol") {
    // console.log(indice);

    // document.getElementById('glosa').style.visibility = "visible";
    document.getElementById("glosa").innerHTML = `'olote' en huasteco`;
    glosa.classList.add("alert", "alert-success");
  }

  if (palabras[indice] === "huθun") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'llovizna' en huasteco`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "axaʔ") {
    // console.log(indice);

    document.getElementById("glosa").innerHTML = `'agua' en kiliwa`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "eðem") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'mapache' en huasteco, Ver.`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "ʧoɣo") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'muchacho' en nawat, Pajapan, Ver.`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "saχ") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'lombriz de tierra' en wolof`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "kuβat") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'parado' en huasteco, Ver.`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "tehame") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'nosotros' en nawat`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "pakaɸ") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'carrizo' en huasteco`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "çe") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'ver' en ocuilteco`;
    glosa.classList.add("alert", "alert-success");
  }

  if (palabras[indice] === "iʃapu") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'su jabón' en tepehua`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "aχsis") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'chinche' en tepehua`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "za") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'árbol' en ocuilteco`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "movi") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'lombriz de tierra' en miná`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "baðaɣa") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'jarro' en otomí`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "efa") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'(el) frío' en miná `;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "ezo") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'fuego' en miná `;
    glosa.classList.add("alert", "alert-success");
  }

  if (palabras[indice] === "ʒina") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'nadar' en peul`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "aʕam") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'generalmente’' en árabe`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "baʁa") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'delinquir’' en árabe`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "baʁa") {
    // console.log(indice);
    document.getElementById("glosa").innerHTML = `'delinquir’' en árabe`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "aħad") {
    document.getElementById("glosa").innerHTML = `'único’' en árabe`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "ɡeȿ") {
    document.getElementById("glosa").innerHTML = `'tipo de morral' zapoteco (San Bartolo Yautepec)`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "ɀibɀi") {
    document.getElementById("glosa").innerHTML = `'su rodilla' zapoteco (San Bartolo Yautepec)`;
    glosa.classList.add("alert", "alert-success");
  }
  if (palabras[indice] === "sese") {
    document.getElementById("glosa").innerHTML = `'frío' en nawat, Pajapan, Ver.`;
    glosa.classList.add("alert", "alert-success");
  } else {
  }
}
