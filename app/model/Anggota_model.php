<?php
class Anggota_model{
    private $table = "anggota";
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllanggota(){
        $this->db->query("SELECT * FROM " .$this->table);
        return $this->db->resultSet();
    }
    public function insert()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $this->db->query("INSERT INTO `{$this->table}` (`nama`, `password`, `level`) VALUES (:nama, :password, :level)");
            $this->db->bind(':nama', $nama);
            $this->db->bind(':password', $hashed_password);
            $this->db->bind(':level', $level);
            $this->db->execute();
        }
    }
    public function logIn()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->db->query("SELECT * FROM {$this->table} WHERE nama = :username");
            $this->db->bind(':username', $username);
            $this->db->execute();

            $user = $this->db->single();

            // Periksa apakah $user bukan null dan memiliki kunci "password"
            if ($user && isset($user['password'])) {
                if (password_verify($password, $user['password'])) {
                    // Proses login berhasil
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['nama'];
                    $_SESSION['user_level'] = $user['level'];
                    header('Location: http://localhost/kaswoymvc/public/');
                    exit();
                } else {
                    session_start();
                    $_SESSION['error_message'] = "Username atau password salah.";
                    header('Location: http://localhost/kaswoymvc/public/home/login');
                    exit();
                }
            } else {
                session_start();
                $_SESSION['error_message'] = "Data tidak ditemukan";
                header('Location: http://localhost/kaswoymvc/public/home/login');
                exit();
            }
        }
    }
    
}