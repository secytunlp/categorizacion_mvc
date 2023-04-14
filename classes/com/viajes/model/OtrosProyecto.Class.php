<?php

/**
 * OtrosProyecto
 *
 * @author Marcos
 * @since 04-04-2023
 */

class OtrosProyecto extends Entity{

	//variables de instancia.
	
	private $solicitud;
	
	private $proyecto;
	
	private $dt_desdeproyecto;
	
	private $dt_hastaproyecto;
	
	private $ds_codigo;
	
	private $ds_titulo;
	
	private $ds_director;

    private $ds_organismo;
	
	private $bl_agregado;

    private $ds_archivo;

	public function __construct(){
		 
		$this->solicitud = new Solicitud();
		
		$this->proyecto = new Proyecto();
			
		$this->dt_desdeproyecto = "";
		
		$this->dt_hastaproyecto = "";
		
		$this->ds_codigo = "";
		
		$this->ds_titulo = "";

        $this->ds_organismo = "";
		
		$this->ds_director = "";

        $this->ds_archivo = "";
		
		$this->bl_agregado = 0;
		
		
	}






	

	 

	

	


	

	public function getSolicitud()
	{
	    return $this->solicitud;
	}

	public function setSolicitud($solicitud)
	{
	    $this->solicitud = $solicitud;
	}

	public function getDt_desdeproyecto()
	{
	    return $this->dt_desdeproyecto;
	}

	public function setDt_desdeproyecto($dt_desdeproyecto)
	{
	    $this->dt_desdeproyecto = $dt_desdeproyecto;
	}

	public function getDt_hastaproyecto()
	{
	    return $this->dt_hastaproyecto;
	}

	public function setDt_hastaproyecto($dt_hastaproyecto)
	{
	    $this->dt_hastaproyecto = $dt_hastaproyecto;
	}

	public function getDs_codigo()
	{
	    return $this->ds_codigo;
	}

	public function setDs_codigo($ds_codigo)
	{
	    $this->ds_codigo = $ds_codigo;
	}

	public function getDs_titulo()
	{
	    return $this->ds_titulo;
	}

	public function setDs_titulo($ds_titulo)
	{
	    $this->ds_titulo = $ds_titulo;
	}

	public function getDs_director()
	{
	    return $this->ds_director;
	}

	public function setDs_director($ds_director)
	{
	    $this->ds_director = $ds_director;
	}

    /**
     * @return string
     */
    public function getDs_organismo()
    {
        return $this->ds_organismo;
    }

    /**
     * @param string $ds_organismo
     */
    public function setDs_organismo($ds_organismo)
    {
        $this->ds_organismo = $ds_organismo;
    }

	public function getBl_agregado()
	{
	    return $this->bl_agregado;
	}

	public function setBl_agregado($bl_agregado)
	{
	    $this->bl_agregado = $bl_agregado;
	}

	public function getProyecto()
	{
	    return $this->proyecto;
	}

	public function setProyecto($proyecto)
	{
	    $this->proyecto = $proyecto;
	}

    /**
     * @return string
     */
    public function getDs_archivo()
    {
        return $this->ds_archivo;
    }

    /**
     * @param string $ds_archivo
     */
    public function setDs_archivo($ds_archivo)
    {
        $this->ds_archivo = $ds_archivo;
    }
}
?>