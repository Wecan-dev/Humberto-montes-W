<?php get_header();?>
<section class="main-eventos__background" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/meeting2.jpg');">

  <div class="main-cuadro__title">
    <h1>EVENTOS</h1>
    <p>EXPERIENCIAS DE APRENDIZAJE 100% VIVENCIALES, LIBERADORAS Y MOTIVADORAS.</p>
  </div>

</section>


<section>
  <div class="container">
    <div class="box_general">
      <div class="card-header bg-primary">
        <h3 class="card-title text-center"></h3>
      </div>
      <div class="box_navs">
        <div class="box_nav">
          <h4 class="text-center no-mb">Paises</h4>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link-tabs active" id="nav-todos-tab" data-toggle="tab" href="#nav-todos" role="tab" aria-controls="nav-todos" aria-selected="true">Todos</a>
              <a class="nav-item nav-link-tabs" id="nav-colombia-tab" data-toggle="tab" href="#nav-colombia" role="tab" aria-controls="nav-colombia" aria-selected="false">colombia</a>
              <a class="nav-item nav-link-tabs" id="nav-estadosunidos-tab" data-toggle="tab" href="#nav-estadosunidos" role="tab" aria-controls="nav-estadosunidos" aria-selected="false">Estados unidos</a>
              <a class="nav-item nav-link-tabs" id="nav-mexico-tab" data-toggle="tab" href="#nav-mexico" role="tab" aria-controls="nav-mexico" aria-selected="false">México</a>
              <a class="nav-item nav-link-tabs" id="nav-peru-tab" data-toggle="tab" href="#nav-peru" role="tab" aria-controls="nav-peru" aria-selected="false">Perú</a>
              <a class="nav-item nav-link-tabs" id="nav-venezuela-tab" data-toggle="tab" href="#nav-venezuela" role="tab" aria-controls="nav-venezuela" aria-selected="false">Venezuela</a>
              <a class="nav-item nav-link-tabs" id="nav-venezuela-tab" data-toggle="tab" href="#nav-venezuela" role="tab" aria-controls="nav-venezuela" aria-selected="false">Otros</a>
            </div>
          </nav>
        </div>

        <div class="box_nav">
          <h4 class="text-center no-mb">Columnas</h4>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link-tabs active" id="nav-col1-tab" data-toggle="tab" href="#nav-col1" role="tab" aria-controls="nav-col1" aria-selected="true">1</a>
              <a class="nav-item nav-link-tabs" id="nav-col2-tab" data-toggle="tab" href="#nav-col2" role="tab" aria-controls="nav-col2" aria-selected="false">2</a>
              <a class="nav-item nav-link-tabs" id="nav-col3-tab" data-toggle="tab" href="#nav-col3" role="tab" aria-controls="nav-col3" aria-selected="false">3</a>
              <a class="nav-item nav-link-tabs" id="nav-col4-tab" data-toggle="tab" href="#nav-col4" role="tab" aria-controls="nav-col4" aria-selected="false">4</a>
            </div>
          </nav>
        </div>

        <div class="box_nav">
          <h4 class="text-center no-mb">Más Información</h4>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link-tabs active" id="nav-mostrar-tab" data-toggle="tab" href="#nav-mostrar" role="tab" aria-controls="nav-mostrar" aria-selected="true">Mostrar</a>
              <a class="nav-item nav-link-tabs " id="nav-ocultar-tab" data-toggle="tab" href="#nav-ocultar" role="tab" aria-controls="nav-ocultar" aria-selected="true">Ocultar</a>
            </div>
          </nav>
        </div>


      </div>


    </div>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-todos" role="tabpanel" aria-labelledby="nav-todos-tab">
        <div class="box-grid box-grid__col1">
        <?php $loop = new WP_Query( 'product_type=product&product_cat=eventos' ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="main-card">
                <div class="card-img">
                  <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="main-card__text">
                  <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
                  <p class="text-info">
                    <i class="fa fa-phone">
                      <a href="">
                        0424 2740589
                      </a>
                      <a href="">
                        0424 117 3470
                      </a>
                      <a href="">
                        0412 128 8201
                      </a>
                           
                    </i>
                    <br>
                    <i class="fa fa-envelope-o">
                      <a href="">
                        humbertomontes@gmail.com
                      </a>
                    </i>
                  </p>
                </div>
              </div>
              <?php endwhile; ?>
        </div>
        
      </div>
      <div class="tab-pane fade" id="nav-colombia" role="tabpanel" aria-labelledby="nav-colombia-tab">
         <div class="box-grid box-grid__one">
 <?php $loop = new WP_Query( 'product_type=product&product_cat=Colombia' ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-card">
            <div class="card-img">
              <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-card__text">
              <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
              <p>
                <i class="fa fa-phone">
                0424 2740589  0424 117 3470   0412 128 8201
                </i>
                <br>
                <i class="fa fa-envelope-o">
                humbertomontes@gmail.com
                </i>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
            <div class="tab-pane fade" id="nav-colombia" role="tabpanel" aria-labelledby="nav-colombia-tab">
 <div class="box-grid">
 <?php $loop = new WP_Query( 'product_type=product&product_cat=Colombia' ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-card">
            <div class="card-img">
              <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-card__text">
              <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
              <p>
                <i class="fa fa-phone">
                0424 2740589  0424 117 3470   0412 128 8201
                </i>
                <br>
                <i class="fa fa-envelope-o">
                humbertomontes@gmail.com
                </i>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>



  <div class="tab-pane fade" id="nav-estadosunidos" role="tabpanel" aria-labelledby="nav-estadosunidos-tab">
 <div class="box-grid">
 <?php $loop = new WP_Query( 'product_type=product&product_cat=Estados Unidos' ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-card">
            <div class="card-img">
              <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-card__text">
              <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
              <p>
                <i class="fa fa-phone">
                0424 2740589  0424 117 3470   0412 128 8201
                </i>
                <br>
                <i class="fa fa-envelope-o">
                humbertomontes@gmail.com
                </i>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
            <div class="tab-pane fade" id="nav-mexico" role="tabpanel" aria-labelledby="nav-mexico-tab">
 <div class="box-grid">
 <?php $loop = new WP_Query( 'product_type=product&product_cat=Mexico' ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-card">
            <div class="card-img">
              <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-card__text">
              <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
              <p>
                <i class="fa fa-phone">
                0424 2740589  0424 117 3470   0412 128 8201
                </i>
                <br>
                <i class="fa fa-envelope-o">
                humbertomontes@gmail.com
                </i>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
            <div class="tab-pane fade" id="nav-peru" role="tabpanel" aria-labelledby="nav-peru-tab">
 <div class="box-grid">
 <?php $loop = new WP_Query( 'product_type=product&product_cat=Perú' ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-card">
            <div class="card-img">
              <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-card__text">
              <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
              <p>
                <i class="fa fa-phone">
                0424 2740589  0424 117 3470   0412 128 8201
                </i>
                <br>
                <i class="fa fa-envelope-o">
                humbertomontes@gmail.com
                </i>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>

                 <div class="tab-pane fade" id="nav-venezuela" role="tabpanel" aria-labelledby="nav-venezuela-tab">
 <div class="box-grid">
 <?php $loop = new WP_Query( 'product_type=product&product_cat=Venezuela' ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-card">
            <div class="card-img">
              <img class="img-fluid"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-card__text">
              <h3 class="color-primary no-mt"><?php the_title(); ?></h3>
              <p>
                <i class="fa fa-phone">
                0424 2740589  0424 117 3470   0412 128 8201
                </i>
                <br>
                <i class="fa fa-envelope-o">
                humbertomontes@gmail.com
                </i>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    

    </div>
  </div>
</section>
<section class="main-video container">
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">
        <i class="zmdi zmdi-graduation-cap"></i>
        Conversaciones para el alma // Humberto Montes
      </h3>
    </div>
    <div class="main-video__content">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/4FAugrk09is" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <div class="card-block text-center">
      <p class="color-royal lead">Una muestra de lo que se ha vivido en nuestros seminarios</p>
      <a class="btn btn-danger btn-raised" href="https://www.youtube.com/watch?v=4FAugrk09is&amp;t=19s" target="_blank">
        <i class="fa fa-youtube fa-lg"></i>
        Ver en youtube
      </a>
    </div>
  </div>
</section>
<?php get_footer();?>