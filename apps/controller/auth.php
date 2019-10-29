<?php
class auth extends controller
{
    public function __construct()
    {
        if (isset($_SESSION['login'])) {
            if ($_SESSION['user_data']['role'] == 1) {
                header('Location: ' . BASEURL . '/admin');
            }
        }
    }
    public function index()
    {
        $data['pageTitle'] = "Koperasi | Login";
        $this->view('header/main', $data);
        $this->view('auth/login');
        $this->view('footer/main');
    }
    public function login()
    {
        $data = $_POST;
        $this->model('user_model')->login($data);
    }
}
