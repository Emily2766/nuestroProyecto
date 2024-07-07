document.addEventListener('DOMContentLoaded', function () {
  const testimonials = document.querySelectorAll('.testimonial');
  let index = 0;

  function mostrarTestimonio() {
    testimonials.forEach(testimonial => {
      testimonial.style.display = 'none';
    });

    testimonials[index].style.display = 'block';

    index = (index + 1) % testimonials.length;
  }

  setInterval(mostrarTestimonio, 4000);
});
