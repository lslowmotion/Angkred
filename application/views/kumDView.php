<?php $this->load->view('header'); ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <!--Wizard-->
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12"> 
            <!-- <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>KumDControl/tambahKumD">                    -->
                <div class="form-group">
                    <label>Kegiatan</label>
                    <select class="form-control" id="komponen" name="komponen" onchange="selectFormKumD();">
                        <option value="1"> Menduduki jabatan pimpinan pada lembaga pemerintahan/ pejabat negara</option>
                        <option value="2"> Melaksanakan pemngemabangan hasil pendidikan, dan penelitian</option>
                        <option value="3"> Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat terjadwal/ terpogram (Dalam satu semester atau lebih)</option>
                        <option value="7"> Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat terjadwal/ terpogram (Kurang dari satu semester dan minimal satu bulan)</option>
                        <option value="12"> Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan</option>
                        <option value="16"> Membuat/ menulis karya pengabdian pada masyarakat yang tidak dipublikasikan tiap karya</option>
                    </select>
                </div>
                <div class="form-group" id="3">
                    <label>Sub Kegiatan</label>
                    <select class="form-control" id="subkomponen3" class="subkomponen" onchange="selectFormKumD1();">
                        <option value="4"> Tingkat Internasional tiap program</option>
                        <option value="5"> TIngkat Nasional, tiap program</option>
                        <option value="6"> Tingkat Lokal, tiap program</option>
                    </select>
                </div>
                <div class="form-group" id="7">
                    <label>Sub Kegiatan</label>
                    <select class="form-control" id="subkomponen7" class="subkomponen" onchange="selectFormKumD2();">
                        <option value="8"> Tingkat internasional, tiap program</option>
                        <option value="9"> Tingkat Nasional, tiap program</option>
                        <option value="10"> Tingkat Lokal, tiap program</option>
                        <option value="11"> Insidental. tiap kegiatan/ program</option>
                    </select>
                </div>
                <div class="form-group" id="12">
                    <label>Sub Kegiatan</label>
                    <select class="form-control" id="subkomponen12" class="subkomponen" onchange="selectFormKumD3();">
                        <option value="13"> Berdasarkan bidang keahlian, tiap program</option>
                        <option value="14"> Berdasarkan penugasan lembaga perguruan tinggi, tiap program</option>
                        <option value="15"> Berdasarkan fungsi/ jabatan tiap program</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Uraian Kegiatan</label>
                    <input type="text" class="form-control" id="uraian">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal">
                </div>
                <div class="form-group">
                    <label>Satuan Hasil</label>
                    <input type="text" class="form-control" name="sathas" id="sathas" disabled>
                </div>
                <div class="form-group">
                    <label>Jumlah Kegiatan</label>
                    <input type="text" class="form-control" name="jumkeg" id="jumkeg" disabled>
                </div>
                <div class="form-group">
                    <label>Angka Kredit</label>
                    <input type="text" class="form-control" name="angkre" id="angkre" disabled>
                </div>
                <div class="form-group">
                    <label>Jumlah Angka Kredit</label>
                    <input type="text" class="form-control" name="jum_angkre" id="jum_angkre" disabled>
                </div>
                <div class="form-group">
                    <label>Upload Bukti</label>
                    <!-- <input type="text" class="form-control" name="jum_angkre" id="jum_angkre" readonly> -->
                </div>
                <!-- <div id="komponen_kegiatan"/> -->
               
                <button type="button" class="btn btn-success tambahkumd">Tambah</button>
                <a href="<?php echo base_url();?>KumDControl/lihatKumD" type="button" class="btn btn-warning lihatkumd">Lihat</a>

            <!-- </form> -->
            </div>
            
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>

