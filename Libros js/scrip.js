document.addEventListener("DOMContentLoaded", function () {
    // Elementos de DOM
    const button = document.querySelector('#buttonCreate'); 
    const text = document.querySelector('#info-text');
    const totalCost = document.querySelector('#total-cost');
    const table = document.querySelector('.tabla-libros');

    // Inicializar el total
  let totalCostoLibros = 0; // Asegúrate de que comienza en 0

  
    // Funcion de Agregar
    button.addEventListener("click", function () {
      // Obtener valores del formulario al hacer clic
      const nombre = document.querySelector("#nombre").value;
      const autor = document.querySelector("#autor").value;
      const genero = document.querySelector("#genero").value;
      const añoPublicacion = document.querySelector("#año_publicacion").value;
      const costoBase = parseFloat(document.querySelector("#costo_base").value); // Asegurarse de convertir a número
  
      console.log("boton pulsao");
  
      if (
        nombre === "" ||
        autor === "" ||
        genero === "" ||
        añoPublicacion === "" ||
        isNaN(costoBase) // Comprobar que costoBase es un número
      ) {
        text.textContent = "Complete todos los campos"; // Cambiar de función a propiedad
      } else if (!validarAño(añoPublicacion)) {
        text.textContent = "Ingrese un año valido";
      } else if (!validarCosto(costoBase)){
        text.textContent = "Ingrese un precio valido";
      } else {
        let tipe; // Declarar la variable tipe
        let Adicional; // Declarar la variable Adicional
  
        // Lógica para determinar el tipo y el adicional
        if (añoPublicacion < 1990) {
          tipe = "raro";
          Adicional = 0.4;
        } else if (añoPublicacion >= 1991 && añoPublicacion <= 2000) {
          tipe = "Poco común"; // Corrección en la ortografía
          Adicional = 0.35;
        } else {
          tipe = "común"; // Corrección en la ortografía
          Adicional = 0.3;
        }

        costoTotal = costoBase + (Adicional * costoBase);
  
        // Crear una nueva fila
        const newFile = `
          <tr>
            <td>${document.querySelectorAll('.tabla-libros tr').length + 1}</td>
            <td>${nombre}</td>
            <td>${autor}</td>
            <td>${genero}</td>
            <td>${añoPublicacion}</td>
            <td>${tipe}</td>
            <td>${costoBase.toFixed(2)}</td>  <!-- Asegúrate de que se muestre con dos decimales -->
            <td id="cost">${costoTotal.toFixed(2)}</td>  <!-- Asegúrate de que se muestre con dos decimales -->
          </tr>
        `;
  
        // Agregar la nueva fila a la tabla
        table.insertAdjacentHTML("beforeend", newFile);
        
        // Opcional: Limpiar los campos del formulario
        document.querySelector("#nombre").value = "";
        document.querySelector("#autor").value = "";
        document.querySelector("#genero").value = "";
        document.querySelector("#año_publicacion").value = "";
        document.querySelector("#costo_base").value = "";
        text.textContent = ""; // Limpiar mensaje de error


   // Actualizar totalCost
   totalCostoLibros += costoTotal; // Sumar el costo total de este libro al total general
   totalCost.textContent = totalCostoLibros.toFixed(2); // Mostrar el total actualizado con dos decimales

      }
    });

function validarAño(año){
  const añoRegex = /^\d{4}/;
  return añoRegex.test(año); 
}
function validarCosto(costo){
  const costoRegex = /^\d/;
  return costoRegex.test(costo); 
}

  });
  