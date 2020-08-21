<?php 

if(is_user_logged_in() != NULL)
{
  header('Location: http://localhost/Humberto-montes-W');
} 

?>

<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

?>
<?php  get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<section id="iniciar-sesion" class="margin-top-page">
  <div class="container">
   

    <div class="login-box">

    <div class="title-page text-center">
      <h2><strong>Iniciar Sesión</strong></h2>
     
    </div>
      <div class="login-block">

        <!--        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div> -->
        

        <div class="login-block main-login -narrow">

          <?php

          if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>



<?php endif; ?>


<form class="login-form login-form-sesion" method="post">

  <?php do_action( 'woocommerce_login_form_start' ); ?>
  <div class="form-group">
    <label for="username" class="">Nombre de usuario:*</label>
    <input type="text"  name="username" id="username" autocomplete="username" placeholder="" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>     
  </div>       
  <div class="form-group">  
    <label for="username" class="">Contraseña:*</label>
    <input type="password" placeholder="" name="password" id="password" autocomplete="current-password" />
    
  </div> 
  
  <?php do_action( 'woocommerce_login_form' ); ?>
  
  <p class=" form-row-sesion ">
    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
      
      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" checked="checked" /> <strong><?php esc_html_e( 'Recuerdame', 'woocommerce' ); ?></strong>
    </label>
    <a class="forgot" href="<?php echo get_home_url() ?>/index.php/olvidaste-contrasena">Olvidaste tu contraseña?</a> 
  </p>
  <div class="action-login text-center">  
    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
    <button type="submit" class="btn-blue btn-deletedborder" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Iniciar Sesión', 'woocommerce' ); ?></button>
  </div>

  <?php do_action( 'woocommerce_login_form_end' ); ?>

</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>



<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

<div class="main-sesion__politicas">
  <p class="font-general">Al clickear en ‘Registrarte’ aceptas nuestros 
    <a href="">términos y condiciones</a>, <a href="">políticas de privacidad</a> y 
    <a href="">tratamiento de datos</a>.
  </p>
</div>
<div class="main-sesion__question">
  <p class="font-general">No estas Registrado?</p>
  <div class="main-goup__btn">

    <a  class="btn_custom btn--medium btn--filledTransparentB" href="<?php echo get_home_url() ?>/index.php/registrarse"> Crea una en segundos</a>
  </div>
</div>
</div>


</div>

</div>
</section>

<section id="btn-top">
  <span class="ir-arriba glyphicon glyphicon-chevron-up">
  </span></section>

  <?php  get_footer(); ?>

