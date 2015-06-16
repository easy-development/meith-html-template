<!DOCTYPE html>
<html>
  <head>
    <title>Meith - Portfolio</title>
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

    <!--========== START COMPONENT PORTFOLIO LIST ==========-->
      <div class="component-portfolio-list">
        <div class="container padding-in-box-100">
          <div class="title-primary">
            <p class="left-title">
              <span class="left-top-title">anteposuerit </span>
              <span class="left-bottom-title">ullamcorper</span>
            </p>
            <h2>Portfolio</h2>
            <p class="right-title">
              <span class="cube"></span>
              blandit praesent
            </p>
          </div>
          <p class="description-primary">
            Lorem ipsum dolor sit amet, <span>consectetuer adipiscing</span> elit, sed diam nonummy nibh euismod tincidunt
            ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci  lobortismmodo consequat.
          </p>
          <ul class="row">
            <?php require(dirname(__FILE__) . "/parts/_entries/portfolio-items.php");
            foreach($portfolioItems as $portfolioItem) : ?>
              <?php require(dirname(__FILE__) . "/parts/_dependency/portfolio-list-item.php"); ?>
            <?php endforeach;?>
          </ul>
          <div class="selection-page">
            <ul class="pagination">
              <li class="first"><a href="#"><span class="fa fa-chevron-left"></span></a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li class="last"><a href="#"><span class="fa fa-chevron-right"></span></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
    <!--========== END COMPONENT PORTFOLIO LIST ==========-->

    <?php require("parts/layout/footer.php");?>

    <?php require_once("_footer-scripts.php"); ?>
  </body>
</html>