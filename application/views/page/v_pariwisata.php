<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pariwisata
            <small>Semarang</small>
            <?= anchor('addPariwisata', 'add pariwisata', ['class' => 'btn btn-primary btn-sm']) ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">pariwisata</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('pesan') ?>
        <div class="row">
            <?php $no = 1; ?>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pariwisata</h3>                                    
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pariwisata</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query as $data) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data->nama_pariwisata ?></td>
                                        <td><?= $data->latlng ?>
                                            <?php // $n=0;
//                                            $arr = explode(",", $data->latlng);
//                                            foreach ($arr as $exp) {$n++;
//                                                echo $n ." ".$exp."<br>";
//                                            } 
//                                            ?></td>
    <!--                                        <td><img src="<?= $data->foto; ?>"></td>
                                        <td><?= $data->keterangan ?></td>-->
                                        <td>
                                            <?= anchor('pariwisata/detail/' . $data->id_pariwisata, ' ', ['class' => 'btn-lg btn-primary fa fa-eye']) ?>
    <?= anchor('pariwisata/delete/' . $data->id_pariwisata . '/' . $data->foto, ' ', ['class' => 'btn-lg btn-danger glyphicon glyphicon-trash']) ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pariwisata</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- ./row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- DATA TABES SCRIPT -->
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

<!-- page script -->
<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

<!-- add new calendar event modal -->