<?php
// header("Content-type: application/vnd.ms-word");
// header("Content-Disposition: attachment;Filename=document_name.doc");
header ("Content-Type: application/msword");
header ("Expires: 0");
header ("Cache-Control : must-revalidate, post-check=0, pre-check=0");
header("Content-Disposition: attachment; Filename=SaveAsWordDoc.doc");
?>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
        <style>
            h3{
                text-align: center
            }
            .mytablenoborder{
                /*border:1px solid black;*/ 
                border-collapse: collapse;
                width: 100%;
            }
            .mytablenoborder tr th, .mytablenoborder tr td{
                /*border:1px solid black; */
                padding: 5px 10px;
            }
            .mytableborder{
                border:1px solid black; 
                border-collapse: collapse;
                width: 100%;
            }
            .mytableborder tr th, .mytableborder tr td{
                border:1px solid black; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <?php
        // prakteknya bisa ambil dari database
        $data = array(
            array(
                'nama' => 'Hari Prasetyo',
                'negara' => 'Indonesia',
            ),
            array(
                'nama' => 'John Doe',
                'negara' => 'Jerman',
            ),
                )
        ?>
        <table class="mytablenoborder">
        	<tr>
        		<td width="50%">&nbsp</td>
        		<td align="left">LAMPIRAN IV</td>
        	</tr>
        	<tr>
        		<td width="50%">&nbsp</td>
        		<td align="left">Menteri Pendidikan dan Kebudayaan dan</td>
        	</tr>
        	<tr>
        		<td width="50%">&nbsp</td>
        		<td align="left">Kepala Badan Kepegawaian Negara</td>
        	</tr>
        	<tr>
        		<td width="50%">&nbsp</td>
        		<td align="left">Nomor : 4/VIII/PB/2014</td>
        	</tr>
        	<tr>
        		<td width="50%">&nbsp</td>
        		<td align="left">Nomor : 24 Tahun 2014</td>
        	</tr>
        	<tr>
        		<td width="50%">&nbsp</td>
        		<td align="left">Tanggal 12 Agustus 2014</td>
        	</tr>
        </table>
        <h3>SURAT PERNYATAAN<br>MELAKSANAKAN PENGABDIAN KEPADA MASYARAKAT<br><br></h3>
        Yang bertanda tangan di bawah ini : <br>
        <table class="mytablenoborder">
        	<tr>
        		<td>Nama</td>
        		<td> : </td>
        		<td>DR. A. ....................</td>
        	</tr>
        	<tr>
        		<td>NIP</td>
        		<td> : </td>
        		<td>......................</td>
        	</tr>
        	<tr>
        		<td>Pangkat/ golongan ruang</td>
        		<td> : </td>
        		<td>Pembina Tk.I/ III-b</td>
        	</tr>
        	<tr>
        		<td>Jabatan</td>
        		<td> : </td>
        		<td>Ketua Jurusan ...............</td>
        	</tr>
        	<tr>
        		<td>Unit Kerja</td>
        		<td> : </td>
        		<td>Fakultas ..................... Universitas Diponegoro</td>
        	</tr>
        	<tr>
        		<td colspan="3">Menyatakan bahwa : </td>
        	</tr>
        	<tr>
        		<td>Nama</td>
        		<td> : </td>
        		<td>.....................</td>
        	</tr>
        	<tr>
        		<td>NIP</td>
        		<td> : </td>
        		<td>......................</td>
        	</tr>
        	<tr>
        		<td>Pangkat/ golongan ruang/ TMT</td>
        		<td> : </td>
        		<td>Penata Muda Tk. I/ III-b</td>
        	</tr>
        	<tr>
        		<td>Jabatan</td>
        		<td> : </td>
        		<td>Pengajar</td>
        	</tr>
        	<tr>
        		<td>Unit Kerja</td>
        		<td> : </td>
        		<td>Fakultas ..................... Universitas Diponegoro</td>
        	</tr>
        </table><br>
        Telah melakukan melaksanakan pengabdian kepada masyarakat sebagai berikut : <br><br>
        <table class="mytableborder">
        	<tr>
        		<td>No.</td>
        		<td>Uraian Kegiatan</td>
        		<td>Tanggal</td>
        		<td>Satuan Hasil</td>
        		<td>Jumlah Volume Kegiatan</td>
        		<td>Angka Kredit</td>
        		<td>Jumlah Angka Kredit</td>
        		<td>Keterangan/ bukti fisik</td>
        	</tr>
        	<tr bgcolor="#ccccb3">
        		<td>1</td>
        		<td>2</td>
        		<td>3</td>
        		<td>4</td>
        		<td>5</td>
        		<td>6</td>
        		<td>7</td>
        		<td>8</td>
        	</tr>
        	<!-- <tr>
        		<td colspan="8" style="font-weight:bold">D.3. Memberi Latihan/ Penyuluhan/ Penataran/ Ceramah pada Masyarakat, Terjadwal/ terprogram</td>
        	</tr>
        	<tr>
        		<td colspan="8" style="font-weight:bold" >Kurang dari 1 semester dan minimal 1 bulan</td>
        	</tr> -->
            <?php foreach ($cekkredit as $a) { ?>
                <?php if (!empty($a['parent1'])) { ?>
                <tr>
                    <td colspan="8" style="font-weight:bold"><?php echo $a['parent1'];?></td>
                </tr>
                <?php } if (!empty($a['parent2'])) { ?>
                <tr>
                    <td colspan="8" style="font-weight:bold" ><?php echo $a['parent2'];?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="8" style="font-weight:bold" ><?php echo $a['komponen'];?></td>
                </tr>
                <?php $totalkredit = 0; foreach ($lihatall as $b){ 
                    $totalkredit = $totalkredit + $b['angka_kredit'];
                    if ($a['id_kredit'] == $b['id_kredit']){ ?>

                    <tr>
                        <td>1</td>
                        <td><?php echo $b['uraian_kegiatan'];?></td>
                        <td><?php echo $b['tanggal'];?></td>
                        <td><?php echo $b['satuan_hasil'];?></td>
                        <td><?php echo $b['volume_kegiatan'];?></td>
                        <td><?php echo $b['angka_kredit'];?></td>
                        <td><?php echo $b['jumlah_angkakredit'];?></td>
                        <td></td>
                    </tr>
                <?php } } ?>
            <?php } ?>
        	<!-- <tr>
          		<td colspan="8" style="font-weight:bold" >Tingkat Lokal</td>
        	</tr>
        	<tr>
        		<td>1</td>
        		<td>2</td>
        		<td>3</td>
        		<td>4</td>
        		<td>5</td>
        		<td>6</td>
        		<td>7</td>
        		<td>8</td>
        	</tr>
        	<tr style="font-weight:bold">
          		<td colspan="8" >Insidental</td>
        	</tr>
        	<tr>
        		<td>1</td>
        		<td>2</td>
        		<td>3</td>
        		<td>4</td>
        		<td>5</td>
        		<td>6</td>
        		<td>7</td>
        		<td>8</td>
        	</tr> -->
        	<tr>
        		<td></td>
        		<td colspan="5" style="font-weight:bold" bgcolor="#ccccb3" >Jumlah Kum Pengabdian Kepada Masyarakat</td>
        		<td><?php echo $totalkredit; ?></td>
        		<td></td>
        	</tr>
        </table><br><br>
        Demikian pernyataan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.<br>
        <table class="mytablenoborder">
        	<tr>
        		<td width="70%">&nbsp</td>
        		<td align="left">Semarang, </td>
        	</tr>
        	<tr>
        		<td width="70%">&nbsp</td>
        		<td align="left">Ketua Jurusan ....................</td>
        	</tr>
        	<tr>
        		<td width="70%">&nbsp</td>
        		<td align="left">Fakultas ................ UNDIP</td>
        	</tr>
        </table><br><br><br><br><br>
        <table class="mytablenoborder">
        	<tr>
        		<td width="70%">&nbsp</td>
        		<td align="left">Dr.A .........................</td>
        	</tr>
        	<tr>
        		<td width="70%">&nbsp</td>
        		<td align="left">NIP............................</td>
        	</tr>
        </table>

  
    </body>
</html>