<script>
    $( document ).ready(function() {
        document.getElementById(3).style.display='none';
        document.getElementById(7).style.display='none';
        document.getElementById(12).style.display='none';
    });
    
    function selectFormKumD(){
        // var id_komponen = 0;
         $( "#komponen option:selected" ).each(function() {
                  id_komponen = $( this ).val();
                });
        if (id_komponen == 3){
            document.getElementById(3).style.display='block';
            document.getElementById(7).style.display='none';
            document.getElementById(12).style.display='none';
        } else if (id_komponen == 7){
            document.getElementById(3).style.display='none';
            document.getElementById(7).style.display='block';
            document.getElementById(12).style.display='none';
        } else if (id_komponen == 12){
            document.getElementById(3).style.display='none';
            document.getElementById(7).style.display='none';
            document.getElementById(12).style.display='block';
        } else {
            document.getElementById(3).style.display='none';
            document.getElementById(7).style.display='none';
            document.getElementById(12).style.display='none';

                         
            $.ajax({
                url:"../angkred/kumDControl/get_detail?id="+id_komponen,              
                dataType : "json",
                type: "POST",

                success: function(data){
                  document.getElementById("sathas").value = data[0].satuan_hasil;
                  document.getElementById("angkre").value = data[0].kredit;
                  document.getElementById("jumkeg").value = 1;
                   document.getElementById("jum_angkre").value = data[0].kredit;
                  // document.getElementById("community1").value = data[0].community;
                  // document.getElementById("lokasi1").value = data[0].lokasi;
                  // document.getElementById("os1").value = data[0].os;
                  //document.form_ganti_kat.action = "../operation/ganti_kategori?id="+id;   
               }
              });  
        }
        window.alert(id_komponen);

    }

    function selectFormKumD1(){
        // var id_subkomponen = 0;
         $( "#subkomponen3 option:selected" ).each(function() {
                  id_subkomponen = $( this ).val();
                });
         $.ajax({
                url:"../angkred/kumDControl/get_detail?id="+id_subkomponen,              
                dataType : "json",
                type: "POST",

                success: function(data){
                  document.getElementById("sathas").value = data[0].satuan_hasil;
                  document.getElementById("angkre").value = data[0].kredit;
                  document.getElementById("jumkeg").value = 1;
                   document.getElementById("jum_angkre").value = data[0].kredit;
                  // document.getElementById("community1").value = data[0].community;
                  // document.getElementById("lokasi1").value = data[0].lokasi;
                  // document.getElementById("os1").value = data[0].os;
                  //document.form_ganti_kat.action = "../operation/ganti_kategori?id="+id;   
               }
              });  

        window.alert(id_subkomponen);

    }

    function selectFormKumD2(){
        var id_subkomponen = 0;
         $( "#subkomponen7 option:selected" ).each(function() {
                  id_subkomponen = $( this ).val();
                });
         $.ajax({
                url:"../angkred/kumDControl/get_detail?id="+id_subkomponen,              
                dataType : "json",
                type: "POST",

                success: function(data){
                  document.getElementById("sathas").value = data[0].satuan_hasil;
                  document.getElementById("angkre").value = data[0].kredit;
                  document.getElementById("jumkeg").value = 1;
                   document.getElementById("jum_angkre").value = data[0].kredit;
                  // document.getElementById("community1").value = data[0].community;
                  // document.getElementById("lokasi1").value = data[0].lokasi;
                  // document.getElementById("os1").value = data[0].os;
                  //document.form_ganti_kat.action = "../operation/ganti_kategori?id="+id;   
               }
              }); 
        window.alert(id_subkomponen);

    }

    function selectFormKumD3(){
        var id_subkomponen = 0;
         $( "#subkomponen12 option:selected" ).each(function() {
                  id_subkomponen = $( this ).val();
                });
         $.ajax({
                url:"../angkred/kumDControl/get_detail?id="+id_subkomponen,              
                dataType : "json",
                type: "POST",

                success: function(data){
                  document.getElementById("sathas").value = data[0].satuan_hasil;
                  document.getElementById("angkre").value = data[0].kredit;
                  document.getElementById("jumkeg").value = 1;
                   document.getElementById("jum_angkre").value = data[0].kredit;
                  // document.getElementById("community1").value = data[0].community;
                  // document.getElementById("lokasi1").value = data[0].lokasi;
                  // document.getElementById("os1").value = data[0].os;
                  //document.form_ganti_kat.action = "../operation/ganti_kategori?id="+id;   
               }
              }); 
        window.alert(id_subkomponen);
    }


    //Menyimpan kategori baru telah dirubah
    $(".tambahkumd").click(function(){
        if (id_komponen == 3 || id_komponen == 7 || id_komponen == 12){
            var subkom = 'id_kredit=' + document.getElementById("subkomponen"+id_komponen).value 
                    + '&uraian_kegiatan=' + document.getElementById("uraian").value
                    + '&tanggal=' + document.getElementById("tanggal").value
                    + '&sathas=' + document.getElementById("sathas").value 
                    + '&jumkeg=' + document.getElementById("jumkeg").value 
                    + '&angkre=' + document.getElementById("angkre").value 
                    + '&jum_angkre=' + document.getElementById("jum_angkre").value ;
      
              $.ajax({
                url:"../angkred/KumDControl/tambahKumD",              
                dataType : "json",
                data : subkom,
                type: "POST",
                //success: success()       
              }); 
            // window.alert("sub_komponen");
        }else {
            // window.alert("komponen");
        }

                             
    });
</script>
<!-- /. PAGE WRAPPER  -->
<?php $this->load->view('footer'); ?>
	
