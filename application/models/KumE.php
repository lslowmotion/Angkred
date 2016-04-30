<?php
if(!defined('BASEPATH'))
exit('You dont have permission on this url');
class KumE extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }
	
	public function getTitleArray(){
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
}