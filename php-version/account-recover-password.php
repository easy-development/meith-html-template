<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Recover Password</title>
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

    <!--========== START COMPONENT ACCOUNT RECOVER PASSWORD ==========-->
    <form class="component-account-recover-password component-account-entry-page" method="POST" action="account-recover-password.php">
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
              <input type="email" name="email-for-recover" class="form-control" placeholder="Email">
            </div>
            <div class="action-section">
              <a href="account-login.php" class="change-page">Take me back to login</a>
              <button type="submit" class="submit-date btn btn-primary">Submit</button>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </form>
    <!--========== END COMPONENT ACCOUNT RECOVER PASSWORD ==========-->

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php");?>
  </body>
</html>