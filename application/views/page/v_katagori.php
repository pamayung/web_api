<!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                News
                <small>Katagori</small>
                <?= anchor('addKatagori', 'add katagori', ['class' => 'btn btn-primary btn-sm']) ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Katagori</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <?php foreach ($query as $data) : ?>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box <?= $data->bg_color ?>">
                            <div class="inner">
                                <h3>
                                    <?= anchor('katagori/update/'. $data->id.'/', ' ', ['class'=>'fa fa-edit']) ?>
                                    <?= anchor('katagori/delete/'. $data->id,' ', ['class'=>'glyphicon glyphicon-trash']) ?>
                                </h3>
                                <p>
                                    <?= $data->nama ?>
                                </p>
                            </div>
                            <div class="icon">
                                <i class="<?= $data->icon ?>"></i>
                            </div>
                            <div href="#" class="small-box-footer">
                                <i class="<?= $data->icon ?>"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                <?php endforeach; ?>
            </div><!-- /.row -->
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->