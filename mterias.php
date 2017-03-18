<?php
include('conexion.php');
$consulta=mysqli_query($db,"Select * from categorias");
$consulta2=mysqli_query($db,"Select * from categorias");
//$result=$db->query($consulta);


?>
<!DOCTYPE html>

<html>
  <head>
    <title>CONTROL DE RETICULA</title>
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1'>
    <meta charset="utf-8">
    <title>Entradas</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div id='div1'>
        <section id='sct1'>
          <img src="img/PortadaReticula.jpg" alt="aqui hay una imagen">
        </section>
      </div>

      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">CONTROL DE RETICULA </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href='index.html'><span class="glyphicon glyphicon-home"></span> INICIO</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">CARRERAS</font></a>
              <ul class="dropdown-menu">
                <li><a href='tics.html'>Ingenieria en TICs</a></li>
                <li><a href='gestion.html'>Ingenieria en Gestion Empresarial</a></li>
                <li><a href='mecatronica.html'>Ingenieria Mecatronica</a></li>
                <li><a href='agricola.html'>Ingenieria en Innovacion Agricola Sustentable</a></li>
                <li><a href='industrial.html'>Ingenieria Industrial</a></li>

              </ul>
            </li>
            <li class='active'><a>MATERIAS</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li><a href="inicia.html">REGISTRATE</a></li>
            <li><a href="registrate.html">INICIA SESION</a></li>
          </ul>
        </div>
    </nav>

      <div class='row'>
        <section class="platillos" class='row'>
          <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 naranja">
            <h1>MATERIAS</h1>
            <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nosotros">
              <form action="materias.php" method="post">
                <table border="0">
                  <tr>
                    <td>Clave de la Materia</td>
                     <td><input type="text" name="id_materia" maxlength="30" size="30"></td>
                  </tr>
                  <tr>
                    <td>Nombre de la materia</td>
                     <td><input type="text" name="nombre" maxlength="30" size="30"></td>
                  </tr>
                  <tr>
                    <td>Categoria</td>
                     <td>
                       <select name="categorias" size='0'>
                       <?php while (@$arreglo=mysqli_fetch_array($consulta,MYSQLI_ASSOC)) { ?>
                         <option value="<?php echo $arreglo['nombre_carrera']?>"> <?php echo $arreglo['nombre_carrera']?></option>
                       <?php  }?>


                     </select></td>




                  </tr>
                  <tr>
                    <td>Clave de la Categoria</td>
                     <td>
                       <select name="clave_categorias" size='0'>
                       <?php while (@$arreglo=mysqli_fetch_array($consulta2,MYSQLI_ASSOC)) { ?>
                         <option value="<?php echo $arreglo['id_carrera']?>"> <?php echo $arreglo['id_carrera']?></option>
                       <?php  }?>


                     </select></td>




                  </tr>

                  <tr>
                    <td>Semestre</td>
                     <td><input type="text" name="semestre" maxlength="30" size="30"></td>
                  </tr>
                  <tr>
                    <td>Valor curricular</td>
                     <td><input type="text" name="valor" maxlength="30" size="30"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="submit" value="Registrar"></td>
                  </tr>
                </table>
              </form>
            </article>



          </article>
        </section>
      </div>


    </div>
  </body>

  <footer class='container-fluid'>
    <section class="row">
      <article class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
            <p><font color='#fff'>Creado por: ITESS</font></p>
      </article>
      <article class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <p>
          <font color='#fff'>HIDALGO 504 ESQUINA FEDERICO ESCOBEDO CP 38900 Salvatierra, Mexico</font>
        </p>
      </article>
      <article class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
        <p class="nav navbar-nav navbar-right">
          <font color='#fff'>Contacto:</font>
          <a href="mailto:someone@example.com">someone@example.com</a>
        </p>
      </article>
    </section>
  </footer>
</html>
