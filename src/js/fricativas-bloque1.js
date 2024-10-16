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
  const palabrasValidas = ["labiodental sonoro", "labiodental sonora"];
  const valor = document.getElementById("btnTexto").value.toLowerCase().trim();
  const outputElement = document.getElementById("texto");

  if (palabrasValidas.includes(valor)) {
    outputElement.innerHTML = `<div class="alert alert-success" role="alert">Correcto</div>`;
    outputElement.classList = "correcto";
  } else {
    outputElement.innerHTML = `<div class="alert alert-danger" role="alert">Incorrecto, revisar AFI</div>`;
    outputElement.classList = "incorrecto";
  }
}

function validarDato2() {
  const palabrasValidas = ["alveolar sonoro", "alveolar sonora"];
  const valor2 = document.getElementById("btnTexto2").value.toLowerCase().trim();
  const outputElement = document.getElementById("texto2");

  if (palabrasValidas.includes(valor2)) {
    outputElement.innerHTML = `<div class="alert alert-success" role="alert">Correcto</div>`;
    outputElement.classList = "correcto";
  } else {
    outputElement.innerHTML = `<div class="alert alert-danger" role="alert">Incorrecto, revisar AFI</div>`;
    outputElement.classList = "incorrecto";
  }
}

function validarDato3() {
  const palabrasValidas = ["labiodental sordo", "labiodental sorda"];
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

function validarFricativas1() {
  validarDato1();
  validarDato2();
  validarDato3();
}
