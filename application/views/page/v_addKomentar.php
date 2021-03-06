<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Komentar
            <small>add Komentar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Komentar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class='row'>
            <div class='col-md-12'>
                <div class='box box-info'>
                    <div class='box box-info'>
                        <div class='box-header'>
                            <h3 class='box-title'>Add Komentar <small>Masakan</small></h3>
                            <!-- tools box -->
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('addKomentar/insert'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama Anda</label>
                                <input name="nama_komentar" type="text" class="form-control"placeholder="Enter nama">
                            </div>
                            <div class="form-group">
                                <img id="uploadPreview" style="width: 150px; height: 150px; "/><br/>
                                <label>Img input</label>
                                <input type="file" name="gambar_komentar" value="gambar_komentar" id="uploadImage" onchange="PreviewImage();">
                            </div>
                            <div class="form-group">
                                <label>Komentar</label>
                                <textarea class="textarea" name="komentar" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                </textarea>
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

<script type="text/javascript">
    $(function () {
        $(".textarea").wysihtml5();
    });
</script>
<script>
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
        oFReader.onload = function (oFREvent)
        {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    }
    ;
</script>
</body>
</html>