<?php

/**
 * Template to show classic searchform widget
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.1.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<form class="searchform input-group" method="get" action="<?= esc_url(home_url('/')); ?>">
  <input type="text" name="s" class="form-control" placeholder="<?php _e('Search', 'bootscore'); ?>">
  <button type="submit" class="input-group-text <?= apply_filters('bootscore/class/header/button', 'btn btn-outline-secondary', 'search-btn'); ?>"><?= apply_filters('bootscore/header/search-toggler/icon', '<i class="fa-solid fa-magnifying-glass"></i>'); ?> <span class="visually-hidden-focusable">Search</span></button>
</form>
