const simbolFalse=document.querySelectorAll(".simbolFalse"),simbolTrue=document.querySelectorAll(".simbolTrue");function mostrarMensaje(){this.classList.contains("simbolFalse")?this.classList.add("box","incorrecto"):this.classList.contains("simbolTrue")&&this.classList.add("box","correcto")}function agregarClases(s,e){s.classList.add(...e)}function mostrarMensaje(){this.classList.contains("simbolFalse")?agregarClases(this,["box","incorrecto"]):this.classList.contains("simbolTrue")&&agregarClases(this,["box","correcto"])}simbolFalse.forEach(s=>{s.addEventListener("click",mostrarMensaje)}),simbolTrue.forEach(s=>{s.addEventListener("click",mostrarMensaje)});