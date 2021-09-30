<?php

/**
 * Template part for displaying footer widhets
 *
 * @package Buonsito_Theme
 */

// Extract $args array from get_template_part
// var_dump($args);
extract($args);

// set containers classes
$section_classes = array('site-footer__section site-footer__widget-area');
$wrapper_classes = array('site-footer__widget-area-wrapper site-footer__widget-area-layout');
$content_classes = array('site-footer__widget-area-column');

// check if footer widget section layout setting is set
if ($footer_widgets_layout) {
    array_push($wrapper_classes, 'site-footer__widget-area-layout-' . $footer_widgets_layout);
}
// check if footer widget section overlay switch is on
if ($footer_widgets_section_overlay_switch) {
    array_push($section_classes, "has-overlay");
}
// check skin settings
if ($footer_widgets_section_skin) {
    array_push($section_classes, 'site-footer__widget-area--' . $footer_widgets_section_skin);
}

// GET CUSTOMIZER FOOTER SETTINGS
$widgets_active = false;
$columns = 0;

// SET NUMBER OF COLUMNS
switch ($footer_widgets_layout) {
    case 'full':
        $columns = 1;
        break;
    case 'two-cols':
    case 'one3rd-two3rd-cols':
    case 'two3rd-one3rd-cols':
    case 'one4th-three4th-cols':
    case 'three4th-one4th-cols':
        $columns = 2;
        break;
    case 'three-cols':
        $columns = 3;
        break;
    case 'four-cols':
        $columns = 4;
        break;
    default;
        $columns = 1;
        break;
}

$i = 1;
while ($i <= $columns) {
    if (is_active_sidebar('footer-sidebar-' . ($i))) {
        $widgets_active = true;
    }
    $i++;
}

if ($footer_widgets_section_activation) {
    if ($widgets_active) :

        $col = 1;
        while ($col <= $columns) :
?>

            <div class="<?php echo ${'footer_widget_area_col_class_' . $col}; ?>">
                <?php
                if (is_active_sidebar('footer-sidebar-' . ($col))) {
                    dynamic_sidebar('footer-sidebar-' . ($col));
                };
                ?>
            </div>

<?php
            $col++;
        endwhile;

    endif;
}
