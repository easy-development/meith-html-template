<!--========== START COMPONENT SHOP PRODUCT DETAIL ==========-->
<div class="component-shop-product-detail">
  <div class="top">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="shop-style-grid.php">Shop</a></li>
      <li class="active">Product detail</li>
    </ol>
    <?php $currentRequestFileName = basename($_SERVER['PHP_SELF']);?>
    <div class="select-view">
      <a href="shop-single-product.php" title="Product" <?php echo $currentRequestFileName == "shop-single-product.php" ? 'class="active"' : '';?>><span class="flaticon-header"></span></a>
      <a href="shop-single-product-left-sidebar.php" title="Product With Left Sidebar" <?php echo $currentRequestFileName == "shop-single-product-left-sidebar.php" ? 'class="active"' : '';?>><span class="flaticon-left67"></span></a>
      <a href="shop-single-product-right-sidebar.php" title="Product With Right Sidebar" <?php echo $currentRequestFileName == "shop-single-product-right-sidebar.php" ? 'class="active"' : '';?>><span class="flaticon-layout25"></span></a>
    </div>
    <span class="clearfix"></span>
  </div>
  <div class="contain-detail-item row">
    <div class="image-contain col-sm-4 component-container-slider">
      <div class="image-view-wrapper">
        <div class="image-view-container" data-container-slider-image-container="">
          <img data-container-slider-image-target="" src="assets/image/image-single-detail-product-1.jpg" alt="image-single-detail-product" width="370" height="500"/>
          <img data-container-slider-image-target="" src="assets/image/image-single-detail-product-2.jpg" alt="image-single-detail-product" width="370" height="500"/>
          <img data-container-slider-image-target="" src="assets/image/image-single-detail-product-3.jpg" alt="image-single-detail-product" width="370" height="500"/>
        </div>
      </div>

      <ul class="small-image-container list-view-image">
        <li><a href="assets/image/image-single-detail-product-1.jpg"><img src="assets/image/image-single-detail-product-small-1.jpg" alt="image-single-detail-product" width="120" height="170"/></a></li>
        <li><a href="assets/image/image-single-detail-product-2.jpg"><img src="assets/image/image-single-detail-product-small-2.jpg" alt="image-single-detail-product" width="120" height="170"/></a></li>
        <li><a href="assets/image/image-single-detail-product-3.jpg"><img src="assets/image/image-single-detail-product-small-3.jpg" alt="image-single-detail-product" width="120" height="170"/></a></li>
      </ul>
    </div>
    <div class="detail-and-settings col-sm-8">
      <form method="POST" action="shop-cart.php">
        <h1 class="name-product">exerci tation ullamcorper suscipit lo</h1>
        <ul class="rating-review">
          <li>
            Rating
            <ul class="rating">
              <li class="star-active"><span class="flaticon-star138"></span></li>
              <li class="star-active"><span class="flaticon-star138"></span></li>
              <li class="star-active"><span class="flaticon-star138"></span></li>
              <li class="star-active"><span class="flaticon-star138"></span></li>
              <li><span class="flaticon-star138"></span></li>
            </ul>
          </li>
          <li>
            Read reviews (0)
            <span class="flaticon-comment3"></span>
          </li>
          <li>
            Write a review
            <span class="flaticon-pen29"></span>
          </li>
        </ul>
        <ul class="detail-item">
          <li>
            <p>Model:</p>
            <span>Demo 14</span>
          </li>
          <li>
            <p>Condition:</p>
            <span>NEW</span>
          </li>
          <li>
            <p>300 Items</p>
            <span>In Stock</span>
          </li>
        </ul>
        <p class="price">
          <span class="initial-price">$ 30.99</span>
          <span class="reduction">-$20.00</span>
          <span class="old-price">$50.99</span>
          <span class="clearfix"></span>
        </p>
        <p class="description">
         <span>Investigationes demonstraverunt</span> lectores legere me lius quod ii legunt saepius.
          Claritas est etiam processus dynamicus, qui sequitur tudium lectorum.
        </p>
        <p class="description">
          Mirum est <span>notare quam</span> littera gothica, quam nunc putamus parum claram, anteposuerit
          litterarum formas humanitatis per seacula quarta decima et <span class="green">quinta decima.</span>
        </p>
        <div class="select-container">
          <div class="size">
            <span>Size:</span>
            <div class="select-size">
              <label for="size_s" data-label-active-class="radio-selected">S</label>
              <input type="radio" name="size" id="size_s" value="s" checked="checked">

              <label for="size_m" data-label-active-class="radio-selected">M</label>
              <input type="radio" name="size" id="size_m" value="m">

              <label for="size_l" data-label-active-class="radio-selected">L</label>
              <input type="radio" name="size" id="size_l" value="l">
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="color">
            <span>Color:</span>
            <div class="select-color">
              <label for="color-1" class="color-1" style="background: #17bb65;" data-label-active-class="radio-selected"><span class="fa fa-check"></span></label>
              <input type="radio" name="color" id="color-1" value="color-1" checked="checked">

              <label for="color-2" class="color-2" style="background: #c34e7a;" data-label-active-class="radio-selected"><span class="fa fa-check"></span></label>
              <input type="radio" name="color" id="color-2" value="color-2">

              <label for="color-3" class="color-3" style="background: #f7b942;" data-label-active-class="radio-selected"><span class="fa fa-check"></span></label>
              <input type="radio" name="color" id="color-3" value="color-3">

              <label for="color-4" class="color-4" style="background: #2a95c1;" data-label-active-class="radio-selected"><span class="fa fa-check"></span></label>
              <input type="radio" name="color" id="color-4" value="color-4">

              <label for="color-5" class="color-5" style="background: #de5241;" data-label-active-class="radio-selected"><span class="fa fa-check"></span></label>
              <input type="radio" name="color" id="color-5" value="color-5">
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="select-number-item-and-send">
          <div class="form-group">
            <div class="input-group"
                 data-component-easy-math=".quantity-input"
                 data-component-easy-math-min-value="1">
              <input class="form-control quantity-input" type="text" name="quantity" placeholder="0" value="1">
              <div class="input-group-addon">
                <a href="#" class="increment" data-component-easy-math-action="+1">+</a>
                <a href="#" class="decrement" data-component-easy-math-action="-1">-</a>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" name="submit" value="ADD TO CART"/>
        </div>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
  <div class="contain-comment-review">
    <div class="review media">
      <a class="pull-left" href="#">
        <img class="media-object" src="assets/image/blog-post-image-person-comment-5.jpg" width="70" height="70" alt="image-person-comment">
      </a>
      <div class="media-body">
        <div class="top-comment">
          <div class="about-author">
            <h2 class="title">Simple, yet elegant</h2>
            <p class="sub-title">This is an optional classy sub-title</p>
          </div>
          <div class="about-comment">
            <span class="time-post">06.02.2014</span>
            <div class="rating">
              <span>Rating:</span>
              <ul>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li><span class="flaticon-star138"></span></li>
              </ul>
            </div>
            <p class="review-useful">
              <span class="number">5</span>
              People found this review useful
              <span class="flaticon-multiple25"></span>
            </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
          dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.
        </p>
        <p>
          Exerci tation ullamcorper suscipit. <br> lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
          iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
          facilisis at vero eros <br> et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
          augue duis dolore te feugait nulla facilisi. <br> Nam liber tempor cum soluta nobis eleifend option congue
          nihil imperdiet doming id quod mazim placerat facer possim assum.
        </p>
        <p>
          Ypi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes
          demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui
          sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica.
        </p>
        <div class="good-arguments">
          <h3 class="title-arguments">PRO</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.
          </p>
          <ul class="list">
            <li>1.Ypi non habent claritatem insitam.</li>
            <li>2.Est usus legentis in iis qui facit eorum claritatem.</li>
            <li>3.Investigationes demonstraverunt lectores.</li>
            <li>4.Egere me lius quod ii legunt saepius.</li>
            <li>5.Claritas est etiam processus dynamicus.</li>
          </ul>
        </div>
        <div class="bad-arguments">
          <h3 class="title-arguments">CONTRA</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud. <br> Ypi non habent claritatem
            insitam <br> Est usus legentis in iis qui facit eorum claritatem.
          </p>
        </div>
        <p class="author-review">Review by Andrei-Robert Rusu</p>
      </div>
    </div>
    <div class="review media">
      <a class="pull-left" href="#">
        <img class="media-object" src="assets/image/blog-post-image-person-comment-6.jpg" width="70" height="70" alt="image-person-comment">
      </a>
      <div class="media-body">
        <div class="top-comment">
          <div class="about-author">
            <h2 class="title">Simple, yet elegant</h2>
            <p class="sub-title">This is an optional classy sub-title</p>
          </div>
          <div class="about-comment">
            <span class="time-post">03.03.2014</span>
            <div class="rating">
              <span>Rating:</span>
              <ul>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li><span class="flaticon-star138"></span></li>
              </ul>
            </div>
            <p class="review-useful">
              <span class="number">9</span>
              People found this review useful
              <span class="flaticon-multiple25"></span>
            </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
          dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.
        </p>
        <p>
          Exerci tation ullamcorper suscipit. <br> lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
          iriure dolor in hendrerit in vulputate velit esse molestie consequat,e quam littera gothica.
        </p>
        <p class="author-review">Review by Andrei-Robert Rusu</p>
      </div>
    </div>
    <div class="review media">
      <a class="pull-left" href="#">
        <img class="media-object" src="assets/image/blog-post-image-person-comment-7.jpg" width="70" height="70" alt="image-person-comment">
      </a>
      <div class="media-body">
        <div class="top-comment">
          <div class="about-author">
            <h2 class="title">Simple, yet elegant</h2>
            <p class="sub-title">This is an optional classy sub-title</p>
          </div>
          <div class="about-comment">
            <span class="time-post">09.05.2014</span>
            <div class="rating">
              <span>Rating:</span>
              <ul>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li class="star-active"><span class="flaticon-star138"></span></li>
                <li><span class="flaticon-star138"></span></li>
              </ul>
            </div>
            <p class="review-useful">
              <span class="number">2</span>
              People found this review useful
              <span class="flaticon-multiple25"></span>
            </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
          dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud. <br>
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
          feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
          delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue
          nihil imperdiet doming id quod mazim placerat facer possim assum.
        </p>
        <p>
          Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam
          littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta
          decima et quinta decima.
        </p>
        <p class="author-review">Review by Andrei-Robert Rusu</p>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<!--========== END COMPONENT SHOP PRODUCT DETAIL ==========-->