CREATE TABLE `comision` (
                                        `cd_comision` INT(11) NOT NULL AUTO_INCREMENT,
                                        `ds_comision` VARCHAR(30) NOT NULL,
                                        PRIMARY KEY (`cd_comision`)
)
    COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=0
;

INSERT INTO `comision` (`cd_comision`, `ds_comision`) VALUES
                                                                  (1, 'Agronomía'),
                                                                  (2, 'Antropología, sociología y ciencias políticas'),
                                                                  (3, 'Arquitectura'),
                                                                  (4, 'Artes'),
                                                                  (5, 'Biología'),
                                                                  (6, 'Ciencias de la tierra, el mar y la atmósfera'),
                                                                  (7, 'Derecho y jurisprudencia'),
                                                                  (8, 'Economía, administración y contabilidad'),
                                                                  (9, 'Educación'),
                                                                  (10, 'Filosofía'),
                                                                  (11, 'Física, astronomía y geofísica'),
                                                                  (12, 'Historia y geografía'),
                                                                  (13, 'Ingeniería'),
                                                                  (14, 'Literatura y lingüística'),
                                                                  (15, 'Matemática'),
                                                                  (16, 'Medicina, odontología y ciencias de la salud'),
                                                                  (17, 'Psicología'),
                                                                  (18, 'Química, bioquímica y farmacia'),
                                                                  (19, 'Veterinaria')
;


CREATE TABLE `solicitudcategorizacion` (
                                    `cd_solicitud` INT(11) NOT NULL AUTO_INCREMENT,
                                    `cd_docente` INT(11) NOT NULL,
                                    `cd_periodo` INT(11) NOT NULL,
                                    `cd_estado` INT(11) NULL DEFAULT NULL,
                                    `ds_mail` VARCHAR(255) NULL DEFAULT NULL,
                                    `nu_telefono` VARCHAR(50) NULL DEFAULT NULL,
                                    `dt_fecha` DATETIME NULL DEFAULT NULL,

                                    `ds_calle` VARCHAR(255) NULL DEFAULT NULL,
                                    `nu_nro` VARCHAR(20) NULL DEFAULT NULL,
                                    `nu_piso` VARCHAR(20) NULL DEFAULT NULL,
                                    `ds_depto` VARCHAR(20) NULL DEFAULT NULL,
                                    `nu_cp` VARCHAR(20) NULL DEFAULT NULL,
                                    `ds_titulogrado` VARCHAR(255) NULL DEFAULT NULL,
                                    `ds_tituloposgrado` VARCHAR(255) NULL DEFAULT NULL,
                                    `cd_unidad` INT(11) NULL DEFAULT NULL,
                                    `nu_nivelunidad` INT(11) NULL DEFAULT NULL,
                                    `cd_cargo` INT(11) NULL DEFAULT NULL,
                                    `cd_deddoc` INT(11) NULL DEFAULT NULL,
                                    `cd_facultad` INT(11) NULL DEFAULT NULL,
                                    `cd_facultadplanilla` INT(11) NULL DEFAULT NULL,
                                    `bl_becario` BINARY(1) NOT NULL DEFAULT '0',
                                    `bl_unlp` BINARY(1) NOT NULL,

                                    `bl_doctorado` BINARY(1) NOT NULL DEFAULT '0',
                                    `ds_tipobeca` VARCHAR(255) NULL DEFAULT NULL,
                                    `ds_orgbeca` VARCHAR(255) NULL DEFAULT NULL,
                                    `cd_unidadbeca` INT(11) NULL DEFAULT NULL,
                                    `dt_becadesde` DATE NULL DEFAULT NULL,
                                    `dt_becahasta` DATE NULL DEFAULT NULL,
                                    `bl_carrera` BINARY(1) NOT NULL,
                                    `cd_carrerainv` INT(11) NULL DEFAULT NULL,
                                    `cd_organismo` INT(11) NULL DEFAULT NULL,
                                    `cd_unidadcarrera` INT(11) NULL DEFAULT NULL,
                                    `dt_ingreso` DATE NULL DEFAULT NULL,
                                    `dt_egresogrado` DATE NULL DEFAULT NULL,
                                    `dt_egresoposgrado` DATE NULL DEFAULT NULL,
                                    `cd_categoria` INT(11) NULL DEFAULT NULL,
                                    `cd_equivalencia` INT(11) NULL DEFAULT NULL,


                                    `cd_comision` INT(11) NULL DEFAULT NULL,
                                    `cd_categoriasolicitada` INT(11) NULL DEFAULT NULL,
                                    `ds_curriculum` VARCHAR(255) NULL DEFAULT NULL,
                                    `ds_resbeca` VARCHAR(255) NULL DEFAULT NULL,
                                    `ds_rescarrera` VARCHAR(255) NULL DEFAULT NULL,
                                    `nu_puntaje` FLOAT NULL DEFAULT NULL,
                                    `nu_diferencia` FLOAT NULL DEFAULT NULL,
                                    `ds_observaciones` TEXT NULL DEFAULT NULL,
                                    `bl_notificacion` BINARY(1) NOT NULL DEFAULT '0',
                                    `dt_nacimiento` DATE NULL DEFAULT NULL,
                                    `cd_titulogrado` INT(11) NULL DEFAULT NULL,
                                    `cd_tituloposgrado` INT(11) NULL DEFAULT NULL,
                                    `ds_disciplina` VARCHAR(255) NULL DEFAULT NULL,



                                    PRIMARY KEY (`cd_solicitud`),
                                    UNIQUE INDEX `periodo_docente_unique` (`cd_periodo`, `cd_docente`),
                                    INDEX `cd_docente` (`cd_docente`, `cd_periodo`, `cd_unidad`, `cd_cargo`, `cd_deddoc`, `cd_facultad`, `cd_facultadplanilla`, `cd_carrerainv`, `cd_organismo`, `cd_categoria`, `cd_comision`, `cd_categoriasolicitada`),
                                    INDEX `cd_estado` (`cd_estado`),
                                    INDEX `cd_titulogrado` (`cd_titulogrado`),
                                    INDEX `cd_tituloposgrado` (`cd_tituloposgrado`)
)
    COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=0
