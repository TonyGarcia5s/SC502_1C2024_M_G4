$(document).ready(function() {
  $('#calendar').fullCalendar({
    // Configuración del calendario
    events: {
      url: '../controllers/controllerRCalendario.php',
      method: 'GET',
      failure: function() {
        console.error("Error obteniendo eventos.");
      },
      success: function(eventos) {
        console.log(eventos); // Agregamos este console.log para verificar los datos recibidos
      }
    }
  });
});
