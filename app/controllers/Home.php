<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function program(){
        $data['judul'] = 'Program';
        $data['hasil'] = [];
        $bilangan = $this->model('Bilangan_model');
        $bilangan->setBilangan($_POST['inputJumlah']);
        $data['pengulangan'] = $bilangan->getBilangan();
        $data['bageConcat'] = 0;
        $this->view('templates/header', $data);
        $this->view('home/program',$data);
        $this->view('templates/footer');
    }

    public function submit(){
        $data['judul'] = 'Program';
        $tes = $_POST['labelHasil'];
        $data['hasil'] = explode(",",$_POST['labelHasil']);
        $bilangan = $this->model('Bilangan_model');
        $data['bageConcat'] = $bilangan->getBageConcat($_POST['inputJumlah'],$_POST['labelBageConcat']);
        array_push($data['hasil'],$bilangan->getHasil($_POST['inputJumlah'],$data['bageConcat']));
        $data['pengulangan'] = $_POST['labelPengulangan'];
        $data['pengulangan']--;
        if(($data['pengulangan'] === 0) || $data['bageConcat'] === 5){
            array_push($data['hasil'],"Program Selesai, Jumlah 'Bage Concat' mencapai 5 atau 'Sisa Pengulangan' telah habis. ");
        }
        $this->view('templates/header', $data);
        $this->view('home/program',$data);
        $this->view('templates/footer');
    }
}