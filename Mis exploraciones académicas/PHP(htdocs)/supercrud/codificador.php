<?php
function subecaracter($cadena){
    for($i = 0;$i < strlen($cadena);$i++){
        $cadena[$i] = chr(ord($cadena[$i])+1);
    }
    return $cadena;
}
function bajacaracter($cadena){
    for($i = 0;$i < strlen($cadena);$i++){
        $cadena[$i] = chr(ord($cadena[$i])+1);
    }
    return $cadena;
}

function codifica($cadena){
    $codificado = base64_encode(subecaracter(base64_encode(subecaracter(base64_encode(subecaracter(base64_encode($cadena)))))));
    return $codificado;
}
function descodifica($cadena){
    $codificado = base64_encode(subecaracter(base64_encode(subecaracter(base64_encode(subecaracter(base64_encode($cadena)))))));
    return $codificado;
}
/*
$original = "info@jose";
echo "el original es: ".$original;
echo '<br>';
$codificado = codifica("Jose Vicente");
echo "el codificado es: ".$codificado;
$descodificado = descodifica($codificado);
echo '<br>';
echo "el descodificado es: ".$descodificado;
*/



?>






