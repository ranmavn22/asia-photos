<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>
<div class="displayFlex justifySpace headerArea">
    <div class="leftHeader">
        <?php generate_construct_logo()?>
    </div>
    <div class="rightHeader">
        <button type="button" class="btnShowMenu positionR"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <?php wp_nav_menu( ['menu' => 2,'menu_class'=> 'displayFlex justifySpace', 'container_class'=> 'mainMenu'] ) ?>
    </div>
</div>
<div id="content" class="site-content">