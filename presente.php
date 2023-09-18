<?php require_once "conf/conexion.php"?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Pagina web</title> 
        <link type="text/css" href="css/estilos.css?20123" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
    </head>
    <body>
    <?php
    include 'importPhp/header.php';
    ?>
        <div class="rectangulo">
            <div class="rombo" style="margin: 1.2% 0 0 29.5%;">
                <img src="img/rombo.svg">
            </div>
            <div class="rombo" style="margin: 1.2% 0 0 64.5%;">
                <img src="img/rombo.svg">
            </div>
            <a href="#" style="margin-right: 5%;"><p class="ofertas">OFERTAS</p></a>
            
            <a href="#" class="promocion" style="margin-right: 5%;">

                    <img src="img/polo2.png" class="img1">
                    <img src="img/polo1.png" class="img2">

                    <p>Hasta</p>
                    <h1>50</h1>
                    <h2>
                        %<sup>*</sup>
                        <br>
                        <sub>DSCTO.</sub>
                    </h2>
            </a>
            
            
            <a href="#" class="encuesta">

                    <h1>¡APROVECHA YA!</h1>
                
            </a>

        </div>
        <div class="colecciones" style="display: none;">
            <h2>Nuestras Colecciones</h2>
            <ul class="campañas-sitio">
              <li>
                <img src="img/img1.jpg" alt="Pasada">
                <div class="conjunt">       
                <a class="men" href="#">Pasada</a>
                <p>120 Productos</p>
                </div> 
              </li>
              <li> 
                <img src="img/img2.jpg" alt="Presente">
                <div class="conjunt"> 
                <a class="men" href="presente.php">Presente</a>
                <p>120 Productos</p>
                </div> 
              </li>
              <li>
                <img src="img/img3.jpg" alt="Futura">
                <div class="conjunt">
                <a class="men" href="#">Futura</a>
                <p>120 Productos</p>
                </div>
              </li>
            </ul>
        </div>
        
        <div class="contenedor-productos">
                    <?php
                    $sql = "SELECT * FROM productos";
                    if ($query === false) {
                        die("Error en la consulta: " . print_r(sqlsrv_errors(), true));
                    } 
                    while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { ?>
                            
                            <div class="producto">
                                <button onclick="vista_prev(<?php echo $row['id_producto']; ?>)" class="view-button" id="view-button">
                                    <img src="img/ojo.png" width="25" height="25">
                                </button>
                                
                                <a>
                                    <img class="imagen" src="img/productos/<?php echo $row['imagen'] ?>.png" />
                                </a>
                                <?php $row['id_producto'] ?>
                                <h1><?php echo $row['nombre_producto'] ?></h1>
                                <h3>S/. <?php echo $row['precio_producto'] ?></h3>
                                <form class="form-carrito">
                                    <input type="hidden" name="idPro" value="<?php echo $row['id_producto']; ?>">
                                    <input type="hidden" name="imagen" value="<?php echo $row['imagen']; ?>">
                                    <input type="hidden" name="nombrePro" value="<?php echo $row['nombre_producto']; ?>">
                                    <input type="hidden" name="precioPro" value="<?php echo $row['precio_producto']; ?>">
                                    <button type="button" class="boton-agregar" onclick="agregarCarrito(event)">Añadir al carrito</button>
                                </form>
                            </div>
                    <?php }
                      ?>
                </div>
        </div>
         <!-- 
        Idea para desarrollar.    
        Lo que podria hacer para que funcione la vista seria colocarlo en un archivo php como vistas.php asi podria hacer
        que cada vez que precionen el boton del ojo este envie el id del producto y asi vistas.php reciba ese id y haga peticiones 
        a la base de datos y creo que con ajax podria visualizarse al precionarn el boton  -->
        
        <div class="window-background" id="window-background">
            <div class="window-container" id="window-container">
                <button class="close-button" id="close-button">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828747.png" class="icon-x"/>
                </button>

                <img class="img-prev" id="img-prev">
                
                <div class="product-inf">
                    <script>
                        document.write(
                        `
                        <h1 id="prod-nom"></h1>
                        <br>
                        <h2 id="prod-prec"></h2>  
                        <br>
                        `)
                    </script>
                    <h3>Talla</h3>
                    <div class="size-groups">
                        <button onclick="cargar_talla(this)" class="talla" value="S">S</button>
                        <button onclick="cargar_talla(this)" class="talla" value="M">M</button>
                        <button onclick="cargar_talla(this)" class="talla" value="L">L</button>
                        <button onclick="cargar_talla(this)" class="talla" value="XL">XL</button>
                    </div>

                    <br>

                    <h3>Colores Disponibles</h3>
                    <div class="color-groups">
                        <div onclick="cargar_color(this)" class="color color-white active-color"></div>
                        <div onclick="cargar_color(this)" class="color color-black"></div>
                        <div onclick="cargar_color(this)" class="color color-yellow"></div>
                        <div onclick="cargar_color(this)" class="color color-blue"></div>
                        <div onclick="cargar_color(this)" class="color color-red"></div>
                    </div>

                    <h3>Cantidad</h3>
                    <div class="cantidad">
                    <button>-</button>
                    <input type="text" value="1">
                    <button>+</button>
                    </div>

                    <br><br>

                    <button class="btn-carrito">Agregar al carrito</button>
                    <br>
                    <button class="btn-comprar">Comprar</button>
                </div>
            </div>
        </div>

        <?php
        include 'importPhp/footer.php'
        ?>
        
        <?php
        include 'importPhp/carrito-import.php'
        ?>
        <script src="js/vista-previa.js?2022"></script>
        <script src="js/scripts.js"></script>
        <script src="js/carrito.js?20123213"></script>  
    </body>
</html>
