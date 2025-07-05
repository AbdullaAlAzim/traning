<section id="premium">
  <div class="container">
    <div class="title">
      <h2><?php the_field('premium_title', 'option'); ?></h2>
      <h4><?php the_field('premium_subtitle', 'option'); ?></h4>
    </div>

    <div class="row g-5 mt-4">
      <?php if( have_rows('premium_courses', 'option') ): ?>
        <?php while( have_rows('premium_courses', 'option') ): the_row(); 
          $title = get_sub_field('title');
          $support_info = get_sub_field('support_info');
          $class_info = get_sub_field('class_info');
          $access_info = get_sub_field('access_info');
          $certificate_info = get_sub_field('certificate_info');
          $project_info = get_sub_field('project_info');
          $time_left = get_sub_field('time_left');
          $seat_alert = get_sub_field('seat_alert');
          $button_text = get_sub_field('button_text');
        ?>
        <div class="col-4">
          <div class="courseCard">
            <div class="ribbon"><span>Registration Going on</span></div>
            <h4><?php echo esc_html($title); ?></h4>
            <div class="services d-flex justify-content-between">
              <div class="left">
                <p><span class="one"><i class="fa-regular fa-circle-check"></i></span><?php echo esc_html($support_info); ?></p>
                <p><span class="two"><i class="fa-regular fa-video"></i></span><?php echo esc_html($class_info); ?></p>
              </div>
              <div class="right">
                <p><span class="three"><i class="fa-regular fa-arrows-repeat"></i></span><?php echo esc_html($access_info); ?> <span class="check"><i class="fa-regular fa-check"></i></span></p>
                <p><span class="four"><i class="fa-regular fa-file-lines"></i></span><?php echo esc_html($certificate_info); ?> <span class="check"><i class="fa-regular fa-check"></i></span></p>
              </div>
            </div>
            <div class="info d-flex g-2">
              <p><span><i class="fa-regular fa-layer-group"></i></span><?php echo esc_html($project_info); ?></p>
              <p class="time"><span><i class="fa-regular fa-clock"></i></span><?php echo esc_html($time_left); ?></p>
            </div>
            <h5><?php echo esc_html($seat_alert); ?></h5>
            <div class="cardBtn">
              <button><?php echo esc_html($button_text); ?> <span><i class="fa-regular fa-arrow-right"></i></span></button>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="courseBtn mt-5">
      <div class="gradiant">
        <button>See All Courses <span><i class="fa-regular fa-arrow-right"></i></span></button>
      </div>
    </div>
  </div>
</section>
