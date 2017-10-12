<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
                    <?= anchor('Dashboard', 'Dashboard', ['class' => 'fa fa-dashboard']) ?>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Pariwisata Semarang</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><?= anchor('Pariwisata', '   Pariwisata', ['class' => 'fa fa-angle-double-right']) ?></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Resep Makanan</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><?= anchor('Resep', '   Resep', ['class' => 'fa fa-angle-double-right']) ?></li>
                        <li><?= anchor('Tips', '   Tips dan Trik', ['class' => 'fa fa-angle-double-right']) ?></li>
                        <li><?= anchor('Komentar', '   Komentar', ['class' => 'fa fa-angle-double-right']) ?></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
