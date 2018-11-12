<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Vanessa
 * Date: 11/12/2018
 * Time: 4:34 PM
 * Description : Generates common frequently used UI templates based on AdminLTE's UI
 */
class Examples extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Displays a login page design
     */
    public function login(){
        $this->getPage('login');
    }

    /**
     * Displays a signup page design
     */
    public function signup(){
        $this->getPage('signup');
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