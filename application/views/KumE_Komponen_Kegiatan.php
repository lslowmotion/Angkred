<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                DETAIL FORM
            </div>
            <div class="panel-body">
                <form role="form">
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
                                    ?> type="radio" name="optionsRadios" id="optionsRadios2" value="<?php echo $row->angka_kredit; ?>"><?php echo $row->id_kum . ". " . $row->komponen_kegiatan; ?>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Uraian Kegiatan</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Satuan Hasil</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Volume Kegiatan</label>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label>File Bukti</label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-file btn-default">
                                <span class="fileupload-new">Select file</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file">
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