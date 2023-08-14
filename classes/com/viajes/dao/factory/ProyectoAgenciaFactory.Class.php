<?php

/**
 * Factory para ProyectoAgencia
 *
 * @author Marcos
 * @since 14-08-2023
 */
class ProyectoAgenciaFactory extends CdtGenericFactory {

    public function build($next) {

        $this->setClassName('Proyecto');
        $proyecto = parent::build($next);
        if(array_key_exists('cd_proyecto',$next)){
            $proyecto->setOid( $next["cd_proyecto"] );
        }

        $factory = new DocenteFactory();
        $factory->setAlias("DOCDIR_" );
        $proyecto->setDsDirector( $factory->build($next) );






        return $proyecto;
    }

}
?>
