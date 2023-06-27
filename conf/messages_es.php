<?php

/**
 * se definen los mensajes del sistema en español.
 *
 * @author modelBuilder
 *
 */


include_once('messages_labels_es.php');

/* SOLICITUDES */

define('CYT_MSG_SOLICITUD_TITLE_LIST', 'Solicitudes', true);
define('CYT_MSG_SOLICITUD_TITLE_ADD', 'Agregar ' . CYT_LBL_SOLICITUD, true);
define('CYT_MSG_SOLICITUD_TITLE_UPDATE', 'Modificar ' . CYT_LBL_SOLICITUD , true);
define('CYT_MSG_SOLICITUD_TITLE_VIEW', 'Visualizar ' . CYT_LBL_SOLICITUD , true);
define('CYT_MSG_SOLICITUD_TITLE_DELETE', 'Borrar ' . CYT_LBL_SOLICITUD , true);
define('CYT_MSG_SOLICITUD_TITLE_EVALUAR', 'Evaluar ' . CYT_LBL_SOLICITUD, true);

define('CYT_MSG_SOLICITUD_CALLE_REQUIRED', CYT_LBL_SOLICITUD_CALLE . ' es requerido', true);
define('CYT_MSG_SOLICITUD_CALLE_NRO_REQUIRED', CYT_LBL_SOLICITUD_CALLE_NRO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_CP_REQUIRED', CYT_LBL_SOLICITUD_CP . ' es requerido', true);
define('CYT_MSG_SOLICITUD_MAIL_REQUIRED', CYT_LBL_SOLICITUD_MAIL . ' es requerido', true);
define('CYT_MSG_SOLICITUD_TITULO_REQUIRED', CYT_LBL_SOLICITUD_TITULO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_TITULO_HELP', 'En caso de poseer más de un título de grado, indique el que considere más adecuado según su actividad como Docente-Investigador', true);
define('CYT_MSG_SOLICITUD_TITULO_POST_HELP', 'En caso de poseer más de un título de posgrado indique el de mayor jerarquía', true);
define('CYT_MSG_SOLICITUD_LUGAR_TRABAJO_REQUIRED', CYT_LBL_SOLICITUD_LUGAR_TRABAJO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_CARGO_REQUIRED', CYT_LBL_SOLICITUD_CARGO . ' es requerido', true);
define('CYT_MSG_SOLICITUD_CARGO_HELP', 'En caso de poseer más de un cargo docente, indique el cargo docente por el que desea ser categorizado. Priorizando primero Unidad Académica, luego jerarquía y finalmente dedicación ', true);
define('CYT_MSG_SOLICITUD_DEDICACION_REQUIRED', CYT_LBL_SOLICITUD_DEDICACION . ' es requerido', true);
define('CYT_MSG_SOLICITUD_FACULTAD_REQUIRED', CYT_LBL_SOLICITUD_FACULTAD . ' es requerido', true);

define('CYT_MSG_SOLICITUD_SIN_CARGOS', 'Según nuestros registros no cuenta con cargos docentes vigentes, envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);

define('CYT_MSG_SOLICITUD_RESUMEN_PALABRAS_REQUIRED', 'El texto del resumen en la pestaña motivo debe tener al menos', true);
define('CYT_MSG_SOLICITUD_RESUMEN_PALABRAS', 'Palabras', true);


define('CYT_MSG_SOLICITUD_TAB_DOMICILIO', "Datos Personales", true);
define('CYT_MSG_SOLICITUD_DOMICILIO_TITULO', "Domicilio de notificación (Dentro del Radio Urbano de La Plata, Art. 20 Ord. 101)", true);
define('CYT_MSG_SOLICITUD_TAB_UNIVERSIDAD', "Datos Académicos", true);
define('CYT_MSG_SOLICITUD_TAB_BECARIO', "Becario/a", true);
define('CYT_MSG_SOLICITUD_TAB_CARRERAINV', "Investigador/a  o Profesional de Apoyo", true);
define('CYT_MSG_SOLICITUD_TAB_PROYECTOS', "Proyectos", true);
define('CYT_MSG_SOLICITUD_TAB_DESCRIPCION', "Categorización por Equivalencia", true);
define('CYT_MSG_SOLICITUD_TIPO_INVESTIGADOR_TITULO', "Debe seleccionar la Unidad Académica donde Ud. realiza la actividad de I+D", true);
define('CYT_MSG_SOLICITUD_OTROS_PROYECTOS_REQUERIDOS', "Complete todos los campos del proyecto de otra entidad", true);

define('CYT_MSG_SOLICITUD_BECAS_TAB', "Becas Anteriores", true);
define('CYT_MSG_SOLICITUD_BECARIO_TITULO', "Espacio a ser completado únicamente por aquellas personas que estén desempeñándose en la actualidad como becarios/as", true);
define('CYT_MSG_SOLICITUD_PROYECTOS_TITULO', "IMPORTANTE: Para ser categorizado/a en el programa SiCaDi debe participar en al menos un Proyecto de Investigación<br> reconocido por la UNLP vigente. A continuación, se listan los proyectos en cuales Ud está participando.  
", true);
define('CYT_MSG_SOLICITUD_TAB_PROYECTOS_ANTERIORES', "Proy. Otras Entidades", true);
define('CYT_MSG_SOLICITUD_PROYECTOS_ANTERIORES_TITULO', "IMPORTANTE: Si no se encuentran proyectos registrados en la base de datos, en los cuales Ud esté participando<br> activamente, podrá cargar un proyecto a continuación. Se deberá adjuntar una certificación de participación en<br> proyecto indicado, emitida por la entidad administradora del mismo en el mes de la corriente presentación.<br>
No se aceptará resolución de otorgamiento del proyecto.<br>
La participación como colaborador en un proyecto no se considera como pertenencia al mismo.
", true);

define('CYT_MSG_SOLICITUD_TAB_PRESUPUESTOS', "Presupuesto", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_1_TITULO', "BIENES DE CONSUMO", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_2_TITULO', "SERVICIOS NO PERSONALES", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_3_TITULO', "EQUIPAMIENTO Y BIBLIOGRAFIA", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_4_TITULO', "EQUIPAMIENTO CIENTIFICO ESPECIFICO", true);
define('CYT_MSG_SOLICITUD_PRESUPUESTOS_TIPO_5_TITULO', "EQUIPO DE COMPUTACIÓN ", true);


define('CYT_MSG_SOLICITUD_SIN_YEAR_PROYECTO', 'Debe contar al menos con un año de antigüedad en proyectos en ejecución o ser becario UNLP.', true);
define('CYT_MSG_SOLICITUD_SIN_PROYECTO_ACTUAL', 'Debe contar al menos con un proyecto en ejecución o ser becario UNLP.', true);
define('CYT_MSG_SOLICITUD_FUE_DIRCODIR', 'No se pueden presentar los Directores y/o Codirectores de Proyectos de Acreditación.', true);


define('CYT_MSG_SOLICITUD_CREADA', 'Sólo se puede crear una solicitud por período', true);
define('CYT_MSG_SOLICITUD_LUGAR_TRABAJO_BECA_NO_UNLP', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_POSTODOCTORAL."\" el lugar de trabajo de la beca debe ser en la UNLP.", true);
define('CYT_MSG_SOLICITUD_LUGAR_TRABAJO_CARRERA_NO_UNLP', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_CPA."\" el lugar de trabajo de la carrera de investigador debe ser en la UNLP.", true);
define('CYT_MSG_SOLICITUD_DOCTORADO_ANTERIOR', 'Doctorado anterior al ', true);
define('CYT_MSG_SOLICITUD_INGRESO_A_LA_CARRERA_ANTERIOR', 'Ingreso a la carrera anterior al ', true);
define('CYT_MSG_SOLICITUD_INGRESO_A_LA_CARRERA', 'Ingreso a la carrera posterior a la fecha de cierre de la convocatoria', true);
define('CYT_MSG_SOLICITUD_EDAD_MAYOR', 'Solicitante no menor a $1 años al $2 y no Becario UNLP', true);
define('CYT_MSG_SOLICITUD_MENOR_YEAR', 'Menos de $1 años de participación en proyectos UNLP / Beca UNLP', true);
define('CYT_MSG_SOLICITUD_MONTO_MAXIMO', 'El monto máximo es de', true);
define('CYT_MSG_SOLICITUD_MONTO_DECLARAR', 'El total de la pestaña presupuesto debe ser mayor que 0 (cero) y no superar los ', true);
define('CYT_MSG_SOLICITUD_TAB_CAMPOS_REQUERIDOS', "Complete todos los campos de la pestaña", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_HELP', 'Los Docentes de la UNLP pertenecientes a la Carrera del Investigador Científico Tecnológico y Carrera Profesional de Apoyo con lugar de trabajo en la UNLP, podrán solicitar el reconocimiento de las siguientes categorías: <br><strong>DI1</strong>: quienes posean categoría de Investigador/a Principal o Superior o sean Profesores Eméritos<br>
<strong>DI2</strong>: quienes posean categoría de Investigador/a Independiente <br>
<strong>DI3</strong>: quienes posean categoría de Investigador/a Adjunto/a o posean categoría de Investigador Asistente con tres (3) o más informes aprobados (como Investigador/a Asistente)<br>
<strong>DI4</strong>: quienes posean categoría de Investigador/a Asistente o quienes posean categoría de Profesional de Apoyo. Quienes sean becarios/as postdoctorales con lugar de trabajo en la UNLP<br>
<strong>DI5</strong>: quienes sean becarios/as de postgrado con lugar de trabajo en la UNLP. ', true);
define('CYT_MSG_SOLICITUD_SIN_SPU', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_SPU."\" debe tener \"".CYT_LBL_SOLICITUD_CATEGORIA."\"", true);
define('CYT_MSG_SOLICITUD_SPU_DISTINTA', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_SPU."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser igual a la \"".CYT_LBL_SOLICITUD_CATEGORIA."\"", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_INDEPENDIENTE_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_INDEPENDIENTE."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_INDEPENDIENTE."\"", true);
define('CYT_MSG_SOLICITUD_CAT_CARRERA_ERROR', "Error en \"".CYT_LBL_SOLICITUD_CARRERA_CATEGORIA."\" en la pestaña ", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_PRINCIPAL_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_PRINCIPAL."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_SUPERIOR."\"", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_EMERITO_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_EMERITO."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_SUPERIOR."\"", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_SUPERIOR_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_SUPERIOR."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_INDEPENDIENTE."\"", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_ADJUNTO_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_ADJUNTO."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_ADJUNTO."\"", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_ASISTENTE_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_ASISTENTE."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_ADJUNTO."\"", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_P_ASISTENTE_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_CPA."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_ASISTENTE."\"", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_POSTDOCTORAL_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_POSTDOCTORAL."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_ASISTENTE."\"", true);
define('CYT_MSG_SOLICITUD_CAT_BECA_ERROR', "Error en el \"".CYT_LBL_SOLICITUD_BECA_NIVEL."\" en la pestaña ", true);

define('CYT_MSG_SOLICITUD_EQUIVALENCIA_DOCTORAL_MENOR', "Por equivalencia \"".CYT_EQUIVALENCIA_DS_DOCTORAL."\" la \"".CYT_LBL_SOLICITUD_CATEGORIA_SOLICITADA."\" debe ser \"".CYT_EQUIVALENCIA_CATS_DOCTORAL."\"", true);

/* BECAS*/
define('CYT_MSG_BECA_TIPO_REQUIRED', CYT_LBL_SOLICITUD_TIPO_BECA . ' es requerido', true);


define('CYT_MSG_BECA_DESDE_REQUIRED', CYT_LBL_SOLICITUD_BECA_DESDE . ' es requerido', true);
define('CYT_MSG_BECA_HASTA_REQUIRED', CYT_LBL_SOLICITUD_BECA_HASTA . ' es requerido', true);


define('CYT_MSG_BECA_ASIGNAR', 'Asignar Beca', true);
define('CYT_MSG_BECAS', "Indique las becas", true);

define('CYT_MSG_BECA_DESDE_MAYOR', CYT_LBL_SOLICITUD_BECA_DESDE . ' es mayor que '.CYT_LBL_SOLICITUD_BECA_HASTA, true);
define('CYT_MSG_BECA_NO_VIGENTE', 'Beca no vigente', true);
define('CYT_MSG_BECA_FUERA_RANGO', 'Solo se pueden agregar becas UNLP que comenzaron antes del '.CYT_BECA_RANGO_FIN, true);


/* PROYECTOS*/
define('CYT_MSG_PROYECTO_CODIGO_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_CODIGO . ' es requerido', true);
define('CYT_MSG_PROYECTO_TITULO_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_TITULO . ' es requerido', true);
define('CYT_MSG_PROYECTO_DIRECTOR_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_DIRECTOR . ' es requerido', true);
define('CYT_MSG_PROYECTO_ORGANISMO_REQUIRED', CYT_LBL_SOLICITUD_ORGANISMO_BECA . ' es requerido', true);
define('CYT_MSG_PROYECTO_INICIO_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_INICIO . ' es requerido', true);
define('CYT_MSG_PROYECTO_FIN_REQUIRED', CYT_LBL_SOLICITUD_PROYECTOS_FIN . ' es requerido', true);


define('CYT_MSG_PROYECTO_ASIGNAR', 'Asignar Proyecto', true);
define('CYT_MSG_PROYECTOS', "Indique los proyectos anteriores", true);

define('CYT_MSG_PROYECTO_DESDE_MAYOR', CYT_LBL_SOLICITUD_PROYECTOS_INICIO . ' es mayor que '.CYT_LBL_SOLICITUD_PROYECTOS_FIN.' en el proyecto de otra entidad', true);
define('CYT_MSG_PROYECTOS_FUERA_RANGO', 'Proyecto de otro entidad NO vigente', true);





//PDF

define('CYT_MSG_SOLICITUD_PDF_HEADER_TITLE', 'SICADI', true);
define('CYT_MSG_SOLICITUD_PDF_HEADER_TITLE_2', 'Solicitud de Categorización', true);

define('CYT_MSG_SOLICITUD_PDF_MES_1', 'Junio', true);
define('CYT_MSG_SOLICITUD_PDF_MES_2', 'Julio', true);
define('CYT_MSG_SOLICITUD_SEPARADOR_DOMICILIO', 'Domicilio de notificación (Dentro del Radio Urbano de La Plata, Art. 20 Ord. 101)', true);
define('CYT_MSG_SOLICITUD_PROYECTOS_ACTUALES', 'PROYECTO/S ACREDITADO/S EN EL/LOS QUE PARTICIPA ACTUALMENTE', true);
define('CYT_MSG_SOLICITUD_PROYECTOS_ANTERIORES', 'PROYECTO ACREDITADO POR OTRA ENTIDAD', true);
define('CYT_MSG_SOLICITUD_BECAS_ANTERIORES', 'BECAS ANTERIORES', true);
define('CYT_MSG_SOLICITUD_PDF_LUGAR', 'Lugar', true);
define('CYT_MSG_SOLICITUD_PDF_FECHA', 'Fecha', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA', 'La presente tiene carácter de declaración jurada.', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA_2', 'Declaración Jurada', true);
define('CYT_MSG_SOLICITUD_FIRMA_DIRECTOR_BECA', 'Certificación del cargo docente', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA_3', '(Sólo en caso de haber sido adjudicatario de subsidios anteriores)', true);
define('CYT_MSG_SOLICITUD_DECLARACION_JURADA_4', 'Declaro que al momento de la presentación de la solicitud de subsidios $1, he entregado en la Secretaría de Ciencia y Técnica de la Universidad Nacional de La Plata el informe y constancia de la rendición efectuada en mi Unidad Académica correspondiente al subsidio OTORGADO EN EL PERIODO 2004 al $2 inclusive. Tomo conocimiento que el no cumplimiento de lo mencionado precedentemente es motivo de exclusión de esta presentación.', true);
define('CYT_MSG_SOLICITUD_FIRMA_LUGAR', 'Lugar y Fecha', true);
define('CYT_MSG_SOLICITUD_FIRMA_ACLARACION', 'Firma y Aclaración', true);
define('CYT_MSG_SOLICITUD_FIRMA_AVAL', 'Certificación del proyecto', true);
define('CYT_MSG_SOLICITUD_FIRMA', 'Firma', true);
define('CYT_MSG_SOLICITUD_UNIVERSIDAD', 'UNIVERSIDAD', true);
define('CYT_MSG_SOLICITUD_SEPARADOR_DESCRIPCION', 'Indicar y describir la aplicación del subsidio en caso que le sea otorgado. La descripcion deberá ser lo mas detallada y precisa posible.', true);
define('CYT_MSG_SOLICITUD_SEPARADOR_PRESUPUESTO', 'PRESUPUESTO ESTIMADO PRELIMINAR', true);
define('CYT_MSG_SOLICITUD_SUBTOTAL', 'SUBTOTAL', true);
define('CYT_MSG_SOLICITUD_TOTAL', 'TOTAL', true);




//PDF evaluación

define('CYT_MSG_EVALUACION_PDF_HEADER_TITLE', 'PLANILLA DE EVALUACION', true);
define('CYT_MSG_EVALUACION_ANTEDENTES_ACADEMICOS', 'ANTECEDENTES ACADÉMICOS DEL SOLICITANTE', true);
define('CYT_MSG_EVALUACION_SEPARADOR_NEGRO_1_1', 'P. Max/ITEM', true);
define('CYT_MSG_EVALUACION_SEPARADOR_NEGRO_1_2', 'DETALLE Y PUNTAJE', true);
define('CYT_MSG_EVALUACION_SEPARADOR_NEGRO_1_3', 'P. OTORGADO', true);
define('CYT_MSG_EVALUACION_PLAN_TRABAJO', 'PLAN DE TRABAJO', true);
define('CYT_MSG_EVALUACION_MAX', 'Max.', true);
define('CYT_MSG_EVALUACION_PT', 'pt.', true);
define('CYT_MSG_EVALUACION_CV_VISITANTE', 'Y CV DEL VISITANTE', true);
define('CYT_MSG_EVALUACION_CATEGORIA', 'CATEGORIA', true);
define('CYT_MSG_EVALUACION_CARGO', 'CARGO DOCENTE', true);
define('CYT_MSG_EVALUACION_CARGO_ACTUAL', 'ACTUAL EN LA UNLP', true);
define('CYT_MSG_EVALUACION_CANT', 'Cant.', true);
define('CYT_MSG_EVALUACION_CV_SOLICITANTE', 'DEL SOLIC.', true);
define('CYT_MSG_EVALUACION_5_YEARS', '5 AÑOS', true);
define('CYT_MSG_EVALUACION_SUBTOTAL', 'Subtotal', true);
define('CYT_MSG_EVALUACION_PROD_ULTIMOS', 'PROD. ULTIMOS', true);
define('CYT_MSG_EVALUACION_HASTA', 'Hasta', true);
define('CYT_MSG_EVALUACION_C_U', 'c/u', true);
define('CYT_MSG_EVALUACION_FORMACION', 'FORMACION', true);
define('CYT_MSG_EVALUACION_RR_HH', 'RECURSOS HUMANOS', true);
define('CYT_MSG_EVALUACION_TOTAL', 'TOTAL', true);
define('CYT_MSG_EVALUACION_OBSERVACIONES', 'Observaciones', true);
define('CYT_MSG_EVALUACION_FIRMA', 'Firma Evaluador', true);
define('CYT_MSG_EVALUACION_ACLARACION', 'Aclaración', true);
define('CYT_MSG_EVALUACION_ANTEDENTES_DOCENTES', 'ANTECEDENTES DOCENTES', true);
define('CYT_MSG_EVALUACION_ANTEDENTES_DOCENTES_DESCRIPCION', 'Se asignará el puntaje correspondiente a la máxima categoría alcanzada.', true);
define('CYT_MSG_EVALUACION_OTROS_ANTEDENTES', 'OTROS ANTECEDENTES', true);
define('CYT_MSG_EVALUACION_PRODUCCION_CIENTIFICA', 'FORMACIÓN DE RR.HH. Y PRODUCCIÓN CIENTÍFICA EN LOS ULTIMOS 5 AÑOS', true);
define('CYT_MSG_EVALUACION_JUSTIFICACION', 'JUSTIFICACIÓN TÉCNICA DEL SUBSIDIO SOLICITADO ', true);
define('CYT_MSG_EVALUACION_FACTOR_DESCRIPCION_1', 'Se aplicará un "factor de eficiencia" F que multiplicará al resultado de la suma de los puntajes correspondientes a A.1), A.2) y A.3): Llamando G al número de años transcurridos desde la obtención del título de grado.', true);
define('CYT_MSG_EVALUACION_FACTOR_DESCRIPCION_2', 'Si ya obtuvo el grado académico superior de la especialidad, o G<6 entonces F=1', true);
define('CYT_MSG_EVALUACION_FACTOR_DESCRIPCION_3', 'Si aún no obtuvo el grado académico superior de la especialidad y G>=6 entonces: SI 6=< G <7 entonces F=0.9 -- SI 7=< G <8 entonces F=0.8 -- SI 8=< G <9 entonces F=0.7 -- SI 9=< G <10 entonces F=0.6 -- SI G>=10 entonces F=0.5', true);
define('CYT_MSG_EVALUACION_POSGRADO_PDF', 'PG. Sup.', true);

define('CYT_MSG_INTEGRANTE_CV_PROBLEMA', 'Hubo un error al subir el Curriculum, intente nuevamente, si el problema persiste envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);
define('CYT_MSG_SOLICITUD_RES_PROBLEMA', 'Hubo un error al subir la resolución de la beca, intente nuevamente, si el problema persiste envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);
define('CYT_MSG_SOLICITUD_CARR_PROBLEMA', 'Hubo un error al subir la certificación de la carrera, intente nuevamente, si el problema persiste envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);
define('CYT_MSG_SOLICITUD_PROY_PROBLEMA', 'Hubo un error al subir la certificación del proyecto de otro entidad, intente nuevamente, si el problema persiste envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);
define('CYT_MSG_SOLICITUD_INFO1_PROBLEMA', 'Hubo un error al subir el Informe 1, intente nuevamente, si el problema persiste envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);
define('CYT_MSG_SOLICITUD_INFO2_PROBLEMA', 'Hubo un error al subir el Informe 2, intente nuevamente, si el problema persiste envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);
define('CYT_MSG_SOLICITUD_INFO3_PROBLEMA', 'Hubo un error al subir el Informe 3, intente nuevamente, si el problema persiste envíenos un mail a categorizacion1@presi.unlp.edu.ar', true);
define('CYT_MSG_SOLICITUD_INFORMES_PROBLEMA', 'Los años a informar deben ser distintos', true);
?>