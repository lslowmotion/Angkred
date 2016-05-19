<?php $this->load->view('header'); ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <!--Wizard-->
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">                     
                <div class="form-group">
                    <label>Kegiatan</label>
                    <select class="form-control" id="radio" onclick="selectFormKumE();">
                        <?php
                        $i = 1;
                        foreach($kum_e as $row){?>
                        <option value="<?php echo $i;?>">E.<?php echo $i++.".&nbsp;".$row;?></option>
                        <?php }?>
                    </select>
                </div>
                <div id="komponen_kegiatan"/>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<?php $this->load->view('footer'); ?>
	
