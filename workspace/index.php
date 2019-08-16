<!doctype html>
<html lang="es_MX">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


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
          <li class="nav-item active tabActiva">
            <a class="nav-link" style="color : white" href="index.php">INICIO
            <span class="sr-only">(current)</span></a>
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
            <a class="nav-link" style="color : white" href="contacto.php">CONTACTO</a>
          </li>
        </ul>
      </div>
    </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-image: url('fondo-abajo.png');background-repeat: no-repeat;background-size:100% 100%;max-height:100%;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <ul>
            <div class="carousel-item active">
              <div class="anim4">
                <div class="container" align="center" style="width:100%;">
                  <table style="width:90%;">
                    <tr>
                      <td>
                        <h1 style="color:white;padding-top:40px;font-weight:bold;font-size: 55px;">SOV Rutas</h1>
                        <p style="color:white;padding-top:40px;font-size: 20px;">Genera reportes con indicadores para </br>una mejor administración comercial y </br>operativa, de manera inmediata y clara</br> para la toma de decisiones. </br>Certifica las actividades realizadas por </br> tu fuerza de ventas.</p>
                        <form>
                          <input type="button" onclick="window.location='sovrutas.php';" value="Ver más" style="padding-top:px;width:160px;height:35px;background-color:#4c4c4c;color:white;font-size:18px;border-radius: 20px;border: solid 0px #000;"/>
                        </form>
                      </td>
                      <td style="text-align:center;">
                        <img src="ruta_movil01.gif" alt="autotransportegif" style="padding-top:2%;max-width:100%;max-height:100%">
                      </td>
                    </tr>
                  </table>
                  <br><br>
                </div>
              </div>
            </div>
    <div class="carousel-item">
      <div class="anim3">
        <div class="container" align="center" style="width:100%;">
                  <table style="width:90%;">
                    <tr>
                      <td style="width:50%;">
                        <h1 style="color:white;padding-top:40px;font-weight:bold;font-size:55px;">SOV <h2 style="color:white;font-weight:bold;font-size: 2em;">Autotransporte</h2></h1>
                        <p style="color:white;padding-top:40px;font-size: 20px;">A través del círculo de servicio conoce </br>la productividad de tu flotilla. Saber en </br>tiempo real el estatus de tus unidades.</br></br> Cumple al 100% con la NOM 87 de la SCT.</p>
                        <form>
                          <input type="button" onclick="window.location='sovautotransporte.php';" value="Ver más" style="padding-top:px;width:160px;height:35px;background-color:#4c4c4c;color:white;font-size:18px;border-radius: 20px;border: solid 0px #000;"/>
                        </form>
                      </td>
                      <td style="text-align:center;">
                        <img src="autotransporte_movil01.gif" alt="autotransportegif" style="padding-top:2%;max-width:100%;max-height:100%">
                      </td>
                    </tr>
                  </table>
                  <br><br>
                </div>
      </div>
    </div>
    <div class="carousel-item">
       <div class="anim2">
         <div class="container" align="center" style="width:100%;">
                  <table style="width:90%;">
                    <tr>
                      <td style="width:50%;">
                        <h1 style="color:white;padding-top:40px;font-weight:bold;font-size:55px;">SOV Evaluación</h1>
                        <p style="color:white;padding-top:40px;font-size: 20px;">
                            Evalúa en forma práctica personal y sucursales. Conoce el nivel de satisfacción de tus clientes, lo que permite generar una calificación única de sucursal conociendo a detalle fortalezas y debilidades. </br></br>Todo lo que es medible es perfeccionable.
                        </p>
                        <form>
                          <input type="button" onclick="window.location='sovevaluacion.php';" value="Ver más" style="padding-top:px;width:160px;height:35px;background-color:#4c4c4c;color:white;font-size:18px;border-radius: 20px;border: solid 0px #000;"/>
                        </form>
                      </td>
                      <td style="text-align:center;">
                        <img src="evaluacion_movil_01.gif" alt="autotransportegif" style="padding-top:2%;max-width:100%;max-height:100%">
                      </td>
                    </tr>
                  </table>
                  <br><br>
                </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="anim1">
        <div class="container" align="center" style="width:100%;">
          <br><br><br><br>
                  <table style="width:90%;">
                    <tr>
                      <td style="width:50%;">
                        <h1 style="color:white;padding-top:45px;font-weight:bold;font-size:55px;">SOV Sistemas </br>Ad-Hoc</h1>
                        <p style="color:white;padding-top:40px;font-size: 20px;">
                            Desarrollamos sistemas a la medida de las necesidades de tu empresa. </br></br> Planea, supervisa y analiza de una forma fácil y sencilla. 
                        </p>
                        <form>
                          <input type="button" value="Ver más" style="padding-top:px;width:160px;height:35px;background-color:#4c4c4c;color:white;font-size:18px;border-radius: 20px;border: solid 0px #000;"/>
                        </form>
                      </td>
                      <td style="text-align:center;">
                        <!--img src="evaluacion_movil.gif" alt="autotransportegif" style="padding-top:px;max-width:100%;max-height:100%"-->
                      </td>
                    </tr>
                  </table>
                  <br><br><br><br><br><br>
                </div>
              </div>
    </div>
    </ul>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <h2 class="titulo" style="font-weight:bold;">SISTEMAS</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <h5 class="subtitulo">SISTEMAS DE ALTA CALIDAD</h5>
    </div>
  </div>
