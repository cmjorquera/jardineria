
<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../class/conexion.php");
date_default_timezone_set('America/Santiago');
$FecHr = date('Y-m-d');                                                         //FECHA
$hora = date("H:i:s");                                                          // HORA

// *****************************************************************************
	foreach($_POST as $nombre_campo => $valor)
		{
			$valor=str_replace("'","''",$valor);
			$asignacion = "\$".$nombre_campo."='".addslashes($valor)."';";
			eval($asignacion);

			$nom_variable	=substr($nombre_campo,0,3);
  		$fila			=(int)substr($nombre_campo,4,2);
			echo "<div>";
				echo "<br/>".$nombre_campo."=".addslashes($valor);
			echo "</div>";
		}
// *****************************************************************************+
$db = new MySQL("jardineriaWeb","","");
$sql="INSERT INTO usuario (nombre, apellidop, apellidom, run, fono1, fono2, correo,imagen, pass) VALUES";
$sql.="('$nombre','$apellidoPaterno','$apellidoMaterno','$run','$txt_fono_1','$txt_fono_2','$txt_correo','$imagen','$pass')";
$bl=$db->guardar($sql );
$db->CerrarConexion();
// echo $sql5."**";
// ______________________________________________________________________________
// ____________________________________PHP-MAILER________________________________
// ______________________________________________________________________________
if($mail == "1"){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require '../class/PHPMailer/src/PHPMailer.php';
    require '../class/PHPMailer/src/SMTP.php';
    // Crea una instancia de PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    try {
        $mail->isSMTP();                                                            // Activar envio SMTP
        $mail->Host  = 'mail.qa.seduc.cl';                                          // Servidor SMTP
        $mail->SMTPAuth  = true;                                                    // Identificacion SMTP
        $mail->Username  = 'envio@qa.seduc.cl';                                     // Usuario SMTP
        $mail->Password  = 'Analista1986$';	                                        // Contraseña SMTP
        $mail->SMTPSecure = 'tls';
        $mail->Port  = 587;
        $mail->setFrom('hola@prueba.com', 'Jardineria.SPA');
        // Destinatarios
        $mail->addAddress( $txt_correo, 'Nombre del destinario');              // Email y nombre del destinatario
        $mail->addCC('cjorquera@seduc.cl');                                      // Copia oculta
        // ***********************Contenido del correo ***********************************
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->isHTML(true);
        $mail->Subject = 'BIENVENIDO/A --> '.$nombre;                              //ASUNTO DEL CORREO
        //CONTENIDO HTML
        $mensaje="<table class='cuerpoMail'>";
        $mensaje.=   "<tbody>";
        $mensaje.=       "<tr>";
        $mensaje.=           "<td style='padding:15px 0; text-align:center;'>";
        $mensaje.=               "<table>";
        $mensaje.=                   "<tbody>";
        $mensaje.=                      "<tr style='text-align:center;'>";
        $mensaje.=                           "<td style='text-align:center;'>";
        $mensaje.=                              "<img src='https://qa.seduc.cl/s_caja/Mantencion/imagenes/logo_seduc_50_anos.jpg' id='imagen_logo' class='imagen'> ";
        $mensaje.=                          "</td>";
        $mensaje.=                       "</tr>";
        $mensaje.=                   "</tbody>";
        $mensaje.=               "</table>";
        $mensaje.=           "</td>";
        $mensaje.=       "</tr>";


        $mensaje.=       "<tr>";
        $mensaje.=           "<td style='padding:15px 0; text-align:center;'>";
        $mensaje.=               "<table>";
        $mensaje.=                   "<tbody>";
        $mensaje.=                      "<tr style='text-align:center;'>";
        $mensaje.=                          "<td style='text-align:center;color:#080204;font-size:26px;line-height:1.2'> ";
        $mensaje.=                             "Bienvenido/a";
        $mensaje.=                              "<br><br>";
        $mensaje.=                              "$nombre.$apellidoPaterno.$apellidoPaterno";
        $mensaje.=                               "<br>";
        $mensaje.=                          "</td>";
        $mensaje.=                       "</tr>";
        $mensaje.=                   "</tbody>";
        $mensaje.=               "</table>";
        $mensaje.=           "</td>";
        $mensaje.=       "</tr>";





        $mensaje.=       "<tr>";
        $mensaje.=           "<td style='padding:15px 0; text-align:center;'>";
        $mensaje.=               "<table width='65%' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse'>";
        $mensaje.=                   "<tbody>";
        $mensaje.=                      "<tr style='text-align:center;'>";
        $mensaje.=                          "<td style='text-align:center;color:red;font-size:21px;line-height:1.2;'> ";
        $mensaje.=                             " A continuación encontrarás Tus nuevas Credenciales para entrar a la caja 2.0";
        $mensaje.=                               "<br";
        $mensaje.=                          "</td>";
        $mensaje.=                       "</tr>";
        $mensaje.=                   "</tbody>";
        $mensaje.=               "</table>";
        $mensaje.=           "</td>";
        $mensaje.=       "</tr>";





        $mensaje.=       "<tr>";
        $mensaje.=           "<td style='padding:15px 0; text-align:center;'>";
        $mensaje.=               "<table width='65%' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse'>";
        $mensaje.=                   "<tbody>";
        $mensaje.=                      "<tr style='text-align:center; '>";
        $mensaje.=                          "<td   align='center' style='text-align:center; padding-bottom:30px'> ";
        $mensaje.=                             "<img src='https://qa.seduc.cl/s_caja/Mantencion/imagenes/fotoclave.png' id='candado'>";
        $mensaje.=                          "</td>";
        $mensaje.=                       "</tr>";
        $mensaje.=                      "<tr style='text-align:center; color:080204;font-size:21px;line-height:1.2;padding-bottom:25px;'>";
        $mensaje.=                          "<td style='text-align:left;  background-color:#C1E3E4;'>";
        $mensaje.=                             "<p  style='text-aling:left';>Usuario: <strong>$txt_correo</strong></p>";
        $mensaje.=                             "<p  style='text-aling:left'; >Contraseña: <strong>$pass</strong></p>";
        $mensaje.=                          "</td>";
        $mensaje.=                       "</tr>";
        $mensaje.=                      "<tr>";
        $mensaje.=                          "<td  style='color:#080204;font-size:18px;line-height:1.2'>";
        $mensaje.=                             "Te recordamos que este estas Credenciales tiene una vigencia de 15 minutos.";
        $mensaje.=                          "</td>";
        $mensaje.=                       "</tr>";
        $mensaje.=                   "</tbody>";
        $mensaje.=               "</table>";
        $mensaje.=           "</td>";
        $mensaje.=       "</tr>";

        $mensaje.=       "<tr>";
        $mensaje.=           "<td bgcolor='#222222' align='center' style='padding:15px 0'>";
        $mensaje.=               "<table width='80%'  cellpadding='0' cellspacing='0' style='border-collapse:collapse'>";
        $mensaje.=                   "<tbody>";
        $mensaje.=                      "<tr>";
        $mensaje.=                          "<td  align='center' style='font-size:15px;line-height:1.2;color:#ffffff'>";
        $mensaje.=                           "<b>Estamos siempre a tu disposición en los siguientes canales:</b>";
        $mensaje.=                          "<td>";
        $mensaje.=                      "</tr>";
        $mensaje.=                   "<tbody>";
        $mensaje.=               "</table>";
        $mensaje.=           "<td>";
        $mensaje.=       "<tr>";




        $mensaje.=       "<tr>";
        $mensaje.=           "<td style='border-collapse:collapse;background-color:#222222;padding-botton:15px;'>";
        $mensaje.=               "<table style='width:45%; style='border-collapse:collapse;'>";
        $mensaje.=                   "<tbody>";
        $mensaje.=                      "<tr>";
        $mensaje.=                          "<td width='40%'>";
        $mensaje.=                              "<table style='border-collapse:collapse;'>";
        $mensaje.=                                  "<tbody>";
        $mensaje.=                                      "<tr>";
        $mensaje.=                                          "<td style='text-align:right';>";
        $mensaje.=                                              "<a href='https://www.seduc.cl/' rel='contactoWeb' target='_blank'>";
        $mensaje.=                                                  "<img src='https://qa.seduc.cl/s_caja/Mantencion/imagenes/correo.png' style='border-radius:50%; width:15%'; >";
        $mensaje.=                                              "</a>";
        $mensaje.=                                          "</td>";
        $mensaje.=                                          "<td style='text-align:center';>";
        $mensaje.=                                              "<a href='https://www.seduc.cl/' rel='contactoWeb' target='_blank'>";
        $mensaje.=                                                  "<img src='https://qa.seduc.cl/s_caja/Mantencion/imagenes/telefono.png' style='border-radius:50%; width:15%';>";
        $mensaje.=                                              "</a>";
        $mensaje.=                                          "</td>";
        $mensaje.=                                          "<td style='text-align:left';>";
        $mensaje.=                                              "<a href='https://www.seduc.cl/' rel='contactoWeb' target='_blank'>";
        $mensaje.=                                                  "<img src='https://qa.seduc.cl/s_caja/Mantencion/imagenes/web.png' style='border-radius:50%; width:15%';>";
        $mensaje.=                                              "</a>";
        $mensaje.=                                          "</td>";
        $mensaje.=                                     "</tr>";
        $mensaje.=                                  "<tbody>";
        $mensaje.=                              "</table>";
        $mensaje.=                            "</td>";
        $mensaje.=                          "</tr>";
        $mensaje.=                       "</tbody>";
        $mensaje.=                  "</table>";
        $mensaje.=           "</td>";
        $mensaje.=       "</tr>";

        $mensaje.=  "</tbody>";
        $mensaje.="</table>";


        $mail->Body=$mensaje;
        $mail->AlBody = $mensaje;
        $mail->send();
    } catch (Exception $e) {
            echo "No se pudo enviar el mensaje. Error de correo:".$mail->ErrorInfo;

    }
}






?>
