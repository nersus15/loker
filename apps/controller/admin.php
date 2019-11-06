<?php
class admin extends controller
{
    public function __construct()
    {
        // cek apakah client sudah login
        if (!isset($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/auth');
        }
    }
    public function index()
    {
        $data['pageTitle'] = "Admin | Dashboard";
        $data['user'] = $_SESSION['user_data'];
        $this->view('admin/dashboard', $data);
    }
    public function member_menu()
    {
        if (isset($_POST['add'])) {
            $this->model('member_model')->addMember($_POST);
            $this->model('user_model')->signUp($_POST);
        } else {
            $data['member'] = $this->model('member_model')->getAllMember();
            $data['pageTitle'] = "Koperasi | Add Member";
            $data['user'] = $_SESSION['user_data'];
            // $this->view('header/data-tables', $data);
            // $this->view('navigasi/adminPanel', $data);
            $this->view('admin/member-menu', $data);
            // $this->view('footer/data-tables');
        }
    }
    public function deleteMember($id)
    {
        $this->model('member_model')->deleteMember($id);
    }
}