</div>

<style>
#tarjetiux {
    color: #DDDDDD;
}

#tarjetiux:hover span {display:none}

#tarjetiux:hover:before{
    padding-right: 5%;
    padding-left:5%;
    padding-top:30%;
    padding-bottom:5%;
    display: block;
    white-space: pre;
    content: "· Programa y agenda tus viajes \A · Registro de visita a clientes por horario \A · Cobertura de productos \A · Carga óptima en rutas de reparto";
}

#tarjetiux2 {
    color: #DDDDDD;
}

#tarjetiux2:hover span {display:none}

#tarjetiux2:hover:before{
    padding-right: 5%;
    padding-left:5%;
    padding-top:30%;
    padding-bottom:5%;
    display: block;
    white-space: pre;
    content: "· Geoposiciona las rutas de tus vendedores \A · Cambio de estatus durante el recorrido \A   en tiempo real \A · Sistema de alarmas \A · Geolocalización de unidades";
}

#tarjetiux3 {
    color: #DDDDDD;
}

#tarjetiux3:hover span {display:none}

#tarjetiux3:hover:before{
    padding-right: 5%;
    padding-left:5%;
    padding-top:30%;
    padding-bottom:5%;
    display: block;
    white-space: pre;
    content: "· Exporta los reportes en Excel \A · Exporta la evidencia fotográfica \A · Conoce la agenda de las actividades \A   realizadas \A · 5 aplicaciones corriendo simultáneamente \A   para crear evaluaciones que beneficiaran \A   a tu empresa";
}

#sovabajotarjeta{
    padding-top: 7px;
    text-align: left;
    color: white;
    font-size: 26px;
    font-family: 'Roboto', sans-serif;
    font-weight: normal;
    float: left;
    width: 100%;
}
</style>


<div class="container" align="">
  <div class="row">
    <div class="col-sm" style="width:350px;height:464px;display: flex;display: -webkit-flex;flex-wrap: wrap;">
      <div class="card tarjeta" id="" style="flex: 1;">
        <div id="tarjetiux">
        <span>
        <img src="aparatos_ruta_parte3.gif" class="card-img-top" alt="..." >
        <div class="card-body">
          <p class="card-text textoTarjeta">
            Una persona que no conoce la ruta puede realizarla al 100%. Convirtiéndola en una ventaja competitiva.
         </p>
         </div>
         </span>
         </div >
         <div class="card-body">
             <div class="container" style="position: absolute;bottom: 0;left: 0;">
              <table align="center" style="width:100%;">
                <tr style="border-top: 1px solid #DDDDDD;">
                    <td>
                        <h5 id="sovabajotarjeta">
                    	   SOV Rutas
                    	</h5>
                    </td>
                    <td>
                        <a href="sovrutas.php">
                            <text id="sovabajotarjeta">
                        	   >
                        	</text>
                    	</a>
                    </td>
                </tr>
            </table>
          </div>
        </div>
    </div>
</div>
    <div class="col-sm" style="width:350px;height:464px;display: flex;display: -webkit-flex;flex-wrap: wrap;">
      <div class="card tarjeta" style="flex: 1;">
        <div id="tarjetiux2">
        <span>
        <img src="aparatos_autotransporte_parte13.gif" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text textoTarjeta">
                    Geoposiciona las rutas de tus vendedores</br>·Cambio de estatus durante el recorrido en tiempo real </br>·Sistema de alarma</br>·Geolocalización de unidades
                </p>
            </div>
         </span>
         </div >
            <div class="container" style="position: absolute;bottom: 0;left: 0;">
                <table style="width:100%;">
                    <tr style="border-top: 1px solid #DDDDDD;">
                        <td>
                            <h5 id="sovabajotarjeta">
                        	   SOV Autotransporte
                        	</h5>
                        </td>
                        <td>
                            <a href="sovautotransporte.php">
                                <text id="sovabajotarjeta">
                            	   >
                            	</text>
                        	</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-sm" style="width:350px;height:464px;display: flex;display: -webkit-flex;flex-wrap: wrap;">
      <div class="card tarjeta" style="flex: 1;">
        <div id="tarjetiux3">
        <span>
          <img src="aparatos_evaluacion_parte3.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text textoTarjeta">
                Obtener una visión integral de 360º de tu empresa , generando una calificación desde 3 perspectivas, nos brinda un resultado efectivo y objetivo
            </p>
          </div>
         </span>
         </div >
            <div class="container" style="position: absolute;bottom: 0;left: 0;">
            <table style="width:100%;">
                <tr style="border-top: 1px solid #DDDDDD;">
                    <td>
                        <h5 id="sovabajotarjeta">
                    	   SOV Evaluación
                    	</h5>
                    </td>
                    <td>
                        <a href="sovevaluacion.php">
                            <text id="sovabajotarjeta">
                        	   >
                        	</text>
                    	</a>
                    </td>
                </tr>
            </table>
            </div>
          </div>
