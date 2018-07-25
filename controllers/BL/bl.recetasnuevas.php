<?php

	$_ruta = "";
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'login';
  


    if ($action=='recetasnuevas'){
       
        $view = new Smarty;		
		$view->display('recetasnuevas.tpl');
		
	}else{
		$view->display('login.tpl');
	}
?>	