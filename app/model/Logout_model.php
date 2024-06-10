<?php
class Logout_model{
    public function logout() {
        session_start();

        session_unset();

        session_destroy();
        header("Location: http://localhost/kaswoymvc/public/home/login");
        exit;
    }
}