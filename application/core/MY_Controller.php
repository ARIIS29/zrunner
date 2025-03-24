<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (db_activa()) {
            $this->load->database();
        }

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_ALL, 'es_MX.UTF-8', 'es_MX');
    }

    public function construir_public_ui($contenido, $data = null)
    {
        $this->load->view('_layout/public/header', $data);
        $this->load->view($contenido, $data);
        $this->load->view('_layout/public/footer', $data);
    }

    public function construir_site_ui($contenido, $data = null)
    {
        $this->load->view('_layout/site/header', $data);
        $this->load->view($contenido, $data);
        $this->load->view('_layout/site/footer', $data);
    }
}
