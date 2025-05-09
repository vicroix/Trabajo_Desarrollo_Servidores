<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condiciones de uso</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/StylePersonality.css">
</head>

<body>
    <div class="contenedor-color-principal container-fluid"></div>
    <nav class="navbar navbar-expanded m-0 p-0">
        <div class="container-fluid">
            <!--Logo-->
            <a class="navbar-brand logoNav" href="../index.php">
                <img src="../images/apariencia/logo-trabajo.jpg" alt="MedacZapato">
            </a>
            <!--Categorías-->
            <ul class="d-flex menu-pricipal">
                <li class="dropdown d-flex p-3 ms-3"><a href="">Hombre</a>
                    <ul class="dropdown-menu submenu ms-0 m-3">
                        <li><a class="dropdown-item" href="#">Running</a></li>
                        <li><a class="dropdown-item" href="#">Casual</a></li>
                        <li><a class="dropdown-item" href="#">Fútbol</a></li>
                        <li><a class="dropdown-item" href="#">Montaña</a></li>
                        <li><a class="dropdown-item" href="#">Fitness</a></li>
                    </ul>
                </li>
                <li class="d-flex p-3 ms-3"><a href="">Mujer</a>
                    <ul class="dropdown-menu submenu ms-0 m-3">
                        <li><a class="dropdown-item" href="#">Running</a></li>
                        <li><a class="dropdown-item" href="#">Casual</a></li>
                        <li><a class="dropdown-item" href="#">Fútbol</a></li>
                        <li><a class="dropdown-item" href="#">Montaña</a></li>
                        <li><a class="dropdown-item" href="#">Fitness</a></li>
                    </ul>
                </li>
                <li class="d-flex p-3 ms-3"><a href="">Niños</a>
                    <ul class="dropdown-menu submenu ms-0 m-3">
                        <li><a class="dropdown-item" href="#">Deporte</a></li>
                        <li><a class="dropdown-item" href="#">Casual</a></li>
                        <li><a class="dropdown-item" href="#">Fútbol</a></li>
                        <li><a class="dropdown-item" href="#">Montaña</a></li>
                    </ul>
                </li>
                <li class="d-flex p-3 ms-3"><a href="">Niñas</a>
                    <ul class="dropdown-menu submenu ms-0 m-3">
                        <li><a class="dropdown-item" href="#">Deporte</a></li>
                        <li><a class="dropdown-item" href="#">Casual</a></li>
                        <li><a class="dropdown-item" href="#">Fútbol</a></li>
                        <li><a class="dropdown-item" href="#">Montaña</a></li>

                    </ul>
                </li>
                <li class="d-flex p-3 ms-3"><a href="">Marcas</a>
                    <ul class="dropdown-menu submenu ms-0 m-3">
                        <li><a class="dropdown-item" href="#">Nike</a></li>
                        <li><a class="dropdown-item" href="#">Adidas</a></li>
                        <li><a class="dropdown-item" href="#">Reebok</a></li>
                        <li><a class="dropdown-item" href="#">Vans</a></li>
                        <li><a class="dropdown-item" href="#">Converse</a></li>
                    </ul>
                </li>
            </ul>
            <!--Buscador-->
            <div class="buscador d-flex ms-auto">
                <form class="d-flex ms-auto me-1">
                    <button type="submit" class="btn-lupa p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                    </button>
                    <input class="form-control form-control-sm me-2 " type="search" placeholder="Escribe aquí para buscar..." aria-label="buscar" name="busqueda">
                </form>
            </div>
            <!--Cesta de la compra-->
            <div class="d-flex align-items-center">
                <a href="carrito.php" class="btn btn-outline-primary position-relative ms-2 mx-3 carritoCompra">
                    <span class="cesta-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                        </svg>
                    </span>
                    <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                        0 <!--Muestra cantidad de articulos-->
                    </span>
                </a>
            </div>

            <?php
            // Verificar si el usuario está conectado
            if (!isset($_SESSION["id"])): ?>
                <button class="btn btn-outline-success boton-login" data-bs-toggle="dropdown" onclick="window.location.href='login.php'">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                    </svg>
                </button>
            <?php else: ?>
                <form action="../auth/cerrarSesion.php" method="post" class="cerrar">
                    <button class="btn btn-outline-danger cerrarSesion" type="submit">Cerrar sesión</button>
                </form>

                <span class="navbar-text ms-2">
                    Bienvenido, <?php echo htmlspecialchars($_SESSION["id"]); ?>
                </span>
            <?php endif; ?>
        </div>
    </nav>
    <!--Cuerpo de página-->
    <div class="container Cmy-5 cuerpo-pagina">
        <div class="row justify-content-center">
            <div class="col-md-12 p-5 contenido-cuerpo">
                <h1>Condiciones de uso y compra</h1>
                <h2>Condiciones de uso y compra</h2>

                <div>
                    <h3>Nuestros datos</h3>
                    <p>En cumplimiento de lo dispuesto en el artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio electrónico, le informamos que el titular de esta página web, operada bajo la denominación MEDACZAPATO, es MEDACZAPATO S.L.</p>

                    <p class="contact-info">
                        Datos de contacto:<br>
                        Correo electrónico: <a href="mailto:atencionalcliente@medaczapato">atencionalcliente@medaczapato.es</a><br>
                        Tlf: 999 999 999<br>
                        Fax: 999 999 999
                    </p><br>
                </div>
                <h3 class="section-title">Lea atentamente estas condiciones</h3><br>
                <p>Las presentes Condiciones Generales de Compra regularán expresamente las relaciones surgidas entre MEDACZAPATO y los terceros (en adelante "Usuarios") que utilicen el sitio web oficial de Sprinter o realicen una compra a través de él (Medaczapato.es, en adelante la "Web"). Rogamos al usuario que lea atentamente estas Condiciones antes de usar esta página web; ya que al utilizarla o hacer un pedido a través de ella, usted consiente quedar vinculado por las mismas. Si no está usted de acuerdo con todas las Condiciones, no debe usar esta página web.</p><br>

                <h3 class="section-title">1. Obligaciones del usuario</h3><br>
                <p><strong>1.1. </strong> El Usuario se obliga, con carácter general, a utilizar la Web y cada uno de los servicios de la Web de forma diligente, de conformidad con la ley, la moral, el orden público y lo dispuesto en estas Condiciones Generales, y deberá asimismo abstenerse de utilizarlos en cualquier forma que pueda impedir, dañar o deteriorar el normal funcionamiento y disfrute de la Web por parte de los Usuarios o que pudiera lesionar o causar daños a los bienes y derechos de MEDACZAPATO, sus proveedores, Usuarios o en general de cualquier tercero.</p><br>
                <h3 class="section-title">2. Productos y precios</h3><br>
                <p><strong>2.1. </strong>MEDACZAPATO se reserva el derecho a decidir, en cada momento, los Productos que se ofrezcan a los Usuarios a través de la Web. En particular, MEDACZAPATO podrá en cualquier momento adicionar nuevos Productos a los ofrecidos o incluidos en la Web, entendiéndose que salvo que se disponga otra cosa, tales nuevos Productos se regirán por lo dispuesto en las presentes Condiciones Generales. Asimismo, MEDACZAPATO se reserva el derecho a dejar de prestar o facilitar el acceso y utilización en cualquier momento y sin previo aviso de cualquiera de las distintas clases de Productos que se ofrecen en la Web</p>
                <p><strong>2.2. </strong>Los Productos incluidos en la Web se corresponderán de la forma más fidedigna posible que permita la tecnología de visualización en web a los Productos efectivamente ofrecidos. Las características de los Productos y sus precios aparecen en la Web. Los precios indicados en la Web son en Euros e incluyen el IVA, salvo indicación en contrario.</p>
                <p><strong>2.3. </strong>Todos los precios que aparecen en la página web de Sprinter.es están expresados en euros; salvo indicación en contrario, incluyen el IVA, que será el legalmente vigente en cada momento en función del artículo concreto de que se trate; y no incluyen los gastos de envío, que se añadirán al importe total debido al final del proceso de compra, una vez que el Usuario haya incluido la dirección de envío. Los pedidos para los que se solicite recogida en tienda, no tienen gastos de envío asociados. De forma previa a entrar en la fase de “Realizar Pago” el Usuario conocerá el importe final completo de su pedido, gastos de transporte incluidos.</p>
                <p>El precio de cada producto será el que se estipule en cada momento en la página web.</p><br>
                <p>Los precios publicados en Sprinter.es pueden cambiar en cualquier momento, pero, salvo en el caso definido anteriormente, los posibles cambios no afectarán a los pedidos con respecto a los cuales el Usuario haya recibido ya una Confirmación de Pedido.</p><br>
                <p>Los métodos de pago permitidos en Sprinter son: tarjeta de crédito o débito y Paypal.</p><br>
                <h3 class="section-title">3. Derecho de desistimiento</h3><br>
                <p><strong>3.1. </strong>Dispones de 30 días naturales para ejercer tu derecho de desistimiento desde la recepción o recogida de tu pedido. Puedes ejercer tu derecho de desistimiento, acudiendo a cualquiera de nuestras tiendas físicas del país en el que hayas realizado la compra (en el caso de España, con excepción de las tiendas de Canarias y Ceuta), mediante el envío del formulario de desistimiento al email de atencionalcliente@medaczapato.es</p>
                <p><strong>3.2. </strong>En caso de desistimiento en tienda física, sólo tienes que mostrar el email de confirmación de tu pedido (puedes presentarlo en el móvil). En este caso, si el pedido fue pagado con tarjeta de crédito/débito el importe te lo abonan en la misma tarjeta con la que realizaste la operación. Es imprescindible para la devolución en tarjeta, que la persona que acude a tienda sea el titular de la tarjeta con la se que pagó.</p><br>
                <p>Si la opción que elegiste fue PayPal, tienes dos opciones: que te realicen un vale o bien te devuelvan el importe en tarjeta de crédito/débito. Si el pago fue realizado con Bizum, Google Pay o Apple Pay, la devolución puede tramitarse en tarjeta de crédito/ débito. En cambio, si realizaste el pago con Oney o Klarna no podrás realizar la devolución en una tienda.</p><br>
                <p><strong>3.3. </strong>En caso de desistimiento se devolverá el importe íntegro del pedido, incluidos los costes de entrega (con excepción de los gastos adicionales resultantes de la elección por su parte de una modalidad de entrega diferente a la menos costosa que ofrezcamos). Podrás realizar tu devolución en una de nuestras tiendas o enviando tu pedido a la dirección anteriormente indicada (Recuerda que los gastos de envío corren por tu cuenta).</p><br>
                <p><strong>3.4. </strong>La ropa interior y de baño que hayan sido desprecintados tras la entrega, por razones de protección de la salud e higiene, así como los artículos personalizados y de alimentación, no son susceptibles de cambio y/o devolución.</p><br>
                <p><strong>3.5. </strong>Sólo serás responsable de la disminución de valor de los bienes resultante de una manipulación distinta a la necesaria para establecer la naturaleza, las características y el funcionamiento de los bienes.</p><br>
                <p>En este caso, el plazo para el reembolso será de un máximo de 14 días naturales desde el momento del ejercicio de desistimiento.</p><br>
                <p>Si deseas devolver en tienda material pesado o de gran volumen adquirido online (como por ejemplo bicicletas o máquinas). Te recomendamos las siguientes tiendas para proceder de forma más ágil con la devolución del importe de tu pedido.</p><br>
                <h3 class="section-title">4. Garantía legal</h3><br>
                <p><strong>4.1. </strong>Si usted contrata como consumidor y usuario, le ofrecemos una garantía legal sobre los productos que comercializamos a través de esta página web, en los términos legalmente establecidos para cada tipo de producto, respondiendo, por tanto, por defectos de calidad presentados en los mismos. El término de garantía es de tres (3) años. Se entiende que los productos son conformes con el contrato siempre que se ajusten a la descripción realizada por nosotros y posean las cualidades que hayamos presentado en esta página web, (ii) sean aptos para los usos a que ordinariamente se destinan los productos del mismo tipo y (iii) presenten la calidad y prestaciones habituales de un producto del mismo tipo que sean fundadamente esperables. En este sentido, si alguno de los productos no fuera conforme con el contrato, usted deberá ponerlo en nuestro conocimiento mediante nuestro formulario de contacto o telefónicamente.</p><br>
                <p><strong>4.2. </strong>En los productos de naturaleza duradera, el consumidor tendrá derecho a un adecuado servicio técnico y a la existencia de repuestos durante un mínimo de 10 años desde la fecha en que el producto deje de fabricarse, sin que pueda incrementarse el precio de los repuestos al aplicarlos en las reparaciones. Para conocer las gestiones que deben seguirse con respecto al servicio de asistencia técnica, por favor, contacte a través de nuestro formulario o teléfono de contacto.</p><br><br>
                <h3 class="section-title">5. Servicio de atención al cliente</h3><br>
                <p><strong>5.1. </strong>Para cualquier incidencia, reclamación o ejercicio de sus derechos, el Usuario podrá enviar un correo electrónico a la dirección atencionalcliente@medaczapato.es. </p>

            </div>

        </div>
    </div>
    <footer class="footer">
        <div class="seccion-footer">
            <h4>Atención al cliente</h4>
            <ul>
                <li><a href="">Seguimiento de pedidos</a></li>
                <li><a href="">Medios de pago</a></li>
                <li><a href="">Devoluciones</a></li>
            </ul>
        </div>
        <div class="seccion-footer">
            <h4>Información general</h4>
            <ul>
                <li><a href="condiciones.php">Condiciones de uso</a></li>
                <li><a href="avisolegal.php">Aviso Legal</a></li>
                <li><a href="">Privacidad</a></li>
            </ul>
        </div>
        <div class="seccion-footer">
            <h4>Social media</h4>
            <div class="iconos-rrss">
                <a href="" class="whatsapp">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                </a>
                <a href="" class="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                    </svg>
                </a>
                <a href="" class="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </a>
                <a href="" class="youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                    </svg>
                </a>
                <a href="" class="linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="seccion-footer">
            <h4>Métodos de pago</h4>
            <div class="iconos-de-pago">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M105.7 215v41.3h57.1a49.7 49.7 0 0 1 -21.1 32.6c-9.5 6.6-21.7 10.3-36 10.3-27.6 0-50.9-18.9-59.3-44.2a65.6 65.6 0 0 1 0-41l0 0c8.4-25.5 31.7-44.4 59.3-44.4a56.4 56.4 0 0 1 40.5 16.1L176.5 155a101.2 101.2 0 0 0 -70.8-27.8 105.6 105.6 0 0 0 -94.4 59.1 107.6 107.6 0 0 0 0 96.2v.2a105.4 105.4 0 0 0 94.4 59c28.5 0 52.6-9.5 70-25.9 20-18.6 31.4-46.2 31.4-78.9A133.8 133.8 0 0 0 205.4 215zm389.4-4c-10.1-9.4-23.9-14.1-41.4-14.1-22.5 0-39.3 8.3-50.5 24.9l20.9 13.3q11.5-17 31.3-17a34.1 34.1 0 0 1 22.8 8.8A28.1 28.1 0 0 1 487.8 248v5.5c-9.1-5.1-20.6-7.8-34.6-7.8-16.4 0-29.7 3.9-39.5 11.8s-14.8 18.3-14.8 31.6a39.7 39.7 0 0 0 13.9 31.3c9.3 8.3 21 12.5 34.8 12.5 16.3 0 29.2-7.3 39-21.9h1v17.7h22.6V250C510.3 233.5 505.3 220.3 495.1 211zM475.9 300.3a37.3 37.3 0 0 1 -26.6 11.2A28.6 28.6 0 0 1 431 305.2a19.4 19.4 0 0 1 -7.8-15.6c0-7 3.2-12.8 9.5-17.4s14.5-7 24.1-7C470 265 480.3 268 487.6 273.9 487.6 284.1 483.7 292.9 475.9 300.3zm-93.7-142A55.7 55.7 0 0 0 341.7 142H279.1V328.7H302.7V253.1h39c16 0 29.5-5.4 40.5-15.9 .9-.9 1.8-1.8 2.7-2.7A54.5 54.5 0 0 0 382.3 158.3zm-16.6 62.2a30.7 30.7 0 0 1 -23.3 9.7H302.7V165h39.6a32 32 0 0 1 22.6 9.2A33.2 33.2 0 0 1 365.7 220.5zM614.3 201 577.8 292.7h-.5L539.9 201H514.2L566 320.6l-29.4 64.3H561L640 201z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M116.9 158.5c-7.5 8.9-19.5 15.9-31.5 14.9-1.5-12 4.4-24.8 11.3-32.6 7.5-9.1 20.6-15.6 31.3-16.1 1.2 12.4-3.7 24.7-11.1 33.8m10.9 17.2c-17.4-1-32.3 9.9-40.5 9.9-8.4 0-21-9.4-34.8-9.1-17.9 .3-34.5 10.4-43.6 26.5-18.8 32.3-4.9 80 13.3 106.3 8.9 13 19.5 27.3 33.5 26.8 13.3-.5 18.5-8.6 34.5-8.6 16.1 0 20.8 8.6 34.8 8.4 14.5-.3 23.6-13 32.5-26 10.1-14.8 14.3-29.1 14.5-29.9-.3-.3-28-10.9-28.3-42.9-.3-26.8 21.9-39.5 22.9-40.3-12.5-18.6-32-20.6-38.8-21.1m100.4-36.2v194.9h30.3v-66.6h41.9c38.3 0 65.1-26.3 65.1-64.3s-26.4-64-64.1-64h-73.2zm30.3 25.5h34.9c26.3 0 41.3 14 41.3 38.6s-15 38.8-41.4 38.8h-34.8V165zm162.2 170.9c19 0 36.6-9.6 44.6-24.9h.6v23.4h28v-97c0-28.1-22.5-46.3-57.1-46.3-32.1 0-55.9 18.4-56.8 43.6h27.3c2.3-12 13.4-19.9 28.6-19.9 18.5 0 28.9 8.6 28.9 24.5v10.8l-37.8 2.3c-35.1 2.1-54.1 16.5-54.1 41.5 .1 25.2 19.7 42 47.8 42zm8.2-23.1c-16.1 0-26.4-7.8-26.4-19.6 0-12.3 9.9-19.4 28.8-20.5l33.6-2.1v11c0 18.2-15.5 31.2-36 31.2zm102.5 74.6c29.5 0 43.4-11.3 55.5-45.4L640 193h-30.8l-35.6 115.1h-.6L537.4 193h-31.6L557 334.9l-2.8 8.6c-4.6 14.6-12.1 20.3-25.5 20.3-2.4 0-7-.3-8.9-.5v23.4c1.8 .4 9.3 .7 11.6 .7z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2 .3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4 .2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2 .2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2 .1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M482.9 410.3c0 6.8-4.6 11.7-11.2 11.7-6.8 0-11.2-5.2-11.2-11.7 0-6.5 4.4-11.7 11.2-11.7 6.6 0 11.2 5.2 11.2 11.7zm-310.8-11.7c-7.1 0-11.2 5.2-11.2 11.7 0 6.5 4.1 11.7 11.2 11.7 6.5 0 10.9-4.9 10.9-11.7-.1-6.5-4.4-11.7-10.9-11.7zm117.5-.3c-5.4 0-8.7 3.5-9.5 8.7h19.1c-.9-5.7-4.4-8.7-9.6-8.7zm107.8 .3c-6.8 0-10.9 5.2-10.9 11.7 0 6.5 4.1 11.7 10.9 11.7 6.8 0 11.2-4.9 11.2-11.7 0-6.5-4.4-11.7-11.2-11.7zm105.9 26.1c0 .3 .3 .5 .3 1.1 0 .3-.3 .5-.3 1.1-.3 .3-.3 .5-.5 .8-.3 .3-.5 .5-1.1 .5-.3 .3-.5 .3-1.1 .3-.3 0-.5 0-1.1-.3-.3 0-.5-.3-.8-.5-.3-.3-.5-.5-.5-.8-.3-.5-.3-.8-.3-1.1 0-.5 0-.8 .3-1.1 0-.5 .3-.8 .5-1.1 .3-.3 .5-.3 .8-.5 .5-.3 .8-.3 1.1-.3 .5 0 .8 0 1.1 .3 .5 .3 .8 .3 1.1 .5s.2 .6 .5 1.1zm-2.2 1.4c.5 0 .5-.3 .8-.3 .3-.3 .3-.5 .3-.8 0-.3 0-.5-.3-.8-.3 0-.5-.3-1.1-.3h-1.6v3.5h.8V426h.3l1.1 1.4h.8l-1.1-1.3zM576 81v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V81c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM64 220.6c0 76.5 62.1 138.5 138.5 138.5 27.2 0 53.9-8.2 76.5-23.1-72.9-59.3-72.4-171.2 0-230.5-22.6-15-49.3-23.1-76.5-23.1-76.4-.1-138.5 62-138.5 138.2zm224 108.8c70.5-55 70.2-162.2 0-217.5-70.2 55.3-70.5 162.6 0 217.5zm-142.3 76.3c0-8.7-5.7-14.4-14.7-14.7-4.6 0-9.5 1.4-12.8 6.5-2.4-4.1-6.5-6.5-12.2-6.5-3.8 0-7.6 1.4-10.6 5.4V392h-8.2v36.7h8.2c0-18.9-2.5-30.2 9-30.2 10.2 0 8.2 10.2 8.2 30.2h7.9c0-18.3-2.5-30.2 9-30.2 10.2 0 8.2 10 8.2 30.2h8.2v-23zm44.9-13.7h-7.9v4.4c-2.7-3.3-6.5-5.4-11.7-5.4-10.3 0-18.2 8.2-18.2 19.3 0 11.2 7.9 19.3 18.2 19.3 5.2 0 9-1.9 11.7-5.4v4.6h7.9V392zm40.5 25.6c0-15-22.9-8.2-22.9-15.2 0-5.7 11.9-4.8 18.5-1.1l3.3-6.5c-9.4-6.1-30.2-6-30.2 8.2 0 14.3 22.9 8.3 22.9 15 0 6.3-13.5 5.8-20.7 .8l-3.5 6.3c11.2 7.6 32.6 6 32.6-7.5zm35.4 9.3l-2.2-6.8c-3.8 2.1-12.2 4.4-12.2-4.1v-16.6h13.1V392h-13.1v-11.2h-8.2V392h-7.6v7.3h7.6V416c0 17.6 17.3 14.4 22.6 10.9zm13.3-13.4h27.5c0-16.2-7.4-22.6-17.4-22.6-10.6 0-18.2 7.9-18.2 19.3 0 20.5 22.6 23.9 33.8 14.2l-3.8-6c-7.8 6.4-19.6 5.8-21.9-4.9zm59.1-21.5c-4.6-2-11.6-1.8-15.2 4.4V392h-8.2v36.7h8.2V408c0-11.6 9.5-10.1 12.8-8.4l2.4-7.6zm10.6 18.3c0-11.4 11.6-15.1 20.7-8.4l3.8-6.5c-11.6-9.1-32.7-4.1-32.7 15 0 19.8 22.4 23.8 32.7 15l-3.8-6.5c-9.2 6.5-20.7 2.6-20.7-8.6zm66.7-18.3H408v4.4c-8.3-11-29.9-4.8-29.9 13.9 0 19.2 22.4 24.7 29.9 13.9v4.6h8.2V392zm33.7 0c-2.4-1.2-11-2.9-15.2 4.4V392h-7.9v36.7h7.9V408c0-11 9-10.3 12.8-8.4l2.4-7.6zm40.3-14.9h-7.9v19.3c-8.2-10.9-29.9-5.1-29.9 13.9 0 19.4 22.5 24.6 29.9 13.9v4.6h7.9v-51.7zm7.6-75.1v4.6h.8V302h1.9v-.8h-4.6v.8h1.9zm6.6 123.8c0-.5 0-1.1-.3-1.6-.3-.3-.5-.8-.8-1.1-.3-.3-.8-.5-1.1-.8-.5 0-1.1-.3-1.6-.3-.3 0-.8 .3-1.4 .3-.5 .3-.8 .5-1.1 .8-.5 .3-.8 .8-.8 1.1-.3 .5-.3 1.1-.3 1.6 0 .3 0 .8 .3 1.4 0 .3 .3 .8 .8 1.1 .3 .3 .5 .5 1.1 .8 .5 .3 1.1 .3 1.4 .3 .5 0 1.1 0 1.6-.3 .3-.3 .8-.5 1.1-.8 .3-.3 .5-.8 .8-1.1 .3-.6 .3-1.1 .3-1.4zm3.2-124.7h-1.4l-1.6 3.5-1.6-3.5h-1.4v5.4h.8v-4.1l1.6 3.5h1.1l1.4-3.5v4.1h1.1v-5.4zm4.4-80.5c0-76.2-62.1-138.3-138.5-138.3-27.2 0-53.9 8.2-76.5 23.1 72.1 59.3 73.2 171.5 0 230.5 22.6 15 49.5 23.1 76.5 23.1 76.4 .1 138.5-61.9 138.5-138.4z" />
                </svg>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>