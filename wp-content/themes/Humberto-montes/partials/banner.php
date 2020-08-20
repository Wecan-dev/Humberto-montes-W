<div class="main-img__responsive--banner">
  <img class="img-responsive__banner" src="http://www.humbertomontes.com/<?php echo get_template_directory_uri();?>/assets/img/humberto_movil.jpg">
  <img class="img-responsive__banner2" src="<?php echo get_template_directory_uri();?>/assets/img/logo_color.svg">
</div>
<?php $args = array( 'post_type' => 'Banner', 'posts_per_page' => 3);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<section class="main-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">

  <div class="main-banner__content">
    <div class="main-banner__item">
        <div class="mask">
          <div class="main-banner__boxtext2 container">
            <div class="main-banner__text">

              <div class="main-banner__title">
                <div class="title-cuadro">
                  <p> <small><?php the_field('categoria');?></small> <br> 
                  <?php the_title();?></p>
                </div>
                <div class="cuadro-banner">
                  <?php the_content();?>
                </div>
                <div class="buttom-banner">
                  <?php $boton_de_conoce_mas = get_field( 'boton_de_conoce_mas' ); ?>
                  <?php if ( $boton_de_conoce_mas ) : ?>
                    <a class="btn btn-banner" href="<?php echo esc_url( $boton_de_conoce_mas['url'] ); ?>" target="<?php echo esc_attr( $boton_de_conoce_mas['target'] ); ?>"><?php echo esc_html( $boton_de_conoce_mas['title'] ); ?>
                    <i class="fa fa-caret-right fa-lg"></i>
                    </a>
                  <?php endif; ?>
                  <?php $boton_de_comprar = get_field( 'boton_de_comprar' ); ?>
                  <?php if ( $boton_de_comprar ) : ?>
                    <a class="btn btn-blue__banner" href="<?php echo esc_url( $boton_de_comprar['url'] ); ?>" target="<?php echo esc_attr( $boton_de_comprar['target'] ); ?>"><?php echo esc_html( $boton_de_comprar['title'] ); ?>
                    <!-- <i class="fa fa-amazon fa-lg"></i> -->
                    <i class="fa fa-caret-right fa-lg"></i>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="main-banner__img">
          <!-- <img src=""> -->
        </div>
      </div>
      

    </div> 
  </section>
  <?php endwhile; ?>