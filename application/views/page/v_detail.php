<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            News
            <small>List</small>
            <?= anchor('Pariwisata', 'add pariwisata', ['class' => 'btn btn-primary btn-sm']) ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('pesan') ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pariwisata</h3>                                    
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th colspan="2">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query as $data) { ?>
                                    <tr>
                                        <th>Nama Pariwisata</th>
                                        <td><?= $data->nama_pariwisata ?></td>
                                    </tr>
                                    <tr>
                                        <th>Lokasi</th>
                                        <td><?= $data->latlng ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gambar</th>
                                        <td><img src="<?= $data->foto; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?= $data->keterangan ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- ./row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->