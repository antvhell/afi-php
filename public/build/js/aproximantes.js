function validarDato(t,a,e){const r=document.getElementById(a).value.toLowerCase().trim(),o=document.getElementById(e);r===t?(o.innerHTML='<div class="alert alert-success" role="alert">Correcto</div>',o.classList="correcto"):(o.innerHTML='<div class="alert alert-danger" role="alert">Incorrecto, revisar AFI</div>',o.classList="incorrecto")}function validarDato1(){validarDato("palatal","btnTexto","texto")}function validarDato2(){validarDato("alveolar","btnTexto2","texto2")}function validarDato3(){validarDato("labiodental","btnTexto3","texto3")}function validarDato4(){const t=document.getElementById("btnTexto4").value.toLowerCase().trim(),a=document.getElementById("texto4");["retroflejo","retrofleja"].includes(t)?(a.innerHTML='<div class="alert alert-success" role="alert">Correcto</div>',a.classList="correcto"):(a.innerHTML='<div class="alert alert-danger" role="alert">Incorrecto, revisar AFI</div>',a.classList="incorrecto")}function validarTodosAproximantes(){validarDato1(),validarDato2(),validarDato3(),validarDato4()}