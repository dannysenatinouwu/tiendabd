
$(document).ready(function() {
  $('.contenedor .campañas').mouseenter(function(e) {
    e.preventDefault();
    $(this).find('.campañas-desplegable').stop().slideDown();
  }).mouseleave(function(e) {
    e.preventDefault();
    $(this).find('.campañas-desplegable').stop().slideUp(300); // Ajusta el tiempo de animación según sea necesario (en milisegundos)
  });
});

document.addEventListener("DOMContentLoaded", function() {
  var campañaElement = document.getElementById("campaña-Id");
  var seccionCampañaElement = document.querySelector(".colecciones");
  var contenidoOcultar = document.querySelectorAll("body > *:not(header):not(footer):not(.encima-del-header)");

  campañaElement.addEventListener("click", function(event) {
    event.preventDefault();

    // Ocultar el contenido entre el header y el footer
    contenidoOcultar.forEach(function(elemento) {
      elemento.style.display = "none";
    });

    // Mostrar la sección de campaña
    seccionCampañaElement.style.display = "block";
  });
});

function cambiarSeleccion(opcion) {
  const precio1 = document.querySelector('.precio-1');
  const precio2 = document.querySelector('.precio-2');
  
  if (opcion === 1) {
    precio1.classList.add('active');
    precio2.classList.remove('active');
  } else if (opcion === 2) {
    precio1.classList.remove('active');
    precio2.classList.add('active');
  }
};
  
//ocultar la barra de desplazamiento//
function toggleVistaPrevia() {
  var previewDiv = document.getElementById('preview');
  var previewContent = previewDiv.querySelector('.preview-content');
  
  if (previewDiv.style.display === 'block') {
    // La vista previa ya está abierta, ciérrala
    cerrarVistaPrevia();
  } else {
    // Desactivar el desplazamiento vertical (scroll-y)
    document.body.style.overflowY = 'hidden';

    // Mostrar el div de vista previa
    var i = document.getElementById('view-button').getAttribute('data-index');
    previewContent.innerText = 'Vista previa para ' + i;
    previewDiv.style.display = 'block';
  }
}


