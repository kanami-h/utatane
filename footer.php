<button onclick="jumpFunction()" id="jumpBtn"><img src="<?php echo get_template_directory_uri(); ?>/images/utatane_icon_pink2.png"><span>TOPへ</span></button>
    <div class="footer">
        <div class="footer__inner">
        </div>
        <div class="footer_sns">
                <a href="https://www.facebook.com/necoutatane/"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/necoutatane"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/necocafe_utatane/"><i class="fab fa-instagram"></i></a>
                <p class="copyright">©️2019 猫カフェうたたね</p>
        </div>
    </div>
    <!-- JavaScript -->
    <?php 
    wp_enqueue_script('utatane-main', get_template_directory_uri() . '/js/main.js');
    wp_footer();
    ?>
</body>
</html>