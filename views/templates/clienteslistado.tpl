<!DOCTYPE html>
<html>
  
  <head>
    <title>SISGAT</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/principal.css">
    <link rel="stylesheet" href="views/css/font-awesome.css"> 
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="views/css/dataTables.responsive.css" rel="stylesheet">
 
  </head>

  <body class="w3-light-grey" onload="javascript:MostrarClientes();">     
      <!--BOTON DEL MENU-->
      <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="sisgat_open();"><i class="fa fa-bars"></i>  Menu</button>
       <span class="w3-bar-item w3-right"><img src="views/images/logo.png" width="120px" height="40px"></span>
      </div>

      <!--MENU -->
      <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar">
         <hr>
         <div class="w3-container">
               <span><strong> MENU DE OPCIONES</strong></span>
         </div>
          <hr>
         <div class="w3-bar-block">
              <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="sisgat_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Cerrar Menu</a>
          <a href="?action=principal" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-star "></i>  Principal</a>
          <a href="?action=proveedores" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-truck"></i>  Proveedores</a>
          <a href="?action=productos" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-flask"></i>  Productos</a>
          <a href="?action=clientes" class="w3-bar-item w3-button w3-amber w3-padding w3-hover-blue"><i class="fa fa-users fa-fw"></i>  Clientes</a>
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
        <header class="w3-container">  
        </header>
      <div  class="w3-padding-32 w3-margin-bottom">    
      <!--TABLA BOOTSTRAP -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Listado <span class="w3-opacity w3-medium"> Clientes</span></h4>
                        </div> <br>
                        <div class="w3-container w3-grey">
                          <div class="w3-row">    
                           <br>     
                            <button class="w3-button w3-red" style="margin-bottom: 20px; margin-right: 5px;" onclick="location.href='?action=clientes'">Cancelar <i class="fa fa-exclamation-circle"></i></button>
                            <button class="w3-button w3-blue" style="margin-bottom: 20px; margin-right: 5px;">Imprimir en Formato PDF<i class="fa fa-print"></i></button>
                         </div>
                        </div>

                        <!-- /.panel-heading -->
                        <section id="tablaClientes">
                          
                        </section>
                  </div>
              </div>
          </div>
      </div>

    <script src="views/js/jquery.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/jquery.dataTables.min.js"></script>
    <script src="views/js/dataTables.responsive.js"></script>

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
     
      <script>
        $(document).ready(function() {
          $('#dataTables-example').DataTable({
              responsive: true
          });
        });
      </script>

      <script type="text/javascript">
      
      function MostrarClientes(){

        var param = {
          "action":"ConsultarClientes",
          "tipo":1,
          "nombre":'',
          "id":''
         };

        $.ajax({
          type: "POST", 
          url: "controllers/BL/bl.clienteslistado.php",
          dataType: 'JSON', 
          data: param, 

          success : function(data)
          {
            var divTabCliente = '';

            if(data.aaData.length>0){
              divTabCliente+= ''

              divTabCliente+='<div class="panel-body">'
              divTabCliente+='   <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="color: grey">'
              divTabCliente+= '      <thead class="w3-red">'
              divTabCliente+='        <tr>'
              divTabCliente+='          <th>id</th>'
              divTabCliente+='          <th>Razon Social</th>'
              divTabCliente+='          <th>Ruc</th>'
              divTabCliente+='          <th>Contacto</th>'
              divTabCliente+='          <th>Telefono</th>'
              divTabCliente+='          <th>Email</th>'
              divTabCliente+='          <th>Dirección</th>'
              divTabCliente+='          <th>Estado</th>'
              divTabCliente+='          <th>Editar</th>'
              divTabCliente+='          <th>Eliminar</th>'
              divTabCliente+='        </tr>'
              divTabCliente+='       </thead>'
              
              divTabCliente+='       <tbody>'

              for(i=0; i<data.aaData.length; i++){
                if (data.aaData[i]['estado']=='1'){

                  divTabCliente+=     '<tr class="odd gradeX">'
                  divTabCliente+=       '<td>'+ data.aaData[i]["id"] +'</td>'
                  divTabCliente+=       '<td>'+ data.aaData[i]["razonsocial"] +'</td>'
                  divTabCliente+=       '<td>'+ data.aaData[i]["ruc"] +'</td>'
                  divTabCliente+=       '<td>'+ data.aaData[i]["contacto"] +'</td>'
                  divTabCliente+=       '<td>'+ data.aaData[i]["telefono"] +'</td>'
                  divTabCliente+=       '<td>'+ data.aaData[i]["email"] +'</td>'
                  divTabCliente+=       '<td>'+ data.aaData[i]["direccion"] +'</td>'
                  divTabCliente+=       '<td>'+ data.aaData[i]["estado"] +'</td>'
                  divTabCliente+=       '<td> <i class="fa fa-edit"> </td>'
                  divTabCliente+=       '<td>  <i class="fa fa-trash-o"> </td>'
                  divTabCliente+=      '</tr>'

                }

              }

              divTabCliente+=        '</tbody>'
              divTabCliente+=       '</table>'
              divTabCliente+=      '</div>'

              $('#tablaClientes').html(divTabCliente);

            }
          }
        });
      }

    </script>


  </body> 
  
</html>