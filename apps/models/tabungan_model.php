<?php
class tabungan_model
{
    private $DB, $utils;
    public function __construct()
    {
        $this->utils = new utils;
        $this->DB = new database;
    }
    public function getLogTabungan()
    {
        $member = $this->utils->getMember();
        $this->DB->query('SELECT * FROM simpanan_sukarela join member on(member.nik=:nik AND simpanan_sukarela.anggota=member.nik) ORDER BY simpanan_sukarela.tgl_nabung DESC');
        $this->DB->bind('nik', $member['nik']);
        return $this->DB->resultSet();
    }
    public function nabung($data)
    {
        // Persiapan
        $tgl = time();
        $jumlah = (int) $data['jumlah'];
        $status = 'Menunggu Konfirmasi';
        // Ambil data user dan member yang login
        $member = $this->utils->getMember();
        // Ambil data tabungan sebelumnya]
        $saldoTerakhir = $this->utils->getSaldoMember($member['nik']);
        if ($saldoTerakhir == false) {
            $saldoTerakhir = 0;
        } else {
            $saldoTerakhir = (int) $saldoTerakhir['saldo'];
        }
        $saldo = $saldoTerakhir + $jumlah;


        //  Query ke DB
        $this->DB->query('INSERT INTO simpanan_sukarela(`anggota`, `tgl_nabung`, `jumlah`,`saldo_sebelumnya`, `saldo`, `status`) values(:anggota, :tgl, :jumlah,:saldoSeblumnya, :saldo, :status)');
        $this->DB->bind('anggota', $member['nik']);
        $this->DB->bind('tgl', $tgl);
        $this->DB->bind('jumlah', $jumlah);
        $this->DB->bind('saldoSeblumnya', $saldoTerakhir);
        $this->DB->bind('saldo', $saldo);
        $this->DB->bind('status', $status);
        $this->DB->execute();

        if ($this->DB->rowCount() > 0) {
            flasher::setFlash('Berhasil, Tinggal tunggu konfirmasi dari admin', 'success');
            header('Location:' . BASEURL . '/member/tabungan');
        }
    }
    public function getTabunganTerakhir()
    {
        $member = $this->utils->getMember();
        $this->DB->query('SELECT * FROM simpanan_sukarela join member on(member.nik=:nik AND simpanan_sukarela.anggota=member.nik AND simpanan_sukarela.status="Dikonfirmasi") ORDER BY simpanan_sukarela.tgl_nabung DESC LIMIT 1');
        $this->DB->bind('nik', $member['nik']);
        return $this->DB->single();
    }
    function konfirmasiTabungan($noTransaksi, $jumlah)
    {
        if ($saldoSebelumnya = $this->utils->getSaldoMember($this->utils->getMemberFromFromTabungan((int) $noTransaksi)['anggota']) == false) {
            $saldoSebelumnya = 0;
        } else {
            $saldoSebelumnya = $saldoSebelumnya['saldo'];
        }

        $this->DB->query('UPDATE simpanan_sukarela set simpanan_sukarela.status="Dikonfirmasi"  WHERE simpanan_sukarela.nomer_transaksi=:noTransaksi');
        $this->DB->bind('noTransaksi', (int) $noTransaksi);
        // $this->DB->bind('jumlah', (int) base64_decode($jumlah));
        // $this->DB->bind('saldoSebelumnya', (int) $saldoSebelumnya);
        $this->DB->execute();
        flasher::setFlash('Tabungan denan Nomer Transaksi: ' . $noTransaksi . 'Berhasil dikonfirmasi', 'success');
        header('Location: ' . BASEURL . '/admin/tabungan/konfirmasi');
    }

    function tarikTabunga($data)
    {
        // Persiapan
        $tgl = time();
        $jumlah = (int) $data["jumlah"];
        $status = 'Menunggu Konfirmasi';
        // Ambil data user dan member yang login
        $member = $this->utils->getMember();
        // Ambil data tabungan sebelumnya]
        $saldoTerakhir = $this->utils->getSaldoMember($member['nik']);
        if ($saldoTerakhir == false) {
            $saldoTerakhir = 0;
            $saldo = 0;
        } else {
            $saldoTerakhir = (int) $saldoTerakhir['saldo'];
            $saldo = $saldoTerakhir + $jumlah;
        }


        //  Query ke DB
        $this->DB->query('INSERT INTO penarikan(`anggota`, `tgl_penarikan`, `jumlah`, `status`) values(:anggota, :tgl, :jumlah, :status)');
        $this->DB->bind('anggota', $member['nik']);
        $this->DB->bind('tgl', $tgl);
        $this->DB->bind('jumlah', $jumlah);
        $this->DB->bind('status', $status);
        $this->DB->execute();

        if ($this->DB->rowCount() > 0) {
            flasher::setFlash('Berhasil, Tinggal tunggu konfirmasi dari admin', 'success');
            header('Location:' . BASEURL . '/member/tabungan');
        }
    }
}
