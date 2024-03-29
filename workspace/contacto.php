<!doctype html>
<html lang="es_MX">
  <head>
    <!-- Required meta tags -->
    <meta charset=<!doctype html>
<html lang="es_MX">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
     integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
     crossorigin="">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <title>Intop Solutions</title>
  </head>
  <body>
    
    
<nav style="background-image: url('fondo-arriba.png');background-repeat: no-repeat;background-size:100% 100%;" class="navbar navbar-expand-lg navbar-dark barraNav">
    <div class="container" style="margin-left: 0px;">
      <a  class="navbar-left" href="index.php">
            <img style="max-width:100%; max-height:100%;" src="Logo intop_blanco.svg" alt="">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="index.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="productos.php">PRODUCTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="servicios.php">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white;border-bottom: 2px solid #FFFFFF;" href="contacto.php">
                CONTACTO
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>


<div style="background-image: url('fondo-abajo.png');background-repeat: no-repeat;background-size:100% 500px;">
  <div class="col-md-12" style="width:100%;">
      <!--img src="Rectangulo_blanco_contacto.png" style="visibility: hidden;position:fixated;"  /-->
    <div style="background-image: url('Rectangulo_blanco_contacto.png');background-position:center;background-repeat: no-repeat;background-size:100% 100%;width:100%;padding-top:10%">
    <div class="col-md-12" id="form_container">
        <h2 style="font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center; font-size:50px;">
            </br>Contáctanos
        </h2>
        <hr style="border-top: 2px solid #8d8d8d;width:50px;" align="center">
        <br>
    </div>
    <!--action="send_form_email.php"-->
        <form name="contactform" method="post" enctype="multipart/form-data" style="height:auto; margin:0 auto;width:70%;">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <p style="font-family: 'Roboto', sans-serif;font-weight:bold;font-size:21px;">Siempre estamos listos para ayudarte. Escribenos y te contactaremos con gusto.</p>
                    <br>
                    <label for="vintop" style="color:#4c4c4c;padding-top:%;font-size:15px;">EMAIL</label></br>
                    <text id="vintop" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">ventas@intop.solutions</text>
                    <br><br>
                    <label for="tintop" style="color:#4c4c4c;font-size:15px;">TELÉFONOS MÉXICO</label></br>
                    <text id="tintop" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">OFICINAS</br>
                        + 52 (272) 115 52 77</br>
                        VENTAS</br>
                        +52 (442) 624 77 53 
                    </text>
                    <br><br>
                    <label for="dintop" style="color:#4c4c4c;font-size:15px;">DIRECCIÓN</label></br>
                    <text id="dintop" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">OFICINAS</br> Camino Real #38 Int B, Col. Los Pinos</br> C.P. 94732 <text style="font-family: 'Roboto', sans-serif;color:#4c4c4c;">Río Blanco, Ver. México</text></text>
                    <hr style="border-top: 1px solid #8d8d8d;width:62%;" align="left">
                    <text id="dintop2" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">VENTAS</br> Rufino Tamayo #4 Int D, Col. Pueblo Nuevo</br> C.P. 76900 <text style="font-size:15px;font-family: 'Roboto', sans-serif;color:#4c4c4c;">Corregidora Querétaro, Qro. México</text></text>
                    <br><br>
                    <label for="rsociales" style="color:#4c4c4c;font-size:15px;">REDES SOCIALES</label><br>
                    <a href="https://www.facebook.com/Intop-Solutions-440490166697561/" target="_blank"><img src="./images/Facebook_Icon.svg"></img></a>
                    <br><br>
                    <label for="rsociales" style="color:#4c4c4c;font-size:15px;">NUESTROS HORARIOS DE ATENCIÓN</label><br>
                    <text id="rsociales" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">OFICINAS</text><br>
                    <text id="rsociales2" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">Lunes -  Viernes 8:00 - 13:00, 15:00 - 18:00</text><br>
                    <text id="rsociales3" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">Sábado 8:00 - 13:00</text><hr style="border-top: 1px solid #8d8d8d;width:62%;" align="left">
                    <text id="rsociales3" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">SOPORTE TÉCNICO</br> 24/7 los 365 días del año</text><br>
                </div>
                <div class="col-sm-6 form-group">
                <div class="container">
                    <form action="https://formsubmit.co/mones_9995@hotmail.com" method="POST">
                        <div class="form-group">
                            <label for="nombre" style="font-weight:500;color:#4c4c4c;text-align:left;font-size:15px;">
                                NOMBRE</label>
                                <input type="text" style="width:100%;" class="form-control" id="NOMBRE" name="NOMBRE" required>
                                <br>
                                <label for="email" style="font-weight:500;color:#4c4c4c;text-align:left;font-size:15px;">
                                EMAIL</label>
                            <input type="email" style="width:100%;" class="form-control" id="EMAIL" name="EMAIL" required>
                            <br>
                            <label for="message" style="font-weight:500;color:#4c4c4c;text-align:left;font-size:15px;">
                                MENSAJE</label>
                            <textarea class="form-control" style="width:100%" type="textarea" id="comments" name="COMENTARIOS" maxlength="6000" rows="7" required></textarea>
                            <br>
                        </div>
                            <button type="submit" class="btn btn-lg btn-dark btn-block" style="color: white;
                                                        	background-color: #961717;text-align: center;
                                                        	width:100%;height: 35px;border-color:transparent;font-size:15px;">
                                            Enviar
                            </button>
                            </label>
                    </form>
                </div>
                </div>
            </div>
        </form>
        <br><br><br><br>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Su mensaje se ha enviado exitosamente</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Lo sentimos, hubo un error enviando su mensaje.

        </div>
    </div>
