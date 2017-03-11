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
<title>Metronic | Pages - User Account</title>
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
<style >
	.page-container{
		margin-top: 0px !important;
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
<body class="page-md page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed page-sidebar-closed-hide-logo">
	<!-- BEGIN HEADER -->
<?php include 'header.php'; ?>
	<!-- BEGIN CONTAINER -->
	<div class="">
		<div class="page-container page-full-width">
			<div class="page-content-wrapper">
			<div class="page-content">
				<div class="page-bar grey-l">
						<ul class="page-breadcrumb">
								<li>
										<i class="fa fa-home"></i>
										<a href="home.php">Home</a>
										<i class="fa fa-angle-right"></i>
									</li>
									<li>
										<i class="icon-user"></i>
										<a href="profileOverview.php">Profile</a>
										<i class="fa fa-angle-right"></i>
									</li>
									<li>
										<i class="fa fa-book"></i>
										<a href="profileOverview.php">Overview</a>
								</li>
						</ul>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN PROFILE SIDEBAR -->
						<div class="profile-sidebar" style="width:250px;">
							<!-- PORTLET MAIN -->
							<div class="portlet light profile-sidebar-portlet">
								<!-- SIDEBAR USERPIC -->
								<div class="profile-userpic">
									<img src="<?="../assets/profilePics/".$user->avatar?>" class="img-responsive" alt="">
								</div>
								<!-- END SIDEBAR USERPIC -->
								<!-- SIDEBAR USER TITLE -->
								<div class="profile-usertitle">
									<div class="profile-usertitle-name" id="fullname">
										 <?=$user->getFullname();?>
									</div>
									<div class="profile-usertitle-job" id="sig">
										 <?=$user->signature;?>
									</div>
								</div>
								<!-- END SIDEBAR USER TITLE -->
								<!-- SIDEBAR BUTTONS -->
								<!-- <div class="profile-userbuttons">
									<button type="button" class="btn btn-circle green-haze btn-sm">Follow</button>
									<button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
								</div> -->
								<!-- END SIDEBAR BUTTONS -->
								<!-- SIDEBAR MENU -->
								<div class="profile-usermenu">
									<ul class="nav">
										<li class="active">
											<a href="profileOverview.php">
											<i class="icon-home"></i>
											Overview </a>
										</li>
										<li >
											<a href="profile.php">
											<i class="icon-settings"></i>
											Account Settings </a>
										</li>
										<li>
											<a href="#">
											<i class="icon-check"></i>
											Threads </a>
										</li>
										<li>
											<a href="#">
											<i class="icon-info"></i>
											Help </a>
										</li>
									</ul>
								</div>
								<!-- END MENU -->
							</div>
							<!-- END PORTLET MAIN -->
							<!-- PORTLET MAIN -->
							<!-- <div class="portlet light"> -->
								<!-- STAT -->
								<!-- <div class="row list-separated profile-stat">
									<div class="col-md-4 col-sm-4 col-xs-6">
										<div class="uppercase profile-stat-title">
											 37
										</div>
										<div class="uppercase profile-stat-text">
											 Posts
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<div class="uppercase profile-stat-title">
											 51
										</div>
										<div class="uppercase profile-stat-text">
											 Replies
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<div class="uppercase profile-stat-title">
											 61
										</div>
										<div class="uppercase profile-stat-text">
											 Likes
										</div>
									</div>
								</div> -->
								<!-- END STAT -->
								<!-- <div>
									<h4 class="profile-desc-title">About:</h4>
									<span class="profile-desc-text"> new user </span> -->
									<!-- <div class="margin-top-20 profile-desc-link">
										<i class="fa fa-globe"></i>
										<a href=""></a>
									</div> -->
									<!-- <div class="margin-top-20 profile-desc-link">
										<i class="fa fa-twitter"></i>
										<a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
									</div>
									<div class="margin-top-20 profile-desc-link">
										<i class="fa fa-facebook"></i>
										<a href="http://www.facebook.com/keenthemes/">keenthemes</a>
									</div> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- END PORTLET MAIN -->
						</div>
						<!-- END BEGIN PROFILE SIDEBAR -->
						<!-- BEGIN PROFILE CONTENT -->
						<div class="profile-content">

							<div class="row">
								<div class="col-md-6">
                  <div class="portlet light">
                    <div class="portlet-title tabbable-line">
											<div class="caption caption-md">
												<i class="icon-globe theme-font hide"></i>
												<span class="caption-subject font-blue-madison bold uppercase">Profile Information</span>
											</div>
                    </div>
                    <div class="portlet-body">
                      	<h4 class="profile-desc-title">Full Name:</h4>
												<span class="profile-desc-text"> <?=$user->fname." ".$user->lname ?> </span>
												<h4 class="profile-desc-title">Username:</h4>
												<span class="profile-desc-text"> <?=$user->username ?> </span>
												<h4 class="profile-desc-title">Email:</h4>
												<i class="fa fa-globe"> </i>
												<span class="profile-desc-text"> <?=$user->email ?> </span>
												<h4 class="profile-desc-title">Gender:</h4>
												<span class="profile-desc-text"> <?php if($user->gender == "m") {echo 'Male';} else {echo 'Female';} ?> </span>
												<h4 class="profile-desc-title">Signature:</h4>
												<span class="profile-desc-text"> <?=$user->signature ?> </span>
												<h4 class="profile-desc-title">Registration Date:</h4>
												<span class="profile-desc-text"> <?=$user->regdate ?> </span>
                    </div>
                  </div>
								</div>
								<div class="col-md-6">
                  <div class="portlet light">
                    <div class="portlet-title tabbable-line">
											<div class="caption caption-md">
												<i class="icon-globe theme-font hide"></i>
												<span class="caption-subject font-blue-madison bold uppercase">Activity</span>
											</div>
                    </div>
                    <div class="portlet-body">
											<div class="row list-separated profile-stat">
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="uppercase profile-stat-title">
														 <h1><?=Thread::getThreadsByUserId($user->id) ?></h1>
													</div>
													<div class="uppercase large profile-stat-text">
														<i class="fa fa-envelope fa-3x"> </i><h3 class="bold">Threads</h3>
													</div>

												</div>
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="uppercase profile-stat-title">
														 <h1><?=Reply::getRepliesByUserId($user->id) ?></h1>
													</div>
													<div class="uppercase profile-stat-text">
														 <i class="fa fa-comment fa-3x"> </i><h3 class="bold">Replies</h3>
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="uppercase profile-stat-title">
														 <h1><?=0 ?></h1>
													</div>
													<div class="uppercase profile-stat-text">
														 <i class="fa fa-heart fa-3x"> </i><h3 class="bold">Likes</h3>
													</div>
												</div>
											</div>
                    </div>
                  </div>
								</div>
							</div>
						</div>
						<!-- END PROFILE CONTENT -->
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features\
Profile.init(); // init page demo
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
