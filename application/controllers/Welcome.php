<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->getPage('welcome_message');
	}

	public function home(){
		$this->getPage('home');
	}

	/**
	 * Fetches the desired page from the views folder and loads it unto the browser
	 * @param $page the name/path of the page to load. This is a relative path
	 * @param $data array to pass to each page section
	 */
	private function getPage($page, $data = array()){
		$this->load->view('header', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}
}
