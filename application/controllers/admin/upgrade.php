<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Preferences extends Admin_Controller {

	function __construct() {
		parent::__construct();
		$this->iontank_auth_auth->logged_in() or redirect('/admin/auth/login');
		$this->tank_auth->is_admin() or redirect('admin');
		$this->tank_auth->is_admin() or die(1);
		$this->load->library('form_validation');
		$this->viewdata['controller_title'] = "Upgrade FoOlSlide";
	}

	function get_file()
	{
		// Download the files in ./content/cache
	
		
	}
	
	function check_files()
	{
		// recursively check if every folder and file is removable
		
	}
	
	function do_upgrade()
	{
		// trigger do_upgrade() in the ./content/cache/upgrade.php
	}
	
}