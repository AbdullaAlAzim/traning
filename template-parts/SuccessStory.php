<section id="SuccessStory">
  <div class="title">
    <h2>From Learner to QA Professional – Real Success Stories</h2>
  </div>
  <?php
  // Get the repeater field from ACF
  $success_stories = get_field('Success_stories', 'option');
  
  if ($success_stories) : 
    // Split videos into chunks of 5 for each carousel slide
    $video_chunks = array_chunk($success_stories, 5);
  ?>
  <div id="carouselOne" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators">
      <?php foreach ($video_chunks as $i => $chunk) : ?>
        <button type="button" 
                data-bs-target="#carouselOne" 
                data-bs-slide-to="<?php echo $i; ?>" 
                class="<?php echo $i === 0 ? 'active' : ''; ?>" 
                aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>" 
                aria-label="Slide <?php echo $i + 1; ?>">
        </button>
      <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
      <?php foreach ($video_chunks as $i => $chunk) : ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
          <div class="row story justify-content-center">
            <?php 
            foreach ($chunk as $j => $story) :
              $youtube_url = $story['youtube_vedio_url'];
              
              // Fixed regular expression for YouTube URL parsing
              $video_id = '';
              $pattern = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
              
              if (preg_match($pattern, $youtube_url, $matches)) {
                $video_id = $matches[1];
              }
              
              if (empty($video_id)) continue;
              
              // Determine visibility classes based on position
              $visibility_classes = '';
              if ($j >= 1) $visibility_classes .= ' d-none d-sm-block';
              if ($j >= 2) $visibility_classes .= ' d-none d-md-block';
              if ($j >= 3) $visibility_classes .= ' d-none d-lg-block';
              if ($j >= 4) $visibility_classes .= ' d-none d-xl-block';
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2<?php echo $visibility_classes; ?>">
              <div class="item">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/<?php echo $video_id; ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php else : ?>
    <div class="alert alert-info">No success stories have been added yet.</div>
  <?php endif; ?>
</section>