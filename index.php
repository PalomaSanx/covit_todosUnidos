<?php

    session_start();
    session_destroy();

include 'global/config.php';
include 'templates/cabecera.php';
?>
<link href="css/style.css" rel="stylesheet">
<link href="css/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/icon.ico">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />


<!-- Header area -->
<div id="header-wrapper" class="header-slider">
    <header class="clearfix">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="main-flexslider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <p class="home-slide-content">
                                    <strong>Unidos</strong> Luchamos
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    <strong>Juntos</strong>
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                     Podemos <strong> Ganar</strong>
                                </p>
                            </li>

                        </ul>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </header>
</div>
<!-- spacer section -->
<section class="spacer text-black-50">
    <div class="container">
        <div class="row">
            <div class="span6 alignright flyLeft">
                <blockquote class="large">
                “Juntarse es el principio, mantenerse juntos el progreso, trabajar en equipo es el éxito”
                 <cite>Henry Ford</cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
    <div class="container">
        <h4>¿Quien somos?</h4>
        <div class="row">
            <div class="span4 offset1">
                <div>
                    <h2>Ayudando a las <strong>personas</strong></h2>
                    <p>
                        Este proyecto nace con la finalidad de poder hacer más fácil el día a día de
                        las personas frente a la lucha contra Covit-19. Es un proyecto que busca
                        precisamente esto, mediante la unión de personas que necesitan y quieren ayudar, 
                        poniendo todo su corazón y dedicación en esta lucha. 
                    </p>
                </div>
            </div>
            <div class="span4 offset1">
            <h2>La tecnología para la <strong>comunicación</strong></h2>
                    <p>
                        Esta iniciativa nace de un grupo de estudiantes de ingeniería informática, desde Albacete.
                        Todos queremos aportar nuestro granito de arena, y nosotros no podíamos quedarnos con los 
                        brazos cruzados y decidimos establecer un nexo entre aquellas personas que quieren colaborar junto 
                        con las que más ayuda necesitan. 
                    </p>
            </div>
        </div>
        <div class="row">
            <div class="span2 offset1 flyIn">
                <div class="people">
                    <img class="team-thumb img-circle" src="img/team/juan.jpg" alt="" />
                    <h3>Juan Pablo Egido</h3>
                    <p>
                        Desarrollo
                    </p>
                </div>
            </div>
            <div class="span2 flyIn">
                <div class="people">
                    <img class="team-thumb img-circle" src="img/team/paloma.jpg" alt="" />
                    <h3>Paloma Sánchez</h3>
                    <p>
                        Desarrollo
                    </p>
                </div>
            </div>
            <div class="span2 flyIn">
                <div class="people">
                    <img class="team-thumb img-circle" src="img/team/maria.png" alt="" />
                    <h3>María Griñan</h3>
                    <p>
                        Desarrollo
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section orange">
    <div class="container">
        <h4>¿ En que puedes ayudar ?</h4>
        <p>
            Cualquier aportación sirve de ayuda, si has llegado hasta aquí es porque no quieres quedarte con los brazos cruzados. 
            A continuación se muestran algunos ejemplos de aportaciones, aunque insistimos cualquier aportación es de gran ayuda.
        </p>
        <!-- Four columns -->
        <div class="row">
            <div class="col-3">
                <div class="service-box">
                    <img src="img/material-sanitario.png" alt="" width="70%" />
                    <h2>Material sanitario</h2>
                    <p>
                        Incluye aquellas aportaciones tanto de material sanitario como de personal o cualquiera que este relacionado con ello.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/alimentacion.png" alt="" width="70%" />
                    <h2>Alimentación</h2>
                    <p>
                        Incluye aquellas aportaciones tanto de material alimenticio como recados o cualquiera que este ralcionado con ello.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/comunicacion.png" alt="" width="70%" />
                    <h2>Comunicación</h2>
                    <p>
                        Incluye cualquier aportación que permita a distintas personas comunicarse con aquellos que no puede.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/otra.png" alt="" width="70%" />
                    <h2>Cualquier otra</h2>
                    <p>
                        Cualquier aportación puede es de gran ayuda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section: services -->
