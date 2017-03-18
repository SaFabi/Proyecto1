<html>
<head>
  <title>Login</title>
</head>
<body>
<h1>Login</h1>
<?php
session_start();
  // create short variable names
  if (isset($_POST['Nombre'])&& isset($_POST['Asistente'])) {
    $nombre=$_POST['Nombre'];
    $_SESSION['USUARIO']=$nombre;
    $password=$_POST['Asistente'];
    $passworde=hash('sha256',$password);
    # code...
  }

  if (!$nombre || !$password )
  {
     echo 'Tu debes completar los campos antes de agregar el registro.<br />'
          .'Por favor vuelve a intentarlo.';
     exit;
  }
  if (!get_magic_quotes_gpc())
  {
    $nombre = addslashes($nombre);
    $password = addslashes($password);

  }
  //@ $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'books');
  //@ $db = new mysqli('localhost', 'root', '', 'books');
  $db = new mysqli('localhost', 'root', '', 'reticula');

  if ($db->connect_error) {
    die('No autorizado (' . $db->connect_errno . ') '
            . $db->connect_error);
}
/* if (mysqli_connect_errno())
 {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
 } */

 $query = "select count(*) from usuarios where
              usuario='$nombre' and password='$passworde'";

$result=mysqli_query($db , $query);
if(!$result)
{
  echo 'Cannot run query.';
  exit;
}
$row=mysqli_fetch_row($result);
$count=$row[0];

if( $count > 0)
{

echo 'La sesión se ha activado';
?>
<script language="javascript">
window.location.href="registrate.html";
</script>
<?php






}else{
  echo ' <h1>  ¡Go away! </h1>';
  echo ' you are not authorized to view to view this resource.';
}

?>
</body>
</html>
