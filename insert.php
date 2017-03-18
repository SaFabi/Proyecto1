<html>
<head>
  <title>Login</title>
</head>
<body>
<h1>Login</h1>
<?php
  // create short variable names
  if (isset($_POST['Nombre'])&& isset($_POST['Asistente'])) {
    $nombre=$_POST['Nombre'];
    $password=$_POST['Asistente'];
    $passworde=hash('sha256',$password);
    # code...
  }

  /*if (!nombre || !password )
  {
     echo 'Tu debes completar los campos antes de agregar el registro.<br />'
          .'Por favor vuelve a intentarlo.';
     exit;
  }*/
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

 $query = "insert into usuarios values
           ('".$nombre."', '".$passworde."')";
 $result = $db->query($query);
 if ($result)
     echo  $db->affected_rows.' TU REGISTRO SE REALIZO CON EXITO.';
     ?>
     <script language="javascript">
     window.location.href="registrate.html";
     </script>
<?php
 $db->close();
?>
</body>
</html>
