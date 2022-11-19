<?php
/**
 * Header file for the Sprintec Theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprintec Theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <?php wp_head(); ?> <!-- Função que permite carregar scripts, sem ela nada é possível-->
  </head>
  <!-- Fim das Metatags -->

  <!-- Começo da Página (está interia envolvida em uma DIV)-->
  <body <?php body_class(); ?>>
    <div id="page" class="site">

      <!-- Cabeçalho (página fixa)-->
      <header>

        <section class="search">
          <div class="container">
            Pesquisa
          </div>
        </section>

        <section class="top-bar">
          <div class="container">
            <div class="row">
              <div class="brand col-3">Logo</div>
              <div class="second-colum col-9">
                <div class="account">Conta</div>
                <!-- Estrutura do Sprintec Main Menu -->
                <nav class="main-menu">
                  <?php
                    wp_nav_menu(
                      array(
                          'theme_location' => 'sprintec_theme_main_menu'
                       )
                    );
                   ?>
                </nav>
              </div>
            </div>
          </div>
        </section>

      </header>
