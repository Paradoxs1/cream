<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<meta name="keywords" content="">

<?php wp_head(); ?>
</head>

<?php if(is_front_page()) : ?>
	<body <?php body_class(); ?>>
<?php else : ?>
	<body <?php body_class('page-body'); ?>>
<?php endif; ?>

<?php if(is_front_page()) : ?>
    <header class="head-home">
        <div class="container">
            <div class="head-top clearfix">
                <div class="logo left">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="Логотип"></a>
                </div>
                <div class="right menu-block">
                     <?php wp_nav_menu( array(
                        'theme_location'  => 'menu',
                        'menu'            => '', 
                        'container'       => false, 
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul class="menu">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                       ) ); ?>
                </div>
            </div>
            <div class="title clearfix">
                <div class="right call">
                    <span class="inline-popups"><a href="#test-modal" class="modal-call popup-modal"  data-effect="mfp-zoom-out"><span>Обратный звонок</span></a></span>
                    <p class="tel"><a href="tel:+38 (095) 877-46-49"><span>+38 (095)</span> 877-46-49</a></p>
                    <p class="tel tel2"><a href="tel:+38 (093) 776-77-42"><span>+38 (093)</span> 776-77-42</a></p>
                    <p class="scype"><a href="skype:cream_Professional">cream_Professional</a></p>
                </div>
                <div class="right title-page">
                    <p class="title-top">Подготовка Специалистов</p>
                    <p class="title-bottom">В Области Салонного Бизнеса</p>
                </div>
            </div>
            <div class="head-bottom clearfix">
                <div class="left proffesional-block">
                    <p class="profesional-title">cream profesional</p>
                    <?php if (ot_get_option('head-top')) { ?>
                        <p class="profesional-text"><?php echo ot_get_option('head-top'); ?></p>
                    <?php } ?>
                    <?php if (ot_get_option('head-middle')) { ?>
                        <p class="profesional-text"><?php echo ot_get_option('head-middle'); ?></p>
                    <?php } ?>
                    <?php if (ot_get_option('head-bottom')) { ?>
                        <p class="profesional-text"><?php echo ot_get_option('head-bottom'); ?></p>
                    <?php } ?>
                    
                </div>
                <div class="right form-container">
                    <p class="form-title-top">Заполните форму и получите</p>
                    <p class="form-title-bottom">Гарантированную скидку</p>
                    <p class="form-text">Заполняя форму вы получите бесплатную консультацию, а так же гарантированную скидку на обучение или на любую из наших дополнительных услуг</p>
                    <?php echo do_shortcode(ot_get_option('form-head')); ?>
                    <p class="form-comment">Ваши данные защищены и не будут переданы третьим лицам. <a href="#">Политика конфиденциальности</a></p>
                </div>
            </div>
        </div>   
    </header>
<?php else : ?>
    <header>
        <div class="container">
            <div class="head-top clearfix">
                <div class="logo left">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-big.png" alt="Логотип"></a>
                </div>
                <div class="page-call-container call clearfix">
					<span class="inline-popups"><a href="#test-modal" class="right modal-call popup-modal" data-effect="mfp-zoom-out"><span>Обратный звонок</span></a></span>
                    <div class="page-block right">
                        <p class="tel"><a href="tel:+38 (095) 877-46-49"><span>+38 (095)</span> 877-46-49</a></p>
                        <p class="tel tel2"><a href="tel:+38 (093) 776-77-42"><span>+38 (093)</span> 776-77-42</a></p>
                    </div>
                    <div class="page-social-head right">
                        <p class="uppercase">Следите за нами:
                            <a href="<?php echo ot_get_option('inst'); ?>" class="h-inst"></a>
                            <a href="<?php echo ot_get_option('fb'); ?>" class="h-fb"></a>
                            <a href="<?php echo ot_get_option('vk'); ?>" class="h-vk"></a>
                        </p>
                    </div>
                </div>
                <div class="menu-block right">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'menu',
                        'menu'            => '', 
                        'container'       => false, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => '', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul class="menu">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                       ) ); ?>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>

