<?php get_header(); ?>
	 <main>
        <section class="page-info">
            <div class="container">
                <span class="page-title uppercase"><?php the_title(); ?></span>
                
				<?php 
					the_post();
					the_content( ); 
				?>
            </div>
        </section>
        <section class="pageform">
            <div class="container">
                <p class="pageform-title-top uppercase">Оставьте свои данные и гарантированно</p>
                <p class="pageform-title-bottom uppercase">Получите бесплатную консультацию</p>
                <div id="consultation" class="clearfix">
                    <input type="text" placeholder="Как вас зовут?" class='left uppercase name' name="name" required="required" >
                    <button type="submit" class="right btn-pageform uppercase submit">Записатся на консультацию</button>
                    <input type="text" placeholder="Ваш телефон..." class="right phone uppercase" name="phone" required="required">
                </div>
            </div>
        </section>
        <section class="page-news">
            <div class="container">
                <div class="page-news-container">
                    <div class="page-news-block">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/news-img.jpg" alt="Новости" class="left">
                        <div class="news-block-content">
                            <a href="#">Новость или статья заголовок</a>
                            <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного</p>
                        </div>
                    </div>
                    <div class="page-news-block">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/news-img.jpg" alt="Новости" class="left">
                        <div class="news-block-content">
                            <a href="#">Новость или статья заголовок</a>
                            <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного</p>
                        </div>
                    </div>
                    <div class="page-news-block">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/news-img.jpg" alt="Новости" class="left">
                        <div class="news-block-content">
                            <a href="#">Новость или статья заголовок</a>
                            <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();
