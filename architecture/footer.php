<?php 
    // $page_url = get_page_link(); 
    // $lang = $_GET['lang'];
    // $compare_lang = 'ru';
?>
<footer class="footer" id="contacts">
  <div class="footer__top">
    <div class="footer__right">
      <div class="footer__menu">
        <ul class="menu">
          <!-- <li class="menu__item">
            <a href="#" class="menu__link">
              <span class="menu__link-text footer__text"><?php _e('Blog', 'arch'); ?></span>
            </a>
          </li> -->
          <!-- <li class="menu__item">
            <a href="#" class="menu__link">
              <span class="menu__link-text footer__text"><?php _e('For media', 'arch'); ?></span>
            </a>
          </li> -->
          <li class="menu__item">
            <a href="<?php echo home_url() . '/partners'; ?>" class="menu__link">
              <span class="menu__link-text footer__text"><?php _e('Become partner', 'arch'); ?></span>
            </a>
          </li>
          <li class="menu__item">
            <a href="<?php echo home_url() . '/speaker'; ?>" class="menu__link">
              <span class="menu__link-text footer__text"><?php _e('Become speaker', 'arch'); ?></span>
            </a>
          </li>
          <!-- <li class="menu__item">
            <a href="#" class="menu__link">
              <span class="menu__link-text footer__text"><?php _e('Become a volunteer', 'arch'); ?></span>
            </a>
          </li>
          <li class="menu__item">
            <a href="#" class="menu__link">
              <span class="menu__link-text footer__text"><?php _e('FAQ', 'arch'); ?></span>
            </a>
          </li> -->
        </ul>
      </div>
      <div class="pay-logo__menu">
        <div class="top_menu">
          <div class="icon-pay visa-logo"></div>
          <div class="icon-pay mastercard-logo"></div>
          <div class="icon-pay privat-logo"></div>
        </div>
        <!-- <div class="bottom_menu">
          <div class="icon-pay liqpay-logo"></div>
          <div class="icon-pay easypay-logo"></div>
          <div class="icon-pay webmoney-logo"></div>
        </div> -->
      </div>
    </div>
    <div class="footer__center">
      <div class="footer__adress">
        <p class="footer__text"><?php _e('Kyiv, Ukraine, Starokievskaya Str., 10G<br> Vektor Business Center', 'arch'); ?><br>+38-063-439-46-78<br>hello@architectureofthefuture.com</p>
      </div>
    	<div class="footer__social">
    		<a href="https://www.facebook.com/architectureofthefuture/?ref=bookmarks" class="social_linck facebook-icon" target="_blank"></a>
    		<a href="https://www.instagram.com/architectureofthefuture_com/" class="social_linck instagram-icon" target="_blank"></a>
        <a href="https://www.linkedin.com/company/architectureofthefuture/ " class="social_linck linkedin-icon" target="_blank"></a>
    	</div>
    </div>
  </div>
  <div class="footer__left">
    <div class="footer__copyright">
      <p class="footer__text">Architecture of the Future, 2018</p>
    </div>
    <div class="footer__content">
      <a href="policy" class="menu__link">
        <p class="menu__link-text footer__text"><?php _e('Privacy Policy', 'arch'); ?></p>
      </a>
      <span class="line-hurdle">|</span>
      <a href="terms-of-use" class="menu__link">
        <p class="menu__link-text footer__text"><?php _e('Terms of Use', 'arch'); ?></p>
      </a>
    </div>
    <div class="footer__designer">
      <a href="#" class="menu__link">
        <p class="menu__link-text footer__text"><?php _e('Marta Gozha Design', 'arch'); ?></p>
      </a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript">
/* <![CDATA[ */
// js, если надо вставить в футер
/* ]]> */
</script>
</body>
</html>