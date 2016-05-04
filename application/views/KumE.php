<?php $this->load->view('header');?>
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
			<!--Wizard-->
			<!-- /. ROW  -->
               <div class="row">
                  <div class="col-md-12">                     
         <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukan Nilai
                        </div>
                        <div class="panel-body">
                             <div id="wizard">
							 <h2>Kum A & B</h2>
                <section>
                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. 
                        In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum 
                        dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. 
                        In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. 
                        Donec non pulvinar urna. Aliquam id velit lacus.</p>
                </section>

                <h2>Kum C</h2>
                <section>
                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis.</p>
                </section>

                <h2>Kum D</h2>
                <section>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                </section>
                <h2>Kum E</h2>
                <section>
					<form role="form">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
						<div class="chat-widget-main">
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
                    <!--  End  Striped Rows Table  -->
                </div>
            </div>
                </section>
            </div>
                             
                        </div>
                    </div>
                 </div>
                </div>
			<!--/Wizard-->
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
	
