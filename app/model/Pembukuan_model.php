<?php

class Pembukuan_model
{

    // private $table = "pemasukan";
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPemasukan()
    {
        $this->db->query("SELECT * FROM pemasukan");
        return $this->db->resultSet();
    }

    public function totalPemasukan()
    {
        $this->db->query("SELECT SUM(nominal) AS total_pemasukan FROM pemasukan");
        return $this->db->single();
    }

    public function pemasukanLainnya(){
        if($_SERVER['REQUEST_METHOD' ] == 'POST'){
            $tanggal = $_POST['tanggal_lainnya'];
            $nominal = $_POST['nominal_lainnya'];
            $keterangan = $_POST['keterangan_lainnya'];

            $this->db->query('INSERT INTO pemasukan (tanggal, nominal, keterangan) VALUES (:tanggal_lainnya, :nominal_lainnya, :keterangan_lainnya) ');
            $this->db->bind(':tanggal_lainnya', $tanggal);
            $this->db->bind(':nominal_lainnya', $nominal);
            $this->db->bind(':keterangan_lainnya', $keterangan);
            $this->db->execute();
        }

    }

    public function addPengeluaran()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tanggal = $_POST['tanggal'];
            $nominal = $_POST['nominal'];
            $keterangan = $_POST['keterangan'];

            $this->db->query('INSERT INTO pengeluaran (tanggal, nominal, keterangan) VALUES (:tanggal, :nominal, :keterangan)');
            $this->db->bind(':tanggal', $tanggal);
            $this->db->bind(':nominal', $nominal);
            $this->db->bind(':keterangan', $keterangan);
            $this->db->execute();

            // session_start();
            // $_SESSION['success_message'] = 'Pengeluaran Berhasil di Tambahkan';
            // header('http://localhost/kaswoymvc/public/home/pengeluaran');
            // exit;
        }
    }
    public function getPengeluaran()
    {
        $this->db->query("SELECT * FROM pengeluaran");
        return $this->db->resultSet();
    }

    public function totalPengeluaran()
    {
        $this->db->query("SELECT SUM(nominal) AS total_pengeluaran FROM pengeluaran");
        return $this->db->single();
    }

    public function saldo()
    {
        $total_pemasukan = $this->totalPemasukan()['total_pemasukan'];
        $total_pengeluaran = $this->totalPengeluaran()['total_pengeluaran'];

        $saldo = $total_pemasukan - $total_pengeluaran;
        return $saldo;
    }
}
