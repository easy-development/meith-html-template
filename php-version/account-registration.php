<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Registration</title>
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

    <!--========== START COMPONENT ACCOUNT REGISTRATION ==========-->
    <form class="component-account-registration component-account-entry-page" method="POST" action="account-registration.php">
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
              <input type="text" name="username-desired" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="password-desired" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" name="first-name" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
              <input type="text" name="last-name" class="form-control" placeholder="Last Name">
            </div>
            <div class="action-section">
              <a href="account-login.php" class="change-page">I already have an account, login</a>
              <button type="submit" class="submit-date btn btn-primary">Submit</button>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </form>
    <!--========== END COMPONENT ACCOUNT REGISTRATION ==========-->

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php");?>
  </body>
</html>