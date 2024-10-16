$(document).ready(function () {
  const boxes = $(".box");
  const dropAreas = $(".droparea");
  let score = 0;
  let numBoxesDropped = 0;
  const numBoxes = boxes.length;

  boxes.draggable({ revert: true });

  dropAreas.droppable({
    accept: ".box",
    drop: handleBoxDrop,
  });

  function handleBoxDrop(event, ui) {
    const box = ui.draggable;
    const boxNumType = box.attr("data-numtype");
    const dropArea = $(this);
    const dropAreaNumType = dropArea.attr("data-area-numtype");

    if (boxNumType == dropAreaNumType) {
      box.addClass("correcto");
      score++;
    } else {
      box.addClass("incorrecto");
    }

    box.draggable("disable").draggable("option", "revert", false);
    numBoxesDropped++;
    $("#score").text(score);
  }
});
