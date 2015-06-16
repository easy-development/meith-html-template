<!--========== START COMPONENT SHOP PRODUCT LIST GRID ==========-->
<div class="component-team-product-grid">
  <div class="product-list-wrapper">
    <div class="title-primary">
      <p class="left-title">
        <span class="left-top-title">anteposuerit </span>
        <span class="left-bottom-title">ullamcorper</span>
      </p>
      <h2>Our Team</h2>
      <p class="right-title">
        <span class="cube"></span>
        blandit praesent
      </p>
    </div>
    <div class="filter">
      <div class="select-view">
        <a href="team-style-list-department.php" title="Team List Department"><span class="fa fa-align-justify"></span></a>
        <a href="team-style-list.php" title="Team List"><span class="fa fa-th-list"></span></a>
        <a href="team-style-grid.php" title="Team Grid" class="active"><span class="fa fa-th-large"></span></a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="content">
      <div class="row" data-elegant-height="> div > .item > .contain-details">
        <?php require(dirname(dirname(__FILE__)) . "/_entries/team-members.php");
              foreach($teamMembers as $teamMember) : ?>
          <?php require(dirname(dirname(__FILE__)) . "/_dependency/team-member-grid.php"); ?>
        <?php endforeach;?>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<!--========== END COMPONENT SHOP PRODUCT LIST GRID ==========-->