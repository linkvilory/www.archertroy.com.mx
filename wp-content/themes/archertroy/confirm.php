<?php

function encryptor($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    //pls set your unique hashing key
    $secret_key = 'archertroy';
    $secret_iv = 'jonarcher';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    //do the encyption given text/string/number
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
    	//decrypt the given text/string/number
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

$id = $_GET["id"];

if($id == ""){
	die(0);
}else{
	date_default_timezone_set('America/Mexico_City');

    $id = encryptor("decrypt", $id);

	$servername = "localhost";
	$username = "archer_sitio";
	$password = "archer_sitio";

	$handle = mysql_connect($servername, $username, $password);
	$found = mysql_select_db("archer_contacto", $handle);

	if ($found) {

		$sqlquery = "UPDATE `archer_contacto`.`contacto` SET `confirmado` = '1' WHERE `contacto`.`id` = ". $id .";";
		$resultado = mysql_query($sqlquery);

        header("Location: /contacto/?c=confirmado");
        die();

	}else{
		die("0");
	}

}

?>