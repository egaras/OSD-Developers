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
<title>OSD | <?=$user->getFullname();?></title>
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

										<i class="icon-user"></i>
										<a href="profileOverview.php">Profile</a>
										<i class="fa fa-angle-right"></i>

										<i class="icon-settings"></i>
										<a href="profile.php">Settings</a>
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
										<li>
											<a href="profileOverview.php">
											<i class="icon-home"></i>
											Overview </a>
										</li>
										<li class="active">
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
								<div class="col-md-12">
									<div class="portlet light">
										<div class="portlet-title tabbable-line">
											<div class="caption caption-md">
												<i class="icon-globe theme-font hide"></i>
												<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
											</div>
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
												</li>
												<li>
													<a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
												</li>
												<li>
													<a href="#tab_1_3" data-toggle="tab">Change Password</a>
												</li>
												<!-- <li>
													<a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
												</li> -->
											</ul>
										</div>
										<div class="portlet-body">
											<div class="tab-content">
												<!-- PERSONAL INFO TAB -->
												<div class="tab-pane active" id="tab_1_1">
													<form role="form" action="#" id="edit-form">
														<div class="form-group">
															<label class="control-label">First Name</label>
															<input type="text" placeholder="John" class="form-control" name="fname" value="<?=$user->fname?>"/>
														</div>
														<div class="form-group">
															<label class="control-label">Last Name</label>
															<input type="text" placeholder="Doe" class="form-control" name="lname" value="<?=$user->lname?>"/>
														</div>
														<div class="form-group">
															<label class="control-label">Username</label>
															<input type="text" placeholder="JohnDoe" class="form-control" name="username" value="<?=$user->username?>" required/>
														</div>
														<div class="form-group">
															<label class="control-label">Email</label>
															<input type="email" placeholder="example@example.com" class="form-control" name="email" value="<?=$user->email?>" required/>
														</div>
														<div class="form-group">
															<label class="control-label">Gender: </label>
															<label for="" class="radio radio-inline margin-top-20 margin-bottom-20">
									                <input type="radio" name="gender" value="m" <?php if($user->gender == 'm') echo 'checked'; ?>/> Male
									            </label>
									            <label for="" class="radio radio-inline margin-top-20 margin-bottom-20">
									                <input type="radio" name="gender" value="f" <?php if($user->gender == 'f') echo 'checked'; ?>/> Female
									            </label>
														</div>
														<div class="form-group">
															<label class="control-label">Signature</label>
															<input type="text" placeholder="Web Developer" class="form-control" name="signature" value="<?=$user->signature?>"/>
														</div>
														<!-- <div class="form-group">
															<label class="control-label">About</label>
															<textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
														</div>-->
														<div class="form-group">
														</div>
														<div class="margiv-top-10">
															<input type="submit" name="edit" id="update" value="Save Changes" class="btn green-haze"/>
															<input type="hidden" name='action' value='edit'/>
															<a href="profileOverview.php" class="btn default">
															Cancel </a>
														</div>
														<br/>
														<div class="for-group">
															<label for="" id="msg" class="hide"></label>
														</div>
													</form>
												</div>
												<!-- END PERSONAL INFO TAB -->
												<!-- CHANGE AVATAR TAB -->
												<div class="tab-pane" id="tab_1_2">
													<form action="../controllers/upload.php" method="post" role="form" enctype="multipart/form-data">
														<div class="form-group">
															<div class="fileinput fileinput-new" data-provides="fileinput">
																<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																	<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
																</div>
																<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
																</div>
																<div>
																	<span class="btn default btn-file">
																	<span class="fileinput-new">
																	Select image </span>
																	<span class="fileinput-exists">
																	Change </span>
																	<input type="file" name="myImage">
																	</span>
																	<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
																	Remove </a>
																</div>
															</div>
															<div class="clearfix margin-top-10">
																<span class="label label-danger">NOTE! </span>
																<span>Supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
															</div>
														</div>
														<div class="margin-top-10">
															<input type="submit" value="Submit" class="btn green-haze"/>

															<a href="profileOverview.php" class="btn default">
															Cancel </a>
														</div>
													</form>
												</div>
												<!-- END CHANGE AVATAR TAB -->
												<!-- CHANGE PASSWORD TAB -->
												<div class="tab-pane" id="tab_1_3">
													<form action="#" id="password-form">
														<div class="form-group">
															<label class="control-label">Current Password</label>
															<input type="password" id="old" name="old" class="form-control"/>
														</div>
														<div class="form-group">
															<label class="control-label">New Password</label>
															<input type="password" id="new" name="new" class="form-control"/>
														</div>
														<div class="form-group">
															<label class="control-label">Re-type New Password</label>
															<input type="password" id="renew" name="renew" class="form-control"/>
														</div>
														<div class="margin-top-10">
															<input type="submit" name="submit" id="passwordSubmit" value="Change Password" class="btn green-haze"/>
															<input type="hidden" name='action' value='passwordChange'/>
															<a href="profileOverview.php" class="btn default">
															Cancel </a>
														</div>
														<br/>
														<div class="for-group">
															<label for="" id="pswmsg" class="hide"></label>
														</div>
													</form>
												</div>
												<!-- END CHANGE PASSWORD TAB -->
												<!-- PRIVACY SETTINGS TAB -->
												<div class="tab-pane" id="tab_1_4">
													<form action="#">
														<table class="table table-light table-hover">
														<tr>
															<td>
																 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
															</td>
															<td>
																<label class="uniform-inline">
																<input type="radio" name="optionsRadios1" value="option1"/>
																Yes </label>
																<label class="uniform-inline">
																<input type="radio" name="optionsRadios1" value="option2" checked/>
																No </label>
															</td>
														</tr>
														<tr>
															<td>
																 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
															</td>
															<td>
																<label class="uniform-inline">
																<input type="checkbox" value=""/> Yes </label>
															</td>
														</tr>
														<tr>
															<td>
																 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
															</td>
															<td>
																<label class="uniform-inline">
																<input type="checkbox" value=""/> Yes </label>
															</td>
														</tr>
														<tr>
															<td>
																 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
															</td>
															<td>
																<label class="uniform-inline">
																<input type="checkbox" value=""/> Yes </label>
															</td>
														</tr>
														</table>
														<!--end profile-settings-->
														<div class="margin-top-10">
															<a href="javascript:;" class="btn green-haze">
															Save Changes </a>
															<a href="javascript:;" class="btn default">
															Cancel </a>
														</div>
													</form>
												</div>
												<!-- END PRIVACY SETTINGS TAB -->
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
//submit (save changes) button
$("#edit-form").submit(function(e){

	$.ajax({
			type: 'post',
			cache: false,
			url: '../controllers/editProfile.php',
			data: $("#edit-form").serialize(),
			success: function(data){
					console.log(data);
					var res = JSON.parse(data);
					console.log(res);
					if(res.valid){
							console.log("valid");
							$("#fullname").text(res.data.fname + " " + res.data.lname);
							$("#sig").text(res.data.signature);
							$("#username-header").text(res.data.username);
							$("#msg").text(" * Saved");
							$("#msg").attr("class","");
						}
					else{
						$("#msg").text(" * " + res.errors[0]);
						$("#msg").attr("class","");
							console.log("not valid");
							//$('.login-form').validate().showErrors(res.errors);
						}
				}
	});
	e.preventDefault();
});
$("#password-form").submit(function(e){

	$.ajax({
			type: 'post',
			cache: false,
			url: '../controllers/editProfile.php',
			data: $("#password-form").serialize(),
			success: function(data){
					console.log(data);
					var res = JSON.parse(data);
					console.log(res);
					if(res.valid){
							$("#old").val("");$("#new").val("");$("#renew").val("");
							console.log("valid");
							$("#pswmsg").text(" * Password Changed Successfully");
							$("#pswmsg").attr("class","");
						}
					else{
						$("#pswmsg").text(" * " + res.errors[0]);
						$("#pswmsg").attr("class","");
							console.log("not valid");
						}
				}
	});
	e.preventDefault();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
