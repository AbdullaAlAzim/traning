   <section id="plan">
  <div class="container">
    <div class="title">
      <h2>
        <?php the_field('title_', 'option'); ?>
      </h2>
      <h4>
        <?php the_field('sub_title', 'option'); ?>
      </h4>
    </div>

    <?php if( have_rows('learning_steps', 'option') ): ?>
      <div class="service d-flex align-items-center flex-wrap">
        <?php while( have_rows('learning_steps', 'option') ): the_row(); 
          $icon = get_sub_field('images');
          $title = get_sub_field('courses_title');
          $description = get_sub_field('details');
        ?>
          <div class="item">
            <div class="icon">
              <?php if($icon): ?>
                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
              <?php endif; ?>
            </div>
            <h4><?php echo esc_html($title); ?></h4>
            <p><?php echo esc_html($description); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
