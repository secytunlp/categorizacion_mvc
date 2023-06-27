<?php

/**
 * Factory para Categoria
 *
 * @author Marcos
 * @since 07-06-2023
 */
class CategoriasicadiFactory extends CdtGenericFactory {



	public function build($next) {


		$this->setClassName('Categoriasicadi');
		$cat = parent::build($next);
		if(array_key_exists('cd_categoria',$next)){
			$alias = $this->getAlias();
			switch ($alias) {
				case 'Categoriasolicitada_':
					$cat->setOid( $next["cd_categoriasolicitada"] );
					break;
				default:
					$cat->setOid( $next["cd_categoria"] );
					break;
			}
		}

		return $cat;
	}

}
?>
