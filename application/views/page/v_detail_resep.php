<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Resep
            <small>detail</small>
            <?= anchor('addResep', 'add resep', ['class' => 'btn btn-primary btn-sm']) ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('pesan') ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Resep Detail</h3>                                    
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
                                        <th>Nama Resep</th>
                                        <td><?= $data->nama_resep ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gambar</th>
                                        <td><img src="<?= $data->gambar; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?= $data->keterangan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bahan-Bahan</th>
                                        <td><?= $data->bahan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Langkah-Langkah</th>
                                        <td><?= $data->langkah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Action</th>
                                        <td><?= anchor('resep/edit/' . $data->id_resep, 'Edit', ['class' => 'btn-sm btn-warning']) ?></td>
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