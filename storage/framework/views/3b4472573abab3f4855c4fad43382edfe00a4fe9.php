<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(isset($title) ? $title : "Amar Repowering Admin Panel"); ?></title>

    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('public/admin/images/favicon.png')); ?>"/>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('public/admin/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('public/admin/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('public/admin/css/nprogress.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('public/admin/css/green.css')); ?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('public/admin/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('public/admin/css/jqvmap.min.css')); ?>" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('public/admin/css/custom.min.css')); ?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo e(asset('public/admin/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/admin/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/admin/css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/admin/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/admin/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Amar Repowering Admin!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php echo e(asset('public/admin/images/img.jpg')); ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a hef="#"><i class="fa fa-home"></i> Home </a></li>
                                <li><a><i class="fa fa-edit"></i> Parts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="<?php echo e(route('parts.index')); ?>"><i class="fa fa-user"></i> Parts </a></li>
								
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('customers.index')); ?>"><i class="fa fa-user"></i> Customers </a></li>
								
                               
                                <li><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-users"></i> Users </a></li>
								
								 <li><a href="<?php echo e(route('invoice.index')); ?>"><i class="fa fa-users"></i> Invoice </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo e(asset('public/admin/images/img.jpg')); ?>" alt="">Rodrick K
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="#"> Profile</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <?php echo $__env->make('templates.admin.partials.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('public/admin/js/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('public/admin/js/bootstrap.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('public/admin/js/fastclick.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('public/admin/js/nprogress.js')); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo e(asset('public/admin/js/icheck.min.js')); ?>"></script>
    <!-- Datatables -->
    <script src="<?php echo e(asset('public/admin/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/dataTables.fixedHeader.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/responsive.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/datatables.scroller.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/vfs_fonts.js')); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('public/admin/js/custom.min.js')); ?>"></script>

    <!-- Datatables -->
    <script>
        $(document).ready(function() {
            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [
                        {
                            extend: "copy",
                            className: "btn-sm"
                        },
                        {
                            extend: "csv",
                            className: "btn-sm"
                        },
                        {
                            extend: "excel",
                            className: "btn-sm"
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn-sm"
                        },
                        {
                            extend: "print",
                            className: "btn-sm"
                        },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable();

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable-responsive').DataTable();

            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            var $datatable = $('#datatable-checkbox');

            $datatable.dataTable({
                'order': [[ 1, 'asc' ]],
                'columnDefs': [
                { orderable: false, targets: [0] }
                ]
            });
            $datatable.on('draw.dt', function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });

            TableManageButtons.init();
        });
    </script>
    <!-- /Datatables -->
</body>
</html>