<?php
//este enviara una respuesta 

//controlador reenderizar la vista
//represetna el html correspondiente a la pantalla de navegacion
require APP . '/src/render.php'; //busca la funcion del renderizado
require APP . '/config.php'; //Datos de la conexión
require APP . '/src/db.php'; //Datos de la conexión

// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	//$password = hash('sha512', $password);

	//echo "Se hizo un POST";

	/* var_dump($usuario);
	var_dump($password); */

	// Nos conectamos a la base de datos
	try {

		$conexion = connectMysql($dsn, $dbuser, $dbpass);

		$resultado = auth($conexion, $usuario, $password);

		//echo $resultado ? "bien" : "mal";

		/* $sql = "SELECT * FROM users WHERE uname = '" . $usuario . "'  AND passw = '" . $password . "'";


		$stmt = $conexion->prepare($sql);
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

		//$conexion->exec($sql);
		$result = $conexion->query($sql); */

		//echo "Conexion correcta";
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

	//var_dump($conexion);

	if ($resultado) {
		header("Location: ./controller/dashboard.php");
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require APP . '/src/template/home.tpl.php'; //si no existe el usuario
