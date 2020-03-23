<?php
define ("KEY", "keytachbot");
define ("COD", "AES-128-ECB");

define ("SERVIDOR", "localhost");
define ("USUARIO", "root");
define ("PASSWORD", "");
define ("BD", "tachbot");
define ("url", "http://localhost/covit/TIENDA2");


function test_input($cadena) {
    $dato = trim($cadena);
    $dato = strip_tags($cadena);
    $dato = htmlspecialchars($cadena);
    return $cadena;
}

?>