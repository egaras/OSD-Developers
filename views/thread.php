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
    <link href="../assets/admin/pages/css/news.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/pages/css/blog.css" rel="stylesheet" type="text/css"/>
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
<?php include 'header.php'; ?>
<!-- END HEADER -->
<div class="">
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
                        <i class="icon-list"></i>
                        <a href="home.php"><?=Section::getSectionNameById($forum->sectionid) ?></a>
                        <i class="fa fa-angle-right"></i>
                      </li>
                      <li>
                        <i class="icon-layers"></i>
                        <a href="forums.php?forumid=<?=$forum->id ?>"><?=$forum->name ?></a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                      <i class="icon-note"></i>
                      <a href="#"><?=$thread->title ?></a>
                  </li>
                  </ul>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PROFILE SIDEBAR -->
                        <div class="profile-sidebar" style="width:250px;">
                            <!-- PORTLET MAIN -->
                            <div class="portlet light profile-sidebar-portlet no_shadow">
                                <!-- SIDEBAR USERPIC -->
                                <div class="profile-userpic">
                                    <img src="../assets/profilePics/<?=$threadUser->avatar ?>" class="img-responsive" alt="">
                                </div>
                                <!-- END SIDEBAR USERPIC -->
                                <!-- SIDEBAR USER TITLE -->
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">
                                        <?=$threadUser->getFullname() ?>
                                    </div>
                                    <div class="profile-usertitle-job">
                                        <?=$threadUser->username ?>
                                        <?php if($threadUser->gender == 'm'):?>
                                        <i class="icon-symbol-male"></i>
                                        <?php else: ?>
                                        <i class="icon-symbol-female"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="profile-usertitle-job">
                                        <?=$thread->postdate ?>
                                    </div>
                                </div>
                                <!-- END SIDEBAR USER TITLE -->

                            </div>
                            <!-- END PORTLET MAIN -->

                        </div>
                        <!-- END BEGIN PROFILE SIDEBAR -->
                        <!-- BEGIN PROFILE CONTENT -->
                        <div class="profile-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light grey-l">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption caption-md">
                                                <i class="icon-globe theme-font hide"></i>
                                                <span class="caption-subject font-blue-madison bold uppercase"><?=$thread->title?></span>
                                            </div>

                                        </div>
                                        <div class="portlet-body">
                                                <p><?=htmlspecialchars_decode($thread->content) ?></p>
                                                <hr size="40">
                                                <p><?=$threadUser->signature ?></p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!--comments-->
                            <div class="col-md-12 news-page blog-page">
                                <div class="row">
                                    <div class="col-md-12 blog-tag-data">
                                        <h3>REPLIES</h3>
                                        <?php foreach($replies as $reply): ?>
                                          <hr>
                                        <div class="media">
                                            <a href="javascript:;" class="pull-left">
                                                <img alt="" src="../assets/profilePics/<?=$reply->avatar ?>" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><?=$reply->userFullname ?> <span>
                                                        <?=$reply->replydate ?>
                                                        </span>
                                                </h4>
                                                <div class="row">
                                                  <div class="col-md-10">
                                                    <p>
                                                        <?=$reply->content ?>
                                                    </p>
                                                </div>
                                                <?php if(isLoggedIn() && ($reply->userid == $user->id || isAdmin())): ?>
                                                <div class="col-md-2 ">
                                                    <a href="javascript:;" class="btn btn-circle btn-sm btn-primary">
                                                    <i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:;" class="btn btn-circle btn-sm btn-danger">
                                                    <i class="fa fa-remove"></i></a>
                                                </div>
                                              <?php endif; ?>
                                              </div>
                                            </div>
                                        </div>
                                      <?php endforeach; ?>
                                        <!--end media-->
                                        <hr>
                                        <?php if(isLoggedIn()): ?>
                                        <div class="post-comment">
                                            <h3>Leave a reply</h3>
                                            <form role="form" action="#" id="reply-form">
                                                <div class="form-group">
                                                    <textarea class="col-md-10 form-control" rows="3" name="replycontent"></textarea>
                                                </div>
                                                <input type="hidden" name="action" value="addReply">
                                                <input type="hidden" name="threadid" value="<?=$thread->id ?>">
                                                <button class="margin-top-20 btn blue" id="submitreply" type="submit">Reply</button>
                                            </form>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!--end comments-->

                        </div>
                        <!-- END PROFILE CONTENT -->
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
$("#submitreply").on("click",function(e){
  e.preventDefault();
  $.ajax({
      type: 'POST',
      cache: false,
      url: '../controllers/osdapi.php',
      data:$('#reply-form').serialize(),
      success: function(data){
          var res = JSON.parse(data);
          console.log(res);
          if(res.success){
              window.location.reload();
              console.log("success");//window.location = "index.php";
          }else{
              console.log("inside else");
              //$('.login-form').validate().showErrors(res.errors);
            }
      }
  });
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
