
    <!-- main navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">The Barber Shop</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo APP_DOC_ROOT . '/home'; ?>">Home</a></li>
            <li><a href="<?php echo APP_DOC_ROOT . '/product'; ?>">Products</a></li>
            <li><a href="<?php echo APP_DOC_ROOT . '/purchase'; ?>">Purchase</a></li>
            <li><a href="<?php echo APP_DOC_ROOT . '/contact'; ?>">Contact Us</a></li>
          </ul>

<?php if ( 0 !== APP_AUTH_TYPE && isset($_SESSION["username"]) ) { ?>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $_SESSION['username']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo APP_DOC_ROOT; ?>/auth/logout">Logout</a></li>
              </ul>
            </li>
          </ul>

<?php } ?>

        </div>
      </div>
    </div>
    <!-- end main navigation -->

    <!-- start page container -->
    <div class="container-fluid">
      <div class="row">
