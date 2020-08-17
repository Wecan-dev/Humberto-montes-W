<div class="main-img__responsive--banner">
  <img class="img-responsive__banner" src="http://www.humbertomontes.com/<?php echo get_template_directory_uri();?>/assets/img/humberto_movil.jpg">
  <img class="img-responsive__banner2" src="<?php echo get_template_directory_uri();?>/assets/img/logo_color.svg">
</div>
<section class="main-banner">

  <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'Banner', 'posts_per_page' => 3);?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
                    <i class="fa fa-amazon fa-lg"></i>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
      </div>
      

      <?php endwhile; ?>
      <!-- <div class="main-banner__item">
        <div class="mask">
          <div class="main-banner__boxtext container">
            <div class="main-banner__text">

              <div class="main-banner__title">
                <p>Desarrollo y Expansión Humano</p>
                <div class="cuadro-banner">
                  <p>
                    A través de experiencias de aprendizaje 100% vivencial, liberadora y motivadora.
                  </p>
                </div>
                <div class="buttom-banner">
                  <a class="btn btn-banner" href="#">
                    CONOCER MÁS
                    <i class="fa fa-caret-right fa-lg"></i>
                  </a>
                </div>
              </div>
              <div class="main-img">

              </div>
            </div>

          </div>

        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/slide01.jpg">
        </div>
      </div>
      <div class="main-banner__item">
        <div class="mask">
          <div class="main-banner__boxtext2 container">
            <div class="main-banner__text">

              <div class="main-banner__title">
                <div class="title-cuadro">
                  <p> <small>Libro</small> <br> 
                  El Triunfo del Alma</p>
                </div>


                <div class="cuadro-banner">
                  <p>
                    Nos invita a traspasar nuestros propios límites y explorar más allá de lo que nos es cómodo. Es una propuesta profunda, muy bien cuidada, basada en el amor puro, el reconocimiento y el valor del ser humano.
                  </p>
                </div>
                <div class="buttom-banner">
                  <a class="btn btn-banner" href="#">
                    CONOCER MÁS
                    <i class="fa fa-caret-right fa-lg"></i>
                  </a>
                  <a class="btn btn-blue__banner" href="#">
                    COMPRAR
                    <i class="fa fa-amazon fa-lg"></i>

                  </a>
                </div>
              </div>
              <div class="main-img">

              </div>
            </div>

          </div>

        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/slide02.jpg">
        </div>
      </div>
      <div class="main-banner__item">
        <div class="mask">
          <div class="main-banner__boxtext3 container">
            <div class="main-banner__text">

              <div class="main-banner__title">
                <p>Diplomado en Facilitación y Coaching Profesional</p>
                <div class="cuadro-banner">
                  <div class="grid-banner">
                    <p>
                      Cohortes abiertas en 6 ciudades del país: Caracas, Valencia, Maracaibo, Puerto Ordaz, Barquisimeto y Coro.
                      Avalada por la <strong> Universidad “Católica Cecilio Acosta” UNICA</strong>
                    </p>
                    <img class="img-grid__banner" src="<?php echo get_template_directory_uri();?>/assets/img/unica.png">
                  </div>

                </div>
                <div class="buttom-banner">
                  <a class="btn btn-banner" href="#">
                    CONOCER MÁS
                    <i class="fa fa-caret-right fa-lg"></i>
                  </a>
                </div>
              </div>
              <div class="main-img">

              </div>
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/slide03.jpg">
        </div>
      </div>  -->
  </div> 
</section>