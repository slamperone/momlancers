<?php
// Varios destinatarios
 include ('../../config.php');
 
$para  = 'Castillo Nupcial'; // Nombre de receptor
$para_email = 'info@castillonupcial.com'; // email de receptor

$honeypot=''; // variable para spambots
$de = sanitize($_POST['nombre']); // De
$de_email = sanitize($_POST['email']); // De Email



$name  = sanitize($_POST['nombre']);
$email = sanitize($_POST['email']);
$phone = sanitize($_POST['telefono']);
$subject = "";
$message =  sanitize($_POST['mensaje']);

$fecha= date('j-m-Y'). ' a las '.date('h:i:s');


 $asunto = 'Se han solicitado informes desde el formulario de '; // asunto del correo
 $dominio = 'castillonupcial.com'; // dominio donde se ejecura el script
 
// Si el robot de spam cae en la trampa no se envia nada
if(!empty($_POST['honeypot']) && $_POST['honeypot']=='1'){ 
  //no retorna nada
  exit();
}else{

// Si no estan vacios el nombre y el correo
    if(!empty($name) && !empty($email)){

          // título

          // mensaje
          $mensaje ='';
          ob_start();
          // incluimos la plantilla para el correo
          // 
           /* no tocar */
          include('email.php');

          $mensaje .= ob_get_contents();

          ob_end_clean ();
            /* /no tocar */

          // Para enviar un correo HTML, debe establecerse la cabecera Content-type
          $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
          $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          // Cabeceras adicionales
          $cabeceras = "MIME-Version: 1.0" . "\r\n";
          $cabeceras .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
          $cabeceras .= "From: envios@".$dominio. "\r\n" .  //no colocar el email del formulario o Gmail lo clasifica como spam el dominio debe ser desde donde se ejecuta el script.
          "Reply-To: ".$de_email."" . "\r\n" .
          "X-Mailer: PHP/" . phpversion();

          $respuesta =  array();

          // Enviarlo
          if(mail($para_email, $asunto, $mensaje, $cabeceras)){


          $headers_notify  = 'MIME-Version: 1.0' . "\r\n";
          $headers_notify .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          // Cabeceras adicionales
          $headers_notify = "MIME-Version: 1.0" . "\r\n";
          $headers_notify .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
          $headers_notify .= "From: envios@".$dominio. "\r\n" .  //no colocar el email del formulario o Gmail lo clasifica como spam el dominio debe ser desde donde se ejecuta el script.
          "Reply-To: envios@".$dominio."" . "\r\n" .
          "X-Mailer: PHP/" . phpversion();

          /*Registrar via CURL*/
          $ch = curl_init();

          curl_setopt($ch, CURLOPT_URL,"http://vestidos.pw.com/endpoints/contacto/");
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS,
                      "name=".$name."&email=".$email."&phone=".$phone."&message=".$message."&domain=".$dominio."&fecha=".$fecha."&dominio=".$dominio);

          
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

          $server_output = curl_exec($ch);

          curl_close ($ch);

         
       



            mail($de_email, 'Mensaje recibido', 'Se ha recibido su mensaje muchas gracias',  $headers_notify);
            //Mensaje de agradecimiento
           //  $respuesta = array('status'=>'success','message'=>'Hemos recibido su información , le responderemos a la brevedad');
           header('Location: http://localhost.com/castillo/enviado.php');
          }else{
             //Mensaje de error si no se pudo enviar el correo
            $respuesta = array('status'=>'error','message'=>'Ha ocurrido un error al enviar el correo, intente de nuevo');
          }
    }else{
       //Mensaje de error si no se han llenado los campos
         $respuesta = array('status'=>'error','message'=>'Por favor ingrese los campos correspondientes');
    }



print json_encode($respuesta);
}


function sanitize($string, $force_lowercase = true, $anal = false) {
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
                   "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
                   "â€”", "â€“", ",", "<", ".", ">", "/", "?");
    $clean = trim(str_replace($strip, "", strip_tags($string)));
    $clean = preg_replace('/\s+/', "-", $clean);
    $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
    return ($force_lowercase) ?
        (function_exists('mb_strtolower')) ?
            mb_strtolower($clean, 'UTF-8') :
            strtolower($clean) :
        $clean;
}

?>