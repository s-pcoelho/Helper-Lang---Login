<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginFr extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->lang->load("login","french");
   }
	public function index()
	{
		$this->load->view('loginfr');
	}
}
