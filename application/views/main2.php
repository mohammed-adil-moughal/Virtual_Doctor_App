<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    <link rel="icon" href="http://demo.neontheme.com/assets/images/favicon.ico">
    <title>E-Daktari</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css" id="style-resource-8">
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
	<!--[if lt IE 9]><script src="<?php echo base_url(); ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <!-- TS1458137924: Neon - Responsive Admin Template created by Laborator -->
</head>

<body class="page-body" data-url="<?php echo base_url(); ?>">
    <!-- TS14581379245363: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <div class="page-container">
        <!-- TS145813792417226: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        <div class="sidebar-menu">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
                    <div class="logo">
                        <a href="http://demo.neontheme.com/dashboard/main/"> <img src="<?php echo base_url(); ?>assets/images/logo@2x.png" width="120" alt="" /> </a>
                    </div>
                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon">
                            <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition --><i class="entypo-menu"></i> </a>
                    </div>
                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation">
                            <!-- add class "with-animation" to support animation --><i class="entypo-menu"></i> </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                	<li> 
                		<a href="http://demo.neontheme.com/frontend/main/" target="_blank"><i class="entypo-home"></i><span class="title">Home</span></a> 
                	</li>
                	<li> 
                		<a href="http://demo.neontheme.com/frontend/main/" target="_blank"><i class="entypo-heart"></i><span class="title">Patients</span></a> 
                	</li>
                	<li> 
                		<a href="http://demo.neontheme.com/frontend/main/" target="_blank"><i class="entypo-plus-squared"></i><span class="title">Doctors</span></a> 
                	</li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <!-- TS145813792414790: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
            <div class="row">
                <!-- Profile Info and Notifications -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <ul class="user-info pull-left pull-none-xsm">
                        <!-- Profile Info -->
                        <li class="profile-info dropdown">
                            <!-- add class "pull-right" if you want to place this from right -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url(); ?>assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" /> Moses Kahunyo
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Reverse Caret -->
                                <li class="caret"></li>
                                <!-- Profile sub-links -->
                                <li>
                                    <a href="http://demo.neontheme.com/extra/timeline/"> <i class="entypo-user"></i> Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="http://demo.neontheme.com/mailbox/main/"> <i class="entypo-mail"></i> Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="http://demo.neontheme.com/extra/calendar/"> <i class="entypo-calendar"></i> Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="entypo-clipboard"></i> Tasks
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="user-info pull-left pull-right-xs pull-none-xsm">
                        <!-- Raw Notifications -->
                        <li class="notifications dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-attention"></i> <span class="badge badge-info">6</span> </a>
                            <ul class="dropdown-menu">
                                <!-- TS145813792413180: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
                                <li class="top">
                                    <p class="small"> <a href="#" class="pull-right">Mark all Read</a> You have <strong>3</strong> new notifications.
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller">
                                        <li class="unread notification-success">
                                            <a href="#"> <i class="entypo-user-add pull-right"></i> <span class="line"> <strong>New user registered</strong> </span> <span class="line small">
												30 seconds ago
												</span> </a>
                                        </li>
                                        <li class="unread notification-secondary">
                                            <a href="#"> <i class="entypo-heart pull-right"></i> <span class="line"> <strong>Someone special liked this</strong> </span> <span class="line small">
												2 minutes ago
												</span> </a>
                                        </li>
                                        <li class="notification-primary">
                                            <a href="#"> <i class="entypo-user pull-right"></i> <span class="line"> <strong>Privacy settings have been changed</strong> </span> <span class="line small">
												3 hours ago
												</span> </a>
                                        </li>
                                        <li class="notification-danger">
                                            <a href="#"> <i class="entypo-cancel-circled pull-right"></i> <span class="line">
												John cancelled the event
												</span> <span class="line small">
												9 hours ago
												</span> </a>
                                        </li>
                                        <li class="notification-info">
                                            <a href="#"> <i class="entypo-info pull-right"></i> <span class="line">
												The server is status is stable
												</span> <span class="line small">
												yesterday at 10:30am
												</span> </a>
                                        </li>
                                        <li class="notification-warning">
                                            <a href="#"> <i class="entypo-rss pull-right"></i> <span class="line">
												New comments waiting approval
												</span> <span class="line small">
												last week
												</span> </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external"> <a href="#">View all notifications</a> </li>
                            </ul>
                        </li>
                        <!-- Message Notifications -->
                        <li class="notifications dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-mail"></i> <span class="badge badge-secondary">10</span> </a>
                            <ul class="dropdown-menu">
                                <!-- TS14581379242412: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
                                <li>
                                    <form class="top-dropdown-search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search anything..." name="s" /> </div>
                                    </form>
                                    <ul class="dropdown-menu-list scroller">
                                        <li class="active">
                                            <a href="#"> <span class="image pull-right"> <img src="<?php echo base_url(); ?>assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle" /> </span> <span class="line"> <strong>Luc Chartier</strong>
