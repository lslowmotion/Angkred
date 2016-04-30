<?php $this->load->view('header');?>
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kegiatan Unsur Penunjang</h1>
                    </div>
                </div>
				<div class="panel-body">
					<form role="form">
						<div class="row">
                <div class="col-md-12">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1"><center>No</center></th>
                                            <th class="col-md-10"><center>Komponen Kegiatan</center></th>
                                            <th class="col-md-1"><center>Angka Kredit</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php $i = 0;?>
										<!--1-->
                                        <tr>
                                            <td rowspan="3"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Sebagai Ketua/Wakil Ketua merangkap Anggota,tiap tahun</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Sebagai Anggota, tiap tahun</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--2-->
                                        <tr>
                                            <td rowspan="7"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Panitia Pusat, sebagai</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 1) Ketua/ Wakil Ketua, tiap kepanitiaan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 2) Anggota, tiap kepanitiaan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Panitia Daerah, sebagai</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 1) Ketua/ Wakil Ketua, tiap kepanitiaan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 2) Anggota, tiap kepanitiaan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--3-->
                                        <tr>
                                            <td rowspan="9"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Tingkat Internasional, sebagai</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 1) Pengurus, tiap periode jabatan**</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 2) Anggota atas permintaan, tiap periode jabatan*</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 3) Anggota, tiap periode jabatan*</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Tingkat Nasional, sebagai</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 1) Pengurus, tiap periode jabatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 2) Anggota atas permintaan, tiap periode jabatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 3) Anggota, tiap periode jabatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--4-->
                                        <tr>
                                            <td><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
										</tr>
										<!--5-->
                                        <tr>
                                            <td rowspan="3"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Sebagai Ketua delegasi, tiap kegiatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Sebagai Anggota, tiap kegiatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--6-->
                                        <tr>
                                            <td rowspan="3"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Editor/ dewan penyunting/ dewan redaksi jurnal ilmiah internasional</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Editor/ dewan penyunting/ dewan redaksi jurnal ilmiah nasional</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--7-->
                                        <tr>
                                            <td rowspan="7"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Tingkat Internasional/ Nasional/ Regional sebagai :</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 1) Ketua, tiap kegiatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 2) Anggota/ peserta, tiap kegiatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Di lingkungan Perguruan Tinggi sebagai</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 1) Ketua, tiap kegiatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&emsp; 2) Anggota/ peserta, tiap kegiatan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--8-->
                                        <tr>
                                            <td rowspan="7"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Penghargaan/ tanda jasa Satya lencana 30 tahun</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Penghargaan/ tanda jasa Satya lencana 20 tahun</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; c. Penghargaan/ tanda jasa Satya lencana 10 tahun</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; d. Tingkat Internasional, tiap tanda jasa/ penghargaan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; f. Tingkat Nasional, tiap tanda jasa/ penghargaan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; g. Tingkat Daerah/Lokal, tiap tanda jasa/ penghargaan</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--9-->
                                        <tr>
                                            <td rowspan="4"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Buku SMTA atau setingkat, tiap buku</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Buku SMTP atau setingkat, tiap buku</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; c. Buku SD atau setingkat, tiap buku</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--10-->
                                        <tr>
                                            <td rowspan="4"><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
											<td></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; a. Tingkat Internasional, tiap piagam/ medali</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; b. Tingkat Nasional, tiap piagam/ medali</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<tr>
                                            <td>&nbsp; c. Tingkat Daerah/ Lokal, tiap piagam/ medali</td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
                                        </tr>
										<!--10-->
                                        <tr>
                                            <td><center><?php echo ++$i;?></center></td>
                                            <td><?php echo $kegiatanUnsurPenunjang[$i-1]?></td>
                                            <td><input class="form-control" type="number" style="text-align:center;" step="any"></td>
										</tr>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
            </div>
                <!-- /. ROW  -->
				<button type="submit" class="btn btn-info" style="float:right;">Submit</button>
					</form>
				</div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
<?php $this->load->view('footer');?>
	
