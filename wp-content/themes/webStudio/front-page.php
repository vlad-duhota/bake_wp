<?php
/*
Template Name: Home page
*/
?>

<?php 
    $page_id = get_the_ID();
    $hero_list = carbon_get_post_meta($page_id, 'hero_list');
    $menu_list = carbon_get_post_meta($page_id, 'menu_list');
    $quality_list = carbon_get_post_meta($page_id, 'quality_list');
    $why_list = carbon_get_post_meta($page_id, 'why_list');
?>

<?php get_header(); ?>
  
<main class="main">
        <section class="hero" id="hero" style = "background: url(<?php echo carbon_get_post_meta($page_id, 'hero_bg')?>)">
            <div class="container">
                <h1 class="hero__title"><?php echo carbon_get_post_meta($page_id, 'hero_title')?></h1>
                    <p class="hero__text"><?php echo carbon_get_post_meta($page_id, 'hero_text')?></p>
                    <a href="#catalog" class="hero__btn btn"><?php echo carbon_get_post_meta($page_id, 'hero_btn')?></a>
                    <?php if(! empty($hero_list)) : ?>
                      <ul class="hero__list">
                      <?php foreach($hero_list as $hero_item) : ?>
                        <li class="hero__item">
                            <div class="hero__item-img">
                                <img src="<?php echo $hero_item['hero_list_img']?>" class="hero__item-image">
                                <div class="hero__item-info">!</div>
                            </div>
                            <div class="hero__item-content">
                                <p class="hero__item-price"><?php echo $hero_item['hero_list_price']?></p>
                                <h3 class="hero__item-title">
                                  <?php echo $hero_item['hero_list_title']?>
                                </h3>
                                <button class="hero__item-btn">Buy</button>
                            </div> 
                      </li>
                      <?php endforeach ?>
                      </ul>
                    <?php endif ?>
            </div>
        </section>
        <section class="catalog" id="catalog">
            <div class="container">
                <h2 class="catalog__title"><?php echo carbon_get_post_meta($page_id, 'menu_title')?></h2>
                <?php if(! empty($menu_list)) : ?>
                  <ul class="catalog__list">
                      <?php foreach($menu_list as $menu_item) : ?>
                        <li class="catalog__item">
                          <div class="catalog__item-content">
                            <img src="<?php echo $menu_item['menu_list_img']?>" class="catalog__img">
                            <?php echo $menu_item['menu_list_name']?>
                            </div>
                          <button class="catalog__btn">Order</button>
                      </li>
                      <?php endforeach ?>
                  </ul>
                <?php endif ?>
            </div>
        </section>
        <section class="quality" style="background: url(<?php echo carbon_get_post_meta($page_id, 'quality_bg')?>)">
            <div class="container">
                <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'quality_title')?></h2>
                <?php if(! empty($quality_list)) : ?>
                  <ul class="quality__list">
                      <?php foreach($quality_list as $quality_item) : ?>
                        <li class="quality__item">
                        <img src="<?php echo $quality_item['quality_list_img']?>" class="quality__img">
                        <ol class="quality__steps">
                        <?php foreach($quality_item['quality_list_steps'] as $quality_step) : ?>
                            <li class="quality__step"><?php echo $quality_step['quality_list_step']?></li>
                          <?php endforeach ?>
                        </ol>
                      </li>
                      <?php endforeach ?>
                  </ul>
                <?php endif ?>
            </div>
        </section>
        <section class="why">
            <div class="container">
                <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'why_title')?></h2>
                <?php if(! empty($why_list)) : ?>
                  <ul class="why__list">
                      <?php foreach($why_list as $why_item) : ?>
                        <li class="why__item">
                          <img src="<?php echo $why_item['why_list_img']?>" class="why__img">
                          <?php echo $why_item['why_list_text']?>
                        </li>
                      <?php endforeach ?>
                  </ul>
                <?php endif ?>
            </div>
        </section>
        <section class="where" id="where">
            <div class="container">
                <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'where_title')?></h2>
                <div class="where__left">
                    <img src="<?php echo carbon_get_post_meta($page_id, 'where_map')?>">
                </div>
                <ul class="where__right where__cols">
                    <li class="where__col">
                        <h3 class="where__col-title"><?php echo carbon_get_post_meta($page_id, 'where_col_1_title')?></h3>
                        <a href="<?php echo carbon_get_post_meta($page_id, 'where_col_1_tel')?>" class="where__link"><?php echo carbon_get_post_meta($page_id, 'where_col_1_tel')?></a>
                        <a href="<?php echo carbon_get_post_meta($page_id, 'where_col_1_tg')?>" class="where__link"><?php echo carbon_get_post_meta($page_id, 'where_col_1_tg')?></a>
                        <p><?php echo carbon_get_post_meta($page_id, 'where_col_1_social')?> <a href="<?php echo carbon_get_post_meta($page_id, 'where_col_1_social_url')?>"><?php echo carbon_get_post_meta($page_id, 'where_col_1_social_url')?></a></p>
                    </li>
                    <li class="where__col">
                        <h3 class="where__col-title"><?php echo carbon_get_post_meta($page_id, 'where_col_2_title')?></h3>
                        <p><?php echo carbon_get_post_meta($page_id, 'where_col_2_time')?></p>
                    </li>
                </ul>
            </div>
        </section>
    </main>

  <?php get_footer() ?>