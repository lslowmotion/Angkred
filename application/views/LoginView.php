<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Angka Kredit Dosen</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body style="background-color: #E2E2E2;">
        <div class="container">
            <div class="row text-center " style="padding-top:100px;">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>assets/img/logo-invoice.png" />
                </div>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                    <div class="panel-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('LoginControl/checkDosen'); ?>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input name="nip" type="text" class="form-control" placeholder="NIP" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input name="password" type="password" class="form-control"  placeholder="Password" />
                        </div>
                        <input type="submit" class="btn btn-primary " value="Login"/>
                        <hr />
                        </form>
                    </div>

                </div>


            </div>
        </div>

    </body>
</html>
