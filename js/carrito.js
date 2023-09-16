$(document).ready(function () {
    const botonCarrito = $("#activarcarrito");
    const carrito = $("#Carrito");
    const closeButton = $("#closeButton");

    botonCarrito.on("click", function () {
      carrito.show(); // Mostrar el carrito
    });

    closeButton.on("click", function () {
      carrito.hide(); // Ocultar el carrito
    });
  }); 



  const productosEnCarrito = [];

  document.addEventListener('DOMContentLoaded', () => {
      cargarProductosDelCarrito();
  
      const contadorProductos = document.getElementById('contador-productos');
      contadorProductos.textContent = productosEnCarrito.length;
  });
  
  function cargarProductosDelCarrito() {
      const productosGuardados = localStorage.getItem('productosEnCarrito');
      if (productosGuardados) {
          productosEnCarrito.push(...JSON.parse(productosGuardados));
          mostrarProductosEnCarrito();
          calcularPrecioTotal();
      }
  }
  
  function agregarCarrito(event, idProducto) {
      event.preventDefault();
    
      const form = event.target.closest('form');
      const formData = new FormData(form);
    
      fetch('carrito-icon.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          const existingProduct = productosEnCarrito.find(producto => producto.idPro === data.idPro);
  
          if (existingProduct) {
              existingProduct.cantidad += 1;
              existingProduct.precioTotal = (parseFloat(existingProduct.precioTotal) + parseFloat(data.precioPro)).toFixed(2);
          } else {
              productosEnCarrito.push({
                  idPro: data.idPro,
                  imagen: data.imagen,
                  nombrePro: data.nombrePro,
                  precioPro: data.precioPro,
                  precioTotal: data.precioPro,
                  cantidad: 1
              });
          }
    
          mostrarProductosEnCarrito();
          calcularPrecioTotal();
          
          localStorage.setItem('productosEnCarrito', JSON.stringify(productosEnCarrito));
  
          const contadorProductos = document.getElementById('contador-productos');
          contadorProductos.textContent = productosEnCarrito.length;
      })
      .catch(error => {
          console.error('Error al enviar los datos', error);
      });
  }
  
  function eliminarProducto(idProducto) {
      const index = productosEnCarrito.findIndex(producto => producto.idPro === idProducto);
      if (index !== -1) {
          productosEnCarrito.splice(index, 1);
          mostrarProductosEnCarrito();
          calcularPrecioTotal();
    
          const contadorProductos = document.getElementById('contador-productos');
          contadorProductos.textContent = productosEnCarrito.length;
  
          localStorage.setItem('productosEnCarrito', JSON.stringify(productosEnCarrito));
      }
  }
  
  function cambiarCantidad(idProducto, nuevaCantidad) {
      const producto = productosEnCarrito.find(producto => producto.idPro === idProducto);
      if (producto) {
          producto.cantidad = nuevaCantidad;
          producto.precioTotal = (parseFloat(producto.precioPro) * nuevaCantidad).toFixed(2);
          mostrarProductosEnCarrito();
          calcularPrecioTotal();
  
          localStorage.setItem('productosEnCarrito', JSON.stringify(productosEnCarrito));
      }
  }
  
  function mostrarProductosEnCarrito() {
      const contenedorProductos = document.querySelector('.contenedor-de-productos');
      contenedorProductos.innerHTML = '';
  
      productosEnCarrito.forEach(producto => {
          const nuevoDiv = document.createElement('div');
          nuevoDiv.classList.add('productos-delcliente');
  
          nuevoDiv.innerHTML = `
              <div class="producto-a-mostrar">
                  <img src="img/productos/${producto.imagen}.png" alt="">
              </div>
              <div class="descripcion-ropa">
                  <span>${producto.nombrePro}</span>
                  <span>Talla: M</span>
                  <span>Color: Blanco</span>
                  <div class="cantidad-container">
                      <span>Cantidad:</span>
                      <select name="" id="" onchange="cambiarCantidad('${producto.idPro}', this.value)">
                          ${generarOpcionesSelect(producto.cantidad)}
                      </select>
                  </div>
                  <span>Precio: S/ ${producto.precioPro}</span>
              </div>
              <div class="tachito-de-basura">
                  <button onclick="eliminarProducto('${producto.idPro}')">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M 10 2 L 9 3 L 4 3 L 4 5 L 5 5 L 5 20 C 5 20.522222 5.1913289 21.05461 5.5683594 21.431641 C 5.9453899 21.808671 6.4777778 22 7 22 L 17 22 C 17.522222 22 18.05461 21.808671 18.431641 21.431641 C 18.808671 21.05461 19 20.522222 19 20 L 19 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 7 5 L 17 5 L 17 20 L 7 20 L 7 5 z M 9 7 L 9 18 L 11 18 L 11 7 L 9 7 z M 13 7 L 13 18 L 15 18 L 15 7 L 13 7 z"></path>
                      </svg>
                  </button>
              </div>
          `;
  
          contenedorProductos.appendChild(nuevoDiv);
      });
  }
  
  function calcularPrecioSubtotal() {
      const precioSubtotalCarrito = productosEnCarrito.reduce((subtotal, producto) => {
          return subtotal + parseFloat(producto.precioTotal) ;
      }, 0);
  
      const precioSubtotalElement = document.getElementById('precio-subtotal');
      precioSubtotalElement.textContent = `S/. ${precioSubtotalCarrito.toFixed(2)}`;
  }
  
  function calcularPrecioTotal() {
      const precioTotalCarrito = productosEnCarrito.reduce((total, producto) => {
          return total + parseFloat(producto.precioTotal)
      }, 0);
  
      const precioTotalElement = document.getElementById('precio-total');
      precioTotalElement.textContent = `S/. ${precioTotalCarrito.toFixed(2)}`;
  
      // También actualizamos el precio subtotal
      calcularPrecioSubtotal();
  }
  
  function generarOpcionesSelect(cantidadSeleccionada) {
      let opciones = '';
      for (let i = 1; i <= 10; i++) {
          opciones += `<option value="${i}" ${i === cantidadSeleccionada ? 'selected' : ''}>${i}</option>`;
      }
      return opciones;
  }
  