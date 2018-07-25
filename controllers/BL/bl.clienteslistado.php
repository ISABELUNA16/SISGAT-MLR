<?php

	$_ruta  = "";
    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : 'login';

    if ($action=='clienteslistado'){
       
        $view = new Smarty;		
		$view->display('clienteslistado.tpl');
	
	}

	if($action=='ConsultarClientes')
    {
        $tipo         = 1;
        $nombre       = $_POST["nombre"];
        $id           = $_POST["id"];
       
        $_ruta = "../../";

        require_once ($_ruta."models/DA/da.clienteslistado.php");

        $cls    = new ClsCliente();
       	$array  = $cls->fcConsultarCliente($tipo, $nombre, $id); 
       	$cls    = null;
        $array  = array('aaData' => $array);
        echo json_encode($array);

    }

?>	