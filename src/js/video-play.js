const video = document.getElementById("videoplay");

// Función para cambiar la velocidad de reproducción
function cambiarVelocidad(velocidad) {
  video.playbackRate = velocidad;
  // console.log("Velocidad 0.65");
}

// Ejemplo: Cambiar velocidad a 1.5x
cambiarVelocidad(0.65);
