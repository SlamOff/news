<?php
	$method = $_SERVER['REQUEST_METHOD'];
	//Script Foreach
	$c = true;
	if ( $method == 'POST' ) {
		$admin_email  = "vetalsd2@gmail.com";
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$time = $_POST["time"];
		$msg="ФОРМА: $whatform
			Имя: $name
			E-mail: $email 
			Телефон: $phone
			Время: $time";
		mail("$admin_email", "Сообщение 
		от $name", "$msg");
		$f = fopen("message.txt", "a+");
		fwrite($f," \n $date $time Сообщение от $name");
		fwrite($f,"\n $msg ");
		fwrite($f,"\n ---------------");
		fclose($f);
		echo '<meta http-equiv="refresh" content="0; url=thanks.html" />';
	}
?>