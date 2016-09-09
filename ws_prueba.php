<?php


$usuario = 'user';
$pass = 'pa$$w0rd';


$wsdl = 'http://sapides.logalisap.com:8000/sap/bc/srt/wsdl/flv_1EWQWE/bndg_url/sap/bc/srt/rfc/sap/zws_php/811/zws_service_php/zws_binding?sap-client=811';


$params = array('INumVuelo' => '3577');


$client = new SoapClient($wsdl, array(
            'uri'      => "",
            'trace'    => true,
            'login'    => $usuario,
            'password' => $pass
            ));

try {

	$response = $client->ZwsInfoAvion($params);

	//$functions = $client->__getFunctions();
	//var_dump($functions);
	
} catch (SoapFault $e) {

	var_dump(get_class($e));
	var_dump($e);

	
}

//var_dump($response);

echo $response->ETipoAvion;

?>