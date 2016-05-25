<?php

if (!defined('BASEPATH'))
    exit('You dont have permission on this url');

class KumDModel extends CI_Model {

    // public function __construct() {
    //     parent::__construct();
    //     // $this->load->database();
    // }

     public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function detail($id){
        
        // $this->db->select('*');
        // $this->db->where('options',$id);
        // $query = $this->db->get('kum_d_kredit');
        $query = "SELECT * FROM kum_d_kredit WHERE options=$id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }


    public function getTitleArray() {
        $titleArray = array(
            'Menjadi anggota dalam suatu Panitia/ Badan pada perguruan Tinggi',
            'Menjadi anggota panitia/ badan pada lembaga pemerintah',
            'Menjadi anggota organisasi profesi',
            'Mewakili Perguruan Tinggi/ Lembaga Pemerintah duduk dalam Panitia Antar Lembaga, tiap kepanitiaan',
            'Menjadi anggota delegasi Nasional ke pertemuan Internasional',
            'Berperan serta aktif dalam pengelolaan jurnal ilmiah (pertahun)',
            'Berperan serta aktif dalam pertemuan ilmiah',
            'Mendapatkan tanda jasa/ penghargaan',
            'Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional',
            'Mempunyai prestasi dibidang olahraga/ Humaniora',
            'Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)'
        );
        return $titleArray;
    }
    
    public function get_autoComplete($search_data){
        $this->db->select('nama');
        $this->db->like('nama',$search_data);
        return $this->db->get('kum_e',11);
    }
    
    public function get_komponenKegiatan($id){
        $this->db->select('*');
        $this->db->where('id_kum',$id);
        return $this->db->get('kegiatan');
    }

    public function tambahKumD($data){
        // $query = "INSERT INTO kum_d (uraian_kegiatan, satuan_hasil) VALUES ('$data[uraian_kegiatan]', '$data[satuan_hasil]')";
        //     $result = $this->db->query($query);
         $this->db->insert('kum_d', $data); 
    }

    public function lihatKumD(){
        $this->db->select('*');
        $query = $this->db->get('kum_d');
        return $query->result_array();
    }

    public function cekKredit(){
        $query = "SELECT * FROM kum_d as a LEFT JOIN kum_d_kredit as b ON a.id_kredit=b.options GROUP BY a.id_kredit";
        $result = $this->db->query($query);
        return $result->result_array();
    }


    public function lihatKumDAll(){


        $query = "SELECT * FROM kum_d as a LEFT JOIN kum_d_kredit as b ON a.id_kredit=b.options ";
        $result = $this->db->query($query);
        // print_r($result->result_array());
        // $this->db->select('*');
        // $query = $this->db->get('kum_d');
        return $result->result_array();
    }
}
