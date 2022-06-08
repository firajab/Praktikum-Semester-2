<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index() {
        $this->load->model('Dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='84868563';
        $this->dsn1->nama='Syafa';
        $this->dsn1->pendidikan='S1 PGSD';

        $this->load->model('Dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='788466758';
        $this->dsn2->nama='Mimi Roro';
        $this->dsn2->pendidikan='S1 Sistem Informasi';

        $this->load->model('Dosen_model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn='133364799';
        $this->dsn3->nama='Roro Jonggrang';
        $this->dsn3->pendidikan='S1 Bisnis Manajemen';

        $this->load->model('Dosen_model','dsn4');
        $this->dsn4->id=4;
        $this->dsn4->nidn='687638964';
        $this->dsn4->nama='Candy Mery';
        $this->dsn4->pendidikan='S1 Ekonomi Bisnis';

        $this->load->model('Dosen_model','dsn5');
        $this->dsn5->id=5;
        $this->dsn5->nidn='687547589';
        $this->dsn5->nama='Adriel Hermawan';
        $this->dsn5->pendidikan='S1 Psikologi';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4, $this->dsn5];
        $data['list_dsn']=$list_dsn;
        $this->load->view('dosen/index',$data);
    } 
}
?>