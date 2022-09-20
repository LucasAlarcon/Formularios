<?php
	$name =	$_GET["name"];
	$surName= $_GET["surname"];		
	$email = $_GET["email"];
	$date_of_birth= $_GET["date_of_birth"];
    $country = $_GET["country"];
    $province = $_GET["Province"];

	$body_mail = "nombre: " .$name . "\r\n" . "apellido: " .$surName . "\r\n" . "email: " .$email . "\r\n" . "fecha de nacimiento: " . $date_of_birth . "\r\n" . "pais: " . $country . "\r\n" . "provincia: " . $province;
	
mail("lucas.alarcon8@hotmail.com", "mensaje desde nuestro sitio web", $body_mail);

	function Show_information($name, $surName, $email, $date_of_birth, $country, $province ){
		$br = "<br><br>";
		$div_information = $br.$br."<div>Su nombre es: $name <br> de apellido: $surName <br> su correo es: $email <br> nacio: $date_of_birth <br> pais: $country <br> provincia: $province </div>";
		return $div_information;				
	}
		
	echo(Show_information($name, $surName, $email, $date_of_birth, $country, $province));	

?>
<?php 
setlocale(LC_ALL,"es_ES")
$date_of_birth = date("d M,Y")
?>

<?php
$date_of_birth = "";
$today = date("d-m-Y");
$diff = date_diff(date_create($date_of_birth), date_create($today));
echo 'Su edad es '.$diff->format('%y');

?>










