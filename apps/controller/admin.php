<?php
class admin extends controller
{
    public function __construct()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/auth');
        }
    }
    public function index()
    {
        $data['pageTitle'] = "Admin | Dashboard";
        $data['user'] = $_SESSION['user_data'];
        $this->view('header/admin', $data);
        $this->view('navigasi/adminPanel', $data);
        $this->view('admin/dashboard');
        $this->view('footer/main');
    }
    public function member_menu()
    {
        if (isset($_POST['add'])) {
            $this->model('member_model')->addMember($_POST);
        } else {
            $data['member'] = $this->model('member_model')->getAllMember();
            $data['pageTitle'] = "Koperasi | Add Member";
            $data['user'] = $_SESSION['user_data'];
            $this->view('header/admin', $data);
            $this->view('navigasi/adminPanel', $data);
            $this->view('admin/member-menu', $data);
            $this->view('footer/main');
        }
    }
}
