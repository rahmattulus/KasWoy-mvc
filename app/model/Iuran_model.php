<?php

class Iuran_model
{
    private $table = "iuran";

    
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getnama(){
        $this->db->query("SELECT id, nama FROM anggota");
        return $this->db->resultSet();
    }

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil nilai dari form
            $bulan = $_POST['bulan'];
            $status = $_POST['status']; 

            try {
                // Lakukan iterasi untuk setiap anggota
                foreach ($status as $id_siswa => $minggu) {
                    // Dapatkan status untuk minggu ini
                    foreach ($minggu as $minggu_ke => $sudah_bayar) {

                        // Lakukan insert data ke dalam tabel iuran
                        $this->db->query("INSERT INTO {$this->table} (`id_siswa`, `bulan`, `minggu`, `status`) VALUES (:id_siswa, :bulan, :minggu_ke, :sudah_bayar)");
                        $this->db->bind(':id_siswa', $id_siswa);
                        $this->db->bind(':bulan', $bulan);
                        $this->db->bind(':minggu_ke', $minggu_ke);
                        $this->db->bind(':sudah_bayar', $sudah_bayar);
                        $this->db->execute();

                        // if ($sudah_bayar === "Sudah Bayar") {
                        //     $tanggal = date('Y-m-d'); 
                        //     $nominal = 2000;
                        //     $keterangan = "Iuran Rutin";
                        //     $this->db->query("INSERT INTO pemasukan (tanggal, keterangan, nominal) VALUES (:tanggal, :keterangan, :nominal)");
                        //     $this->db->bind(":tanggal", $tanggal);
                        //     $this->db->bind(":nominal", $nominal);
                        //     $this->db->bind(":keterangan", $keterangan);
                        //     $this->db->execute();
                        // }
                    }
                }
                return true; // Berhasil menyimpan data
            } catch (PDOException $e) {
                return "Error: " . $e->getMessage();
            }
        }
    }

    public function getDataIuran(){
        $this->db->query("SELECT * FROM `iuran` RIGHT JOIN `anggota` ON iuran.id_siswa = anggota.id");
        // var_dump($sql);
        return $this->db->resultSet();
    }
}
