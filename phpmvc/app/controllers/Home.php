<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header-index', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer-index', $data);
    }

    public function admin()
    {
        $data['judul'] = 'Admin';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/admin', $data);
        $this->view('templates/footer', $data);
    }
}
