<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginGm extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->lang->load("login","german");
   }
	public function index()
	{
		$this->load->view('logingm');
	}
}
