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
 
  <body class="w3-light-grey" onload="javascript:MostrarProveedores();"> 
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
          <a href="?action=proveedores" class="w3-bar-item w3-button w3-amber w3-padding w3-hover-blue"><i class="fa fa-truck"></i>  Proveedores</a>
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
        <header class="w3-container">  
        </header>
      <div  class="w3-padding-32 w3-margin-bottom">    
      <!--TABLA -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>LISTADO <span class="w3-opacity w3-medium"> PROVEEDORES </span></h4>
                        </div> <br>
                       
                       <div class="w3-container">
                        <div class="w3-row">    
                           <br>     
                            <button class="w3-button w3-red" style="margin-bottom: 20px; margin-right: 5px;" onclick="location.href='?action=proveedores'">Salir <i class="fa fa-exclamation-circle"></i></button>
                            <button class="w3-button w3-blue" style="margin-bottom: 20px; margin-right: 5px;">Imprimir en Formato PDF  <i class="fa fa-print"></i></button>
                         </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="tablaProveedores" >
                           
                        </div>

                    </div>
                </div>
            </div>
      </div>
      <!--FORMULARIOS MODALES -->
      <!--EDITAR-->
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                     <input class="form-control " type="text" placeholder="Mohsin">
                  </div>
                  <div class="form-group">
                      <input class="form-control " type="text" placeholder="Irshad">
                  </div>
                  <div class="form-group">
                      <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
                  </div>
              </div>
              <div class="modal-footer ">
                  <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class=""></span> Update</button>
              </div>
          </div>
        </div>
      </div>
    
    <!--ELIMINAR-->
      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="" aria-hidden="true"></span></button>
              <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger"><span class=""></span> Are you sure you want to delete this Record?</div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" ><span class=""></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class=""></span> No</button>
            </div>
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
 
     <script type="text/javascript">
      
      function MostrarProveedores(){
        var param = {
          "action":"ConsultarProveedores",
          "tipo":1,
          "id":'',
          "razonsocial":''
         };

        $.ajax({
          type: "POST", 
          url: "controllers/BL/bl.proveedoreslistado.php",
          dataType: 'JSON', 
          data: param, 

          success : function(data)
          {
            var divTabProveedores = '';

            if(data.aaData.length>0){             
              divTabProveedores+=' <table width="100%" class="table table-striped table-bordered table-hover" id="ListadoProveedor" style="color: grey">'
              divTabProveedores+='      <thead class="w3-grey">'
              divTabProveedores+='        <tr>'
              divTabProveedores+='          <th>Id</th>'
              divTabProveedores+='          <th>Razón Social</th>'
              divTabProveedores+='          <th>N° RUC </th>'
              divTabProveedores+='          <th>Descripción</th>'
              divTabProveedores+='          <th>Dirección</th>'
              divTabProveedores+='          <th>Teléfono</th>'
              divTabProveedores+='          <th>Email</th>'
              divTabProveedores+='          <th>Estado</th>'
              divTabProveedores+='          <th colspan="2"></th>'
              
              divTabProveedores+='        </tr>'
              divTabProveedores+='       </thead>'
        
              divTabProveedores+='       <tbody>'

              for(i=0; i<data.aaData.length; i++){
                if (data.aaData[i]['estado']=='1'){
                  data.aaData[i]['estado'] = 'Activo';

                  divTabProveedores+=     '<tr class="odd gradeX">'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["id"] +'</td>'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["razonsocial"] +'</td>'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["ruc"] +'</td>'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["descripcion"] +'</td>'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["direccion"] +'</td>'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["telefono"] +'</td>'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["email"] +'</td>'
                  divTabProveedores+=       '<td>'+ data.aaData[i]["estado"] +'</td>'
                  divTabProveedores+=       '<td>  <p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil"></i></button></p> </td>'
                  divTabProveedores+=       '<td> <p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" > <i class="fa fa-trash-o"></i></button></p> </td>'
                  divTabProveedores+=      '</tr>'
                }
              }
             
              divTabProveedores+=        '</tbody>'
              divTabProveedores+=       '</table>'

                 $('#tablaProveedores').html(divTabProveedores);  
                        
            }
          }
        });
      }
    </script>
  </body> 
      <script src="views/js/jquery.min.js"></script>
      <script src="views/js/bootstrap.min.js"></script>
      <script src="views/js/jquery.dataTables.min.js"></script>
      <script src="views/js/dataTables.responsive.js"></script>
       
      <script type="text/javascript">
        $(document).ready(function() {
                 $('#ListadoProveedor').DataTable({
                     responsive: true 
                  });
                  
             });  
      </script>
</html>

