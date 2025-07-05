  <main>
      <section id="banner">
        <div class="container">
          <div class="row g-4 justify-content-between bannerWrapper">
            <div class="col-lg-6">
              <div class="bannerImage">
              <?php 
              $banner_image = get_field('banner_image', 'option');
              if ($banner_image): ?>
                  <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
              <?php endif; ?>
          </div>
            </div>
            <div class="col-lg-6">
              <div class="bannerTitle">
                             <?php 
              $join_title = get_field('title_one', 'option');
              if ($join_title):
                  echo '<h2>' . wp_kses_post($join_title) . '</h2>';
              endif;
              ?>
                <div class="countdown d-flex">
                  <div class="count">
                    <h3>20</h3>
                    <span>Days</span>
                  </div>
                  :
                  <div class="count">
                    <h3>20</h3>
                    <span>Hours</span>
                  </div>
                  :
                  <div class="count">
                    <h3>39</h3>
                    <span>Minutes</span>
                  </div>
                  :
                  <div class="count">
                    <h3>33</h3>
                    <span>Seconds</span>
                  </div>
                </div>
                <h5>Featured Course</h5>
                <h1>
              <?php 
              $hero_heading = get_field('title_two', 'option');
              if ($hero_heading) {
                  echo wp_kses_post($hero_heading);
              }
              ?>
            </h1>
                <?php if ( get_field('title_three') ) : ?>
              <h4><?php the_field('title_three'); ?></h4>
            <?php endif; ?>
              </div>
              <div class="bannerBtn d-flex">
                <button>
                  Explore Courses
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </button>
                <button class="learnmoreBtn">
                  Learn More
                  <span><i class="fa-solid fa-angle-right"></i></span>
                </button>
              </div>
            </div>
          </div>
          <div class="row g-4 bannerItem">
 <?php if( have_rows('banner_items', 'option') ): ?>
    <?php while( have_rows('banner_items', 'option') ): the_row(); 
      $icon = get_sub_field('images');  // Image Object
      $number = get_sub_field('item_numbers');
      $title = get_sub_field('items_title');
      $color_class = get_sub_field('color_class');

      // Image URL:
      $icon_url = $icon ? $icon['url'] : '';
    ?>
      <div class="col-4 serviceItem">
        <div class="item <?php echo esc_attr($color_class); ?>">
          <div class="icon">
            <img src="<?php echo esc_url($icon_url); ?>" alt="iconImage" />
          </div>
          <h3><?php echo esc_html($number); ?></h3>
          <h6><?php echo esc_html($title); ?></h6>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>No banner items found.</p>
  <?php endif; ?>
    </div>
  </div>
</section>