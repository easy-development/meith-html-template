<!--========== START COMPONENT NAVIGATION ==========-->
  <div class="component-navigation">
    <div class="container">
      <nav class="navbar" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#meith-navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo-text" href="index.php">
            <span>Meith</span>
            Wave of Pixels
          </a>
        </div>
        <?php $currentRequestFileName = basename($_SERVER['PHP_SELF']);?>
        <div class="collapse navbar-collapse" id="meith-navigation">
          <ul class="nav navbar-nav navbar-right">
            <li <?php echo $currentRequestFileName == 'index.php' ? 'class="active"' : '';?>><a href="index.php">Home</a></li>
            <li <?php echo $currentRequestFileName == 'portfolio-list.php' ? 'class="active"' : '';?>><a href="portfolio-list.php">Portfolio</a></li>
            <li <?php echo $currentRequestFileName == 'blog.php' ? 'class="active"' : '';?>><a href="blog.php">Blog</a></li>
            <li class="dropdown <?php echo in_array($currentRequestFileName, array('road-map.php','team-style-grid.php', 'team-style-list.php', 'team-style-list-department.php')) ? 'active' : '';?>">
              <a href="team-style-grid.php" class="dropdown-toggle" data-toggle="dropdown">The Team</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="team-style-grid.php">Grid Style</a></li>
                <li><a href="team-style-list.php">List Style</a></li>
                <li><a href="team-style-list-department.php">List Style With Departments</a></li>
                <li><a href="road-map.php">Road Map</a></li>
              </ul>
            </li>
            <li class="dropdown <?php echo in_array($currentRequestFileName, array('shop-style-grid.php', 'shop-style-list.php', 'shop-style-list-left-sidebar.php', 'shop-style-list-right-sidebar.php')) ? 'active' : '';?>">
              <a href="shop-style-grid.php" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="shop-style-grid.php">Style Grid</a></li>
                <li><a href="shop-style-list.php">Style List</a></li>
                <li><a href="shop-single-product.php">Single Product</a></li>
                <li><a href="shop-single-product-left-sidebar.php">Single Product Left Sidebar</a></li>
                <li><a href="shop-single-product-right-sidebar.php">Single Product Right Sidebar</a></li>
                <li><a href="shop-cart.php">Cart</a></li>
                <li><a href="shop-checkout.php">Checkout</a></li>
                <li><a href="shop-style-list-left-sidebar.php">List Style Left Sidebar</a></li>
                <li><a href="shop-style-list-right-sidebar.php">List Style Right Sidebar</a></li>
              </ul>
            </li>
            <li class="dropdown <?php echo in_array($currentRequestFileName, array('account-login.php', 'account-registration.php', 'account-recover-password.php', 'shop-bookmark-list.php')) ? 'active' : '';?>">
              <a href="account-login.php" class="dropdown-toggle" data-toggle="dropdown">Account</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="account-login.php">Login</a></li>
                <li><a href="account-registration.php">Register</a></li>
                <li><a href="account-recover-password.php">Recover Password</a></li>
                <li><a href="shop-bookmark-list.php">Favorite Products</a></li>
              </ul>
            </li>
            <li <?php echo $currentRequestFileName == 'contact.php' ? 'class="active"' : '';?>><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="clearfix"></div>
  </div>
<!--========== END COMPONENT NAVIGATION ==========-->