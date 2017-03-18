

<!DOCTYPE html>
<html>
<script type="text/javascript">
window.onload = function () {
var elementos = document.getElementById("tabla").getElementsByTagName("td");
    for (var i=0;i < elementos.length; i++)  {

        elementos[i].onclick = Celda;
        elementos[i].onmouseover = Celda;
        elementos[i].onmouseout = Celda;

        }

}

function Celda(evento) {
var evento = evento || window.event;
    switch(evento.type) {


case 'click':
    this.style.backgroundColor = ((this.style.backgroundColor ==  '#ccffcc') || (this.style.backgroundColor == 'rgb(204, 255, 102)')) ? '#FF0000' : '#CCFF66';
//alert(this.style.backgroundColor);
    break;
  }
}


</script>
  <head>
    <title>CONTROL DE RETICULA</title>
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1'>
    <meta charset="utf-8">
    <title>Entradas</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_menu.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <style type="text/css">
  #tabla td {background-color:#FFFFFF;}
  </style>
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
            <li><a href="mterias.php">MATERIAS </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="registrate.html">REGISTRATE</a></li>
            <li><a href="inicia.html">INICIA SESION</a></li>
          </ul>
        </div>
      </nav>


      <div class='row'>
        <section class=" platillos">
          <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 naranja ">
            <article>
              <img  class="img-thumbnail"src="img/tics1.jpg" alt="Imagen de bebidas"/>
            </article>
            <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu_entradas_nombres">
              <?php
              session_start();
              if (isset($_SESSION['USUARIO'])) {
              echo 'Bienvenido:'.$_SESSION['USUARIO'].'<br>';

              }else {
                echo 'No tienes una sesion activa, Por favor incia sesion y disfruta de los beneficios';

              }
               ?>
               <table>
                 for(int i=1; i<=9;i++){
                     <tr>

                       for(int j=1;j<=10;k++){
                         $resultado="Select nombre_materia where semestre=".i;
                         $arreglo=mysql_fetch_assoc($resultado);
                       for ($k=1; $k <=10; $k++) {

                         <td>arreglo[k]</td>
                         # code...
                       }
                     }



  </tr>





}


                </table>




              </table>
            </article>
          </article>
        </section>
      </div>
    </div>

  </body>


  <footer class='container-fluid'>
    <section class="row">
      <article class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
        <p><font color='#fff'>Creado por: Sandra Fabiola Ramírez Martínez </font></p>
      </article>
      <article class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <p>
          <font color='#fff'>Instituto Tecnologico Superior de Salvatierra, Manuel Goméz Morin, Salvatierra,Gto.</font>
        </p>
      </article>
      <article class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
        <p class="nav navbar-nav navbar-right">
          <font color='#fff'>Contacto:</font>
          <a href="mailto:someone@example.com">Ti13110050@itess.edu.mx</a>
        </p>
      </article>
    </section>
  </footer>

</html>﻿
