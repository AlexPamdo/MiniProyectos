document.addEventListener("DOMContentLoaded", () => {


    //Funcion para revizar los campos
    document.querySelector("#btnRegister").addEventListener("click", () => {

       event.preventDefault;

        console.log("se preciono el boton de registrar");

        const nombre = document.querySelector("#nombreCompleto").value;
        const correo = document.querySelector("#correoElectronico").value;
        const telefono = document.querySelector("#telefono").value;
        const contraseña = document.querySelector("#contrasena").value;
        const confirmacionContrasena = document.querySelector("#confirmarContrasena").value;
        const codigoPostal = document.querySelector("#codigoPostal").value;
        const direccion = document.querySelector("#direccion").value;
        const fechaNacimiento = document.querySelector("#fechaNacimiento").value;
        const genero = document.querySelector("#genero").value;


        // Definir expresiones regulares
        const nombreRegex = /^[a-zA-Z\s]{3,50}$/;
        const correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const telefonoRegex = /^\+?[0-9]{1,4}[-]?[0-9]{3,4}[-]?[0-9]{3,4}$/;
        const contrasenaRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        const codigoPostalRegex = /^\d{4,6}$/;
        const direccionRegex = /^[a-zA-Z0-9,\-\s]{5,100}$/;

        // Limpiar mensajes de error previos
        document.querySelector("#nameInfo").textContent = "";
        document.querySelector("#emailInfo").textContent = "";
        document.querySelector("#telefonoInfo").textContent = "";
        document.querySelector("#contrasenaInfo").textContent = "";
        document.querySelector("#confimarContraseñaInfo").textContent = "";
        document.querySelector("#codigoPostalInfo").textContent = "";
        document.querySelector("#direccionInfo").textContent = "";
        document.querySelector("#fechaInfo").textContent = "";
        document.querySelector("#generoInfo").textContent = "";

        // Validaciones
        if (!nombreRegex.test(nombre)) {
            document.querySelector("#nameInfo").textContent = "Nombre invalido";
            return;
        }

        if (!correoRegex.test(correo)) {
            document.querySelector("#emailInfo").textContent = "Email invalido";
            return;
        }

        if (!telefonoRegex.test(telefono)) {
            document.querySelector("#telefonoInfo").textContent = "Telefono invalido";
            return;
        }

        if (!contrasenaRegex.test(contraseña)) {
            document.querySelector("#contrasenaInfo").textContent = "Contraseña invalida";
            return;
        }

        if (contraseña !== confirmacionContrasena) {
            document.querySelector("#confimarContraseñaInfo").textContent = "Las contraseñas no coinciden";
            return;
        }

        if (!codigoPostalRegex.test(codigoPostal)) {
            document.querySelector("#codigoPostalInfo").textContent = "Codigo postal invalido";
            return;
        }

        if (!direccionRegex.test(direccion)) {
            document.querySelector("#direccionInfo").textContent = "Direccion invalida";
            return;
        }

        if (fechaNacimiento === "") {
            document.querySelector("#fechaInfo").textContent = "Ingrese una fecha valida";
            return;
        }

        if (genero === "") {
            document.querySelector("#generoInfo").textContent = "Ingrese un genero valido";
            return;
        }

        // Si todo es válido
        nombreRegex.value = "";
        correo.value = "";
        telefono.value = "";
        contraseña.value = "";
        confirmacionContrasena.value = "";
        codigoPostal.value = "";
        direccion.value = "";
        fechaNacimiento.value = "";
        genero.value = "";

        console.log("Formulario enviado correctamente");
        
    });
});