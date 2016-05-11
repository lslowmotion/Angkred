<div class="form-group">
    <label>Komponen Kegiatan</label>
    <?php 
    $first=true;
    foreach($kum_e as $row){?>
    <div class="radio">
        <label>
            <input <?php if($first){echo "checked=''";$first=false;}?> type="radio" name="optionsRadios" id="optionsRadios2" value="<?php echo $row->angka_kredit;?>"><?php echo $row->id_kegiatan.". ".$row->komponen_kegiatan;?>
        </label>
    </div>
    <?php }?>
</div>