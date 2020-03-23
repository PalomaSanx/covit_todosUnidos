<?php

include 'global/config.php';
include 'global/conexion.php';
include 'templates/cabecera.php';
?>

<!--tarjetas (contenido)-->
<!--contenido REGISTRO-->
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <legend>Introduce los datos necesarios</legend>
            <form action="../controlador/procesoregistro.php" method="POST">
                Introduzca su correo:<br>
               <div style="margin-bottom: 25px" class="input-group">
                    <input class="form-control" type="email" size="40" maxlength="64" name="correo" required /><br><br>
               </div>
                Introduzca su motivo:<br>
                <div style="margin-bottom: 25px" class="input-group">
                    <input class="form-control" type="text" size="40" maxlength="64" NAME="motivo" /><br><br>
                </div>
                Introduzca direccion más proxima:<br>
                <div style="margin-bottom: 25px" class="input-group">
                    <input class="form-control" type="address" size="40" maxlength="64" NAME="direccion" /><br><br>
                </div>
                Describe la ayuda que necesita:<br>
                <div style="margin-bottom: 25px" class="input-group">
                    <input class="form-control" type="text" size="40" maxlength="64" NAME="descripcion" /><br><br>
                </div>
                <input type="submit" name="btnlog" value="Confirmar" class="btn btn-primary" />   
                <?php
			//FEEDBACK para incorrecto
			if (isset($_GET["fallo1"]) && ($_GET["fallo1"]) == 'true') {
				echo "</br><div align='center' style='color:red'>Error al registrar.<br>Vuelva a intentarlo</div>";
            }
            if (isset($_GET["fallo2"]) && ($_GET["fallo2"]) == 'true') {
                echo "</br><div align='center' style='color:red'>El correo ya existe.<br>Pruebe a <a href='login.php'>Iniciar Sesión</a></div>";
                echo '<br>';
                
			}
			?>
            </form>
        </div>
    </div>
</div>
<!--JAVA SCRIPT-->
<!-- <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(74039)</script> 
	-->
</body>

</html>
