<?php $this->load->view('header'); ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <!--Wizard-->
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">                     
                <table id="kumdtable" class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Uraian Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Satuan Hasil</th>
                        <th>Jumlah Volume Kegiatan</th>
                        <th>Angka Kredit</th>
                        <th>Jumlah Angka Kredit</th>
                        <th>Bukti Fisik</th>
                    </tr>
                    <?php $i=1; foreach ($kumd as $kumd) { ?>
                        <tr>
                            <th><?php echo $i;?></th>
                            <th><?php echo $kumd['uraian_kegiatan'];?></th>
                            <th><?php echo $kumd['tanggal'];?></th>
                            <th><?php echo $kumd['satuan_hasil'];?></th>
                            <th><?php echo $kumd['volume_kegiatan'];?></th>
                            <th><?php echo $kumd['angka_kredit'];?></th>
                            <th><?php echo $kumd['jumlah_angkakredit'];?></th>
                            <th><?php echo $kumd['bukti'];?></th>
                        </tr>

                    <?php $i++; } ?>
                </table>
            </div>
        </div>
        <a href="<?php echo base_url();?>KumDControl/downloadword" type="button" class="btn btn-warning download word">Download</a>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php $this->load->view('footer'); ?>



 <script>
    $( document ).ready(function() {

         $('#kumdtable').DataTable();
       
    });
</script>