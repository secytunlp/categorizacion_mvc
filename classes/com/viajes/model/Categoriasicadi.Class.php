<?php

/**
 * Categoria
 *  
 * @author Marcos
 * @since 07-06-2023
 */


class Categoriasicadi  extends Entity{

    //variables de instancia.

    private $ds_categoria;
    

    public function __construct(){
    	
    	$this->ds_categoria = "";
    }
    
    
    public function getDs_categoria()
    {
        return $this->ds_categoria;
    }

    public function setDs_categoria($ds_categoria)
    {
        $this->ds_categoria = $ds_categoria;
    }
    
	public function __toString(){
		
		return $this->getDs_categoria();
	}

}
?>