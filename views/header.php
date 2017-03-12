<div class="page-header md-shadow-z-1-i navbar ">
<!-- BEGIN HEADER INNER -->
<div class="page-header-inner">
  <!-- BEGIN LOGO -->
  <div class="page-logo ">
    <a href="../controllers/home.php">
      <img src="../assets/admin/layout2/img/logo-default.png" alt="logo" class="logo-default fit"/>
    </a>

  </div>
  <!-- END LOGO -->
  <div class="page-top">
<div class="top-menu">
  <ul class="nav navbar-nav pull-right">
    <?php if(isLoggedIn()): ?>
      <li class="dropdown dropdown-user">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <img alt="" class="img-circle" src="../assets/profilePics/<?=$user->avatar ?>"/>
          <span class="username username-hide-on-mobile" id="username-header">
          <?=User::getUserameById($_SESSION['userid'])?> </span>
          <i class="fa fa-angle-down "></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-default">
        <?php if(isAdmin()): ?>
          <li>
            <a href="admin.php">
              <i class="icon-magic-wand"></i> Administration </a>
          </li>
        <?php endif; ?>
          <li>
            <a href="profileOverview.php">
              <i class="icon-user"></i> My Profile </a>
          </li>
          <li>
            <a href="../controllers/login.php">
              <i class="icon-key"></i> Log Out </a>
          </li>
        </ul>
      </li>
    <?php else: ?>
      <li>
        <a href="../views/login.php" class="btn">
          <span class="bold"> Login </span>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</div>
</div>
</div>
<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
