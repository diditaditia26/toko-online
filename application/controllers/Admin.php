<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $data = array("content" => "");
		$this->load->view('admin', $data);
    }
    
    public function login() {
        $this->load->view('admin/login');
    }

    public function produk() {

       $content = $this->load->view('admin/produk', [], true);
       $data = array("content" => $content);
       $this->load->view('admin', $data);
    }
}
