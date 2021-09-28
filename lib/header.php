<?php
/**
 * Custom Header
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         http://wellington-studio.com
 * @author       Chris Parsons <wellington-studio.com>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Custom Header
remove_action( 'wp_head', 'genesis_custom_header_style' );
remove_action( 'genesis_header', 'genesis_do_header' );
