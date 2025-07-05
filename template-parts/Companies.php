<section id="topCompanies">
  <div class="container">
    <div class="content">
      <div class="title">
        <h2>Top Companies Hiring Our Talents</h2>
      </div>
      
      <?php
      // Get company logos from ACF repeater field
      $company_logos = get_field('company_logos', 'option');
      
      if ($company_logos) :
        // Split logos into chunks for each carousel slide (7 logos per slide)
        $logo_chunks = array_chunk($company_logos, 7);
      ?>
      
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
          <?php foreach ($logo_chunks as $i => $chunk) : ?>
            <button type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="<?php echo $i; ?>"
                    class="<?php echo $i === 0 ? 'active' : ''; ?>"
                    aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                    aria-label="Slide <?php echo $i + 1; ?>">
            </button>
          <?php endforeach; ?>
        </div>
        
        <div class="carousel-inner">
          <?php foreach ($logo_chunks as $i => $chunk) : ?>
            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
              <div class="companies d-flex">
                <?php foreach ($chunk as $company) : 
                  $logo = $company['logos']; // Get the logo sub-field
                ?>
                  <div class="brand">
                    <img src="<?php echo esc_url($logo['url']); ?>" 
                         alt="<?php echo esc_attr($logo['alt'] ?: 'Company Logo'); ?>" />
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      
      <?php else : ?>
        <div class="alert alert-info">No company logos have been added yet.</div>
      <?php endif; ?>
    </div>
  </div>
</section>