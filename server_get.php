<?php
	$Name =	$_GET["Nombre"];
	$Surname=	$_GET["Apellido"];		
	$Email = $_GET["Email"];
	$Date_of_birth= $_GET["fecha_de_nacimiento"];
    $Country = $_GET["Pais"];
    $Province = $_GET["Provincia"];

	$body_mail = "nombre: " .$Name . "\r\n" . "apellido: " .$Surname . "\r\n" . "email: " .$Email . "\r\n" . "fecha de nacimiento: " . $Date_of_birth . "\r\n" . "pais: " . $Country . "\r\n" . "provincia: " . $Province;
	
mail("lucas.alarcon8@hotmail.com", "mensaje desde nuestro sitio web", $body_mail);

	function Show_information($Name, $Surname, $Email, $Date_of_birth, $Country, $Province ){
		$br = "<br><br>";
		$div_informacion = $br.$br."<div>Su nombre es: $Name <br> de apellido: $Surname <br> su correo es: $Email <br> nacio: $Date_of_birth <br> pais: $Country <br> provincia: $Province </div>";
		return $div_informacion;				
	}
		
	echo(Show_information($Name, $Surname, $Email, $Date_of_birth, $Country, $Province));	

?>













<?php
	if ($Name==""){
		echo "<p> debe ingresar su nombre</p>";
	}
	if ($Surname==""){
		echo "<p> debe ingresar su apellido</p>";
	}
	if ($Email==""){
		echo "<p> debe ingresar su email</p>";
	}
    if ($Date_of_birth==""){
        echo "<p> debe ingresar fecha de nacimiento</p>";
    }
    if ($Country==""){
        echo "<p> debe ingresar su pais</p>";
    }
    if ($Province==""){
        echo "<p> debe ingresar su provincia</p>";
    }
	?>