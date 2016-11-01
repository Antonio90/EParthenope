<?php

//TODO ADD YOUR DATABASE CONFIG
$nomehost="localhost";
$nomeutente=""; //
$password="";

	$conn = mysql_connect($nomehost,$nomeutente,$password);
	$sql= "select name,mail,nome_inserzione,tipo_inserzione,prezzo_inserzione,citta_inserzione,telefono_inserzione,descrizione_inserzione,data_inserzione from  ms4_0124000411.inserzioni i join ms4_0124000411.users u on i.cod_utente=u.uid order by data_inserzione DESC";

	$result = mysql_query($sql)or die(mysql_error());

	while($ris=mysql_fetch_array($result,MYSQL_ASSOC)){

	$a=json_encode($ris);
	echo ($a);
	}

?>