function validarPalabra(e,t,r){document.getElementById(t).value.toLowerCase().trim()===e?(document.getElementById(r).innerHTML='<div class="alert alert-success" role="alert">Correcto</div>',document.getElementById(r).classList="correcto"):(document.getElementById(r).innerHTML='<div class="alert alert-danger" role="alert">Incorrecto</div>',document.getElementById(r).classList="incorrecto")}function validarDato1(){validarPalabra("velar","btnTexto10","texto10")}function validarDato2(){const e=document.getElementById("btnTexto20").value.toLowerCase().trim(),t=document.getElementById("texto20");["retroflejo","retrofleja"].includes(e)?(t.innerHTML='<div class="alert alert-success" role="alert">Correcto</div>',t.classList="correcto"):(t.innerHTML='<div class="alert alert-danger" role="alert">Incorrecto</div>',t.classList="incorrecto")}function validarTodosAproximantesLaterales(){validarDato1(),validarDato2()}