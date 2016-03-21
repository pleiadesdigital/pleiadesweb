<?php
/**
 * Footer Widgets
 */


if (! is_active_sidebar('sidebar-2')) {
    return;
}
?>

<div id="supplementary">
    <aside id="footer-widgets" class="footer-widgets widget-area clear" role="complementary">
        <?php dynamic_sidebar('sidebar-2'); ?>
    </aside><!-- id="footer-widgets" -->

</div>

