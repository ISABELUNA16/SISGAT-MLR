<?php
	
	$_ruta = "";
    $action = isset($_GET['action']) ? $_GET['action'] : 'login';
  

# Mostrar Plantilla PRINCIPAL 

    if ($action=='recetas'){
       
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
		
		$view->display('recetas.tpl');
	}else{
		$view->display('login.tpl');
	}
?>	