<?php 
  
 $name=$_POST["name"];
 $from=$_POST["email"];
 $msg=$_POST["message"];
 $receiver="vraulmm@hotmail.com";
 $subject="[Nuevo Cliente]";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td colspan='2' align='center' valign='top'><img src='http://profesorparticularlima.com/images/logo-mail-profesor-particular-lenguaje-lima-correccion-textos.png' width='140' height='140'></td>
  </tr>
  <tr>
    <td width='50%' align='right'>&nbsp;</td>
    <td align='left'>&nbsp;</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Nombre:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$name."</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
  </tr>
  <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Message:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".nl2br($msg)."</td>
  </tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";


   if(mail($receiver,$subject,$message,$headers))  
   {
      echo "<div class='alert-success alert'>¡Su mensaje fue enviado! Estaré poniendome en contacto con usted a la brevedad.</div>";
   }
   else
   {
      echo "<div class='alert-error alert'>¡Su mensaje no pudo ser enviado! Pruebe escribiendo a mi email vraulmm@hotmail.com o llamando a mi número telefónico 99978-0527</div>";
   }


?>