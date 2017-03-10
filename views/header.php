<div class="top-menu">
  <ul class="nav navbar-nav pull-right">
    <?php if(isLoggedIn()): ?>
      <li class="dropdown dropdown-user">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <img alt="" class="img-circle" src="../assets/profilePics/<?=$user->avatar ?>"/>
          <span class="username username-hide-on-mobile" id="username-header">
          <?=User::getUserameById($_SESSION['userId'])?> </span>
          <i class="fa fa-angle-down "></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-default">
          <li>
            <a href="profile.php">
              <i class="icon-user"></i> My Profile </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="icon-key"></i> Log Out </a>
          </li>
        </ul>
      </li>
    <?php else: ?>
      <li class="btn">
        <a href="login.php">
          <span class="bold"> Login </span>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</div>
