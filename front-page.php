<?php
/**
 * Template Name: Front Page
 *
 * Description: A custom landing page layout for the homepage.
 */

get_header(); ?>

  <!-- Hero / Banner Section -->
  <?php get_template_part('template-parts/banner'); ?>

  <!-- Countdown or CTA section -->
  <?php get_template_part('template-parts/plan'); ?>

  <!-- Feature / Benefits Section -->
  <?php get_template_part('template-parts/premium'); ?>

  <!-- Course Plan or Curriculum Section -->
  <?php get_template_part('template-parts/SuccessStory'); ?>
  <?php get_template_part('template-parts/feedback'); ?>
  <?php get_template_part('template-parts/Companies'); ?>
  <?php get_template_part('template-parts/team'); ?>
  <?php get_template_part('template-parts/faq'); ?>
  <?php get_template_part('template-parts/blog'); ?>
  <?php get_template_part('template-parts/subscribe'); ?>

  <!-- Premium Course Cards -->
  <?php get_template_part('template-parts/premium-courses'); ?>

  <!-- Success Stories -->
  <?php get_template_part('template-parts/success-stories'); ?>

  <!-- Call to Action (CTA) -->
  <?php get_template_part('template-parts/cta'); ?>



<?php get_footer(); ?>
