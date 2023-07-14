<?php

/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DONDE DE CREO LA CLASE CON EL METODO PARA MANDAR A TRAER LA VISTA DE INICIO        =
 * =====================================                                                                    =
 */
require_once "controller/plantilla.controlador.php";


/**==========================================================================================================
 * CREAMOS UN OBJETO DE LA CLASE DEL CONTROLADOR                                                            =
 * =====================================                                                                    =
 */
$Inicio = new ControladorPlantilla();

/**==========================================================================================================
 * EJECUTAMOS EL METODO CON EL CUAL SE MANDARÁ A LLAMAR A LA VISTA       =
 * =====================================                                                                    =
 */
$Inicio -> ctrTraerPlantilla();
