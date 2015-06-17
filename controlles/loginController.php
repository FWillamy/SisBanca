<?php

require_once 'modelos/loginModelo.php';

class loginController{
    
    private $loginModelo;
        
    function __construct() {
        $this->loginModelo = new loginModelo();
    }
    
    public function autenticar(){
        
         $_REQUEST['produtoModelo'] = $this->loginModelo->autenticar();
      
    } 
    
    
    }

?>

