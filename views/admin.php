<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Portlets - General Portlets</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="../assets/admin/layout2/css/themes/dark.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
	<style>
		.fit{

			width:94px !important;

			height:14px!important;

		}
		.list{

			padding: 0px !important;
		}
		.forum,.trr{

            box-shadow: none;
            background-color: white !important;
            margin-bottom: 5px !important;

            border-bottom:1px solid #ECF0F1 !important;
		}
        tr.trr{
            margin: 5px !important;
        }
		.no_shadow{
			box-shadow: none;

		}

		.noo-margin{
			margin-bottom: 0px !important;
		}
        .nooo-margin{
            margin: 0px !important;
        }

        .padding8{
            padding: 8px !important;
        }
        padding_c{
            padding-bottom: 5px !important;
        }
		.no-bpadding{
			padding-bottom: 0px !important;
		}
        .grey-l{
            background-color: #f7f7f7 !important;
        }

        .page-content{
            background-color: white !important;
        }
        .white{
            color: white !important;
        }

        .fa-angle-down{
            color: white !important;
        }
        .whiteb{
            background-color: white;
        }
        .topiclist{
            margin: 10px;
            -webkit-padding-start:0px !important;
            padding: 0px ;

        }
        ul.topiclist li {
            display:inline-block !important;
            vertical-align: middle !important;
            line-height: normal !important;

        }

        li.col1{
            width: 45%;
            vertical-align: center;

        }
        li.col2{
            width: 15%;
            vertical-align: center !important;
            position: relative;
            top: 50% !important;


        }
        li.col3{


        }
        li.col4{
            width: 30%;
        }

        .thread{
            padding: 20px !important;
        }

        li span{
            display: inline-block !important;
        }
        li span p{
            margin-left:10px;
            margin-bottom: 0px;
            vertical-align: center;
        }
        .no-padding{
            padding: 0px !important;
            -webkit-padding-start:0px !important;
        }
        .lpad{
            padding-left: 10px !important;
        }
        .side-pading{
            padding-left: 10px !important;
            padding-right: 10px !important;
        }


	</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class=" page-md  page-container-bg-solid page-sidebar-closed-hide-logo  ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar ">
<!-- BEGIN HEADER INNER -->
<div class="page-header-inner">
	<!-- BEGIN LOGO -->
	<div class="page-logo ">
		<a href="index.html">
			<img src="../assets/admin/layout2/img/logo-default.png" alt="logo" class="logo-default fit"/>
		</a>

	</div>
	<!-- END LOGO -->
	<!-- BEGIN RESPONSIVE MENU TOGGLER -->

	<!-- END RESPONSIVE MENU TOGGLER -->
	<!-- BEGIN PAGE ACTIONS -->
	<!-- DOC: Remove "hide" class to enable the page header actions -->
	<div class="page-actions hide">


	</div>
	<!-- END PAGE ACTIONS -->
	<!-- BEGIN PAGE TOP -->
	<div class="page-top">
		<!-- BEGIN HEADER SEARCH BOX -->
		<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		<!-- END HEADER SEARCH BOX -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-default">
						7 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3><span class="bold">12 pending</span> notifications</h3>
							<a href="extra_profile.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">3 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">14 hrs</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">2 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">4 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">5 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="time">9 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Storage server failed. </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope-open"></i>
						<span class="badge badge-default">
						4 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3>You have <span class="bold">7 New</span> Messages</h3>
							<a href="page_inbox.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-default">
						3 </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3>You have <span class="bold">12 pending</span> tasks</h3>
							<a href="page_todo.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
										<span class="task">
										<span class="desc">New release v1.2 </span>
										<span class="percent">30%</span>
										</span>
										<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="task">
										<span class="desc">Application deployment</span>
										<span class="percent">65%</span>
										</span>
										<span class="progress">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile app release</span>
										<span class="percent">98%</span>
										</span>
										<span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="task">
										<span class="desc">Database migration</span>
										<span class="percent">10%</span>
										</span>
										<span class="progress">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="task">
										<span class="desc">Web server upgrade</span>
										<span class="percent">58%</span>
										</span>
										<span class="progress">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile development</span>
										<span class="percent">85%</span>
										</span>
										<span class="progress">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span class="task">
										<span class="desc">New UI release</span>
										<span class="percent">38%</span>
										</span>
										<span class="progress progress-striped">
										<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
										</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="../assets/admin/layout2/img/avatar3_small.jpg"/>
						<span class="username username-hide-on-mobile">
						Nick </span>
						<i class="fa fa-angle-down "></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="page_calendar.html">
								<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="inbox.html">
								<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
								<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
								<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="login.html">
								<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END PAGE TOP -->
