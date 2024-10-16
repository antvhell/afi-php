const simbolFalse = document.querySelectorAll(".simbolFalse");
const simbolTrue = document.querySelectorAll(".simbolTrue");

simbolFalse.forEach((element) => {
  element.addEventListener("click", mostrarMensaje);
});

simbolTrue.forEach((element) => {
  element.addEventListener("click", mostrarMensaje);
});

function mostrarMensaje() {
  if (this.classList.contains("simbolFalse")) {
    this.classList.add("box", "incorrecto");
  } else if (this.classList.contains("simbolTrue")) {
    this.classList.add("box", "correcto");
  }
}

function agregarClases(element, clases) {
  element.classList.add(...clases);
}

function mostrarMensaje() {
  if (this.classList.contains("simbolFalse")) {
    agregarClases(this, ["box", "incorrecto"]);
  } else if (this.classList.contains("simbolTrue")) {
    agregarClases(this, ["box", "correcto"]);
  }
}
