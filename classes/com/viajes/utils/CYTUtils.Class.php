<?php

/**
 * Utilidades para el sistema.
 *
 * @author Marcos
 * @since 13-11-2013
 */
class CYTUtils {
	

	public static function getMotivosItems() {

		return CYTSecureUtils::getFilterOptionItems( ManagerFactory::getMotivoManager(), "oid", "ds_letra","","","","cd_motivo");

	}
	
	public static function getMotivosDescripcionItems() {

		return CYTSecureUtils::getFilterOptionItems( ManagerFactory::getMotivoManager(), "oid", "ds_motivo","","","","cd_motivo");

	}

    public static function getEquivalenciasItems() {

        return CYTSecureUtils::getFilterOptionItems( ManagerFactory::getEquivalenciaManager(), "oid", "ds_equivalencia");

    }


    public static function getCategoriasItems($mostradas="") {
        if ($mostradas) {
            $oCriteria = new CdtSearchCriteria();
            $filter = new CdtSimpleExpression("cd_categoria in (".$mostradas.")");
            $oCriteria->setExpresion($filter);
        }

        return CYTSecureUtils::getFilterOptionItems( ManagerFactory::getCategoriasicadiManager(), "oid", "ds_categoria","","","","cd_categoria",$oCriteria);

    }

}
