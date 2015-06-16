<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Blog Page</title>
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

    <!--========== START COMPONENT BLOG ==========-->
    <div class="component-blog padding-in-box-60">
      <div class="container">
        <div class="col-sm-8">
          <?php require("parts/blog/blog-post-list.php");?>
        </div>
        <div class="col-sm-4">
          <?php require("parts/blog/blog-sidebar.php");?>
        </div>
      </div>
    </div>
    <!--========== END COMPONENT BLOG ==========-->

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php"); ?>
  </body>
</html>