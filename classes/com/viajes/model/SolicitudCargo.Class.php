<?php

/**
 * SolicitudCargo
 *
 * @author Marcos
 * @since 09-06-2023
 */

class SolicitudCargo extends Entity{

	//variables de instancia.
	
	private $solicitud;
	
	private $cargo;

    private $deddoc;

    private $facultad;
	
	private $dt_fecha;

    private $ds_archivo;
	
	private $bl_agregado;

    private $bl_seleccionado;

    private $situacion;
	


	public function __construct(){
		 
		$this->solicitud = new Solicitud();
		
		$this->cargo = new Cargo();

        $this->deddoc = new Deddoc();
        $this->facultad = new Facultad();


        $this->bl_seleccionado = 0;

		$this->bl_agregado = 0;
		
		
	}

    /**
     * @return mixed
     */
    public function getDs_archivo()
    {
        return $this->ds_archivo;
    }

    /**
     * @param mixed $ds_archivo
     */
    public function setDs_archivo($ds_archivo)
    {
        $this->ds_archivo = $ds_archivo;
    }

    /**
     * @return Solicitud
     */
    public function getSolicitud(): Solicitud
    {
        return $this->solicitud;
    }

    /**
     * @param Solicitud $solicitud
     */
    public function setSolicitud(Solicitud $solicitud)
    {
        $this->solicitud = $solicitud;
    }

    /**
     * @return Cargo
     */
    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    /**
     * @param Cargo $cargo
     */
    public function setCargo(Cargo $cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return Deddoc
     */
    public function getDeddoc(): Deddoc
    {
        return $this->deddoc;
    }

    /**
     * @param Deddoc $deddoc
     */
    public function setDeddoc(Deddoc $deddoc)
    {
        $this->deddoc = $deddoc;
    }

    /**
     * @return Facultad
     */
    public function getFacultad(): Facultad
    {
        return $this->facultad;
    }

    /**
     * @param Facultad $facultad
     */
    public function setFacultad(Facultad $facultad)
    {
        $this->facultad = $facultad;
    }

    /**
     * @return mixed
     */
    public function getDt_fecha()
    {
        return $this->dt_fecha;
    }

    /**
     * @param mixed $dt_fecha
     */
    public function setDt_fecha($dt_fecha)
    {
        $this->dt_fecha = $dt_fecha;
    }

    /**
     * @return int
     */
    public function getBl_agregado(): int
    {
        return $this->bl_agregado;
    }

    /**
     * @param int $bl_agregado
     */
    public function setBl_agregado(int $bl_agregado)
    {
        $this->bl_agregado = $bl_agregado;
    }

    /**
     * @return int
     */
    public function getBl_seleccionado(): int
    {
        return $this->bl_seleccionado;
    }

    /**
     * @param int $bl_seleccionado
     */
    public function setBl_seleccionado(int $bl_seleccionado)
    {
        $this->bl_seleccionado = $bl_seleccionado;
    }

    /**
     * @return mixed
     */
    public function getSituacion()
    {
        return $this->situacion;
    }

    /**
     * @param mixed $situacion
     */
    public function setSituacion($situacion)
    {
        $this->situacion = $situacion;
    }


}
?>