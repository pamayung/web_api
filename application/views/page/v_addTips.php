<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tips dan Trik
            <small>add tips</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Tips</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class='row'>
            <div class='col-md-12'>
                <div class='box box-info'>
                    <div class='box box-info'>
                        <div class='box-header'>
                            <h3 class='box-title'>Add Tips <small>Masakan</small></h3>
                            <!-- tools box -->
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('addTips/insert'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama Tips</label>
                                <input name="nama_tips" type="text" class="form-control"placeholder="Enter tips">
                            </div>
                            <div class="form-group">
                                <label>Link Tips</label>
                                <input name="link_tips" type="text" class="form-control" placeholder="Enter Link">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" value="Submit" class="btn btn-primary">Add</button>
                                <button class="btn btn-danger">Batal</button>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col-->
            </div><!-- ./row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- CK Editor -->
<script src="<?php echo base_url(); ?>assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

</body>
</html>