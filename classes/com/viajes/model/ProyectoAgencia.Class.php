<?php

/**
 * ProyectoAgencia
 *
 * @author Marcos
 * @since 14-08-2023
 */

class ProyectoAgencia extends Entity{

	//variables de instancia.

	
	private $dt_ini;
	
	private $dt_fin;
	
	private $ds_codigo;
	
	private $ds_titulo;
	
	private $ds_director;

    private $ds_institucion;
	


	public function __construct(){
		 
	
			
		$this->dt_ini = "";
		
		$this->dt_fin = "";
		
		$this->ds_codigo = "";
		
		$this->ds_titulo = "";

        $this->ds_institucion = "";
		
		$this->ds_director = "";


		
		
	}

    /**
     * @return string
     */
    public function getDtIni()
    {
        return $this->dt_ini;
    }

    /**
     * @param $dt_ini
     */
    public function setDtIni($dt_ini)
    {
        $this->dt_ini = $dt_ini;
    }

    /**
     * @return string
     */
    public function getDtFin()
    {
        return $this->dt_fin;
    }

    /**
     * @param $dt_fin
     */
    public function setDtFin($dt_fin)
    {
        $this->dt_fin = $dt_fin;
    }

    /**
     * @return string
     */
    public function getDsCodigo()
    {
        return $this->ds_codigo;
    }

    /**
     * @param $ds_codigo
     */
    public function setDsCodigo($ds_codigo)
    {
        $this->ds_codigo = $ds_codigo;
    }

    /**
     * @return string
     */
    public function getDsTitulo()
    {
        return $this->ds_titulo;
    }

    /**
     * @param $ds_titulo
     */
    public function setDsTitulo($ds_titulo)
    {
        $this->ds_titulo = $ds_titulo;
    }

    /**
     * @return string
     */
    public function getDsDirector()
    {
        return $this->ds_director;
    }

    /**
     * @param $ds_director
     */
    public function setDsDirector($ds_director)
    {
        $this->ds_director = $ds_director;
    }

    /**
     * @return string
     */
    public function getDsInstitucion()
    {
        return $this->ds_institucion;
    }

    /**
     * @param $ds_institucion
     */
    public function setDsInstitucion($ds_institucion)
    {
        $this->ds_institucion = $ds_institucion;
    }






	

	 

	


}
?>