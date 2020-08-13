<section id="testimonio" class="main-testimonio">
  <div class="main-content__testimonio container">
    <div class="main-testimonio__title">
      <h1>
        Testimonios
      </h1>
    </div>
    <div class="main-testimonio__icono">
      <i class="fa fa-quote-left fa-4x"></i>
    </div>
    <div class="main-testimonio__content">
      <?php $args = array( 'post_type' => 'Testimonios');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="main-testimonio__items">
          <div class="main-testimonio__text">
            <p>
              <em>
               <?php the_content(); ?>
              </em>
              <br>
              <small>
                <em>
                <?php the_title(); ?>
                </em>
              </small>
            </p>

          </div>
        </div>
    <?php endwhile; ?>
  </div>
</section>