<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tepliy-pol
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="sidebar white-bg">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

