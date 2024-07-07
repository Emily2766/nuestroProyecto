function generateWeeklyCalendar(currentDate) {
    // Limpiar el contenedor del calendario
    calendarContainer.innerHTML = '';

    // Obtener la fecha del primer día de la semana
    var firstDayOfWeek = new Date(currentDate);
    firstDayOfWeek.setDate(firstDayOfWeek.getDate() - firstDayOfWeek.getDay());

    // Crear el contenedor para la semana
    var weekContainer = document.createElement('div');
    weekContainer.classList.add('week');

    // Generar cada día de la semana
    for (var i = 0; i < 7; i++) {
        var day = new Date(firstDayOfWeek);
        day.setDate(day.getDate() + i);

        // Crear el elemento para el día
        var dayElement = document.createElement('div');
        dayElement.textContent = day.getDate();
        dayElement.classList.add('day');

        // Marcar el día actual
        if (day.toDateString() === currentDate.toDateString()) {
            dayElement.classList.add('current-day');
        }

        // Agregar evento clic para seleccionar la fecha
        dayElement.addEventListener('click', function () {
            selectDate(this.dataset.year, this.dataset.month, this.dataset.day);
        });

        // Establecer atributos de datos para el día
        dayElement.dataset.year = day.getFullYear();
        dayElement.dataset.month = day.getMonth();
        dayElement.dataset.day = day.getDate();

        // Agregar el día al contenedor de la semana
        weekContainer.appendChild(dayElement);
    }

    // Agregar la semana al contenedor del calendario
    calendarContainer.appendChild(weekContainer);
}
