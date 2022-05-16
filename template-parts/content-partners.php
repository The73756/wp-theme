<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 text-center text-lg-left">
        <div class="mb-5">
          <h3 class="mb-2">
            <?php
              the_field('partners-title', $post->ID );
            ?>
          </h3>
          <p>
            <?php
              the_field('partners-description', $post->ID );
            ?>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php		
        global $post;

        $query = new WP_Query( [
          'posts_per_page' => 4,
          'post_type'      => 'partners',
        ] );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            ?>
      <a href="<?php echo get_the_excerpt() ?>" class="col-lg-3 col-sm-6 col-md-3 text-center">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="partner" class="img-fluid" />
      </a>
      <?php 
          }
        } else {
          ?>
      <p>Партнеров пока нет =(</p>
      <?php
        }
        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</section>