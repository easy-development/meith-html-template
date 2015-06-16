<li class="col-sm-4 col-md-3">
  <div class="image-view-mask image-view-mask-<?php echo (isset($portfolioItem['display_mask_number']) ? $portfolioItem['display_mask_number'] : "1");?>">
    <img src="<?php echo (isset($portfolioItem['photo']) ? $portfolioItem['photo'] : "assets/image/portfolio-page-image-1.png");?>" alt="portfolio-page-image" width="260" height="260"/>
    <div class="hover-image mask">
      <h2 class="title"><span class="cube"></span><?php echo (isset($portfolioItem['title']) ? $portfolioItem['title'] : "Hover Style 1");?> </h2>
      <p><?php echo (isset($portfolioItem['description']) ? $portfolioItem['description'] : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");?></p>
      <a class="learn-more" href="portfolio-single.php">Learn More</a>
    </div>
  </div>
</li>