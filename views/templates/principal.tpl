<!DOCTYPE html>
<html>
  <head>
     <title>SISGAT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/principal.css">
    <link rel="stylesheet" href="views/css/font-awesome.css"> 
     <link href="views/css/bootstrap.min.css" rel="stylesheet">
   
  </head>
  <body class="w3-light-grey">
      <!--Menu de Opciones-->
      <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="sisgat_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right"><img src="views/images/logo.png" width="120px" height="40px"></span>
      </div>
      <!--MENU -->
      <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
      <!--BIENVENIDA-->
        <div class="w3-container w3-row">
          <div class="w3-col s2">
              <i class="fa fa-user w3-xxxlarge"></i>
          </div>  
          <div class="w3-col s8 w3-bar">
          <br>
            <span>Bienvenid@, <strong>Admin</strong></span><br>
          </div>
        </div>
        <hr>
        <div class="w3-container">
          <span> <h4> <strong>MENU DE OPCIONES</strong></h4></span>
        </div>
        <hr>
        <div class="w3-bar-block">
          <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="sisgat_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Cerrar Menu</a>
          <a href="?action=proveedores" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-truck"></i>  Proveedores</a>
          <a href="?action=productos" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-flask"></i>  Productos</a>
          <a href="?action=clientes" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-users fa-fw"></i>  Clientes</a>
          <a href="?action=recetas" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-clipboard fa-fw"></i> Recetas</a>
          <a href="?action=reportes" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-bar-chart "></i>  Reportes</a>
          <a href="?action=mantenimientos" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-cog fa-fw"></i>  Mantenimiento</a>
          <a href="?action=cerrarsesion" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-power-off fa-fw"></i>  Salir del Sistema</a>
         <br><br>
        </div>
      </nav>

      <!-- Overlay effect when opening sidebar on small screens -->
      <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="sisgat_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

      <!-- CONTENIDO DE LA PAGINA-->
      <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <header class="panel-heading " style="padding-top:30px; margin-left: 10px">
           <h4><strong> RESUMEN DE ESTADOS</strong></h4>
           <br>
        </header>
        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-white">
                <br>
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead class="w3-red">
                      <th>Color</th>
                      <th> % de Producción - Mes: Julio/2017 </th>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">
                        <td> V Militar </td>
                        <td><div class="w3-grey"><div class="w3-container w3-center w3-padding w3-indigo" style="width:37.5%">37.5%</div></div></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td> Acero RX </td>
                        <td><div class="w3-grey"><div class="w3-container w3-center w3-padding w3-purple" style="width:22.1%">22.1%</div></div></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td> Verde Jade BB</td>
                        <td><div class="w3-grey"><div class="w3-container w3-center w3-padding w3-orange" style="width:5.6%">5.6%</div></div></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td> Turqueza BB</td>
                        <td><div class="w3-grey"><div class="w3-container w3-center w3-padding w3-blue" style="width:35.6%">35.6%</div></div></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td> Azul Marino</td>
                        <td><div class="w3-grey"><div class="w3-container w3-center w3-padding w3-pink" style="width:43.3%">43.3%</div></div></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td> Menta SM</td>
                        <td><div class="w3-grey"><div class="w3-container w3-center w3-padding w3-green" style="width:27.8%">27.8%</div></div></td>
                    </tr>
                    </tbody>
                </table><br>
               <!-- <button class="w3-button w3-amber">Más Colores  <i class="fa fa-arrow-right"></i></button>-->
            </div>    
        </div>
      </div>

      <script>
          var mySidebar = document.getElementById("mySidebar");
          var overlayBg = document.getElementById("myOverlay");

          function sisgat_open() {
              if (mySidebar.style.display === 'block') {
                  mySidebar.style.display = 'none';
                  overlayBg.style.display = "none";
              } else {
                  mySidebar.style.display = 'block';
                  overlayBg.style.display = "block";
              }
          }
          function sisgat_close() {
              mySidebar.style.display = "none";
              overlayBg.style.display = "none";
          }
          
      </script>

  </body> 
</html>