<?php 
$active_menu=explode('/',$pages);
$active_menu=$active_menu[1];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo ucwords($active_menu) ?> - Backend</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/backend') ?>/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/backend') ?>/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/backend') ?>/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/backend') ?>/images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/styles/jquery.news-ticker.css">
</head>
<body>
    <div>
        
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="<?php echo site_url('/') ?>" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">E-TaskList</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Selamat datang di SIMPENAN, Sistem Informasi Manajemen Pemesanan</li>
                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
                    </ul>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo base_url('assets/backend') ?>/images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Baskoro Eka</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="<?php echo site_url('adminweb/logout') ?>"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    
                    <li class="<?php if($active_menu=='dashboard')echo 'active' ?>"><a href="<?php echo site_url('backend/dashboard') ?>"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Dashboard</span></a>
                    </li>
                    
                    <?php if($this->session->userdata('hak_akses')==1){?>
                        <li class="<?php if($active_menu=='produk') echo 'active' ?>"><a href="<?php echo site_url('backend/produk') ?>"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">Master Produk</span></a>
                        </li>
                    
                        <li class="<?php if($active_menu=='pegawai')echo 'active' ?>"><a href="<?php echo site_url('backend/pegawai') ?>"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">Master Pegawai</span></a>
                        </li>
                    
                        <li class="<?php if($active_menu=='customer')echo 'active' ?>"><a href="<?php echo site_url('backend/customer') ?>"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">Master Customer</span></a>
                        </li>
                        
                        <li class="<?php if($active_menu=='order')echo 'active' ?>"><a href="<?php echo site_url('backend/order') ?>"><i class="fa fa-shopping-cart fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title"> Order</span></a>
                        </li>
                        
                        <li class="<?php if($active_menu=='konfirmasi')echo 'active' ?>"><a href="<?php echo site_url('backend/konfirmasi') ?>"><i class="fa fa-calendar fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title"> Konfirmasi</span></a>
                        </li>
                        
                        <li><a href=""><i class="fa fa-book fa-fw">
                            <div class="icon-bg bg-violet"></div>
                        </i><span class="menu-title">Report</span></a>
                        </li>
                    <?php } ?>
                    
                    <?php if($this->session->userdata('hak_akses')==0){?>
                        <li class="<?php if($active_menu=='list_kerja')echo 'active' ?>"><a href="<?php echo site_url('backend/list_kerja') ?>"><i class="fa fa-th fa-fw">
                            <div class="icon-bg bg-violet"></div>
                        </i><span class="menu-title">Task List</span></a>
                        </li>   
                        
                         
                    <?php } ?>
                    
                    <?php if($this->session->userdata('hak_akses')==2){?>
                        
                    <li class="<?php if($active_menu=='produk') echo 'active' ?>"><a href="<?php echo site_url('backend/produk') ?>"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">Master Produk</span></a>
                        </li>
                    
                        <li class="<?php if($active_menu=='pegawai')echo 'active' ?>"><a href="<?php echo site_url('backend/pegawai') ?>"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">Master Pegawai</span></a>
                        </li>
                    
                        <li class="<?php if($active_menu=='customer')echo 'active' ?>"><a href="<?php echo site_url('backend/customer') ?>"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">Master Customer</span></a>
                        </li>
                        
                        <li class="<?php if($active_menu=='users')echo 'active' ?>"><a href="<?php echo site_url('backend/users') ?>"><i class="fa fa-users fa-fw">
                            <div class="icon-bg bg-violet"></div>
                        </i><span class="menu-title">Reset Password</span></a>
                        </li>
                    <?php } ?>
                    
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
                <div class="chat-inner">
                    <h2 class="chat-header">
                        <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                    <div id="group-1" class="chat-group">
                        <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                            <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                                <span class="badge badge-info is-hidden">0</span></a></div>
                    <div id="group-2" class="chat-group">
                        <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                            Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                        Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                    <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                        href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                        <span class="badge badge-info is-hidden">0</span></a></div>
                </div>
                <div id="chat-box" style="top: 400px">
                    <div class="chat-box-header">
                        <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class="chat-content">
                        <ul class="chat-box-body">
                            <li>
                                <p>
                                    <img src="images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class="odd">
                                <p>
                                    <img src="images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-textarea">
                        <input placeholder="Type your message" class="form-control" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            <?php echo ucwords($active_menu) ?></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#"><?php echo ucwords($active_menu) ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active"><?php echo ucwords($active_menu) ?></li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <?php if(isset($pages)){
                            $this->load->view($pages);
                        }else{
                            echo "PERINGATAN: Halaman ini belum di set di controller, set halaman pada controller dengan cara , array data pages";
                        } ?>                        
                    </div>
                </div>
                <!--END CONTENT-->
                
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        2014 © E-TaskList Backend , loaded {elapsed_time} second</div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery-ui.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/html5shiv.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/respond.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.cookie.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/icheck.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/custom.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.news-ticker.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.menu.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/pace.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/holder.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/responsive-tabs.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/zabuto_calendar.min.js"></script>
    <script src="<?php echo base_url('assets/backend/') ?>/script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="<?php echo base_url('assets/backend') ?>script/highcharts.js"></script>
    <script src="<?php echo base_url('assets/backend') ?>script/data.js"></script>
    <script src="<?php echo base_url('assets/backend') ?>script/drilldown.js"></script>
    <script src="<?php echo base_url('assets/backend') ?>script/exporting.js"></script>
    <script src="<?php echo base_url('assets/backend') ?>script/highcharts-more.js"></script>
    <script src="<?php echo base_url('assets/backend') ?>script/charts-highchart-pie.js"></script>
    <script src="<?php echo base_url('assets/backend') ?>script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="<?php echo base_url('assets/backend') ?>script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
