<?php $this->load->view('header'); ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <!--Wizard-->
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">                     
                <input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();">
                <div id="suggestions">
                    <div id="autoSuggestionsList"/>
                </div>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<?php $this->load->view('footer'); ?>
	