</div>
  </div>
<br><br><br><br><br>

<div style="padding-left:10%;">
  <h2 style="font-family: 'Roboto', sans-serif;">OFICINAS</h2>
  <p style="font-family: 'Roboto', sans-serif;">CAMINO REAL #38 INT B, COL. LOS PINOS</br>C.P. 94732 RÍO BLANCO, VER. MÉXICO</p>
</div>

<iframe style="width:100%; height:300px;" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://www.openstreetmap.org/export/embed.html?bbox=-97.14848935604095%2C18.834601915911048%2C-97.14438021183015%2C18.837709119738964&amp;layer=mapnik&amp;marker=18.83615552501038%2C-97.14643478393555"
  style="border: 0px solid black">
</iframe>
<br><br><br><br>
<div style="padding-left:10%;">
<h2 style="font-family: 'Roboto', sans-serif;">VENTAS</h2>
<p style="font-family: 'Roboto', sans-serif;">RUFINO TAMAYO #4 INT D, COL. PUEBLO NUEVO</br>C.P. 76900 CORREGIDORA QUERÉTARO, QRO. MÉXICO</p>
</div>
<iframe style="width:100%; height:300px;" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://www.openstreetmap.org/export/embed.html?bbox=-100.43059051036835%2C20.54537525793482%2C-100.42648136615755%2C20.54844943264829&amp;layer=mapnik&amp;marker=20.54691235301952%2C-100.42853593826294"
  style="border: 0px solid black">
</iframe>

<!-- Footer -->

<?php include "./footer.html" ?>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
"utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
     integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
     crossorigin="">

    <title>Intop Solutions</title>
  </head>
  <body>
    
    
<nav style="background-image: url('fondo-arriba.png');background-repeat: no-repeat;background-size:100% 100%;" class="navbar navbar-expand-lg navbar-light barraNav">
    <div class="container" style="margin-left: 0px;">
      <a  class="navbar-left" href="index.php">
            <img style="max-width:100%; max-height:100%;" src="Logo intop_blanco.svg" alt="">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="index.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="productos.php">PRODUCTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="servicios.php">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white" href="nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color : white;border-bottom: 2px solid #FFFFFF;" href="contacto.php">
                CONTACTO
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>


