<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pariwisata
            <small>add Pariwisata</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Pariwisata</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class='row'>
            <div class='col-md-12'>
                <div class='box box-info'>
                    <div class='box box-info'>
                        <div class='box-header'>
                            <h3 class='box-title'>Add Pariwisata <small>Semarang</small></h3>
                            <!-- tools box -->
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('addPariwisata/insert'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama Pariwisata</label>
                                <input name="nama_pariwisata" type="text" class="form-control"placeholder="Enter title">
                            </div>
                            <div class="box-body">
                                <label>Lokasi</label>
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <input name="latitude" type="text" class="form-control" placeholder="Latitude">
                                    </div>
                                    <div class="col-xs-4">
                                        <input name="longitude" type="text" class="form-control" placeholder="Longitude">
                                    </div>
                                </div>
                            </div><br />
                            <div class="form-group">
                                <img id="uploadPreview" style="width: 150px; height: 150px; "/><br/>
                                <label>Img input</label>
                                <input type="file" name="foto" value="foto" id="uploadImage" onchange="PreviewImage();">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="textarea" name="keterangan" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
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