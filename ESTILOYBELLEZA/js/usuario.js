document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const totalValor = document.getElementById('total-valor');
  
    checkboxes.forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        let total = 0;
        checkboxes.forEach(function(cb) {
          if (cb.checked) {
            total += parseInt(cb.value);
          }
        });
        totalValor.textContent = total;
      });
    });
  });

//calendario
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.querySelector('.calendar'); // Selecciona el elemento donde se mostrará el calendario
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'timeGridWeek', // Vista inicial: Semana
      height: 'auto', // Altura automática
      allDaySlot: false, // Oculta la fila de todo el día
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek,timeGridDay'
      },
      slotMinTime: '08:00:00', // Hora mínima (8:00 AM)
      slotMaxTime: '18:00:00', // Hora máxima (6:00 PM)
      events: [
        // Aquí puedes agregar eventos para los días y horas no disponibles
        // Por ejemplo:
        // { title: 'No disponible', start: '2024-04-18T09:00:00', end: '2024-04-18T10:00:00', color: 'red' }
      ]
    });
  
    calendar.render();
  });
  
//medios de pago
document.getElementById('medio-pago').addEventListener('change', function() {
  var medioPago = this.value;
  console.log("Medio de pago seleccionado:", medioPago); // Añade este console.log para depurar
  
  var formularios = document.querySelectorAll('.formulario');
  
  formularios.forEach(function(formulario) {
    formulario.classList.remove('visible');
  });

  if (medioPago === 'tarjeta') {
    document.getElementById('tarjeta_credito').classList.add('visible');
  } else if (medioPago === 'pse') {
    document.getElementById('pse').classList.add('visible');
  }
});


  
  
  