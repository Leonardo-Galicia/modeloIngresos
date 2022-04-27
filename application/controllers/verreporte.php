<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verreporte extends CI_Controller {
	public function index()
	{
        $this->load->view('header');
		$this->load->view('aside');
		$this->load->view('ver_detalle/ver_detalle_reporte');
		$this->load->view('footer');
		
	}
}
