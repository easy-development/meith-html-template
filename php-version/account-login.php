<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target="#scrollSpyMenu">

    <?php require("parts/_body-loading-animation.php");?>

    <?php require("parts/layout/header.php");?>

    <!--========== START COMPONENT ACCOUNT LOGIN ==========-->
    <form class="component-account-login component-account-entry-page" method="POST" action="account-login.php">
      <div class="container padding-in-box-70">
        <div class="title-account-recover">
          <p class="left-title">
            <span>Meith</span>
            website
          </p>
          <span class="bar-separated"></span>
          <p class="right-title">
            <span>Members Area</span>
          </p>
        </div>
        <div class="row">
          <div class="content col-sm-8 col-md-6">
            <div class="form-group">
              <input type="text" name="username-account" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="password-account" class="form-control" placeholder="Password">
            </div>
            <div class="action-section">
              <a href="account-recover-password.php" class="change-page">Recover password</a>
              <a href="account-registration.php" class="button-register">Register</a>
              <button type="submit" class="submit-date btn btn-primary">Submit</button>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </form>
    <!--========== END COMPONENT ACCOUNT LOGIN ==========-->

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php");?>
  </body>
</html>