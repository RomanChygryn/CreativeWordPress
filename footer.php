      <footer class="footer">
        <div class="container">
          <p class="footer__copy"><?php the_field('footer_left_text'); ?></p>
          <p class="footer__designed"><?php the_field('footer_right_text'); ?><img src="<?php the_field('footer_image'); ?>" class="footer__designed__icon" /><span><a class="footer__designed__link" href="<?php the_field('footer_link'); ?>"><?php the_field('link_text'); ?></a></span></p>
        </div>
      </footer>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnN94JNOIFZSDcDAd-G5cS5kA2P5aAkkY&callback=initMap" async defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js" type="text/javascript"></script>
  </body>
</html>
