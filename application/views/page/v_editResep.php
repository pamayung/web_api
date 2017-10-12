<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Resep Makanan
            <small>edit Resep</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Resep</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class='row'>
            <div class='col-md-12'>
                <div class='box box-info'>
                    <div class='box box-info'>
                        <div class='box-header'>
                            <h3 class='box-title'>Add Resep <small>Makanan</small></h3>
                            <!-- tools box -->
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <?php foreach ($query as $data) { ?>
                            <?= form_open_multipart('resep/update/' . $data->id_resep); ?>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Nama Resep</label>
                                    <input name="nama_resep" type="text" value="<?= $data->nama_resep ?>" class="form-control"placeholder="Enter resep">
                                </div>
                                <div class="form-group">
                                    <img id="uploadPreview" src="<?= $data->gambar ?>" style="width: 150px; height: 150px; "/><br/>
                                    <label>Img input</label>
                                    <input type="file" name="gambar" value="gambar" id="uploadImage" onchange="PreviewImage();">
                                    <!-- file gambar kita buat pada field hidden -->
                                    <input type="hidden" name="filelama" class="form-control" value="<?= $data->gambar; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Link Video</label>
                                    <input name="video" type="text" class="form-control" value="<?= $data->link ?>" placeholder="Enter Link">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="textarea" name="keterangan" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        <?= $data->keterangan ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Bahan-Bahan</label>
                                    <textarea class="textarea" name="bahan" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        <?= $data->bahan ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Langkah-Langkah</label>
                                    <textarea class="textarea" name="langkah" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        <?= $data->langkah ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-primary">simpan</button>
                                    <button class="btn btn-danger">Batal</button>
                                </div>
                            </div><!-- /.box-body -->
                            <?= form_close(); ?>
                        <?php } ?>
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