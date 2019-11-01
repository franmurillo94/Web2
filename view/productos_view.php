<?php

require_once('libs/Smarty.class.php');

// CLASE PARA LA VIEW DE LA TABLA PRODUCTOS
class ProductosView {
    
    function __construct(){

    }
    // FUNCION QUE MUESTRA LOS PRODUCTOS
    public function DisplayProducto($producto){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Producto");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_productos',$producto);
        $smarty->display('templates/producto_simple.tpl');
        
    }

    
    // FUNCION QUE MUESTRA LOS PRODUCTOS PARA USUARIOS
    public function DisplayProductoAdm($producto,$categoria){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Producto");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_productos',$producto);
        $smarty->assign('lista_categorias',$categoria);
        $smarty->display('templates/producto_adm.tpl');
        
    }
    // FUNCION QUE MUESTRA LOS PRODUCTOS
    public function DisplayDetalle($producto){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Producto");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_productos',$producto);
        $smarty->display('templates/detalle.tpl');
        
    }

    
}

?>
