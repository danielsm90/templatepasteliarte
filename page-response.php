<?php
get_header();
if ( trim($_GET['lapTransactionState']) ) {
	// print_r($_GET);
	$ApiKey = "4Vj8eK4rloUd272L48hsrarnUA";
	$merchant_id = $_REQUEST['merchantId'];
	$referenceCode = $_REQUEST['referenceCode'];
	$TX_VALUE = $_REQUEST['TX_VALUE'];
	$New_value = number_format($TX_VALUE, 1, '.', '');
	$currency = $_REQUEST['currency'];
	$transactionState = $_REQUEST['transactionState'];
	$firma_cadena = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
	$firmacreada = md5($firma_cadena);
	$firma = $_REQUEST['signature'];
	$reference_pol = $_REQUEST['reference_pol'];
	$cus = $_REQUEST['cus'];
	$extra1 = $_REQUEST['extra1'];
	$pseBank = $_REQUEST['pseBank'];
	$lapPaymentMethod = $_REQUEST['lapPaymentMethod'];
	$transactionId = $_REQUEST['transactionId'];
	$producto = $_REQUEST['extra2'];

	$jsonDesc = json_decode(base64_decode($extra1));

	if ($_REQUEST['transactionState'] == 4 ) {
		$estadoTx = "Transacción aprobada";
	}

	else if ($_REQUEST['transactionState'] == 6 ) {
		$estadoTx = "Transacción rechazada";
	}

	else if ($_REQUEST['transactionState'] == 104 ) {
		$estadoTx = "Error";
	}

	else if ($_REQUEST['transactionState'] == 7 ) {
		$estadoTx = "Transacción pendiente";
	}

	else {
		$estadoTx=$_REQUEST['mensaje'];
	}


	if (strtoupper($firma) == strtoupper($firmacreada)) {
	?>
		<center>
			<h2 id="resumen">Resumen Transacción</h2>
			<table>
			<tr>
			<td class="colum1">Estado de la transaccion</td>
			<td class="colum2"><?php echo $estadoTx; ?></td>
			</tr>
			<tr>
			<td class="colum1">ID de la transaccion</td>
			<td class="colum2"><?php echo $transactionId; ?></td>
			</tr>
			<tr>
			<td class="colum1">Referencia de la venta</td>
			<td class="colum2"><?php echo $reference_pol; ?></td>
			</tr>
			<tr>
			<td class="colum1">Referencia de la transaccion</td>
			<td class="colum2"><?php echo $referenceCode; ?></td>
			</tr>
			<tr>
			<?php
			if($pseBank != null) {
			?>
				<tr>
				<td>cus </td>
				<td><?php echo $cus; ?> </td>
				</tr>
				<tr>
				<td>Banco </td>
				<td><?php echo $pseBank; ?> </td>
				</tr>
			<?php
			}
			?>
			<tr>
			<td class="colum1">Valor total</td>
			<td class="colum2">$<?php echo number_format($TX_VALUE); ?></td>
			</tr>
			<tr>
			<td class="colum1">Moneda</td>
			<td class="colum2"><?php echo $currency; ?></td>
			</tr>
			<tr>
			<td class="colum1">Descripción</td>
			<?php 
			if ($producto == "cupcake") {
				?>
				<td class="colum2">
					Cantidad: <?php echo $jsonDesc->quantity; ?><br>
					Sabor: <?php echo $jsonDesc->flavor;?><br>
					Relleno: <?php echo $jsonDesc->filling;?><br>
					Tipo: <?php echo $jsonDesc->type;?><br>
					Capacillo: <div style="width: 20px; height: 20px; display: inline-block; background-color: <?php echo $jsonDesc->capacillo->value;?>;"></div><br>
					Cupcakes: <?php
					$i = 0;
					foreach ($jsonDesc->cupcakes as $d) {
						if (is_array($d)) {
							foreach ($d as $di) {
								echo $di;
							}
						}else{
							echo $d[$i++];
						}
						echo '<br>';
					}?><br>
				</td>
			 	<?php
			 }else if ($producto == "cake")
			 {?>
			 	<td class="colum2">
					
					Sabor: <?php echo $jsonDesc->flavor;?><br>
					Relleno: <?php echo $jsonDesc->filling;?><br>
					Cake: <?php echo $jsonDesc->cake;?><br>
				</td>
				<?php
			 } 
			 ?>
			</tr>
			<tr>
			<td class="colum1">Entidad:</td>
			<td class="colum2"><?php echo ($lapPaymentMethod); ?></td>
			</tr>
			</table>
		</center>
	<?php
	}
	else
	{
	?>
		<h1>Error validando firma digital.</h1>
	<?php
	}
}

get_footer(); ?>