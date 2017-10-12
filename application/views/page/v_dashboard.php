<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>Web Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Web Admin
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $this->session->userdata('username'); ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <span><?php echo $this->session->userdata('username'); ?></span>
                                    </div>
                                    <div class="pull-right">
                                        <a href="login/keluar" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Pariwisata Semarang</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pariwisata"><i class="fa fa-angle-double-right"></i> Pariwisata</a></li>
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

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Main content -->
                <section class="content lockscreen">
                    <!-- Automatic element centering using js -->
                    <div class="row">
                        <div class="lockscreen">  
                            <div class="center"> 
                                <div class="headline text-center" id="time">
                                    <!-- Time auto generated by js -->
                                </div><!-- /.headline -->

                                <!-- User name -->
                                <div class="lockscreen-name"><?php echo $this->session->userdata('username'); ?></div>

                                <!-- START LOCK SCREEN ITEM -->
                                <div class="lockscreen-item">
                                    <!-- lockscreen image -->
                                    <div class="lockscreen-image">
                                        <img src="<?php echo base_url(); ?>assets/img/avatar5.png" alt="user image"/>
                                    </div>
                                    <!-- /.lockscreen-image -->

                                    <!-- lockscreen credentials (contains the form) -->
                                    <div class="lockscreen-credentials">   

                                        <div class="input-group">
                                            <label></label>
                                            <div class="input-group-btn">
                                            </div>
                                        </div>
                                    </div><!-- /.lockscreen credentials -->
                                </div>           
                            </div><!-- /.center -->

                            <!-- jQuery 2.0.2 -->
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                            <!-- Bootstrap -->
                            <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
                            <!-- AdminLTE App -->
                            <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

                            <!-- page script -->
                            <script type="text/javascript">
                                $(function () {
                                    startTime();
                                    $(".center").center();
                                    $(window).resize(function () {
                                        $(".center").center();
                                    });
                                });

                                /*  */
                                function startTime()
                                {
                                    var today = new Date();
                                    var h = today.getHours();
                                    var m = today.getMinutes();
                                    var s = today.getSeconds();

                                    // add a zero in front of numbers<10
                                    m = checkTime(m);
                                    s = checkTime(s);

                                    //Check for PM and AM
                                    var day_or_night = (h > 11) ? "PM" : "AM";

                                    //Convert to 12 hours system
                                    if (h > 12)
                                        h -= 12;

                                    //Add time to the headline and update every 500 milliseconds
                                    $('#time').html(h + ":" + m + ":" + s + " " + day_or_night);
                                    setTimeout(function () {
                                        startTime()
                                    }, 500);
                                }

                                function checkTime(i)
                                {
                                    if (i < 10)
                                    {
                                        i = "0" + i;
                                    }
                                    return i;
                                }

                                /* CENTER ELEMENTS IN THE SCREEN */
                                jQuery.fn.center = function () {
                                    this.css("position", "absolute");
                                    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
                                            $(window).scrollTop()) - 30 + "px");
                                    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
                                            $(window).scrollLeft()) + "px");
                                    return this;
                                }
                            </script>
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->