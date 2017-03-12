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
<title>OSD | <?=$forum->name?></title>
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
            padding-left: 15px !important;
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
<?php include 'header.php' ?>
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
													<a href="#"><?=$forum->name ?></a>
											</li>
                    </ul>

                </div>
                <button class="btn blue pull-right add-thread " forum-id="<?=$forum->id ?>" >
                     <i class="fa fa-plus"></i>ADD New Thread
                </button>
                <br><br><br>

                <div class="portlet box blue no_shadow" forum_id="<?=$forum->id ?>">

                    <div class="portlet-title">
                        <ul class="topiclist">
                            <li class="col1 bold font-lg"><?=$forum->name ?></li>
                        </ul>
                    </div>
                    <div class="portlet-body grey-l padding_c">
											<?php foreach ($threads as $thread): ?>
													<?php if($thread->pinned): ?>
														<ul class="topiclist thread no-padding forum lpad " onclick="Demo" thread_id="<?=$thread->id ?>">
																<li class="col1">
																		<div class="caption">
																				<i class="icon-note"> </i> <span class="label label-sm label-danger"><i class="fa fa-thumb-tack"></i> pinned </span> <?php if($thread->locked): ?> <span class="label label-sm label-default"><i class="fa fa-lock"></i> locked </span><?php endif;?> <a href="thread.php?threadid=<?= $thread->id ?>"><?= $thread->title ?></a>
																		</div>
																		<!-- <div class="caption-helper">descerption mfkefkremfkmfrks</div> -->
																</li>
																<li class="col2">
                                                                    <span class="nooo-margin"> <i class="fa fa-comments"></i> <?= $thread->replies ?></span>
                                                                    <span class="nooo-margin"> <i class="fa fa-eye"></i> <?= $thread->views ?></span>
																</li>
																<li class="col3 ">
																<span>
																		<img alt="" class="img-circle col-sm-4 no-padding img-responsive" style="width: 50px !important;" src="../assets/profilePics/<?= $thread->avatar ?>">
																		<p class="col-sm-6 no-padding">by: <?= $thread->username ?><br>On: <?= $thread->postdate ?></p>
																</span>
																</li>
																<?php if(@$user->roleid==1 || @$user->id== $thread->userid): ?>
																		<li>
																				<div>
																						<?php if(@$user->roleid==1):?>
                                                                                            <a href="#" class="btn default btn-circle btn-xs toggle-pin-thread yellow-lemon"  ><i class="fa fa-thumb-tack  white"></i>
                                                                                            </a>
																								<a href="#" class="btn default btn-circle btn-xs toggle-lock-thread <?php if($thread->locked)echo "blue-ebonyclay ";?>"  ><i class="fa <?php if($thread->locked)echo "fa-lock"; else echo "fa-unlock"?>  white"></i>
																								</a>
																						<?php endif; ?>

																						<a href="#editt" data-toggle="modal" class="btn default btn-circle btn-xs green edit-thread"><i class="fa fa-edit"></i></a>
																								<a href="#removet" data-toggle="modal" class="btn default btn-circle btn-xs red del-thread"><i class="fa fa-remove"></i></a>

																				</div>
																		</li>
																<?php endif; ?>
														</ul>
													<?php endif; ?>
												<?php endforeach; ?>
                        <?php foreach ($threads as $thread): ?>
													<?php if(!$thread->pinned): ?>
                            <ul class="topiclist thread no-padding forum lpad " onclick="Demo" thread_id="<?=$thread->id ?>">
                                <li class="col1">
                                    <div class="caption">
                                        <i class="icon-note"> </i> <?php if($thread->locked): ?> <span class="label label-sm label-default"><i class="fa fa-lock"></i> locked </span><?php endif;?> <a href="thread.php?threadid=<?= $thread->id ?>"><?= $thread->title ?></a>
                                    </div>
                                    <!-- <div class="caption-helper">descerption mfkefkremfkmfrks</div> -->
                                </li>
                                <li class="col2">
                                    <span class="nooo-margin"> <i class="fa fa-comments"></i> <?= $thread->replies ?></span>
                                    <span class="nooo-margin"> <i class="fa fa-eye"></i> <?= $thread->views ?></span>
                                </li>
                                <li class="col3 ">
                                <span>
                                    <img alt="" class="img-circle col-sm-4 no-padding img-responsive" style="width: 50px !important;" src="../assets/profilePics/<?= $thread->avatar ?>">
                                    <p class="col-sm-6 no-padding">by: <?= $thread->username ?><br>On: <?= $thread->postdate ?></p>
                                </span>
                                </li>
                                <?php if(@$user->roleid==1 || @$user->id== $thread->userid): ?>
                                    <li>
                                        <div>
                                            <?php if(@$user->roleid==1):?>
                                                <a href="#" class="btn default btn-circle btn-xs toggle-pin-thread"  ><i class="fa fa-thumb-tack  white"></i>
                                                </a>
                                                <a href="#" class="btn default btn-circle btn-xs toggle-lock-thread <?php if($thread->locked)echo "blue-ebonyclay ";?>"  ><i class="fa <?php if($thread->locked)echo "fa-lock"; else echo "fa-unlock"?>  white"></i>
                                                </a>
                                            <?php endif; ?>

                                            <a href="#editt" data-toggle="modal" class="btn default btn-circle btn-xs green edit-thread"><i class="fa fa-edit"></i></a>
                                                <a href="#removet" data-toggle="modal" class="btn default btn-circle btn-xs red del-thread"><i class="fa fa-remove"></i></a>

                                        </div>
                                    </li>
                                <?php endif; ?>
                            </ul>
														<?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
						<!--/div>
					</div>
				</div-->

			</div>
		</div>
        <div class="modal fade bs-modal-lg" id="removet" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <span></span>
                    <div class="modal-body">
                        <p>are you sure you want to remove thread</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class=" btn default" data-dismiss="modal">NO</button>
                        <button type="button" id="del-thread" class="btn red uppercase">yes</button>

                        </form>

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
/////////////////
$(".add-thread").click(function (e) {

    window.location.href = "add-thread.php?forum-id="+e.target.getAttribute('forum-id');
})
$('#del-thread').click(function (e) {
    e.preventDefault();
    var threadid=e.target.getAttribute('threadid');
    var obj=$(this);
    console.log("del\n"+threadid)
    $.ajax({
        type: 'POST',
        cache: false,
        url: '../controllers/osdapi.php',
        data:{
            action: 'deleteThread',
            threadid: threadid
        },
        success: function(data){
            var res = JSON.parse(data);
            if(res.success){
                $( "[thread_id="+threadid+"]" ).remove();
                obj.prev().trigger('click');

            }
            else
                console.log(res.errors)
        },
        error: function(){
            $('#connectionModal').modal('show');
        }
    });


})
$('.del-thread').click(function (e) {
    var threadid=e.target.closest('ul').getAttribute('thread_id');
    console.log(e.target);
    $('#removet #del-thread').attr('threadid',threadid);
})
$('.edit-thread').click(function (e) {
    e.preventDefault();
    var threadid=e.target.closest('ul').getAttribute('thread_id');
    var forumid=$('div.portlet').attr('forum_id');
    window.location.href = "add-thread.php?forum-id="+forumid+"&thread-id="+threadid;

});
$('.toggle-lock-thread').click(function (e) {
    e.preventDefault();
    var threadid=e.target.closest('ul').getAttribute('thread_id');
    var obj=$(this).find('i');
    $.ajax({
        type: 'POST',
        cache: false,
        url: '../controllers/osdapi.php',
        data:{
            action: 'toggleThreadLock',
            threadid: threadid
        },
        success: function(data){
            var res = JSON.parse(data);
            if(res.success){
                console.log("success")
                obj.toggleClass("fa-lock");
                obj.toggleClass("fa-unlock");
                obj.parent().toggleClass("blue-ebonyclay");
            }
            else
                console.log(res.errors)
        },
        error: function(){
            $('#connectionModal').modal('show');
        }
    });


})
$('.toggle-pin-thread').click(function (e) {
    e.preventDefault();
    var threadid=e.target.closest('ul').getAttribute('thread_id');
    var forumid=$('div.portlet').attr('forum_id');
    var obj=$(this).find('i');
    $.ajax({
        type: 'POST',
        cache: false,
        url: '../controllers/osdapi.php',
        data:{
            action: 'toggleThreadPin',
            threadid: threadid
        },
        success: function(data){
            var res = JSON.parse(data);
            if(res.success){
                console.log("success")
                window.location.href = "forums.php?forumid="+forumid;

            }
            else
                console.log(res.errors)
        },
        error: function(){
            $('#connectionModal').modal('show');
        }
    });


})




</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
