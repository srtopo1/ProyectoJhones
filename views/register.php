<?php

if (isset($_POST['submit'])) {

	if (preg_match_all('/[a-z]/i', $_POST['nombre']) != strlen($_POST['nombre']) || strlen($_POST['nombre']) == 0) {
		$check_name = 'Dato erroneo. El nombre tiene que tener solo letras!';	
	}

	if (preg_match_all('/[a-z]/i', $_POST['apellidos']) != strlen($_POST['apellidos']) || strlen($_POST['apellidos']) == 0) {
		$check_Secondname = 'Dato erroneos. El apellido tiene que tener solo letras!!';
	}
	
	if (preg_match_all('/[0-9]/', $_POST['dni']) != 8 || preg_match_all('/[A-Z]/i', $_POST['dni']) != 1 || preg_match_all('/[A-Z]/i', substr($_POST['dni'], -1)) != 1 ) {
		$check_DNI = "Dato erroneo. El DNI consta de 8 digitos y una letra al final";
	}

	if (preg_match_all('/[0-9]/', $_POST['tel']) != strlen($_POST['tel']) || strlen($_POST['tel']) != 9) {
		$check_TEL = 'Dato erroneo. El telefono tiene 9 digitos.';
	}

	if (preg_match_all('/[a-z]/i', $_POST['correo']) != strlen($_POST['correo'])) {
		$check_Secondname = 'Dato erroneos. El apellido tiene que tener solo letras!!';
	}

	if (preg_match_all('/[a-z]/i', $_POST['contraseña']) != strlen($_POST['contraseña'])) {
		$check_Secondname = 'Dato erroneos. El apellido tiene que tener solo letras!!';
	}
}

//
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
	<form action="register.php" method="POST" enctype="multipart/form-data">
	<p>Nombre: <input name="nombre" type="text"/></p>
	<p style="color: red"><?php echo (isset($check_name))?$check_name:'';?></p>
    <p>Apellidos: <input name="apellidos" type="text"/></p>
    <p style="color: red"><?php echo (isset($check_Secondname))?$check_Secondname:'';?></p>
    <p>Genero: <select name="genero" style="margin: 10px;">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            <option value="otro">Otro</option>
        </select></p>
    <p>DNI: <input name="dni" type="text"/><?php echo (isset($check_DNI))?$check_DNI:'';?></p>
    <p>TEL: <input name="tel" type="tel"/><?php echo (isset($check_TEL))?$check_TEL:'';?></p>
    <p>Correo Electronico: <input name="correo" type="email"/><?php echo (isset($check_MAIL))?$check_MAIL:'';?></p>
    <p>Contraseña: <input name="contraseña" type="password" /><?php echo (isset($check_PASSWORD))?$check_PASSWORD:'';?></p>
    <input name="control" value="login" type="hidden"/>
    <input name="submit" value="submit" type="submit">
    </form>
</body>
</html>
<?php

?>