;

/*ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_docente ) REFERENCES docente (
                                                                                                                     cd_docente
    );*/



ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_periodo ) REFERENCES periodo (
                                                                                       cd_periodo
    );

/*ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_unidad ) REFERENCES unidad (
                                                                                       cd_unidad
    );
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_cargo ) REFERENCES cargo (
                                                                                       cd_cargo
    );
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_deddoc ) REFERENCES deddoc (
                                                                                       cd_deddoc
    );
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_facultad ) REFERENCES facultad (
                                                                                       cd_facultad
    );
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_carrerainv ) REFERENCES carrerainv (
                                                                                       cd_carrerainv
    );
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_organismo ) REFERENCES organismo (
                                                                                       cd_organismo
    );
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_categoria ) REFERENCES categoria (
                                                                                       cd_categoria
    );
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_comision ) REFERENCES comision (
                                                                                       cd_comision
    );*/
ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_titulogrado ) REFERENCES titulo (
                                                                                       cd_titulo
    );

ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_tituloposgrado ) REFERENCES titulo (
                                                                                          cd_titulo
    );

ALTER TABLE solicitudcategorizacion ADD FOREIGN KEY ( cd_equivalencia ) REFERENCES equivalencia (
                                                                                          cd_equivalencia
    );


CREATE TABLE `estadocategorizacion` (
                          `cd_estado` INT(11) NOT NULL AUTO_INCREMENT,
                          `ds_estado` VARCHAR(30) NOT NULL,
                          PRIMARY KEY (`cd_estado`)
)
    COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=0
;



INSERT INTO `estadocategorizacion` (`cd_estado`, `ds_estado`) VALUES
                                                    (1, 'Creada'),
                                                    (2, 'Recibida'),
                                                    (3, 'Admitida'),
                                                    (4, 'No Admitida'),
                                                    (5, 'Otorgada-No-Notificada'),
                                                    (6, 'En evaluación'),
                                                    (7, 'No otorgada'),
                                                    (8, 'Evaluada'),
                                                    (9, 'Otorgada-Notificada'),
                                                    (10, 'Retirada')
                                                    ;





