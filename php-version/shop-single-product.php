<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Shop Product Detail</title>
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

    <!--========== START COMPONENT SHOP SINGLE PRODUCT ==========-->
    <div class="component-shop-single-product">
      <div class="container padding-in-box-70">
        <div class="row">

          <div class="col-sm-12">
            <?php require("parts/shop/shop-product-detail.php");?>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <!--========== END COMPONENT SHOP CHECKOUT ==========-->

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php");?>
  </body>
</html>