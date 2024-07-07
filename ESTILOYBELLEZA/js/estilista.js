// Obtener la referencia del elemento donde se insertará el calendario
var calendarContainer = document.getElementById('calendar');

// Obtener la fecha actual
var currentDate = new Date();

// Generar el calendario mensual
generateMonthlyCalendar(currentDate);

function generateMonthlyCalendar(currentDate) {
  // Limpiar el contenedor del calendario
  calendarContainer.innerHTML = '';

  // Crear el contenedor del mes
  var monthContainer = document.createElement('div');
  monthContainer.classList.add('month');

  // Generar el título del mes y año
  var monthTitle = document.createElement('h2');
  monthTitle.textContent = currentDate.toLocaleString('es-ES', { month: 'long', year: 'numeric' });
  monthContainer.appendChild(monthTitle);

  // Obtener el primer día del mes y el último día del mes
  var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
  var lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

  // Calcular el número de semanas en el mes
  var numWeeks = Math.ceil((lastDayOfMonth.getDate() - firstDayOfMonth.getDate() + firstDayOfMonth.getDay() + 1) / 7);

  // Generar cada semana del mes
  for (var i = 0; i < numWeeks; i++) {
    var weekContainer = document.createElement('div');
    weekContainer.classList.add('week');

    // Generar cada día de la semana
    for (var j = 0; j < 7; j++) {
      var day = new Date(firstDayOfMonth);
      day.setDate(day.getDate() + j + (i * 7));

      // Crear el elemento para el día
      var dayElement = document.createElement('div');
      dayElement.textContent = day.getDate();
      dayElement.classList.add('day');

      // Marcar el día actual
      if (day.toDateString() === currentDate.toDateString()) {
        dayElement.classList.add('current-day');
      }

      // Agregar evento clic para seleccionar la fecha
      dayElement.addEventListener('click', function() {
        selectDate(this.dataset.year, this.dataset.month, this.dataset.day);
      });

      // Establecer atributos de datos para el día
      dayElement.dataset.year = day.getFullYear();
      dayElement.dataset.month = day.getMonth();
      dayElement.dataset.day = day.getDate();

      // Agregar el día al contenedor de la semana
      weekContainer.appendChild(dayElement);
    }

    // Agregar la semana al contenedor del mes
    monthContainer.appendChild(weekContainer);
  }

  // Agregar el mes al contenedor del calendario
  calendarContainer.appendChild(monthContainer);
}

function selectDate(year, month, day) {
  alert('Fecha seleccionada: ' + year + '-' + (parseInt(month) + 1) + '-' + day);
}

