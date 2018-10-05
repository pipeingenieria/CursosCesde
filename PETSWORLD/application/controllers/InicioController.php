<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioController extends CI_Controller {

	
	
        public function inicio()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('InicioView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
	}
        public function contacto()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('ContactoView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
	}
        public function registro()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('RegistroView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
	}
        public function inicioSesion()
	{
                //Se carga el Header
                $this->load->view('Layout/HeaderView');
                //Se carga el Contenido de el Body
		$this->load->view('InicioSesionView');
                //Se carga el Footer
                $this->load->view('Layout/FooterView');
	}
}
