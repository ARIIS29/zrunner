<?php defined('BASEPATH') or exit('No direct script access allowed');

class Eventos extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($tipo)
    {
        $data['pagina_titulo'] = ucfirst($tipo); 
        $data['pagina_subtitulo'] = 'Sección'.$tipo;
        $data['nav_inicio'] = true;

        $data['ir_a'] = 'eventos';
        $data['controlador'] = 'eventos';
        $data['regresar_a'] = 'eventos';
        $controlador_js = "eventos/index";

        $data['styles'] = array();
        $data['scripts'] = array(
            array('es_rel' => true, 'src' => '' . $controlador_js . '.js')
        );

        $data['tipo'] = $tipo;

        $this->construir_public_ui('eventos/index', $data);
    }
}
