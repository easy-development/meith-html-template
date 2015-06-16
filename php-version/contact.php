<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Contact Page</title>
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

    <!--========== START COMPONENT SHOP ==========-->
    <div class="component-contact"
         data-component-map-target="#responsive_map"
         data-component-map-configuration-latitude="-37.801578"
         data-component-map-configuration-longitude="145.060508">

      <div class="container">
        <div class="row">
          <div class="contain-map col-sm-12">
            <div id="responsive_map"></div>
          </div>
          <form action="contact.php" class="form col-sm-12 col-md-9">
            <div class="contain-input col-sm-6 col-md-4">
              <input type="text" placeholder="NAME">
              <input type="email" placeholder="EMAIL">
              <input type="text" placeholder="SUBJECT">
            </div>
            <div class="contain-text-area col-sm-6 col-md-8">
              <textarea rows="6" placeholder="MESSAGE"></textarea>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary">SEND</button>
            </div>
          </form>
          <div class="col-sm-12 col-md-3">
            <div class="contact-details">
              <h1 class="title">CONTACT</h1>
              <h3 class="sub-title">DETAILS</h3>
              <div class="content">
                <p>
                  105, Fifth Avenue Street, Greenwoods, CA 40005
                </p>
                <p>
                  <span>TEL:</span>
                  +1 452 369 789
                </p>
                <p>
                  <span>EMAIL:</span>
                  INFO@EASYDEV.COM
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--========== END COMPONENT SHOP ==========-->

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php"); ?>
  </body>
</html>