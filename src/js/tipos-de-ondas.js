function playAudio(audio) {
  audio.play();
}

document.getElementById("playButton100").addEventListener("click", () => {
  playAudio(new Audio("../build/sounds/tlapaneco-tono-alto.wav"));
});

document.getElementById("playButton101").addEventListener("click", () => {
  playAudio(new Audio("../build/sounds/tlapaneco-tono-medio.wav"));
});

document.getElementById("playButton102").addEventListener("click", () => {
  playAudio(new Audio("../build/sounds/tlapaneco-tono-bajo.wav"));
});

document.getElementById("playButton103").addEventListener("click", () => {
  playAudio(new Audio("../build/sounds/chinanteco-carga.wav"));
});

document.getElementById("playButton104").addEventListener("click", () => {
  playAudio(new Audio("../build/sounds/chinanteco-faisan.wav"));
});

document.getElementById("playButton105").addEventListener("click", () => {
  playAudio(new Audio("../build/sounds/hoja-de-papel-tepehua.wav"));
});
