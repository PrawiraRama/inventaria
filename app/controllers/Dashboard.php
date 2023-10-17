<?php 


class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';

        $this->view('tamplates/header1', $data);
        $this->view('dashboard1/index');
        $this->view('tamplates/footer');
    }
}