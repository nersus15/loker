<?php
class member_model
{
    private $DB;
    public function __construct()
    {
        $this->DB = new database;
    }

    public function getAllMember()
    {
        $this->DB->query('SELECT * FROM member, user WHERE member.account=user.email');
        return $this->DB->resultSet();
    }
    public function addMember($data)
    {
        $status = 1;
        $this->DB->query('INSERT INTO member values(:NIK,  :namaLengkap, :alamat,:ttl, :ktp, :email, :status)');
        $this->DB->bind('namaLengkap', $data['namaLengkap']);
        $this->DB->bind('alamat', $data['alamat']);
        $this->DB->bind('NIK', $data['nik']);
        $this->DB->bind('ttl', $data['ttl']);
        $this->DB->bind('ktp', $_FILES['ktp']['name']);
        $this->DB->bind('email', $data['email']);
        $this->DB->bind('status', $status);
        $this->DB->execute();
    }
    public function deleteMember($id)
    {
        $id = implode($id);
        $this->DB->query('DELETE FROM member WHERE id=:id');
        $this->DB->bind('id', $id);
        $this->DB->execute();
        flasher::setFlash('Berhasil Menghapus Member dengan Id: ' . $id, 'success');
        header('Location:' . BASEURL . '/admin/member_menu');
    }
}
