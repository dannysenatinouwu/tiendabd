<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Pagina web</title> 
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="encima-del-header">
            <div class="redes-sociales">
                <nav>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png"></a>
                </nav>
            </div>
            <div class="texto">
                <p>Servicio de delivery a todo Lima</p>
            </div>
        </div>
        <header> 
            <div class="contenedor">
                <div class="izquierda">
                    <nav>
                    <ul>
                        <li class="categorias">
                            <a class="line" href="#">Categorias</a>
                        </li>
                        <li class="campañas">
                            <a id="campaña-Id" class="line" href="#">Campañas</a>
                            <ul class="campañas-desplegable">  
                                <li>
                                    <img src="/img/img1.jpg" alt="Imagen 1">
                                    <a class="men-campa" href="#">Pasada</a>
                                </li>
                                <li>
                                    <img src="/img/img2.jpg" alt="Imagen 1">
                                    <a class="men-campa" href="presente.html">Presente</a>
                                </li>
                                <li>
                                    <img src="/img/img3.jpg" alt="Imagen 1">
                                    <a class="men-campa" href="#">Futura</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="line" href="#">Ofertas</a></li>
                        <li><a class="line" href="#">Promociones</a></li>
                        <li><a class="line" href="#">Preventa</a></li>
                    </ul>
                    </nav> 
                </div>

                <div class="centro">
                    <a href="index.html">Nombre de la pagina</a>
                </div>
                <div class="derecha">
                    <nav>
                        <a href="#">Mis pedidos <img src="https://cdn-icons-png.flaticon.com/512/709/709790.png" width="30" style="margin: -3 0 0 4;"></a>
                        <a href="#">Carrito <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" width="23" style="margin: 0 0 0 4;"></a>
                        <a href="#">Mi cuenta <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" width="21" style="margin: 0 0 0 9;"></a>
                    </nav>
                </div>
            </div>
        </header>
        <section class="colecciones" style="display: none;">
            <h2>Nuestras Colecciones</h2>
            <ul class="campañas-sitio">
              <li>
                <img src="/img/img1.jpg" alt="Pasada">
                <div class="conjunt">       
                <a class="men" href="#">Pasada</a>
                <p>120 Productos</p>
                </div> 
              </li>
              <li> 
                <img src="/img/img2.jpg" alt="Presente">
                <div class="conjunt"> 
                <a class="men" href="presente.html">Presente</a>
                <p>120 Productos</p>
                </div> 
              </li>
              <li>
                <img src="/img/img3.jpg" alt="Futura">
                <div class="conjunt">
                <a class="men" href="#">Futura</a>
                <p>120 Productos</p>
                </div>
              </li>
            </ul>
          </section>
            <main>
                <div class="background-image">
                    <img src="/img/brugos_1200x1200.jpg" alt="imagen">
                    <h1>Presente</h1>
                    <span>Colección Invierno: Nuestros atuendos invernales no solo te mantendrán calentita, sino que te harán lucir fabulosa bajo el cielo gris. Las telas suaves y abrigadoras se unen a diseños modernos y chic, 
                        inspirando una nueva ola de estilo acogedor y a la moda. Ya sea que te encuentres frente a una chimenea con un libro o explorando la ciudad cubierta de nieve, nuestra Colección Invierno te ofrece la comodidad y la confianza para enfrentar el frío. ¡Es tiempo de abrazar el invierno con estilo y transformar el frío en tu nueva pasarela!</span>
                </div>
                <div class="content-option">
                    <div class="filter">
                        <a href="#">
                            <svg width="23" height="19" viewBox="0 0 20 20" stroke-width="1.25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="1" y1="6" x2="19" y2="6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                <line x1="1" y1="14" x2="19" y2="14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                <circle cx="7" cy="6" r="3" fill="white" stroke="currentColor"></circle>
                                <circle cx="13" cy="14" r="3" fill="white" stroke="currentColor"></circle>
                              </svg>                                  
                            <span>Filtrar</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down" style="transform: rotate(270deg);"><title>Abajo</title><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>    
                    </div>
                    <div class="cant-product"><span>120 productos</span></div>
                </div>
                    <div class="container">
                        <div class="container-opcion-filter">
                            <form action="">
                                <div class="span1">Precio</div>
                                <div class="opcion-precio" >
                                    <div class="precio-1" onclick="cambiarSeleccion(1)">
                                        <span>S/.</span>
                                        <input type="text" placeholder="0" pattern="[0-9]*" step="10" min="0" max="344" aria-label="De" oninput="this.value = this.value.replace(/[^0-9]/g, '')">               
                                    </div>
                                    <div class="precio-2"  onclick="cambiarSeleccion(2)">
                                        <span>S/.</span>
                                        <input type="text" placeholder="350" pattern="[0-9]*" step="10" min="0" max="344" aria-label="De" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                    </div>    
                                </div>
                                <div class="span1">Talla</div>
                                <div class="opcion-talla">
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-s">
                                      <span>S</span>
                                    </label>
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-m">
                                      <span>M</span>
                                    </label>
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-l">
                                      <span>L</span>
                                    </label>
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-xl">
                                      <span>XL</span>
                                    </label>
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-s">
                                      <span>30</span>
                                    </label>
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-m">
                                      <span>28</span>
                                    </label>
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-l">
                                      <span>26</span>
                                    </label>
                                    <label>
                                      <input type="checkbox" name="" id="checkbox-xl">
                                      <span>24</span>
                                    </label>
                                  </div>        
                            </form>
                        </div>
                    <div class="page-content">
                        <script>
                            for (let i = 0; i < 9; i++){
                                document.write(
                                    `
                                        <div class="product-container">
                                        <img src="img/presente-coleccion.png" />
                                        <h1>Camisa Sander Rojo</h1>
                                        <h3>S/. 124.50</h3>
                                        </div>
                                    `)};
                        </script>
                    </div>
                </div>
            </main>
            <footer>
                <table cellspacing="15" style="margin-right: 5.3%;">
                    <thead>
                        <tr>
                            <td><p>Nosotros</p></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><p>Somos una marca con más de 20 años en moda. Ropa para toda la familia</p></td>
                        </tr>
                        <tr>
                            <td>
                                <nav>
                                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png"></a>
                                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"></a>
                                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2504/2504957.png"></a>
                                </nav>
                            </td>
                        </tr>
                    </tbody>
                </table>
        
                <table cellspacing="15" style="margin-right: 5.3%;">
                    <thead>
                        <tr>
                            <td><p>Enlaces y Intereses</p></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                <nav>
                                    <p><a href="#">Blog</a></p>
                                    <p><a href="#">Contactanos</a></p>
                                    <p><a href="#">Tiendas</a></p>
                                    <p><a href="#">Terminos de Servicio</a></p>
                                    <p><a href="#">Libro de Reclamaciones</a></p>
                                </nav>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        
                <table cellspacing="15" style="margin-right: 5.3%;"   >
                    <thead>
                        <tr>
                            <td><p>Contacto</p></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <p>Telefono: 015389522</p>
                                    <p>Correo: examples@gmail.com</p>
                                    <p>Whatsapp: 905194831</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        
                <table cellspacing="15">
                    <thead>
                        <tr>
                            <td><p>(Espacio Libre)</p></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>(Texto)</p>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="txtcorreo" placeholder="Correo Electronico" class="text"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Enviar" class="submit"></td>
                        </tr>
                    </tbody>
                </table>
            </footer>
    </body>
</html>