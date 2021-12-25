<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        //$this->load->helper('url');
    }
    
    public function index()
    {
        $data['judul'] = "Home Page";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = "halaman about";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
    public function profile()
    {
        $data['judul'] = "Halaman Profile";
        $this->load->view('v_header',$data);
        $this->load->view('v_profile',$data);
        $this->load->view('v_footer',$data);
    }
    
}