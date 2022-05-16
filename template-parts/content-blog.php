<section id="blog" class="section-padding bg-main">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 m-auto">
        <div class="section-heading">
          <h4 class="section-title">
          <?php
            if( !empty(get_post_meta($post->ID, 'recent-posts-section-title' ))){
              echo get_post_meta($post->ID, 'recent-posts-section-title', true); //Проверка на наличие значения в метаполе
            } else {
              echo "Последние записи";
            };
          ?>
          </h4>
          <div class="line"></div>
          <p>
            <?php 
              if( !empty(get_post_meta($post->ID, 'recent-posts-section-description' ))){
                echo get_post_meta($post->ID, 'recent-posts-section-description', true); //Проверка на наличие значения в метаполе
              } else {
                echo "Мы публикуем в блоге интересные кейсы наших клиентов, возможно, вы найдете много полезного для себя и своего бизнеса";
              };
            ?>
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <?php		
        global $post;

        $query = new WP_Query( [
          'posts_per_page' => 3,
          'post_type'      => 'post',
        ] );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            ?>
            <div class="col-lg-4 col-sm-6 col-md-4">
              <div class="blog-block">
                <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>
                <div class="blog-text">
                  <h6 class="author-name"><span><?php $category = get_the_category(); echo $category[0]->name; ?></span><?php the_author(); ?></h6>
                  <a href="<?php get_the_permalink(); ?>" class="h5 my-2 d-inline-block"> <?php the_title(); ?> </a>
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
            <?php 
          }
        } else {
          ?>
          <p>Тут пока ничего нет =(</p>
          <?php
        }
        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</section>