</div>
    </div>
  </div>
</div>


<br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <h2 class="titulo">SERVICIOS</h2>
    </div>
  </div>
</div>

<br><br>

<div class="container">
  <div class="row">
  <div style="display: flex;display: -webkit-flex;flex-wrap: wrap;" class="col-sm">
      <div class="card" style="flex:1;">
  <div class="card-body">
    <br>
    <h5 class="card-title" style="text-align: left;">Soporte técnico</h5>
    <br>
    <p class="card-text">
        Contamos con un soporte 24/7 y los 365 días del año
    </p>
    <p style="color: #B8B8B8;font-size: 11px;font-family: 'Roboto', sans-serif;font-weight: normal;">
        VER MÁS<a href="servicios.php"><image src="flecha_parte4.png" style="padding-left:15px;"></image></a>
    </p>
  </div>
</div>
    </div>
    <div style="display: flex;display: -webkit-flex;flex-wrap: wrap;" class="col-sm">
      <div class="card" style="flex:1;">
  <div class="card-body">
    <br>
    <h5 class="card-title" style="text-align: left;">Facturación</h5>
    <br>
    <p class="card-text">100% deducible de impuestos</p><br>
    <p style="color: #B8B8B8;font-size: 11px;font-family: 'Roboto', sans-serif;font-weight: normal;">VER MÁS <a href="servicios.php"><image src="flecha_parte4.png" style="padding-left:15px;"></image></a></p>
  </div>
</div>
    </div>
    <div style="display: flex;display: -webkit-flex;flex-wrap: wrap;" class="col-sm">
      <div class="card" style="flex:1;">
  <div class="card-body">
    <br>
    <h5 class="card-title" style="text-align: left;">Traje a la medida</h5>
    <br>
    <p class="card-text">Creamos sistemas de acuerdo a tus necesidades</p>
    <p style="color: #B8B8B8;font-size: 11px;font-family: 'Roboto', sans-serif;font-weight: normal;">VER MÁS <a href="servicios.php"><image src="flecha_parte4.png" style="padding-left:15px;"></image></a></p>
  </div>
</div>
    </div>
  </div>
</div>

<br><br><br><br>
<br><br><br><br>

<style>
#textosslider{
    font-family: 'Roboto', sans-serif;
    color:white;
    text-align:center;
    padding-top:200px;
    width:100%;
}
</style>

<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" style="background-image: url('fondo-frase.png');background-repeat: no-repeat;background-size:100% 100%;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="anim5">
        <div class="container" style="height:506px;" align="center">
          <div align="center" class="row" style="text-align:center;width:100%;">
            <div style="width:85%;" class="container">
            <h3 id="textosslider">
                Sistemas realizados con base en</br> análisis nivel dirección y corporativos,</br> estructurados por asesores de alto</br> nivel y experiencia
            </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
       <div class="anim6">
         <div class="container" style="height:506px;" align="center">
          <div align="center" class="row" style="text-align:center;width:100%;">
            <div style="width:85%;" class="container">
            <h3 id="textosslider">
                Enfocados en el desarrollo de</br> sistemas que facilitarán las </br>operaciones de tu empresa
            </h3>
            </div>
            </div>
        </div>
       </div>
    </div>
    <div class="carousel-item">
      <div class="anim7">
        <div class="container" style="height:506px;" align="center">
          <div align="center" class="row" style="text-align:center;width:100%;">
            <div style="width:85%;" class="container">
            <h3 id="textosslider">
                <br>Fáciles de usar ·  Confiables · Prácticos · Innovadores · Útiles 
            </h3>
            </div>
          </div>
        </div>
       </div>
    </div>
    <div class="carousel-item">
      <div class="anim8">
        <div class="container" style="height:506px;" align="center">
          <div align="center" class="row" style="text-align:center;width:100%;vertical-align:middle;">
            <div style="width:85%;" class="container">
            <h3 id="textosslider">
                Todos nuestros sistemas cuentan </br>con un portal web para su administración</br> y aplicaciones móviles para el personal
            </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <h2 class="titulo6inicio">CONTÁCTANOS</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <h5 class="parte6inicio">Mándanos un email a <span class="correo">ventas@intop.solutions</span><br />o márcanos al <span class="correo">+52 (272) 115 5277</h5></span>
    </div>
  </div>
</div>
<div class="container" style="text-align: center;">
  <form>
      <input type="text" name="ecorreo" placeholder="Escribe tu email" style="width:35%;height:30px;background-color:#c9c9c9;color:black;border:none;padding:2%;font:22px 'Roboto', sans-serif;"/>
      <br><br>
      <input type="submit" value="Enviar" style="width:150px;height:27px;background-color:#4c4c4c;color:white;font-size:18px;border-radius: 20px;border: solid 0px #000;"/>
    </form>
</div>
<br>


<br><br><br>

<!-- Footer -->

<?php include "./footer.html" ?>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
