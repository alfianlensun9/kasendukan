<?php 

class Beranda extends CI_Controller {

    public function index()
    {   
        $data['title'] = 'Beranda';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/title');
        $this->load->view('templates/navbar');
        $this->load->view('beranda/index');
        $this->load->view('templates/footer');
    }
}