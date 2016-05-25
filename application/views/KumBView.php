<?php $this->load->view('header'); ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <!--Wizard-->
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">                     
                <div id="konten kegiatan" class="panel panel-primary">
					<div class="panel-heading">
						Konten Dokumen
					</div>
					<div class="panel-body">
						<div class="col-md-9">
						<table id="table_konten">
							<tr>
								<td>
									Pilih Kegiatan
								</td>
								<td>:
								</td>
								<td colspan="2">							
									<select class="form-control">
										<option value=""><center>Pilih Salah Satu Kegiatan</center></option>
										<?php
										$i=1;
										foreach($kompKeg as $komponen){?>
										<option value="<?php echo $komponen->kode;?>"><?php echo $i++.".&nbsp;".$komponen->komponen_kegiatan;?></option>
										<?php }?>
									</select>
								</td>
							</tr>
						<label></label>
                    
							<tr>
								<td>
									Masukkan Jumlah Kegiatan/ Semester
								</td>
								<td>:
								</td>
								
								<td colspan="2">							
									<input type="text" class="form-control" placeholder="Masukkan isi "/>
								</td>
							</tr>
							<tr>
								<td>
									Tanggal Kegiatan
								</td>
								<td>:
								</td>
								
								<td>
									<select class="form-control">
										<option value="">Pilih Semester</option>
										<option value="">Gasal</option>
										<option value="">Genap</option>
									</select>
								</td>
								<td>
									<select class="form-control">
										<option value="">Pilih Tahun Ajaran</option>
										<option value="">2013/2016</option>
										<option value="">2014/2015</option>
										<option value="">2015/2016</option>
										<option value="">2016/2017</option>
										<option value="">2017/2018</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Masukkan Bukti Lampiran 
								</td>
								<td>:
								</td>
								<td colspan="2">
									<input type="file" class="" placeholder="Masukkan isi "/>
								</td>
							</tr>
						</table>
						</div>
						<div class="col-md-3">
							<div class="panel panel-info">
								<div class="panel-heading">Keterangan</div>
								<div class="panel-body" id="submitted"><center>Lorem ipsum dolor sit amet, eam ut duis vidit urbanitas. Ea mea aliquid delenit voluptatibus. Habemus fuisset pro et, id case facete vidisse eum.</center></div>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit Data</button>
            </div>
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">Data yang telah anda Masukkan</div>
					<div class="panel-body" id="submitted"><center>No submitted data to display</center></div>
				</div>
			</div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<style>
	#table_konten td{
		padding : 10px 5px;	
	}
	.col-md-12{
		margin-bottom : 20px;
	}
</style>
<!-- /. PAGE WRAPPER  -->
<?php $this->load->view('footer'); ?>
	
