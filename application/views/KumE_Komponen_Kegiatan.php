<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                DETAIL FORM
            </div>
            <div class="panel-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('KumEControl/inputKumE'); ?>
                <div class="form-group">
                    <label>Komponen Kegiatan</label>
                    <?php
                    $first = true;
                    foreach ($kum_e as $row) {
                        ?>
                        <div class="radio">
                            <label>
                                <input <?php
                                if ($first) {
                                    echo "checked=''";
                                    $first = false;
                                }
                                ?> type="radio" name="id_kum" id="optionsRadios2" value="<?php echo $row->id_kum; ?>"><?php echo $row->id_kum . ". " . $row->komponen_kegiatan; ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label>Uraian Kegiatan</label>
                    <textarea name="uraian_kegiatan" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                        <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="date" name="tanggal" style="width:170px" >
                    </div>
                    <input type="hidden" id="dtp_input2" value=""/>
                </div>
                <div class="form-group">
                    <label>Satuan Hasil</label>
                    <input name="satuan_hasil" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Jumlah Volume Kegiatan</label>
                    <input name="volume_kegiatan" class="form-control" type="number">
                </div>
                <div class="form-group">
                    <label>File Bukti</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-file btn-default">
                            <span class="fileupload-new">Select file</span>
                            <span class="fileupload-exists">Change</span>
                            <input type="file" name="file_bukti" size="100000000">
                        </span>
                        <span class="fileupload-preview"></span>
                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>