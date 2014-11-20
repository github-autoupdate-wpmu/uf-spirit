<?php
/**
 * Template Name: Testimonials Page Template
 *
 * @package WordPress
 * @subpackage template-testimonials
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-template-testimonials'));

get_header();
echo $layout->apply_layout();
get_footer();