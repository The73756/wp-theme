<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="banner-area banner-3">
  <div class="overlay dark-overlay"></div>
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="banner-title">Упс... Вы попали куда то не туда...</h1>
              <p>
              К сожалению, запрашиваемая страница не найдена. Возможно, вы перешли по ссылке, в которой была допущена ошибка, или ресурс был удален. Попробуйте перейти на главную страницу.
              </p>
              <a href="<?php echo home_url(); ?>" class="btn btn-white btn-circled">Перейти на главную</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->

<?php get_footer(); ?>