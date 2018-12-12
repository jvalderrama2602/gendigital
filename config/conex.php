<?php
$dsn = 'mysql:dbname=gendigit_anuncios;host=localhost';
$user = 'gendigit_root';
$password = 'l34ndr02602*';
try{

    $pdo = new PDO(  $dsn,
                     $user,
                     $password
                    );
  
}catch( PDOException $e ){
     echo "Error de conexion: " . $e->getMessage();

}


/*$hostBD="localhost";
$nombreBD="gendigit_anuncios";
$usuarioBD="gendigit_root";
$passBD="l34ndr02602*";
$conex = mysqli_connect($hostBD,$usuarioBD,$passBD,$nombreBD)or die("la conexion fallo");*/

?>


