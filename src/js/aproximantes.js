// Aproximantes
function validarDato(palabra, inputId, outputId) {
  const valor = document.getElementById(inputId).value.toLowerCase().trim();
  const outputElement = document.getElementById(outputId);

  if (valor === palabra) {
    outputElement.innerHTML = `<div class="alert alert-success" role="alert">Correcto</div>`;
    outputElement.classList = "correcto";
  } else {
    outputElement.innerHTML = `<div class="alert alert-danger" role="alert">Incorrecto, revisar AFI</div>`;
    outputElement.classList = "incorrecto";
  }
}

function validarDato1() {
  validarDato("palatal", "btnTexto", "texto");
}

function validarDato2() {
  validarDato("alveolar", "btnTexto2", "texto2");
}

function validarDato3() {
  validarDato("labiodental", "btnTexto3", "texto3");
}

function validarDato4() {
  const palabrasValidas = ["retroflejo", "retrofleja"];
  const valor4 = document.getElementById("btnTexto4").value.toLowerCase().trim();
  const outputElement = document.getElementById("texto4");

  if (palabrasValidas.includes(valor4)) {
    outputElement.innerHTML = `<div class="alert alert-success" role="alert">Correcto</div>`;
    outputElement.classList = "correcto";
  } else {
    outputElement.innerHTML = `<div class="alert alert-danger" role="alert">Incorrecto, revisar AFI</div>`;
    outputElement.classList = "incorrecto";
  }
}

function validarTodosAproximantes() {
  validarDato1();
  validarDato2();
  validarDato3();
  validarDato4();
}
