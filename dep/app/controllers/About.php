<?php 

class About extends Controller {
    public function index($name='Amiruddin', $job='Mahasiswa')
    {
        $data['nama'] = $name;
        $data['job'] = $job;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