</div>
<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="container">
	<div class="page-container page-full-width">
		<div class="page-content-wrapper">
			<div class="page-content">
				<h2 class="page-title">
					OS Forums <small>open source forum lab 42</small>
				</h2>
                <div class="page-bar grey-l">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="home.php">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">user</a>
                        </li>


                    </ul>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-sidebar" style="width:250px;">
                            <!-- PORTLET MAIN -->
                            <div class="portlet light profile-sidebar-portlet">
                                <!-- SIDEBAR USERPIC -->
                                <div class="profile-userpic">
                                    <img src="../../assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                                </div>
                                <!-- END SIDEBAR USERPIC -->
                                <!-- SIDEBAR USER TITLE -->
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">
                                        Marcus Doe
                                    </div>
                                    <div class="profile-usertitle-job">
                                        Developer
                                    </div>
                                </div>
                                <!-- END SIDEBAR USER TITLE -->
                                <!-- SIDEBAR MENU -->
                                <div class="profile-usermenu">
                                    <ul class="nav nav-tabs">
                                        <li >
                                            <a href="#1" data-toggle="tab">
                                                <i class="icon-users"></i>
                                                users adminstration</a>
                                        </li>
                                        <li class="active">
                                            <a href="#2" data-toggle="tab">
                                                <i class="fa fa-files-o"></i>
                                                  forums</a>
                                        </li>
                                        <li>
                                            <a href="#3">
                                                <i class="icon-home"></i>
                                                Overview </a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- END MENU -->
                            </div>
                            <!-- END PORTLET MAIN -->
                            <!-- PORTLET MAIN -->
                            <div class="portlet light">
                                <!-- STAT -->
                                <div class="row list-separated profile-stat">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="uppercase profile-stat-title">
                                            37
                                        </div>
                                        <div class="uppercase profile-stat-text">
                                            Projects
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="uppercase profile-stat-title">
                                            51
                                        </div>
                                        <div class="uppercase profile-stat-text">
                                            Tasks
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="uppercase profile-stat-title">
                                            61
                                        </div>
                                        <div class="uppercase profile-stat-text">
                                            Uploads
                                        </div>
                                    </div>
                                </div>
                                <!-- END STAT -->
                                <div>
                                    <h4 class="profile-desc-title">About Marcus Doe</h4>
                                    <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-globe"></i>
                                        <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-twitter"></i>
                                        <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-facebook"></i>
                                        <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET MAIN -->
                        </div>
                        <!-- END BEGIN PROFILE SIDEBAR -->
                        <!-- BEGIN PROFILE CONTENT -->
                        <div class="tab-content">
                            <div class=" tab-pane profile-content  row" id="1">
                                <div class="col-md-12">
                                    <div class="portlet light">
                                        <div class="portlet-title">
                                            <div class="caption font-purple-plum">

                                                <span class="caption-subject bold uppercase"> Users</span>
                                                <span class="caption-helper"></span>
                                            </div>
                                            <div class="actions">

                                                <a href="javascript:;" class="btn btn-circle red-sunglo btn-sm u-add">
                                                    <i class="fa fa-plus"></i> Add User</a>

                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-hover table-advance">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            First Name
                                                        </th>
                                                        <th>
                                                            Last Name
                                                        </th>
                                                        <th>
                                                            Username
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Mark
                                                        </td>
                                                        <td>
                                                            Otto
                                                        </td>
                                                        <td>
                                                            makr124
                                                        </td>
                                                        <td>
											<span class="label label-sm label-success">
											Approved </span>
                                                        </td>
                                                            <td>
                                                                <a href="javascript:;" class="btn default btn-xs green u-edit">
                                                                    <i class="fa fa-edit"></i> Edit </a>
                                                                <a href="javascript:;" class="btn default btn-xs red u-del">
                                                                    <i class="fa fa-remove"></i> Del </a>
                                                                <a href="javascript:;" class="btn default btn-xs purple u-status">
                                                                    </i> change status </a>
                                                            </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane profile-content active row" id="2">
                                <div class="col-md-12">
                                    <div class="portlet light">
                                        <div class="portlet-title">
                                            <div class="caption font-purple-plum">

                                                <span class="caption-subject bold uppercase"> Content</span>
                                                <span class="caption-helper"></span>
                                            </div>
                                            <div class="actions not-s-form">

                                                <a href="javascript:;" class="btn  blue btn-sm s-add">
                                                    <i class="fa fa-plus"></i> Add section</a>

                                            </div>
                                        </div>
                                        <div class="portlet-body">

                                            <div class="portlet box blue no_shadow not-s-form">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <!--i class="fa fa-gift"></i-->
                                                        <span class="caption-subject bold uppercase"> secttion 1</span>
                                                        <span class="caption-helper white">for new users</span>
                                                    </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="s-edit "><i class="fa fa-edit white"></i>
                                                        </a>
                                                        <a href="javascript:;" class="collapse">
                                                        </a>
                                                        <a href="javascript:;" class="fullscreen ">
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="portlet-body grey-l padding_c">
                                                    <a href="javascript:;" class="btn  blue btn-sm f-add pull-right margin-top-10 " >
                                                        <i class="fa fa-plus"></i> Add Forum</a><br><br><br>
                                                    <div class="portlet forum gren no-bpadding ">
                                                        <div class="portlet-title row side-pading">

                                                            <div class="">

                                                            <ul class="topiclist col-md-10">
                                                                <li class="col4">forum 1</li>
                                                                <li class="col4">views: 444</li>
                                                                <li >threds: 33</li>

                                                            </ul>
                                                            </div>

                                                            <div class="tools li-inline col-md-1">
                                                                <a href="javascript:;" class="f-edit"><i class="fa fa-edit"></i>
                                                                </a>
                                                                <a href="javascript:;" class="f-del"><i class="fa fa-remove"></i>
                                                                </a>

                                                                <a href="javascript:;" class="expand">
                                                                </a>

                                                            </div>

                                                        </div>
                                                        <div class="portlet-body list grey-light display-hide">

                                                            <a href="javascript:;" class="btn  blue btn-sm t-add pull-right margin-top-10 " >
                                                                <i class="fa fa-plus"></i> Add thread</a><br><br><br>

                                                            <div class=" no-padding" >
                                                                <div class="table-responsive  noo-margin">
                                                                    <table class="table table-hover table-striped table-light">
                                                                        <tbody >
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;">
                                                                                    theard 1 </a>
                                                                            </td>
                                                                            <td>
                                                                                <i class="fa fa-user"> by: user1</i>
                                                                            </td>
                                                                            <td>
                                                                                comments: 333<br>
                                                                                views:    444
                                                                            </td>
                                                                            <td>
                                                                                25/5/2017
                                                                            </td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn default btn-xs green t-edit">
                                                                                    <i class="fa fa-edit"></i> Edit </a>
                                                                                <a href="javascript:;" class="btn default btn-xs red t-del">
                                                                                    <i class="fa fa-remove"></i> Del </a>

                                                                            </td>
                                                                        </tr>



                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="s-form hidden">
                                                <h3 class="nooo-margin">ADD new section</h3><br><br>
                                                <form role="form" action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">Title
                                                        </label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">description
                                                        </label>
                                                        <textarea class="col-md-10 form-control" rows="12"></textarea>
                                                    </div>
                                                    <button class="margin-top-20 btn blue" type="submit">add section</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
						<!--/div>
					</div>
				</div-->

			</div>
		</div>
	</div>
</div>

<!-- BEGIN JAVASCRIPTS(Loadjavascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
///////mu script///////////////
$(".s-add").click(function () {
    $(".s-form").removeClass("hidden");
    $(".not-s-form").addClass("hidden");
})
$(".f-add").click(function () {
    $(".s-form").removeClass("hidden");
    $(".not-s-form").addClass("hidden");
})
$(".t-add").click(function () {
    $(".s-form").removeClass("hidden");
    $(".not-s-form").addClass("hidden");
})


</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
