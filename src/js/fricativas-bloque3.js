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
  validarDato("uvular", "btnTexto", "texto");
}

function validarDato2() {
  validarDato("glotal", "btnTexto2", "texto2");
}

function validarDato3() {
  const palabrasValidas = ["faringea", "faringeo", "faríngea", "faríngeo"];
  const valor3 = document.getElementById("btnTexto3").value.toLowerCase().trim();
  const outputElement = document.getElementById("texto3");

  if (palabrasValidas.includes(valor3)) {
    outputElement.innerHTML = `<div class="alert alert-success" role="alert">Correcto</div>`;
    outputElement.classList = "correcto";
  } else {
    outputElement.innerHTML = `<div class="alert alert-danger" role="alert">Incorrecto, revisar AFI</div>`;
    outputElement.classList = "incorrecto";
  }
}

function validarTodos() {
  validarDato1();
  validarDato2();
  validarDato3();
}
