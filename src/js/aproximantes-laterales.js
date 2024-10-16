function validarPalabra(palabra, inputId, outputId) {
  const valor = document.getElementById(inputId).value;
  const evaluar = valor.toLowerCase().trim();

  if (evaluar === palabra) {
    document.getElementById(outputId).innerHTML = `<div class="alert alert-success" role="alert">Correcto</div>`;
    document.getElementById(outputId).classList = "correcto";
  } else {
    document.getElementById(outputId).innerHTML = `<div class="alert alert-danger" role="alert">Incorrecto</div>`;
    document.getElementById(outputId).classList = "incorrecto";
  }
}

function validarDato1() {
  validarPalabra("velar", "btnTexto10", "texto10");
}

function validarDato2() {
  const palabrasValidas = ["retroflejo", "retrofleja"];
  const valor2 = document.getElementById("btnTexto20").value.toLowerCase().trim();
  const outputElement = document.getElementById("texto20");

  if (palabrasValidas.includes(valor2)) {
    outputElement.innerHTML = `<div class="alert alert-success" role="alert">Correcto</div>`;
    outputElement.classList = "correcto";
  } else {
    outputElement.innerHTML = `<div class="alert alert-danger" role="alert">Incorrecto</div>`;
    outputElement.classList = "incorrecto";
  }
}

function validarTodosAproximantesLaterales() {
  validarDato1();
  validarDato2();
}
