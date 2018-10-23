<?php
$nombre = $_REQUEST['buyerFullName'];
$cedula = $_REQUEST['payerDocument'];
$celular = $_REQUEST['mobilePhone'];
$cumpleanios = $_REQUEST['extra3'];
$to2 = 'danielf.salazar@umanizales.edu.co';
$to = $_REQUEST['buyerEmail'];
$subject = "Pedido: ".$reference_pol;

$jsonDesc = json_decode(base64_decode($extra1));

$message = 'Cantidad: '.$jsonDesc->quantity.'<br>
			Sabor: '.$jsonDesc->flavor.'<br>
			Relleno:'.$jsonDesc->filling.'<br>
			Tipo:'.$jsonDesc->type.'<br>
			Capacillo: <div style="width: 20px; height: 20px; display: inline-block; background-color:'.$jsonDesc->capacillo->value.';"></div><br>
			Cupcakes: ';
			$i = 0;
			foreach ($jsonDesc->cupcakes as $d) {
				if (is_array($d)) {
					foreach ($d as $di) {
						$message .= $di . '<br>';
					}
				}else{
					$message .= $d[$i++] . '<br>';
				}
			}
			$i = 0;
			foreach ($jsonDesc->cupcakes as $a):
				$message .= $a[$i++] . '<br>';
			endforeach;
$message .= 'Nombre:'.$nombre. '<br>
			Cedula'.$cedula.'<br>
			Celular'.$celular.'<br>
			Cumpleaños'.$cumpleanios.'<br>'
$headers = array('Content-Type: text/html; charset=UTF-8');

wp_mail( $to, $subject, $message, $headers );
wp_mail( $to2, $subject, $message, $headers );
?>