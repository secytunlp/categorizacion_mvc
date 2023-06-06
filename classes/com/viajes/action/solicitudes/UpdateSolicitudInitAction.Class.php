<?php

/**
 * Acción para inicializar el contexto
 * para editar una solicitud.
 *
 * @author Marcos
 * @since 10-01-2014
 *
 */

class UpdateSolicitudInitAction extends UpdateEntityInitAction {

	
	protected function getEntity(){
		if (date('Y-m-d')>CYT_FECHA_CIERRE) {
			throw new GenericException( CYT_MSG_FIN_PERIODO );
		}
		$entity = parent::getEntity();



		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('solicitud_oid', $entity->getOid(), '=');
		$oCriteria->addNull('fechaHasta');
		$managerSolicitudEstado =  CYTSecureManagerFactory::getSolicitudEstadoManager();
		$oSolicitudEstado = $managerSolicitudEstado->getEntity($oCriteria);
		if (($oSolicitudEstado->getEstado()->getOid()!=CYT_ESTADO_SOLICITUD_CREADA)) {
			
			throw new GenericException( CYT_MSG_SOLICITUD_MODIFICAR_PROHIBIDO);
		}
			
		$oPeriodoManager = CYTSecureManagerFactory::getPeriodoManager();
		$oPerioActual = $oPeriodoManager->getPeriodoActual(CYT_PERIODO_YEAR);
		
		if (($entity->getPeriodo()->getOid()!=$oPerioActual->getOid())) {
			
			throw new GenericException( CYT_MSG_SOLICITUD_MODIFICAR_PROHIBIDO_1);
		}
		
		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('cd_solicitud', $entity->getOid(), '=');
		

				
		//proyectos.
		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('cd_solicitud', $entity->getOid(), '=');
        $oCriteria->addFilter('bl_agregado', 0, '=');
		/*$filter = new CdtSimpleExpression("(dt_hasta > '".date('Y-m-d')."' OR dt_hasta IS NULL OR dt_hasta = '0000-00-00')");
		$oCriteria->setExpresion($filter);*/
		$proyectosActualesManager = ManagerFactory::getOtrosProyectoManager();
		$proyectosActuales = $proyectosActualesManager->getEntities($oCriteria);
		$proyectos = new ItemCollection();
		foreach ($proyectosActuales as $oProyectoSolicitud) {
			
			$oProyecto = new Proyecto();
			$oProyecto->setOid($oProyectoSolicitud->getProyecto()->getoid());
			$oProyecto->setDs_titulo($oProyectoSolicitud->getDs_titulo());
			$oProyecto->setDs_codigo($oProyectoSolicitud->getDs_codigo());
			$oDirector = new Docente();
			$oDirector->setDs_apellido($oProyectoSolicitud->getDs_director());
			$oProyecto->setDirector($oDirector);
			$oProyecto->setDt_ini($oProyectoSolicitud->getDt_desdeproyecto());
			$oProyecto->setDt_fin($oProyectoSolicitud->getDt_hastaproyecto());
		
			
			
			$proyectos->addItem($oProyecto);
		}
		
		$entity->setProyectos( $proyectos );
		
		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('cd_solicitud', $entity->getOid(), '=');
        $oCriteria->addFilter('bl_agregado', 1, '=');
		/*$filter = new CdtSimpleExpression("(dt_hasta <= '".date('Y-m-d')."')");
		$oCriteria->setExpresion($filter);*/
		$proyectosAnterioresManager = ManagerFactory::getOtrosProyectoManager();
		$entity->setOtrosProyectos( $proyectosAnterioresManager->getEntities($oCriteria) );

        foreach ($entity->getOtrosProyectos() as $proyecto){
            $entity->setDs_codigoproyecto($proyecto->getDs_codigo());
            $entity->setDs_organismoproyecto($proyecto->getDs_organismo());
            $entity->setDs_directorproyecto($proyecto->getDs_director());
            $entity->setDs_tituloproyecto($proyecto->getDs_titulo());
            $entity->setDt_proyectodesde($proyecto->getDt_desdeproyecto());
            $entity->setDt_proyectohasta($proyecto->getDt_hastaproyecto());
            $entity->setDs_archivo($proyecto->getDs_archivo());
        }
		
		
		$oDocenteManager =  CYTSecureManagerFactory::getDocenteManager();
		$oDocente = $oDocenteManager->getObjectByCode($entity->getDocente()->getOid());
		
		$entity->setDs_investigador($oDocente->getDs_apellido().', '.$oDocente->getDs_nombre());
        
		/*$oUser = CdtSecureUtils::getUserLogged();
		$entity->setNu_cuil($oUser->getDs_username());*/
        $entity->setNu_cuil($oDocente->getNu_precuil().'-'.str_pad($oDocente->getNu_documento(), 8, "0", STR_PAD_LEFT).'-'.$oDocente->getNu_postcuil());
		
		return $entity;
	}
	
	protected function parseEntity($entity, XTemplate $xtpl) {


		$manager = new OtrosProyectoSessionManager();
		$manager->setEntities( $entity->getOtrosProyectos() );
		
		$manager = new SolicitudProyectoSessionManager();
		$manager->setEntities( $entity->getProyectos());
		

		
		
		parent::parseEntity($entity, $xtpl);
		
	}
	
	protected function getEntityManager(){
		return ManagerFactory::getSolicitudManager();
	}

	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityInitAction::getNewFormInstance()
	 */
	public function getNewFormInstance($action){
		$form = new CMPSolicitudForm($action);
		
		return $form;
	}

	/**
	 * (non-PHPdoc)
	 * @see classes/com/gestion/action/entities/EditEntityInitAction::getNewEntityInstance()
	 */
	public function getNewEntityInstance(){
		$oSolicitud = new Solicitud();
		
		
		
		return $oSolicitud;
	}


	/**
	 * (non-PHPdoc)
	 * @see CdtEditAction::getOutputTitle();
	 */
	protected function getOutputTitle(){
		return CYT_MSG_SOLICITUD_TITLE_UPDATE;
	}

	/**
	 * retorna el action para el submit.
	 * @return string
	 */
	protected function getSubmitAction(){
		return "update_solicitud";
	}


}