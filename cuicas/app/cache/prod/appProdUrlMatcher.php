<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/mapas')) {
            // mapas_estadisticos_homepage
            if (0 === strpos($pathinfo, '/mapas/hello') && preg_match('#^/mapas/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_homepage')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::indexAction',));
            }

            // mapas_estadisticos_mapa2
            if (0 === strpos($pathinfo, '/mapas/mapa2') && preg_match('#^/mapas/mapa2/(?P<id_eje>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_mapa2')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::mapa2Action',));
            }

            if (0 === strpos($pathinfo, '/mapas/detalle_')) {
                // mapas_estadisticos_detalle_municipio
                if (0 === strpos($pathinfo, '/mapas/detalle_municipio') && preg_match('#^/mapas/detalle_municipio/(?P<id_municipio>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_detalle_municipio')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::detalle_municipioAction',));
                }

                // mapas_estadisticos_detalle_parroquia
                if (0 === strpos($pathinfo, '/mapas/detalle_parroquia') && preg_match('#^/mapas/detalle_parroquia/(?P<id_parroquia>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_detalle_parroquia')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::detalle_parroquiaAction',));
                }

            }

            // mapas_cargar_proyecto
            if (preg_match('#^/mapas/(?P<id_proyecto>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_cargar_proyecto')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\ProyectosController::cargarProyectosAction',));
            }

            // mapas_cargar_proyecto_ventana
            if (0 === strpos($pathinfo, '/mapas/ventana') && preg_match('#^/mapas/ventana/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_cargar_proyecto_ventana')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\ProyectosController::cargarProyectosVentanaAction',));
            }

            // mapas_estadisticos_mapa_ventana2
            if (0 === strpos($pathinfo, '/mapas/mapa2_ventana') && preg_match('#^/mapas/mapa2_ventana/(?P<id_eje>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_mapa_ventana2')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::mapa2VentanaAction',));
            }

            if (0 === strpos($pathinfo, '/mapas/detalle_')) {
                // mapas_estadisticos_detalle_municipio_ventana
                if (0 === strpos($pathinfo, '/mapas/detalle_municipio_ventana') && preg_match('#^/mapas/detalle_municipio_ventana/(?P<id_municipio>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_detalle_municipio_ventana')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::detalle_municipioVentanaAction',));
                }

                // mapas_estadisticos_detalle_parroquia_ventana
                if (0 === strpos($pathinfo, '/mapas/detalle_parroquia_ventana') && preg_match('#^/mapas/detalle_parroquia_ventana/(?P<id_parroquia>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_detalle_parroquia_ventana')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::detalle_parroquiaVentanaAction',));
                }

            }

            if (0 === strpos($pathinfo, '/mapas/c')) {
                // mapas_estadisticos_cartografia_ventana
                if (0 === strpos($pathinfo, '/mapas/cartografia_ventana') && preg_match('#^/mapas/cartografia_ventana/(?P<id_parroquia>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_cartografia_ventana')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::cartografiaVentanaAction',));
                }

                // mapas_circuito_ventana
                if (0 === strpos($pathinfo, '/mapas/circuito') && preg_match('#^/mapas/circuito/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_circuito_ventana')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::mapaCircuitoAction',));
                }

            }

            // mapas_estadisticos_mapaCircuito2
            if (0 === strpos($pathinfo, '/mapas/mapa2_circuito') && preg_match('#^/mapas/mapa2_circuito/(?P<id_circuito>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapas_estadisticos_mapaCircuito2')), array (  '_controller' => 'SistemaEncuesta\\MapasEstadisticosBundle\\Controller\\DefaultController::mapaCircuito2Action',));
            }

        }

        if (0 === strpos($pathinfo, '/encuestas')) {
            // encuestas_pricipal
            if (rtrim($pathinfo, '/') === '/encuestas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'encuestas_pricipal');
                }

                return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'encuestas_pricipal',);
            }

            // encuestas_crear
            if (rtrim($pathinfo, '/') === '/encuestas/crear') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'encuestas_crear');
                }

                return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::crearAction',  '_route' => 'encuestas_crear',);
            }

            // encuestas_totales
            if (0 === strpos($pathinfo, '/encuestas/encuestasTotal') && preg_match('#^/encuestas/encuestasTotal/(?P<tipoEncuesta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_totales')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::encuestasTotalAction',));
            }

            if (0 === strpos($pathinfo, '/encuestas/c')) {
                // encuestas_crearPreguntas
                if (0 === strpos($pathinfo, '/encuestas/crearPreguntas') && preg_match('#^/encuestas/crearPreguntas/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_crearPreguntas')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::crearPreguntasAction',));
                }

                // encuestas_configurar
                if (rtrim($pathinfo, '/') === '/encuestas/configurar') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encuestas_configurar');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::configurarEncuestaAction',  '_route' => 'encuestas_configurar',);
                }

            }

            // encuestas_eliminar
            if (0 === strpos($pathinfo, '/encuestas/eliminarEncuesta') && preg_match('#^/encuestas/eliminarEncuesta/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_eliminar')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::eliminarAction',));
            }

            if (0 === strpos($pathinfo, '/encuestas/c')) {
                // encuestas_respuestas
                if (0 === strpos($pathinfo, '/encuestas/configurar') && preg_match('#^/encuestas/configurar/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_respuestas')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::respuestasAction',));
                }

                // encuestas_cargar_candidato
                if (0 === strpos($pathinfo, '/encuestas/cargarCandidato') && preg_match('#^/encuestas/cargarCandidato/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_cargar_candidato')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::cargarCandidatoAction',));
                }

            }

            // encuestas_resumen
            if (rtrim($pathinfo, '/') === '/encuestas/resumen') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'encuestas_resumen');
                }

                return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::resumenAction',  '_route' => 'encuestas_resumen',);
            }

            // encuestas_prueba
            if (rtrim($pathinfo, '/') === '/encuestas/prueba') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'encuestas_prueba');
                }

                return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::pruebaAction',  '_route' => 'encuestas_prueba',);
            }

            if (0 === strpos($pathinfo, '/encuestas/cargar')) {
                // encuestas_cargarMunicipios
                if (0 === strpos($pathinfo, '/encuestas/cargarMunicipios') && preg_match('#^/encuestas/cargarMunicipios/(?P<id_circuito>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_cargarMunicipios')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::cargarMunicipiosAction',));
                }

                // encuestas_cargarParroquias
                if (0 === strpos($pathinfo, '/encuestas/cargarParroquias') && preg_match('#^/encuestas/cargarParroquias/(?P<id_municipio>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_cargarParroquias')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::cargarParroquiasAction',));
                }

                // encuestas_cargarCV
                if (0 === strpos($pathinfo, '/encuestas/cargarCV') && preg_match('#^/encuestas/cargarCV/(?P<id_parroquia>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_cargarCV')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::cargarCVAction',));
                }

            }

            if (0 === strpos($pathinfo, '/encuestas/datosEncuesta')) {
                // encuestas_datosEncuesta
                if (preg_match('#^/encuestas/datosEncuesta/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_datosEncuesta')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::datosEncuestaAction',));
                }

                // encuestas_datosEncuestaSufragio
                if (0 === strpos($pathinfo, '/encuestas/datosEncuestaSufragio') && preg_match('#^/encuestas/datosEncuestaSufragio/(?P<id_encuesta>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encuestas_datosEncuestaSufragio');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_datosEncuestaSufragio')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::datosEncuestaSufragioAction',));
                }

                // encuestas_datosEncuestaComando
                if (0 === strpos($pathinfo, '/encuestas/datosEncuestaComando') && preg_match('#^/encuestas/datosEncuestaComando/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_datosEncuestaComando')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::datosEncuestaComandoAction',));
                }

            }

            // encuestas_ver_detalles
            if (0 === strpos($pathinfo, '/encuestas/verDetallesEncuesta') && preg_match('#^/encuestas/verDetallesEncuesta/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_ver_detalles')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::verDetallesAction',));
            }

            if (0 === strpos($pathinfo, '/encuestas/buscarPor')) {
                // encuestas_buscar_nombre
                if (rtrim($pathinfo, '/') === '/encuestas/buscarPorNombre') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encuestas_buscar_nombre');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::buscarNombreAction',  '_route' => 'encuestas_buscar_nombre',);
                }

                // encuestas_buscar_fecha
                if (rtrim($pathinfo, '/') === '/encuestas/buscarPorFecha') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encuestas_buscar_fecha');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::buscarFechaAction',  '_route' => 'encuestas_buscar_fecha',);
                }

            }

            if (0 === strpos($pathinfo, '/encuestas/c')) {
                // encuestas_buscar_nombre_encuesta
                if (rtrim($pathinfo, '/') === '/encuestas/crear/buscarPorNombreEncuesta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encuestas_buscar_nombre_encuesta');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::buscarNombreEncuestaAction',  '_route' => 'encuestas_buscar_nombre_encuesta',);
                }

                // encuestas_buscar_nombre_candidato
                if (rtrim($pathinfo, '/') === '/encuestas/cargarCandidato/buscarPorNombreCandidato') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encuestas_buscar_nombre_candidato');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::buscarNombreCandidatoAction',  '_route' => 'encuestas_buscar_nombre_candidato',);
                }

            }

            // encuestas_editar_datos
            if (0 === strpos($pathinfo, '/encuestas/editarDatos') && preg_match('#^/encuestas/editarDatos/(?P<tipo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_editar_datos')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::editarDatosAction',));
            }

            // encuestas_csv
            if (0 === strpos($pathinfo, '/encuestas/csv') && preg_match('#^/encuestas/csv/(?P<id_encuesta>[^/]++)/(?P<repuesta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_csv')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::csvAction',));
            }

            // encuestas_buscar_csv
            if (rtrim($pathinfo, '/') === '/encuestas/buscarCsv') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'encuestas_buscar_csv');
                }

                return array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::buscarCsvAction',  '_route' => 'encuestas_buscar_csv',);
            }

            // encuestas_ver_detalles_reporte
            if (0 === strpos($pathinfo, '/encuestas/verDetallesReporte') && preg_match('#^/encuestas/verDetallesReporte/(?P<id_encuesta>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encuestas_ver_detalles_reporte')), array (  '_controller' => 'SistemaEncuesta\\EncuestasBundle\\Controller\\EncuestasController::verDetallesReporteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_homepage
            if (0 === strpos($pathinfo, '/usuario/hello') && preg_match('#^/usuario/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_homepage')), array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::indexAction',));
            }

            // usuario_principal
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_principal');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuario_principal',);
            }

            // usuario_ver
            if (0 === strpos($pathinfo, '/usuario/ver') && preg_match('#^/usuario/ver/(?P<rol>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_ver')), array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::verAction',));
            }

            // usuario_registro
            if (rtrim($pathinfo, '/') === '/usuario/registro') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_registro');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::registroAction',  '_route' => 'usuario_registro',);
            }

            // usuario_totales
            if (rtrim($pathinfo, '/') === '/usuario/totalUsuarios') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_totales');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::totalUsuariosAction',  '_route' => 'usuario_totales',);
            }

            // usuario_eliminar
            if (0 === strpos($pathinfo, '/usuario/eliminarUsuario') && preg_match('#^/usuario/eliminarUsuario/(?P<usuario_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_eliminar')), array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::eliminarAction',));
            }

            // usuarios_buscar_nombre
            if (rtrim($pathinfo, '/') === '/usuario/buscarPorNombre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios_buscar_nombre');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::buscarNombreAction',  '_route' => 'usuarios_buscar_nombre',);
            }

            // usuarios_resumen
            if (rtrim($pathinfo, '/') === '/usuario/resumen') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios_resumen');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::resumenAction',  '_route' => 'usuarios_resumen',);
            }

            // usuario_perfil
            if (rtrim($pathinfo, '/') === '/usuario/perfil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_perfil');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'usuario_perfil',);
            }

            // usuario_verperfil
            if (rtrim($pathinfo, '/') === '/usuario/verPerfil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_verperfil');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::verPerfilAction',  '_route' => 'usuario_verperfil',);
            }

            if (0 === strpos($pathinfo, '/usuario/registro/buscar')) {
                // usuario_buscar_cedula
                if (rtrim($pathinfo, '/') === '/usuario/registro/buscarCedula') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario_buscar_cedula');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::buscarCedulaAction',  '_route' => 'usuario_buscar_cedula',);
                }

                // usuario_buscar_email
                if (rtrim($pathinfo, '/') === '/usuario/registro/buscarEmail') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario_buscar_email');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::buscarEmailAction',  '_route' => 'usuario_buscar_email',);
                }

            }

            // usuario_modificar_cedula
            if (rtrim($pathinfo, '/') === '/usuario/perfil/buscarCedula') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_modificar_cedula');
                }

                return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\DefaultController::buscarCedulaAction',  '_route' => 'usuario_modificar_cedula',);
            }

        }

        // sistema_Encuesta_principal_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sistema_Encuesta_principal_homepage');
            }

            return array (  '_controller' => 'SistemaEncuesta\\PrincipalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sistema_Encuesta_principal_homepage',);
        }

        // sistema_Encuesta_principal_mensaje
        if ($pathinfo === '/Principal') {
            return array (  '_controller' => 'SistemaEncuesta\\PrincipalBundle\\Controller\\DefaultController::mensajeAction',  '_route' => 'sistema_Encuesta_principal_mensaje',);
        }

        // sistema_Encuesta_principal_contacto
        if ($pathinfo === '/correo') {
            return array (  '_controller' => 'SistemaEncuesta\\PrincipalBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'sistema_Encuesta_principal_contacto',);
        }

        // sistema_Encuesta_principal_formulario
        if ($pathinfo === '/formulario') {
            return array (  '_controller' => 'SistemaEncuesta\\PrincipalBundle\\Controller\\DefaultController::formulario1Action',  '_route' => 'sistema_Encuesta_principal_formulario',);
        }

        // pdf_resumen_encuestas
        if ($pathinfo === '/pdfResumen') {
            return array (  '_controller' => 'SistemaEncuesta\\PrincipalBundle\\Controller\\DefaultController::pdfResumenAction',  '_route' => 'pdf_resumen_encuestas',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // usuario_login
                if (rtrim($pathinfo, '/') === '/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario_login');
                    }

                    return array (  '_controller' => 'SistemaEncuesta\\UsuarioBundle\\Controller\\LoginController::loginAction',  '_route' => 'usuario_login',);
                }

                // usuario_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'usuario_login_check');
                }

            }

            // usuario_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'usuario_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
