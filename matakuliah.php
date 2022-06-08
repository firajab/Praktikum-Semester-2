<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
    public function index() {
        $this->load->model('Matakuliah_model','matkul1');
        $this->matkul1->id=1;
        $this->matkul1->nama='Pendidikan Agama';
        $this->matkul1->sks='3';
        $this->matkul1->kode='00001';


        $this->load->model('Matakuliah_model','matkul2');
        $this->matkul2->id=2;
        $this->matkul2->nama='Statistik dan Probabilitas';
        $this->matkul2->sks='4';
        $this->matkul2->kode='00002';

        $this->load->model('Matakuliah_model','matkul3');
        $this->matkul3->id=3;
        $this->matkul3->nama='Pemerograman Web 2';
        $this->matkul3->sks='2';
        $this->matkul3->kode='00003';
        
        $this->load->model('Matakuliah_model','matkul4');
        $this->matkul4->id=4;
        $this->matkul4->nama='Bahasa Inggris';
        $this->matkul4->sks='3';
        $this->matkul4->kode='00004';

        $this->load->model('Matakuliah_model','matkul5');
        $this->matkul5->id=5;
        $this->matkul5->nama='Bahasa Indonesia';
        $this->matkul5->sks='3';
        $this->matkul5->kode='00005';


        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5];
        $data['list_matkul']=$list_matkul;
        $this->load->view('matakuliah/index',$data);
    } 
}
?>