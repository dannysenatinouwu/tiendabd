let producto = [
  {
    id: 0,
    nombre: "Camisa Sander Rojo",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 124.50",
    url: "",
    imagen: "img/camisa.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    tallas: "SM",
    colores: "rojo/amarillo",
    stock: 5
  },
  {
    id: 1,
    nombre: "Columbos",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 38.50",
    url: "",
    imagen: "img/imagen1.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    tallas: "SML",
    colores: "rojo/amarillo",
    stock: 5
  },
  {
    id: 2,
    nombre: "Free",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 42.50",
    url: "",
    imagen: "img/imagen2.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    tallas: "SMX",
    colores: "rojo/amarillo",
    stock: 5
  },
  {
    id: 3,
    nombre: "Nerio",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 46.50",
    url: "",
    imagen: "img/imagen3.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    stock: 5
  },
  {
    id: 4,
    nombre: "Lux",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 65.50",
    url: "",
    imagen: "img/imagen4.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    stock: 5
  },
  {
    id: 5,
    nombre: "Laser",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 68.50",
    url: "",
    imagen: "img/imagen5.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    stock: 5
  },
  {
    id: 6,
    nombre: "Cowboy",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 62.50",
    url: "",
    imagen: "img/imagen6.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    stock: 5
  },
  {
    id: 7,
    nombre: "Camisa Sander Rojo",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 124.50",
    url: "",
    imagen: "img/camisa.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    stock: 5
  },
  {
    id: 8,
    nombre: "Camisa Sander Rojo",
    descripcion: "no se que poner aqui xd",
    precio: "S/. 124.50",
    url: "",
    imagen: "img/camisa.png",
    categoria: "prendas para hombre",
    sub_categoria: "camisas",
    stock: 5
  }
];

$(document).ready(function() {
  $('.contenedor .categorias').mouseenter(function(e) {
    e.preventDefault();
    $(this).find('.categorias-desplegable').stop().slideDown();
  }).mouseleave(function(e) {
    e.preventDefault();
    $(this).find('.categorias-desplegable').stop().slideUp(300); // Ajusta el tiempo de animación según sea necesario (en milisegundos)
  });
});

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
  
}













