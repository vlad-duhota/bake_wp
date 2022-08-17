<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __('Theme options', 'crb') )
->add_fields( array(
    Field::make( 'text', 'logo_big_text', __('Великий текст логотипу'))
    ->set_width(50),
    Field::make( 'text', 'logo_small_text', __('Малий текст логотипу'))
    ->set_width(50),
    Field::make( 'text', 'copyright', __('Копірайт')),
) );