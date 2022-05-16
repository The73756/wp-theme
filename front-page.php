<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="banner-area banner-3" style="background-image: url(<?php
	if (has_post_thumbnail()) {
		the_post_thumbnail_url();
	} else {
		echo get_template_directory_uri().'/images/banner/1.jpg';
	}
?>);">
  <div class="overlay dark-overlay"></div>
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h5 class="subtitle"><?php the_field('banner-subtitle', $post->ID ); ?></h5>
              <h1 class="banner-title"><?php the_field('banner-title', $post->ID ); ?></h1>
              <p><?php the_field('banner-description', $post->ID ); ?></p>

              <a href="#" class="btn btn-white btn-circled">Начать сотрудничество</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->

<?php the_content(); ?>

<?php get_template_part( 'template-parts/content', 'service', ['class' => 'bg-feature'] ); ?>

<?php get_template_part( 'template-parts/content', 'price' ); ?>

<?php get_template_part( 'template-parts/content', 'testimonial'); ?>

<?php get_template_part( 'template-parts/content', 'partners' ); ?>

<?php get_template_part( 'template-parts/content', 'blog' ); ?>

<!--  COUNTER AREA START  -->
<section id="counter" class="section-padding">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-heart"></i>
          <span class="counter"><?php the_field('clients', $post->ID ); ?></span>
          <h5>счастливых клиентов</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-rocket"></i>
          <span class="counter"><?php the_field('team', $post->ID ); ?></span>
          <h5>выполненных проектов</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-hand-power"></i>
          <span class="counter"><?php the_field('done-projects', $post->ID ); ?></span>
          <h5>людей в команде</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-shield-alt"></i>
          <span class="counter"><?php the_field('current-projects', $post->ID,); ?></span>
          <h5>Проектов в работе</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  COUNTER AREA END  -->

<?php get_footer(); ?>