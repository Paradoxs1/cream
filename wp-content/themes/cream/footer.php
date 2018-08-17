<?php ?>
  
  <footer class='fot-border'>
        <div class="container clearfix">
            <a href="<?php echo home_url(); ?>" class="logo-fot left"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-fot.png" alt="Логотип"></a>
            <div class="left foot-menu">
                <ul class="menu uppercase">
                    <?php wp_nav_menu( array(
					  'theme_location'  => 'footer_menu-left',
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
					  'items_wrap'      => '<ul>%3$s</ul>',
					  'depth'           => 0,
					  'walker'          => '',
					 ) ); ?>
					<?php wp_nav_menu( array(
					  'theme_location'  => 'footer_menu-right',
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
					  'items_wrap'      => '<ul>%3$s</ul>',
					  'depth'           => 0,
					  'walker'          => '',
					 ) ); ?>
                </ul>
            </div>
            <div class="right fot-social">
                <div class="fot-social-block">
                    <a href="<?php echo ot_get_option('inst'); ?>" class="inst"></a>
                    <a href="<?php echo ot_get_option('fb'); ?>" class="fb"></a>
                    <a href="<?php echo ot_get_option('vk'); ?>" class="vk"></a>
                </div>
                <p class="copy">
                    <?php echo ot_get_option('copy'); ?><br><?php echo ot_get_option('protect'); ?>
                </p>
            </div>
        </div>
    </footer>
    
   	<div id="test-modal" class="white-popup mfp-with-anim mfp-hide">
        <p class="modal-title">Заказать звонок</p>
        <p class="modal-comment">Заполните пожалуйста поля ниже, что бы мы смогли связатся с вами</p>
        <?php echo do_shortcode(ot_get_option('form-popup')); ?>
    </div>
    
    <div id="popup-buy" class="mfp-hide mfp-with-anim white-popup">
		<p class="modal-title">Заполните форму заказа<br>
			<span class="modal-name-certificate"></span>
		</p><br>
		<?php echo do_shortcode(ot_get_option('form-sertificate')); ?>
    </div>
	
	
<?php wp_footer(); ?>

</body>
</html>
