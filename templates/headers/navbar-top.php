<?php
/**
 * The template part for Navbar
 *
 * This file is for display the HTML for Bootstrap Navbar.
 * This file is only for tests purpose.
 *
 * @see ItalyStrap\Core\Navbar\Navbar in core/class-navbar.php
 *
 * @link www.italystrap.com
 * @since 4.0.0
 *
 * @package Italystrap
 */

namespace ItalyStrap;

use ItalyStrap\Core\Navbar\Bootstrap_Nav_Menu;

?><nav id="top-nav" class="top-nav">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pt-sm vertical-align">
				<?php
				/**
				 * Menù per i contatti
				 */
				wp_nav_menu(
					array(
						'theme_location'	=> 'info-menu',
						'depth'				=> 1,
						'container'			=> 'div',
						'container_class'	=> 'item-left',
						'fallback_cb'       => false,
						'menu_class'		=> 'list-inline social',
						'walker'			=> new Bootstrap_Nav_Menu(),
					)
				);
				/**
				 * Menù per i link sociali
				 */
				wp_nav_menu(
					array(
						'theme_location'	=> 'social-menu',
						'depth'				=> 1,
						'container'			=> 'div',
						'container_class'	=> 'item-right',
						'fallback_cb'       => false,
						'menu_class'		=> 'list-inline social',
						'link_before'		=> '<span class="item-title">',
						'link_after'		=> '</span>',
						'walker'			=> new Bootstrap_Nav_Menu(),
					)
				);
				?>
			</div>
		</div>
	</div>
</nav>
