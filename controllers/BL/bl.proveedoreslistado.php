<?php
	$_ruta = "";
	 $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : 'login';
  
    if ($action=='proveedoreslistado'){
       
        $view = new Smarty;
       
		/*$_SESSION['usuario'] 	=	$_SESSION["usuario"];
		$_SESSION['contrasena'] =	$_SESSION["contrasena"];
		$_SESSION['nombres'] 	=	$_SESSION["nombres"];
	
		if(isset($_SESSION['usuario'])){
			$view->assign(array(	
							'usuario' 		=> $_SESSION['usuario'], 
							'contrasena' 	=> $_SESSION['contrasena'],
							'nombres' 		=> $_SESSION['nombres'],
							'url'			=> '',
					));	
		
        	$view->display('principal.tpl');
		
		}else{

			$view->assign(array(	
							'usuario' 		=> '',
							'contrasena' 	=> '',
							'nombres' 		=> '',
							'mensaje'		=> '',
							'url'			=> '<meta http-equiv="refresh" content="5;url=?action=login">',
					));	
			
			$view->display('login.tpl');
		}*/
		
		$view->display('proveedoreslistado.tpl');
	}

	if($action=='ConsultarProveedores')
    {
        $tipo         = 1;
        $id           = $_POST["id"];
        $razonsocial  = $_POST["razonsocial"];
       
        $_ruta = "../../";
        require_once ($_ruta."models/DA/da.proveedoreslistado.php");

        $cls    = new ClsProveedor();
       	$array  = $cls->fcConsultarProveedor($tipo, $id, $razonsocial); 
       	$cls    = null;
        $array = array('aaData' => $array);
        echo json_encode($array);

    }

?>	