<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-service" id="page-banner" style="background-image: url(<?php
	if (has_post_thumbnail()) {
		the_post_thumbnail_url();
	} else {
		echo get_template_directory_uri().'/images/banner/1.jpg';
	}
?>);">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white"><?php the_field('banner-title', $post->ID ); ?></h1>
          <p><?php the_field('banner-description', $post->ID ); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->

<?php the_content(); ?>

<?php get_template_part( 'template-parts/content', 'service', ['class' => 'service-style-two'] ); ?>

<?php get_template_part( 'template-parts/content', 'partners' ); ?>

<?php get_footer(); ?>