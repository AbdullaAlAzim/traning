<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php wp_head(); ?>
  </head>

 <body <?php body_class(); ?>>
    <header>
      <!-- place navbar here -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" /></a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-wrapper mx-auto">
              <li class="nav-item">
                <a class="nav-list active" href="#" aria-current="page"
                  >Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-list" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-list" href="#">Course Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-list" href="#">Student Success</a>
              </li>
              <li class="nav-item">
                <a class="nav-list" href="#">Blog</a>
              </li>
            </ul>

            <div class="navButton">
              <button>
                <span
                  ><i class="fa-solid fa-arrow-right-to-bracket icon"></i></span
                >Enroll Now
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>
       <main>