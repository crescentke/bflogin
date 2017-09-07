<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function save_click(){
		$host = $_POST['host'];
	  $base_grant_url = $_POST['base_grant_url'];
	  $user_continue_url = $_POST['user_continue_url'];
	  $node_mac = $_POST['node_mac'];
	  $client_ip = $_POST['client_ip'];
	  $client_mac = $_POST['client_mac'];
	  $splashclick_time = new Date().toString();

	  // success page options instead of continuing on to intended url
	  $success_url = bsae_url('success');

	  $continue_url = $_POST['user_continue_url'];
	}
}
