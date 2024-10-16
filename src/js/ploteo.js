function cambiarColor(selector, pointSelector) {
  const textVocales = document.querySelector(selector);
  const pointVocales = document.querySelector(pointSelector);

  textVocales.classList.remove("st5");
  pointVocales.classList.remove("st5");
  textVocales.classList.add("textVocales");
  pointVocales.classList.add("pointVocales");
}

function cambiarColorA() {
  cambiarColor("#vocalA", "#pointVocales");
}

function cambiarColorE() {
  cambiarColor("#vocalE", "#pointVocalesE");
}

function cambiarColorI() {
  cambiarColor("#vocalI", "#pointVocalesI");
}

function cambiarColorO() {
  cambiarColor("#vocalO", "#pointVocalesO");
}

function cambiarColorU() {
  cambiarColor("#vocalU", "#pointVocalesU");
}
