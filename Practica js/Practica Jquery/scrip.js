$(document).ready(function () {
    var validations = {
        nombre: {
            regex: /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$/,
            info: "Nombre inválido",
            infoElement: "#nombreInfo",
            validationsComplete: 0,
        },
        apellido: {
            regex: /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$/,
            info: "Apellido inválido",
            infoElement: "#apellidoInfo",
            validationsComplete: 0,
        },
        number: {
            regex: /^\d+$/,
            info: "Número inválido",
            infoElement: "#numberInfo",
            validationsComplete: 0,
        }
    };

    $("input").focus(function () {
        $(this).css("background-color", "blue");
        
        var id = $(this).attr("id");
        var regexObject = validations[id];
        $(regexObject.infoElement).text("");
    }).blur(function () {
        $(this).css("background-color", "");

        var id = $(this).attr("id");
        var textValue = $(this).val();
        var regexObject = validations[id];

        if (textValue !== "") {
            if (!regexObject.regex.test(textValue)) {
                $(regexObject.infoElement).text(regexObject.info);
                regexObject.validationsComplete = 0;
            } else {
                regexObject.validationsComplete = 1;
                $(regexObject.infoElement).text("");
            }
        }
    });

    $("#myForm").submit(function(event) {
        var allValidationsComplete = true;

        // Revisamos todas las validaciones
        for (const key in validations) {
            if (validations[key].validationsComplete === 0) {
                allValidationsComplete = false;
                break;
            }
        }

        // Si hay errores, prevenimos el envío del formulario
        if (!allValidationsComplete) {
            event.preventDefault(); // Evitar el envío del formulario
            alert("Complete el formulario, por favor");
        } else {
            alert("Formulario enviado correctamente");
        }
    });
});
