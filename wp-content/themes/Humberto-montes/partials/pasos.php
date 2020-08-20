<?php $args = array( 'post_type' => 'QuienesSomos', 'posts_per_page' => 1);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <section class="main-dropdown">
    <div class="mask3">
      <div class="main-dropdown__text">
        <h1>
          <?php the_title(); ?>
        </h1>
        <p>
        <?php the_field( 'subtitulo' ); ?>
        </p>
      </div>
      <div class="main-dropdown__content container">

      
        <div class="main-dropdown__text--content wow fadeInLeft"  data-wow-delay='.5s'>
          <div>
            <?php the_content(); ?>
          </div>
        </div>


        <div class="content wow fadeInRight"  data-wow-delay='.5s'>
          <div class="accordion">
            <div class="accordion__item open-accordion">
              <div class="accordion__header">
                <p class="accordion-blue">
                  COACHING
                </p>
              </div>
              <div class="accordion__body">
                <p>
                <?php the_field( 'coaching' ); ?>
                </p>
              </div>
            </div>
            <div class="accordion__item">
              <div class="accordion__header">
                <p class="accordion-morado">
                  CONFERENCIAS Y TALLERES
                </p>
              </div>
              <div class="accordion__body">
                <p>
                <?php the_field( 'conferencias_y_talleres' ); ?>
                </p>
              </div>
            </div>
            <div class="accordion__item">
              <div class="accordion__header">
                <p class="accordion-verde">
                  PROCESOS PEDAGÓGICOS
                </p>
              </div>
              <div class="accordion__body">
                <p><?php the_field( 'procesos_pedagogicos' ); ?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="main-dropdown__bottom">
        <div class="main-text-bottom__dropdown">
          <p>
            El inicio de la sabiduría es que el tiempo que empleas en juzgar a otros, lo uses para mejorarte, revisarte y amarte.
          </p>
        </div>

        <a class="btn btn-white" href="<?php echo bloginfo('url'); ?>/quienes-somos">
          CONOCER MÁS
          <i class="fa fa-caret-right fa-lg"></i>
        </a>
      </div>
    </div>

  </section>
<?php endwhile; ?>