- yesterday
</span> <span class="line desc small">
This ain’t our first item, it is the best of the rest.
</span> </a>
                                        </li>
                                        <li class="active">
                                            <a href="#"> <span class="image pull-right"> <img src="<?php echo base_url(); ?>assets/images/thumb-2@2x.png" width="44" alt="" class="img-circle" /> </span> <span class="line"> <strong>Salma Nyberg</strong>
- 2 days ago
</span> <span class="line desc small">
Oh he decisively impression attachment friendship so if everything. 
</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="image pull-right"> <img src="<?php echo base_url(); ?>assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" /> </span> <span class="line">
Hayden Cartwright
- a week ago
</span> <span class="line desc small">
Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="image pull-right"> <img src="<?php echo base_url(); ?>assets/images/thumb-4@2x.png" width="44" alt="" class="img-circle" /> </span> <span class="line">
Sandra Eberhardt
- 16 days ago
</span> <span class="line desc small">
On so attention necessary at by provision otherwise existence direction.
</span> </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external"> <a href="http://demo.neontheme.com/mailbox/main/">All Messages</a> </li>
                            </ul>
                        </li>
                        <!-- Task Notifications -->
                        <li class="notifications dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-list"></i> <span class="badge badge-warning">1</span> </a>
                            <ul class="dropdown-menu">
                                <!-- TS14581379249059: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
                                <li class="top">
                                    <p>You have 6 pending tasks</p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller">
                                        <li>
                                            <a href="#"> <span class="task"> <span class="desc">Procurement</span> <span class="percent">27%</span> </span> <span class="progress"> <span style="width: 27%;" class="progress-bar progress-bar-success"> <span class="sr-only">27% Complete</span> </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="task"> <span class="desc">App Development</span> <span class="percent">83%</span> </span> <span class="progress progress-striped"> <span style="width: 83%;" class="progress-bar progress-bar-danger"> <span class="sr-only">83% Complete</span> </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="task"> <span class="desc">HTML Slicing</span> <span class="percent">91%</span> </span> <span class="progress"> <span style="width: 91%;" class="progress-bar progress-bar-success"> <span class="sr-only">91% Complete</span> </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="task"> <span class="desc">Database Repair</span> <span class="percent">12%</span> </span> <span class="progress progress-striped"> <span style="width: 12%;" class="progress-bar progress-bar-warning"> <span class="sr-only">12% Complete</span> </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="task"> <span class="desc">Backup Create Progress</span> <span class="percent">54%</span> </span> <span class="progress progress-striped"> <span style="width: 54%;" class="progress-bar progress-bar-info"> <span class="sr-only">54% Complete</span> </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="task"> <span class="desc">Upgrade Progress</span> <span class="percent">17%</span> </span> <span class="progress progress-striped"> <span style="width: 17%;" class="progress-bar progress-bar-important"> <span class="sr-only">17% Complete</span> </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external"> <a href="#">See all tasks</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                    <ul class="list-inline links-list pull-right">
                        <li>
                            <a href="#" data-toggle="chat" data-collapse-sidebar="1"> <i class="entypo-chat"></i> Chat
                                <span class="badge badge-success chat-notifications-badge is-hidden">0</span> </a>
                        </li>
                        <li class="sep"></li>
                        <li> <a href="http://demo.neontheme.com/extra/login/">
