<?php

$client = new SoapClient("https://tpsonline.beacukai.go.id/tps/service.asmx?wsdl");
var_dump($client->__getFunctions()); 
var_dump($client->__getTypes()); 
   
?>