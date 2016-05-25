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
                                        <th>ID Kum</th>
                                        <th>Uraian Kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Satuan Hasil</th>
                                        <th>Jumlah Volume Kegiatan</th>
                                        <th>Angka Kredit</th>
                                        <th>Jumlah Angka Kredit</th>
                                        <th>Keterangan Bukti Fisik</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($kum_e as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row->id_kum ?></td>
                                            <td><?php echo $row->uraian_kegiatan ?></td>
                                            <td><?php echo $row->tanggal ?></td>
                                            <td><?php echo $row->satuan_hasil ?></td>
                                            <td><?php echo $row->volume_kegiatan ?></td>
                                            <td><?php echo $row->angka_kredit ?></td>
                                            <td><?php echo $row->volume_kegiatan * $row->angka_kredit; ?></td>
                                            <td>
                                                <?php if (!is_null($row->file_bukti)) { ?>
                                        <center><a href="<?php echo base_url(); ?>DashboardControl/showFile/<?php echo $row->file_bukti; ?>" target="_blank" class="btn btn-inverse"><i class="glyphicon glyphicon-search"></i>View</a><center>
                                            <?php } ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url(); ?>DashboardControl/updateKum/<?php echo $row->id; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"data-toggle="modal" data-target="#myModal"></i>Edit</a>
                                                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                                                <div class="panel-body">
                                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    <h4 class="modal-title" id="myModalLabel">Apakah Anda Yakin?</h4>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                                                    <button type="button" class="btn btn-primary">Ya</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>
                                        <?php } ?>
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
	
