<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Shop List Page</title>
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

    <div class="container component-shop-container">
      <div class="row">
        <div class="widget-contain col-md-3">
          <?php require("parts/widget/select-categories.php");?>

          <?php require("parts/widget/top-rated-products.php");?>

          <?php require("parts/widget/warning-placard.php");?>
        </div>
        <div class="col-md-9">
          <?php require("parts/shop/shop-product-list.php");?>
        </div>
      </div>
    </div>

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php");?>
  </body>
</html>