<?php

if (!defined('ABSPATH')) {
   exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== HOME PAGE ===========

Container::make('post meta', 'Main')
   ->show_on_template('front-page.php')       // page_id
   ->add_tab( __('Перша секція'), array(
      Field::make( 'image', 'hero_bg', 'Фон' )
      ->set_value_type('url'),
      Field::make( 'text', 'hero_title', __('Заголовок' )),
      Field::make( 'text', 'hero_text', __('Текст' )),
      Field::make( 'text', 'hero_btn', __('Кнопка' )),
      Field::make( 'separator', 'sep_1', 'Нижня частина' ),
      Field::make( 'complex', 'hero_list', __( 'Список' ) )
    ->add_fields( array(
        Field::make( 'text', 'hero_list_price', __( 'Ціна' ) ),
        Field::make( 'text', 'hero_list_title', __( 'Заголовок' ) ),
        Field::make( 'image', 'hero_list_img', __( 'Картинка' ) )
        ->set_value_type('url'),
    ) )
  ) )
  ->add_tab( __('Меню'), array(
   Field::make( 'text', 'menu_title', __('Заголовок' )),
   Field::make( 'complex', 'menu_list', __( 'Список' ) )
   ->add_fields( array(
       Field::make( 'text', 'menu_list_name', __( 'Назва' ) ),
       Field::make( 'image', 'menu_list_img', __( 'Картинка' ) )
       ->set_value_type('url'),
   ) )
) )
->add_tab( __('Якість'), array(
   Field::make( 'image', 'quality_bg', __('Фон' ))
   ->set_value_type( 'url' ),
   Field::make( 'text', 'quality_title', __('Заголовок' )),
   Field::make( 'complex', 'quality_list', __('Список' ))
   ->add_fields( array(
       Field::make( 'image', 'quality_list_img', __('Картинка' ))
       ->set_value_type( 'url' ),
       Field::make( 'complex', 'quality_list_steps', __('Пункти' ))
      ->add_fields( array(
         Field::make( 'text', 'quality_list_step', __('Текст' )),
      ) )
      ->set_max(4),
   ) )
   ->set_min(3)
   ->set_max(3),
) )
->add_tab( __('Чому ми?'), array(
   Field::make( 'image', 'why_bg', __('Фон' ))
   ->set_value_type( 'url' ),
   Field::make( 'text', 'why_title', __('Заголовок' )),
   Field::make( 'complex', 'why_list', __('Список' ))
   ->add_fields( array(
      Field::make( 'image', 'why_list_img', __('Картинка' ))
      ->set_value_type( 'url' ),
      Field::make( 'text', 'why_list_text', __('Текст' )),
   ) )
   ->set_max(3),
) )
->add_tab( __('Де?'), array(
   Field::make( 'text', 'where_title', __('Заголовок' )),
   Field::make( 'image', 'where_map', __('Карта' ))
   ->set_value_type('url'),
   Field::make( 'separator', 'sep_2', 'Перша колонка' ),
   Field::make( 'text', 'where_col_1_title', __('Заголовок першої колонки' )),
   Field::make( 'text', 'where_col_1_tel', __('Номер телефона' )),
   Field::make( 'text', 'where_col_1_tg', __('Телеграм' )),
   Field::make( 'text', 'where_col_1_social', __('Назва соц мережі' ))
   ->set_width(50),
   Field::make( 'text', 'where_col_1_social_url', __('Посилання на соц мережу' ))
   ->set_width(50),
   Field::make( 'separator', 'sep_3', 'Друга колонка' ),
   Field::make( 'text', 'where_col_2_title', __('Заголовок другої колонки' )),
   Field::make( 'text', 'where_col_2_time', __('Час з ... до' )),
) );




  

Container::make('post meta', __('Porfolio'))
->show_on_template('portfolio-page.php')       
->add_fields( array(
   Field::make( 'complex', 'portfolio', 'Таби' )
   ->add_fields( array(
       Field::make( 'text', 'portfolio_tab_name', 'Назва табу' ),
       Field::make( 'complex', 'portfolio_elements', 'Елементи табу' )
       ->add_fields( array(
         Field::make( 'image', 'portfolio_elements_img', 'Картинка' )
         ->set_value_type('url'),
         Field::make( 'text', 'portfolio_elements_name', 'Назва' ),
         Field::make( 'text', 'portfolio_elements_type', 'Тип' ),
         Field::make( 'text', 'portfolio_elements_text', 'Текст' ),
         Field::make( 'text', 'portfolio_elements_url', 'Посилання' ),
       ) )
   ) )
) );



