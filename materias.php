<html>
<head>
  <title>Interaccion Humano Computadora</title>
</head>
<body>
<h1>Interaccion Humano Computadora</h1>
<?php
  // create short variable names
    $clave=$_POST['id_materia'];
    $nombre=$_POST['nombre'];
    $categoria=$_POST['categorias'];
    $clave_categoria=$_POST['clave_categorias'];
    $semestre=$_POST['semestre'];
    $valor=$_POST['valor'];





  if (!$nombre|| !$clave || !$categoria || !$semestre || !$valor)
  {
     echo 'Tu debes completar los campos antes de agregar el registro.<br />'
          .'Por favor vuelve a intentarlo.';
     exit;
  }
  if (!get_magic_quotes_gpc())
  {

      $clave = addslashes($clave);

  }


$db = new mysqli('localhost', 'root', '', 'reticula');

if ($db->connect_error) {
  die('Error de Conexión (' . $db->connect_errno . ') '
          . $db->connect_error);
}

$query = "insert into materias values
          ('".$clave."','".$nombre."','".$categoria."','".$clave_categoria."','".$semestre."','".$valor."')";
$result = $db->query($query);
if ($result)
    echo  $db->affected_rows.' Registro insertado en la base de datos.';
    ?>
    <script language="javascript">
    window.location.href="mterias.php";
    </script>
<?php

$db->close();

?>
</body>
</html>
