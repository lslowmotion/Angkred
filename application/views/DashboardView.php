<?php $this->load->view('header'); ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!--    Hover Rows  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Angka Kredit Yang Dimiliki
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Uraian Kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Satuan Hasil</th>
                                        <th>Jumlah Volume Kegiatan</th>
                                        <th>Angka Kredit</th>
                                        <th>Jumlah Angka Kredit</th>
                                        <th>Keterangan Bukti Fisik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 0;
                                        foreach ($kum_e as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $row->uraian_kegiatan?></td>
                                        <td><?php echo $row->tanggal?></td>
                                        <td><?php echo $row->satuan_hasil?></td>
                                        <td><?php echo $row->volume_kegiatan?></td>
                                        <td><?php echo $row->angka_kredit?></td>
                                        <td><?php echo $row->volume_kegiatan*$row->angka_kredit;?></td>
                                        <td><?php echo $row->file_bukti?></td>

                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Hover Rows  -->
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    <?php $this->load->view('footer'); ?>
	
