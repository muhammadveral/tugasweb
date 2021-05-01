<?php
    class Oop extends CI_Controller
    {
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('tugas');
    }
    public function index()
    {
        $data = array(
            'konten' => $this->tugas->get_data()
        );
        $this->load->view('output',$data);
    }
}
