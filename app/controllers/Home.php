<?php

class Home extends Controller{

    // public $data = ['title' => 'siswa'];

    public function index(){
        // echo "hallo";
        $data['title'] = 'KasWoy';
        $data['pemasukan'] = $this->model('Pembukuan_model')->totalPemasukan();
        $data['pengeluaran'] = $this->model('Pembukuan_model')->totalPengeluaran();
        $data['saldo'] = $this->model('Pembukuan_model')->saldo();
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer", $data);
    }

    public function login(){
        // echo "hallo";
        $data['title'] = 'Log-In | KasWoy';
        $data['login'] = $this->model('Anggota_model')->logIn();
        // $this->view("templates/header", $data);
        $this->view("home/login", $data);
        $this->view("templates/footer", $data);
    }

    public function logout(){
        $this->model("Logout_model")->logout();
    }
    public function admin(){
        // echo "hallo";
        $data['title'] = 'Log-In | KasWoy';
        $data['insert'] = $this->model('Anggota_model')->insert();
        $data['member'] = $this->model('Anggota_model')->getAllanggota();
        $this->view("templates/header", $data);
        $this->view("home/insert", $data);
        $this->view("templates/footer", $data);
    }

    // public function list(){
    //     $data['title'] = 'List | KasWoy';
    //     $this->view("templates/header", $data);
    //     $this->view("home/list", $data);
    //     $this->view("templates/footer", $data);
    // }

    public function riwayat(){
        // echo "hallo";
        $data['title'] = 'Riwayat | KasWoy';
        $data['total_pemasukan'] = $this->model('Pembukuan_model')->totalPemasukan();
        $data['total_pengeluaran'] = $this->model('Pembukuan_model')->totalPengeluaran();
        $data['saldo'] = $this->model('Pembukuan_model')->saldo();
        $data['getpemasukan'] = $this->model('Pembukuan_model')->getPemasukan();
        $data['getpengeluaran'] = $this->model('Pembukuan_model')->getPengeluaran();
        $this->view("templates/header", $data);
        $this->view("home/riwayat", $data);
        $this->view("templates/footer", $data);
    }
    public function pemasukan(){
        // echo "hallo";
        $data['title'] = 'Pemasukan | KasWoy';
        $data['getNama'] = $this->model('Iuran_model')->getnama();
        // var_dump($data['getNama']);
        $data['getIuran'] = $this->model('Iuran_model')->getDataIuran();
        $data['lainnya'] = $this->model('Pembukuan_model')->pemasukanLainnya();
        $data['pemasukan'] = $this->model('Pembukuan_model')->getPemasukan();
        $this->view("templates/header", $data);
        $this->view("home/pemasukan", $data);
        $this->view("templates/footer", $data);
    }
    public function iuran(){
        $this->model('Iuran_model')->save($_POST);
    }
    public function pengeluaran(){
        // echo "hallo";
        $data['title'] = 'Pengeluaran | KasWoy';
        $data['add'] = $this->model('Pembukuan_model')->addPengeluaran();
        $data['get'] = $this->model('Pembukuan_model')->getPengeluaran();
        $this->view("templates/header", $data);
        $this->view("home/pengluaran", $data);
        $this->view("templates/footer", $data);
    }

}