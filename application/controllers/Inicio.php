<?php defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['pagina_titulo'] = 'Inicio';
        $data['pagina_subtitulo'] = 'Seccion inicio';
        $data['nav_inicio'] = true;

        $data['ir_a'] = 'inicio';
        $data['controlador'] = 'inicio';
        $data['regresar_a'] = 'inicio';
        $controlador_js = "inicio/index";

        $data['styles'] = array();
        $data['scripts'] = array(
            array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
        );

        $this->construir_public_ui('inicio/index', $data);
    }
}