Log Out <i class="entypo-logout right"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <hr />
            <!-- TS14581379244889: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
            <ol class="breadcrumb bc-3">
                <li> <a href="http://demo.neontheme.com/dashboard/main/"><i class="fa-home"></i>Home</a> </li>
                <li> <a href="http://demo.neontheme.com/tables/main/">Tables</a> </li>
                <li class="active"> <strong>Data Tables</strong> </li>
            </ol>
            <h2>Data Tables</h2>
            <br />
            <script type="text/javascript">
            /*jQuery(document).ready(function($) {
                var $table1 = jQuery('#table-1');
                // Initialize DataTable
                $table1.DataTable({
                    "aLengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    "bStateSave": true
                });
                // Initalize Select Dropdown after DataTables is created
                $table1.closest('.dataTables_wrapper').find('select').select2({
                    minimumResultsForSearch: -1
                });
            });*/
            </script>
            <table class="table table-bordered datatable" id="table-1">
                <thead>
                    <tr>
                        <th data-hide="phone">Rendering engine</th>
                        <th>Browser</th>
                        <th data-hide="phone">Platform(s)</th>
                        <th data-hide="phone,tablet">Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="odd gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="odd gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td class="center">7</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td class="center">1.9</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.1</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.2</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.3</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.4</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.5</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.6</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td class="center">125.5</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td class="center">312.8</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td class="center">419.3</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td class="center">522.1</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td class="center">420</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td class="center">420.1</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td class="center">413</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td class="center">8.5</td>
                        <td class="center">C/A<sup>1</sup> </td>
                    </tr>
                    <tr class="gradeC">
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td class="center">3.1</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td class="center">3.3</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td class="center">3.5</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeX">
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td class="center">1</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td class="center">1</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeX">
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeX">
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeX">
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeC">
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeC">
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeU">
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center">-</td>
                        <td class="center">U</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
            </table>
            <!-- TS14581379243518: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
            <!-- Footer -->
            <footer class="main">
                <div class="pull-right"> <a href="http://themeforest.net/item/neon-bootstrap-admin-theme/6434477?ref=Laborator" target="_blank"><strong>Purchase this theme for $24</strong></a> </div>
                &copy; 2016 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a> </footer>
        </div>
        <!-- TS14581379246081: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
            <div class="chat-inner">
                <h2 class="chat-header"> <a href="#" class="chat-close"><i class="entypo-cancel"></i></a> <i class="entypo-users"></i>
Chat
<span class="badge badge-success is-hidden">0</span> </h2>
                <div class="chat-group" id="group-1"> <strong>Favorites</strong> <a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a> <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a> <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a> <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a> <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a> </div>
                <div class="chat-group" id="group-2"> <strong>Work</strong> <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a> <a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a> <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a> </div>
                <div class="chat-group" id="group-3"> <strong>Social</strong> <a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a> <a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a> <a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a> <a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a> </div>
            </div>
            <!-- conversation template -->
            <div class="chat-conversation">
                <div class="conversation-header"> <a href="#" class="conversation-close"><i class="entypo-cancel"></i></a> <span class="user-status"></span> <span class="display-name"></span> <small></small> </div>
                <ul class="conversation-body"> </ul>
                <div class="chat-textarea">
                    <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
                </div>
            </div>
        </div>
        <!-- Chat Histories -->
        <ul class="chat-history" id="sample_history">
            <li> <span class="user">Art Ramadani</span>
                <p>Are you here?</p> <span class="time">09:00</span> </li>
            <li class="opponent"> <span class="user">Catherine J. Watkins</span>
                <p>This message is pre-queued.</p> <span class="time">09:25</span> </li>
            <li class="opponent"> <span class="user">Catherine J. Watkins</span>
                <p>Whohoo!</p> <span class="time">09:26</span> </li>
            <li class="opponent unread"> <span class="user">Catherine J. Watkins</span>
                <p>Do you like it?</p> <span class="time">09:27</span> </li>
        </ul>
        <!-- Chat Histories -->
        <ul class="chat-history" id="sample_history_2">
            <li class="opponent unread"> <span class="user">Daniel A. Pena</span>
                <p>I am going out.</p> <span class="time">08:21</span> </li>
            <li class="opponent unread"> <span class="user">Daniel A. Pena</span>
                <p>Call me when you see this message.</p> <span class="time">08:27</span> </li>
        </ul>
    </div>
    <!-- Imported styles on this page -->
    <script src="<?php echo base_url(); ?>assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js" id="script-resource-3"></script>
    <script src="<?php echo base_url(); ?>assets/js/joinable.js" id="script-resource-4"></script>
    <script src="<?php echo base_url(); ?>assets/js/resizeable.js" id="script-resource-5"></script>
    <script src="<?php echo base_url(); ?>assets/js/neon-api.js" id="script-resource-6"></script>
    <script src="<?php echo base_url(); ?>assets/js/cookies.min.js" id="script-resource-7"></script>
    <script src="<?php echo base_url(); ?>assets/js/neon-chat.js" id="script-resource-8"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="<?php echo base_url(); ?>assets/js/neon-custom.js" id="script-resource-9"></script>
    <!-- Demo Settings -->
    <script src="<?php echo base_url(); ?>assets/js/neon-demo.js" id="script-resource-10"></script>
    <script src="<?php echo base_url(); ?>assets/js/neon-skins.js" id="script-resource-11"></script>


    <script type="text/javascript">
    /*var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28991003-7']);
    _gaq.push(['_setDomainName', 'demo.neontheme.com']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();*/
    </script>
</body>

</html>