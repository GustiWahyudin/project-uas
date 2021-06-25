<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function index()
	{
		$this->load->view('Toko/index');
	}

	//Sidetop atas
	public function kontak()
	{
		$this->load->view('Toko/kontak');
	}
	public function tentangkami()
	{
		$this->load->view('Toko/tentangkami');
	}

	//Ini adalah halaman Keranjang dan Checkout
	public function formcheckout()
	{
		$this->load->view('Toko/formcheckout');
	}
	public function showcheckout()
	{
		$this->load->view('Toko/showcheckout');
	}
}