CREATE TABLE cyt_solicitudcategorizacion_estado (
                                             oid bigint(20) NOT NULL auto_increment,
                                             solicitud_oid int(11) default NULL,
                                             estado_oid int(11) default NULL,
                                             fechaDesde datetime default NULL,
                                             fechaHasta datetime default NULL,
                                             motivo text default NULL,
                                             user_oid int(11) NOT NULL,
                                             fechaUltModificacion timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
                                             PRIMARY KEY  (oid),
                                             KEY solicitud_oid (solicitud_oid),
                                             KEY estado_oid (estado_oid),
                                             KEY user_oid (user_oid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

ALTER TABLE cyt_solicitudcategorizacion_estado ADD FOREIGN KEY ( solicitud_oid ) REFERENCES solicitudcategorizacion (
                                                                                                       cd_solicitud
    );

ALTER TABLE cyt_solicitudcategorizacion_estado ADD FOREIGN KEY ( estado_oid ) REFERENCES estadocategorizacion (
                                                                                          cd_estado
    );

ALTER TABLE cyt_solicitudcategorizacion_estado ADD FOREIGN KEY ( user_oid ) REFERENCES cyt_user (
                                                                                          oid
    );

CREATE TABLE `solicitudcategorizacionproyecto` (
                                            `cd_solicitudcategorizacionproyecto` INT(11) NOT NULL AUTO_INCREMENT,
                                            `cd_solicitud` INT(11) NOT NULL,
                                            `cd_proyecto` INT(11) NULL DEFAULT 0,
                                            `dt_desde` DATE NULL DEFAULT NULL,
                                            `dt_hasta` DATE NULL DEFAULT NULL,
                                            `ds_titulo` TEXT NULL DEFAULT NULL,
                                            `ds_director` VARCHAR(255) NULL DEFAULT NULL,
                                            `ds_organismo` VARCHAR(255) NULL DEFAULT NULL,
                                            `ds_codigo` VARCHAR(30) NULL DEFAULT NULL,
                                            `ds_archivo` VARCHAR(255) NULL DEFAULT NULL,
                                            `bl_agregado` BINARY(1) NOT NULL,
                                            PRIMARY KEY (`cd_solicitudcategorizacionproyecto`),
                                            INDEX `cd_solicitud` (`cd_solicitud`, `cd_proyecto`),
                                            INDEX `cd_proyecto` (`cd_proyecto`),
                                            CONSTRAINT `solicitudcategorizacionproyecto_ibfk_1` FOREIGN KEY (`cd_solicitud`) REFERENCES `solicitudcategorizacion` (`cd_solicitud`)
)
    COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=0
;



CREATE TABLE `equivalencia` (
                                `cd_equivalencia` INT(11) NOT NULL AUTO_INCREMENT,
                                `ds_equivalencia` VARCHAR(50) NOT NULL,
                                PRIMARY KEY (`cd_equivalencia`)
)
    COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=0
;

INSERT INTO `equivalencia` (`cd_equivalencia`, `ds_equivalencia`) VALUES
                                                                      (1, 'DI-PRINUAR'),
                                                                      (2, 'Investigador/a Principal o Superior'),
                                                                      (3, 'Investigador/a Independiente'),
                                                                      (4, 'Investigador/a Adjunto/a'),
                                                                      (5, 'Investigador/a Asistente 3+ informes'),
                                                                      (6, 'Investigador/a Asistente o CPA'),
                                                                      (7, 'Becario/a Postdoctoral'),
                                                                      (8, 'Becario/a Doctoral'),
                                                                      (9, 'Profesor emérito');

ALTER TABLE `solicitudcategorizacion`

	ADD COLUMN `ds_genero` VARCHAR(2) NULL DEFAULT NULL,
    ADD COLUMN `ds_otromail` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_foto` VARCHAR(255) NULL DEFAULT NULL,
	ADD COLUMN `ds_orcid` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_sedici` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_scholar` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_instagram` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_twitter` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_facebook` VARCHAR(255) NULL DEFAULT NULL;

ALTER TABLE `solicitudcategorizacion`


    ADD COLUMN `ds_scopus` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_experticiaD` TEXT NULL DEFAULT NULL,
    ADD COLUMN `ds_claveD1` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveD2` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveD3` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveD4` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveD5` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveD6` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_experticiaB` TEXT NULL DEFAULT NULL,
    ADD COLUMN `ds_claveB1` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveB2` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveB3` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveB4` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveB5` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveB6` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_experticiaC` TEXT NULL DEFAULT NULL,
    ADD COLUMN `ds_claveC1` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveC2` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveC3` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveC4` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveC5` VARCHAR(255) NULL DEFAULT NULL,
    ADD COLUMN `ds_claveC6` VARCHAR(255) NULL DEFAULT NULL;

CREATE TABLE `categoriasicadi` (
                            `cd_categoria` INT(11) NOT NULL AUTO_INCREMENT,
                            `ds_categoria` VARCHAR(30) NOT NULL,
                            PRIMARY KEY (`cd_categoria`)
)
    COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=0
;

INSERT INTO `categoriasicadi` (`cd_categoria`, `ds_categoria`) VALUES
                                                                      (6, 'DI1'),
                                                                      (7, 'DI2'),
                                                                      (8, 'DI3'),
                                                                      (9, 'DI4'),
                                                                      (10, 'DI5');


CREATE TABLE `solicitudcategorizacioncargo` (
                                                   `cd_solicitudcategorizacioncargo` INT(11) NOT NULL AUTO_INCREMENT,
                                                   `cd_solicitud` INT(11) NOT NULL,
                                                   `cd_cargo` INT(11) NULL DEFAULT 0,
                                                   `cd_deddoc` INT(11) NULL DEFAULT 0,
                                                   `dt_fecha` DATE NULL DEFAULT NULL,
                                                   `cd_facultad` INT(11) NULL DEFAULT NULL,
                                                   `bl_seleccionado` BINARY(1) NULL DEFAULT '0',
                                                   `ds_archivo` VARCHAR(255) NULL DEFAULT NULL,
                                                   `bl_agregado` BINARY(1) NOT NULL,
                                                   PRIMARY KEY (`cd_solicitudcategorizacioncargo`),
                                                   INDEX `cd_solicitud` (`cd_solicitud`, `cd_cargo`),
                                                   INDEX `cd_deddoc` (`cd_deddoc`),
                                                   INDEX `cd_facultad` (`cd_facultad`),
                                                   CONSTRAINT `solicitudcategorizacioncargo_ibfk_1` FOREIGN KEY (`cd_solicitud`) REFERENCES `solicitudcategorizacion` (`cd_solicitud`)
)
    COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=0
;