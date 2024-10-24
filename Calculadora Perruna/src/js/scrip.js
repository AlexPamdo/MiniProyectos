$("document").ready(function () {
  $(".btn").click(function () {
    var btn = $(this).attr("id");
    var edadPerro = parseFloat($("#edadPerro").val())
    var edadHumana;

    if (!isNaN(edadPerro) && edadPerro > 0) {
      switch (btn) {
        case "pequeno":
          edadHumana = edadPerro * 8;
          break;

        case "mediano":
          edadHumana = edadPerro * 7;
          break;

        case "grande":
          edadHumana = edadPerro * 6;
          break;
      }

      $("#edadHumano").text(edadHumana);

      if (edadHumana > 0 && edadHumana <= 1) {
        $("#recomendacion").text("ta chikito");
      }
      if (edadHumana > 1 && edadHumana < 49) {
        $("#recomendacion").text("Tu perrito esta en la flor de la juventud");
      }
      if (edadHumana >= 50) {
        $("#recomendacion").text(
          "Tu perrito ya es esta viejito, cuidalo mucho"
        );
      }
    } else {
      $("#recomendacion").text("Ingrese un numero valido porfavor");
      $("#edadHumano").text(0);
    }
  });
});
