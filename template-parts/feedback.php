<section id="feedback">
  <div class="title">
    <h2>Feedback from Satisfied Students</h2>
  </div>

  <?php
  // Get feedback items from ACF repeater field
  $feedback_items = get_field('feedback', 'option'); // Using 'feedback' as your repeater field name
  
  if ($feedback_items) :
    // Split feedback items into chunks of 5 for each carousel slide
    $feedback_chunks = array_chunk($feedback_items, 5);
  ?>
  
  <div id="multiItemCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators">
      <?php foreach ($feedback_chunks as $i => $chunk) : ?>
        <button type="button"
                data-bs-target="#multiItemCarousel"
                data-bs-slide-to="<?php echo $i; ?>"
                class="<?php echo $i === 0 ? 'active' : ''; ?>"
                aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                aria-label="Slide <?php echo $i + 1; ?>">
        </button>
      <?php endforeach; ?>
    </div>
    
    <div class="carousel-inner">
      <?php foreach ($feedback_chunks as $i => $chunk) : ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
          <div class="row studentFeedback justify-content-center">
            <?php foreach ($chunk as $j => $feedback) : 
              // Determine visibility classes based on position
              $visibility_classes = '';
              if ($j >= 1) $visibility_classes .= ' d-none d-sm-block';
              if ($j >= 2) $visibility_classes .= ' d-none d-md-block';
              if ($j >= 3) $visibility_classes .= ' d-none d-lg-block';
              if ($j >= 4) $visibility_classes .= ' d-none d-xl-block';
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2<?php echo $visibility_classes; ?>">
              <div class="feedbackCard">
                <div class="ratting d-flex justify-content-between">
                  <span class="text-white"><i class="fa-solid fa-quote-left"></i></span>
                  <div class="stars">
                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span><i class="fa-sharp fa-solid fa-star"></i></span>
                  </div>
                </div>
                <p><?php echo $feedback['comments'] ?? 'No comments provided.'; ?></p>
                <div class="info d-flex justify-content-between">
                          <div class="image">
                    <?php if ($feedback['image']) : ?>
                      <img src="<?php echo esc_url($feedback['image']['url']); ?>" 
                           alt="<?php echo esc_attr($feedback['image']['alt'] ?: $feedback['student_name'] ?? 'Student'); ?>" />
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/feedback.png" 
                           alt="<?php echo esc_attr($feedback['student_name'] ?? 'Student'); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="title">
                    <h5><?php echo $feedback['student_name'] ?? 'Anonymous'; ?></h5>
                    <span>
                      <?php 
                      echo $feedback['postion'] ?? ''; 
                      echo (!empty($feedback['postion']) && !empty($feedback['company_name'])) ? ' at ' : '';
                      echo $feedback['company_name'] ?? '';
                      ?>
                    </span>
                  </div>
                  <div class="bacth">
                    <span><?php echo $feedback['batch_name'] ?? 'Batch'; ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  
  <?php else : ?>
    <div class="alert alert-info">No feedback items have been added yet.</div>
  <?php endif; ?>
</section>