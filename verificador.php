<?php 

//Print_r($_GET);
//echo "este es el hijo de la chingada".$_GET["paymentID"];
$clien_id='AUuoa91PgH-uy2KZ_l-cEcFY6Z7c42o5tV9nYysI_iwtzyHVQEvGY6FmfDKZR4XSfPZvPmRSNCXGPd8R';
$secret='ECOmToyWqOgCMTvlVddf7dTQNe8rsP_NpJNjzbsjk8rguVW_cnBaqeuU5G3-IHusQCT0-r9f5OV9uvGr';
 $login= curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");
 curl_setopt( $login, CURLOPT_RETURNTRANSFER,TRUE);
 curl_setopt($login, CURLOPT_USERPWD,$clien_id.":".$secret);
 curl_setopt( $login, CURLOPT_POSTFIELDS,"grant_type=client_credentials");
 $respuesta = curl_exec($login);
// print_r($respuesta);
$objRepuesta=json_decode($respuesta);
$AccesToken= $objRepuesta->access_token;
//print_r($AccesToken);
$venta= curl_init("https://api.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']);
curl_setopt($venta, CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccesToken));
curl_setopt( $venta, CURLOPT_RETURNTRANSFER,TRUE);
$Respuesta_de_venta=curl_exec($venta);

//print_r ( $Respuesta_de_venta);

$objDatosTranssaccion=json_decode($Respuesta_de_venta);
print_r ( $objDatosTranssaccion);
?>