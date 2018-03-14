<?php
/**
 * Template part for off canvas menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="title-bar hide-for-medium">
  <div class="title-bar-left">
    <button class="menu-icon" type="button" data-open="offCanvas"></button>
    <span class="title-bar-title">DPSG Sinsheim Rohrbach</span>
  </div>
</div>
<nav class="off-canvas position-left" id="offCanvas" data-off-canvas data-position="left" data-transition="overlap" role="navigation">
  <?php foundationpress_mobile_nav(); ?>
</nav>

<div class="off-canvas-content" data-off-canvas-content>
