<?php
	$Name =	$_POST["Nombre"];
	$Surname= $_POST["Apellido"];		
	$Email = $_POST["Email"];
	$Date_of_birth= $_POST["fecha_de_nacimiento"];
    $Country = $_POST["Pais"];
    $Province = $_POST["Provincia"];

	$body_mail = "nombre: " .$Name . "\r\n" . "apellido: " .$Surname . "\r\n" . "email: " .$Email . "\r\n" . "fecha de nacimiento: " . $Date_of_birth . "\r\n" . "pais: " . $Country . "\r\n" . "provincia: " . $Province;
	
mail("lucas.alarcon8@hotmail.com", "mensaje desde nuestro sitio web", $body_mail);

	function Show_information($Name, $Surname, $Email, $Date_of_birth, $Country, $Province ){
		$br = "<br><br>";
		$div_information = $br.$br."<div>Su nombre es: $Name <br> de apellido: $Surname <br> su correo es: $Email <br> nacio: $Date_of_birth <br> pais: $Country <br> provincia: $Province </div>";
		return $div_information;				
	}
		
	echo(Show_information($Name, $Surname, $Email, $Date_of_birth, $Country, $Province));	

?>
<?php
 
 $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
 $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  
 echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

 ?>
<?php
$date_of_birth = "";
$today = date("d-m-Y");
$diff = date_diff(date_create($date_of_birth), date_create($today));
echo 'Tu edad es '.$diff->format('%y');

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

    