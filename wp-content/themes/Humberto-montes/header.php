
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Humberto Montes</title>

  <!-- Behavioral Meta Data -->
	<meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#24272c">
	
	<!-- Google Meta Data -->
	<meta name='description', content=''>
	<meta name='keywords', content=''>
	<meta name="robots" content="index, follow">

	<!-- Blog Meta Data -->
	<meta name="dc.language" content="es">
	<meta name="dc.source" content="">
	<meta itemprop="url" content="">

	<!-- Twitter Card Meta Data -->
	<meta content='summary' name='twitter:card'>
	<meta content='Humberto Montes' name='twitter:site'>
	<meta content='Humberto Montes' name='twitter:title'>
	<meta content='Humberto Montes' name='twitter:description'>

	<!-- Open Graph Meta Data -->
	<meta content='website' property='og:type'>
	<meta content='' property='og:image'>
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta content='' property='og:description'>
	<meta property="og:type" content="">
	<meta property="og:image" content="">

  <!-- Links -->
  <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/offcanvas.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css">

  <link rel="stylesheet" type="text/css" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
  <?php wp_head(); ?>
</head>
<body>
  <header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
        <div class="container">
          <div class="main-brand">
            <div class="navbar-brand" >
              <a href="<?php echo bloginfo('url'); ?>">
              <img class="nombre-logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg"> 
              </a>
            </div>
            <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
          <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-autos">
              <div class="visible-xs">
                <div class="main-nav__img">
                  <img class="img-nav__xs" src="http://www.humbertomontes.com/assets/img/bg-slidebar.png" alt="">
                </div>
                <div class="main-img__logo">
                  <img class="xs-img" src="assets/img/logo.svg">
                </div>
              </div>

<?php if(is_home()): ?>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile active" href="<?php echo bloginfo('url'); ?>/quienes-somos">Humberto Montes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/eventos">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/diplomados">Diplomados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/peregrinaje">Peregrinaje</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/libros">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="#testimonio">Testimonios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="#contacto">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="#" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
              </li>

<?php else: ?>

       <li class="nav-item">
                <a class="nav-link nav-link__mobile active" href="<?php echo bloginfo('url'); ?>/quienes-somos">Humberto Montes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/eventos">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/diplomados">Diplomados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/peregrinaje">Peregrinaje</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/libros">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/#testimonio">Testimonios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url'); ?>/#contacto">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link__mobile" href="#" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
              </li>
<?php endif; ?>

              <div class="main-iconos__content">
                <div class="title-iconos">
                  <h4>
                    Social Links
                  </h4>
                </div>
                <div class="main-redes__iconos">

                  <a class="icono-facebook" href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a class="icono-twitter" href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </a>
                <a class="icono-youtube" href="#">
                  <i class="fa fa-youtube"></i>
                </a>
                <a class="icono-instagram" href="#">

                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>



          </ul>

        </div>

      </div>

    </nav>
  </header>
