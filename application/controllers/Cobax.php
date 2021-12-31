<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cobax extends CI_Controller
{

	public function index()
	{
		$this->load->view('user_pns/tambah_kgb');
	}
}
