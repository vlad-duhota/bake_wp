<footer class="footer">
        <div class="container">
                <div class="footer__logo"> 
                    <a href="index.html"><?php echo carbon_get_theme_option('logo_big_text')?></a>
                    <?php echo carbon_get_theme_option('logo_small_text')?>
                </div>
            <a href="#" class="footer__copy"><?php echo carbon_get_theme_option('copyright')?></a>
        </div>
    </footer>
    <div class="pop-up">
        <div class="pop-up__body">
            <h2 class="pop-up__title">
            <?php echo carbon_get_theme_option('logo_big_text')?>
            </h2>
            <button class="pop-up__close-btn">+</button>
            <form class="pop-up__form">
                <input type="text" class="pop-up__input pop-up__addres-input" placeholder="Your adress">
                <input type="text" class="pop-up__input pop-up__card-input" placeholder="Your card">
                <input type="submit" class="pop-up__submit-btn btn" value="Shop now">
            </form>
            <img src="img/catalog_1.png" class="pop-up__img">
        </div>
    </div>
    <div class="preloader">
        <div class="loader"></div>
        <a href="index.html"><?php echo carbon_get_theme_option('logo_big_text')?></a>
            <?php echo carbon_get_theme_option('logo_small_text')?>
    </div>
    <?php wp_footer()?>
</body>
</html>