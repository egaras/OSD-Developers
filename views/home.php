<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>OSD | Home</title>
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
<!-- BEGIN THEME STYLES -->
<link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../assets/admin/layout2/css/themes/dark.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
	<style>
		.list{

			padding: 0px !important;
		}
		.forum{
            box-shadow: none;
            background-color: white;
            margin-bottom: 5px;

            border-bottom:1px solid #ECF0F1 !important;
		}
		.no_shadow{
			box-shadow: none;
		}

		.noo-margin{
			margin-bottom: 0px !important;
		}
		.no-padding{
			padding: 0px !important;
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

        li.col4{
            width: 30%;
        }
        .side-pading{
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
        .ftitle{
            font-size: 18px;
            line-height: 18px;
        }
        .finfo{
            line-height: 13px;
            color: #9eacb4;
            font-size: 13px;
            font-weight: 400;
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
<!-- HEADER -->
<?php include 'header.php' ?>
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
                            <!--i class="fa fa-angle-right"></i-->
                        </li>

                    </ul>

                </div>
				<!--div class="portlet light ">
					<div class="row ">
						<div class="col-md-12">
					<!-- BEGIN Portlet PORTLET-->
                    <?php foreach($sections as $section): ?>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
							<div class="caption">
								<!--i class="fa fa-gift"></i-->
                                <span class="caption-subject bold uppercase"><?=$section->name?></span>
                                <span class="caption-helper white"><?=$section->desc?></span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="fullscreen "></a>
							</div>
						</div>
                        <div class="portlet-body grey-l padding_c">
                            <?php foreach($section->forums as $forum): ?>
							<div class="portlet forum gren no-bpadding ">

                                <!--div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>
                                        <a href="forums.php?forumid=<?=$forum->id ?>"><span class="caption-subject"><?=$forum->name?></span></a>
                                        <span style="display:inline-block; width: 600px;"></span>
                                        <span class="caption-helper">views:  <b><?=$forum->views?></b></span>
                                        <span style="display:inline-block; width: 100px;"></span>
                                        <span class="caption-helper">threads:  <b><?=count($forum->threads)?></b></span>
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="expand"></a>
                                    </div>
                                </div-->
								<div class="portlet-title row side-pading">
                                    <div class="">

                                        <ul class="topiclist col-md-10">
                                            <li class="col4">
                                                <i class="fa fa-circle-o font-grey">  </i>
                                                 <a href="forums.php?forumid=<?=$forum->id ?>"><span class="ftitle font-blue"><?=$forum->name?></span></a>
                                            </li>
                                            <li class="col4 finfo" ><i class="fa fa-eye"></i>  <b><?=$forum->views?></b></li>
                                            <li class="finfo"><i class="fa fa-list-alt"></i>  <b><?=$forum->threadsNum?></b></li>

                                        </ul>
                                    </div>
									<div class="tools col-md-1">
										<a href="javascript:;" class="collapse pull-right margin-right-10"></a>

									</div>
								</div>
								<div class="portlet-body list grey-light ">
									<div class=" no-padding" >
										<div class="table-responsive  noo-margin">
											<table class="table table-hover table-striped table-light">
												<tbody >
                                                    <?php foreach($forum->threads as $thread):?>
												    <tr>
                                                        <td>
                                                            <a href="thread.php?threadid=<?=$thread->id ?>"><?=$thread->title?></a>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-user"> by: <?=$thread->username?></i>
                                                        </td>
                                                        <td><i class="fa fa-comments"></i> <?=$thread->replies?> <i class="fa fa-eye"></i> <?=$thread->views?></td>
                                                        <td><?=$thread->postdate?></td>
												    </tr>
                                                    <?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
                            <?php endforeach; ?>
						</div>
					</div>
                    <?php endforeach; ?>
						<!--/div>
					</div>
				</div-->

			</div>
		</div>
	</div>
</div>
<div id="spinner-bg">
    <div id="spinner">
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
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
    $('#spinner-bg').hide();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