<div style="background-image: url('fondo-abajo.png');background-repeat: no-repeat;background-size:100% 500px;">
  <div class="col-md-12" style="width:100%;">
      <!--img src="Rectangulo_blanco_contacto.png" style="visibility: hidden;position:fixated;"  /-->
    <div style="background-image: url('Rectangulo_blanco_contacto.png');background-position:center;background-repeat: no-repeat;background-size:90% 100%;width:100%;padding-top:10%">
    <div class="col-md-12" id="form_container">
        <h2 style="font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center; font-size:50px;">
            </br>Contáctanos
        </h2>
        <hr style="border-top: 2px solid #8d8d8d;width:50px;" align="center">
        <br>
    </div>
    <!--action="send_form_email.php"-->
        <form name="contactform" method="post" enctype="multipart/form-data" style="height:auto; margin:0 auto;width:70%;">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <p style="font-family: 'Roboto', sans-serif;font-weight:bold;font-size:21px;">Siempre estamos listos para ayudarte. Escribenos y te contactaremos con gusto.</p>
                    <br>
                    <label for="vintop" style="color:#4c4c4c;padding-top:%;font-size:15px;">EMAIL</label></br>
                    <text id="vintop" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">ventas@intop.solutions</text>
                    <br><br>
                    <label for="tintop" style="color:#4c4c4c;font-size:15px;">TELÉFONOS MÉXICO</label></br>
                    <text id="tintop" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">OFICINAS</br>
                        + 52 (272) 115 52 77</br>
                        VENTAS</br>
                        +52 (442) 624 77 53 
                    </text>
                    <br><br>
                    <label for="dintop" style="color:#4c4c4c;font-size:15px;">DIRECCIÓN</label></br>
                    <text id="dintop" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">OFICINAS</br> Camino Real #38 Int B, Col. Los Pinos</br> C.P. 94732 <text style="font-family: 'Roboto', sans-serif;color:#4c4c4c;">Río Blanco, Ver. México</text></text>
                    <hr style="border-top: 1px solid #8d8d8d;width:62%;" align="left">
                    <text id="dintop2" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">VENTAS</br> Rufino Tamayo #4 Int D, Col. Pueblo Nuevo</br> C.P. 76900 <text style="font-size:15px;font-family: 'Roboto', sans-serif;color:#4c4c4c;">Corregidora Querétaro, Qro. México</text></text>
                    <br><br>
                    <label for="rsociales" style="color:#4c4c4c;font-size:15px;">REDES SOCIALES</label><br>
                    <a href="https://www.facebook.com/Intop-Solutions-440490166697561/" target="_blank"><img src="./images/Facebook_Icon.svg"></img></a>
                    <br><br>
                    <label for="rsociales" style="color:#4c4c4c;font-size:15px;">NUESTROS HORARIOS DE ATENCIÓN</label><br>
                    <text id="rsociales" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">OFICINAS</text><br>
                    <text id="rsociales2" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">Lunes -  Viernes 8:00 - 13:00, 15:00 - 18:00</text><br>
                    <text id="rsociales3" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">Sábado 8:00 - 13:00</text><hr style="border-top: 1px solid #8d8d8d;width:62%;" align="left">
                    <text id="rsociales3" style="font-family: 'Roboto', sans-serif;color:#8d8d8d;font-size:15px;">SOPORTE TÉCNICO</br> 24/7 los 365 días del año</text><br>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="nombre" style="font-weight:500;color:#4c4c4c;text-align:left;font-size:15px;">
                        NOMBRE</label>
                        <input type="text" style="width:100%;" class="form-control" id="NOMBRE" name="NOMBRE" required>
                        <br>
                        <label for="email" style="font-weight:500;color:#4c4c4c;text-align:left;font-size:15px;">
                        EMAIL</label>
                    <input type="email" style="width:100%;" class="form-control" id="EMAIL" name="EMAIL" required>
                    <br>
                    <label for="message" style="font-weight:500;color:#4c4c4c;text-align:left;font-size:15px;">
                        MENSAJE</label>
                    <textarea class="form-control" style="width:100%" type="textarea" id="comments" name="comments" maxlength="6000" rows="7"></textarea>
                    <br>
                    <button type="submit" style="color: white;
                                                	background-color: #961717;
                                                	text-align: center;
                                                	width:100%;
                                                	height: 35px;
                                                	border-color:transparent;font-size:15px;">Enviar</button>
                    </label>
                </div>
            </div>
        </form>
        <br><br><br><br>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Su mensaje se ha enviado exitosamente</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Lo sentimos, hubo un error enviando su mensaje.

        </div>
    </div>
</div>
  </div>
<br><br><br><br><br>

<div style="padding-left:10%;">
  <h2 style="font-family: 'Roboto', sans-serif;">OFICINAS</h2>
  <p style="font-family: 'Roboto', sans-serif;">CAMINO REAL #38 INT B, COL. LOS PINOS</br>C.P. 94732 RÍO BLANCO, VER. MÉXICO</p>
</div>

<iframe style="width:100%; height:300px;" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://www.openstreetmap.org/export/embed.html?bbox=-97.14848935604095%2C18.834601915911048%2C-97.14438021183015%2C18.837709119738964&amp;layer=mapnik&amp;marker=18.83615552501038%2C-97.14643478393555"
  style="border: 0px solid black">
</iframe>
<br><br><br><br>
<div style="padding-left:10%;">
<h2 style="font-family: 'Roboto', sans-serif;">VENTAS</h2>
<p style="font-family: 'Roboto', sans-serif;">RUFINO TAMAYO #4 INT D, COL. PUEBLO NUEVO</br>C.P. 76900 CORREGIDORA QUERÉTARO, QRO. MÉXICO</p>
</div>
<iframe style="width:100%; height:300px;" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://www.openstreetmap.org/export/embed.html?bbox=-100.43059051036835%2C20.54537525793482%2C-100.42648136615755%2C20.54844943264829&amp;layer=mapnik&amp;marker=20.54691235301952%2C-100.42853593826294"
  style="border: 0px solid black">
</iframe>

<!-- Footer -->

<?php include "./footer.html" ?>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
