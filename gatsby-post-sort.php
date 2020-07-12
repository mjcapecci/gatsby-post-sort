<?php
/**
 * Plugin Name: Gatsby Post Sort
 * Description: Create custom post ordering for Gatsby content hydration.
 * Version: 1.0.0
 * Author: Michael Capecci
 * Author URI: https://www.michaelcapecci.com
 * Text Domain: gatsbypostsort
 * Domain Path: /languages/
 * Requires at least: 5.3.0
 * Requires PHP: 7.1
 * License: GPL-3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require 'includes/register_fields.php';

