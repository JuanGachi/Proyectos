<?php
     $cabeceras = 'From: jugach21@gmail.com' . "\r\n" .
     'Reply-To: info@jocarsa. com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();|
                                                   I
      $cabeceras .=  'MIME-Version: 1.0' . "\r\n";
     
     $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail(
         "info@josevicentecarratala. com",
         "Este es el asunto del mensaje",
         "<h1>Titulo</h1><p>Este es el cuerpo del mensaje</p>",
         $cabeceras
     );
?>
