<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprintec Theme
 */
?>

<!-- Rodapé (página fixa) -->
<footer>

  <section class="footer-widgets">
    <div class="">
      <div class=""></div>
    </div>
  </section>

<!-- 2° Menu Copyright-->
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="copyright-text col 12 col-md-6">Copyright</div>
        <div class="footer-menu col-12 col-md-6 text-left text-md-right">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'sprintec_theme_footer_menu')
            );
          ?>
        </div>
      </div>
    </div>
  </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