<!-- section: works -->
<section id="services" class="section green">
    <div class="container">
        <h4>Solicitar ayuda o ayudar</h4>
        <p>
            A continuación mostramos los pasos para comenzar.
        </p>
        <!-- Four columns -->
        <div class="row">
            <div class="col-3">
                <div class="service-box">
                    <img src="img/1.png" alt="" width="70%" />
                    <h2>PASO 1</h2>
                    <p>
                        En el menú superior dirigete a > Mapa.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/2.png" alt="" width="70%" />
                    <h2>PASO 2</h2>
                    <p>
                        puedes ayudar o solicitar ayuda.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/3.png" alt="" width="70%" />
                    <h2>PASO 3</h2>
                    <p>
                        Rellene la información para recibir ayuda o ayude a aquellas personas que aparecen en el mapa clicando sobre el icono.
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <img src="img/4.png" alt="" width="70%" />
                    <h2>PASO 4</h2>
                    <p>
                        La unión se acaba de realizar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- spacer section -->
<section class="spacer bg3">
    <div class="container">
        <div class="row">
            <div class="span12 aligncenter flyLeft">
                <blockquote class="large">
                “La unidad es la fuerza… cuando hay trabajo en equipo y colaboración, se pueden lograr cosas maravillosas”. 
                <cite>Mattie Stepanek</cite>               
                </blockquote>
            </div>
        </div>
    </div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
<section id="blog" class="section">
    <div class="container" align="center">
        <h4>¿Donde nos encontramos?</h4>
        <!-- Three columns -->
        <div id='map' style="width: 600px; height: 400px;">
        </div>
    </div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
    <div class="container">
        <h4>Envíanos un mensaje</h4>
        <p>
            Si tiene dudas o inquitudes no se lo piense y escríbanos!!.
        </p>
        <div class="blankdivider30">
        </div>
        <div class="row">
            <div class="span12">
                <div class="cform" id="contact-form">
                    <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
                    <div id="errormessage"></div>
                    <form action="controlador/procesacorreo.php" method="post" role="form" class="contactForm">
                        <div class="row">
                            <div class="span6">
                                <div class="field your-name form-group">
                                    <input type="text" name="nombre" class="form-control" id="nombre"
                                        placeholder="Nombre" data-rule="minlen:4"
                                        data-msg="Por favor intruzca su nombre" />
                                    <div class="validation"></div>
                                </div>
                                <div class="field your-email form-group">
                                    <input type="text" class="form-control" name="correo" id="correo"
                                        placeholder="Correo" data-rule="email"
                                        data-msg="Por favor introduzca su correo" />
                                    <div class="validation"></div>
                                </div>
                                <div class="field subject form-group">
                                    <input type="text" class="form-control" name="asunto" id="asunto"
                                        placeholder="asunto" data-rule="minlen:4"
                                        data-msg="Por favor introduzca al menos 8 letras" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="field message form-group">
                                    <textarea class="form-control" name="mensaje" rows="5" data-rule="required"
                                        data-msg="Por favor introduzca su mensaje." placeholder="Mensaje"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <input type="submit" value="Enviar mensaje" class="btn btn-theme pull-left">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./span12 -->
        </div>
    </div>
</section>

<?php include 'templates/pie.php';?>

<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localScroll.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/contactform.js"></script>
<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>

<!--JS del mapa 'donde estamos', carga el mapa según DOM (id map)-->
<script>
var map = L.map('map').
setView([38.9942400, -1.8564300],
    13);

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18
}).addTo(map);

L.control.scale().addTo(map);
//L.marker([38.9942400, -1.8564300], {draggable: true}).addTo(map);	
L.marker([38.9942400, -1.8564300]).addTo(map).bindPopup("<b>Sede principal").openPopup();
</script>


<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(74039)</script> 

</body>

</html>