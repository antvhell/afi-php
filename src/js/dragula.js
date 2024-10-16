function $(id) {
  return document.getElementById(id);
}

// Función para mezclar un array
function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
  return array;
}

// Función para mezclar los elementos hijos de un contenedor
function shuffleChildElements(container) {
  let elementsArray = Array.from(container.children);
  let shuffledElements = shuffle(elementsArray);
  for (let element of shuffledElements) {
    container.appendChild(element);
  }
}

// Mezclar los elementos de drag-elements al cargar la página
window.onload = function () {
  shuffleChildElements($("drag-elements"));
  shuffleChildElements($("drag-elements2"));
  shuffleChildElements($("drag-elements3"));
  shuffleChildElements($("drag-elements4"));
  shuffleChildElements($("drag-elements5"));
};

dragula([$("drag-elements"), $("drop-target")], {
  revertOnSpill: true,
}).on("drop", function (el) {
  if ($("drop-target").children.length > 0) {
    $("drop-target").classList.add("drop-target-bien");
  } else {
    $("drop-target").classList.add("drop-target-bien");
  }
});

dragula([$("drag-elements2"), $("drop-target2")], {
  revertOnSpill: true,
}).on("drop", function (el) {
  if ($("drop-target2").children.length > 0) {
    $("drop-target2").classList.add("drop-target-bien");
  } else {
    $("drop-target2").classList.add("drop-target-bien");
  }
});

dragula([$("drag-elements3"), $("drop-target3")], {
  revertOnSpill: true,
}).on("drop", function (el) {
  if ($("drop-target3").children.length > 0) {
    $("drop-target3").classList.add("drop-target-bien");
  } else {
    $("drop-target3").classList.add("drop-target-bien");
  }
});

dragula([$("drag-elements4"), $("drop-target4")], {
  revertOnSpill: true,
}).on("drop", function (el) {
  if ($("drop-target4").children.length > 0) {
    $("drop-target4").classList.add("drop-target-bien");
  } else {
    $("drop-target4").classList.add("drop-target-bien");
  }
});

dragula([$("drag-elements5"), $("drop-target5")], {
  revertOnSpill: true,
}).on("drop", function (el) {
  if ($("drop-target5").children.length > 0) {
    $("drop-target5").classList.add("drop-target-bien");
  } else {
    $("drop-target5").classList.add("drop-target-bien");
  }
});
