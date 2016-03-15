		<footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="built-with text-center">
                <p>This website is brought to you by: </p>
                <a href="#">Bootstrap</a> <a href="#">Sublime Text 2</a> <a href="#">Photoshop</a> <a href="#">Github</a> <br />Google Fonts used <a href="#">Cabin</a> <a href="#">Source Sans Pro</a> and Icons provided by <a href="#">Font Awesome</a> <a href="#">Glyphicons</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom row">
          <div class="container">
            <div class="col-md-12">
              <div class="pull-left">&copy; 2016 tomle.me </div>
              <div class="social-icons pull-right">
                <span>Keep in Touch </span>
                <a href="mailto:hello@tomle.me"><i class="fa fa-envelope"></i></a>
                <a href="//www.linkedin.com/tomle44"><i class="fa fa-linkedin-square"></i></a>
                <a href="//www.github.com/tomle444"><i class="fa fa-github-square"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/all.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/SmoothScroll.js" type="text/JavaScript" rel="JavaScript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/enquire.js" type="text/JavaScript" rel="JavaScript"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: false,
        wrap: false
      });     

      if($('.carousel-inner .item:first').hasClass('active')) {
        $(this).find('.carousel-control.left a').animate({
          opacity: 0               
        });
        $(this).find('.carousel-control.left').fadeOut(1000);
      } else {
        $(this).find('.carousel-control.left a').animate({
          opacity: 1
        });
        $(this).find('.carousel-control.left').fadeIn(1000);
      }
      if($('.carousel-inner .item:last').hasClass('active')) {
        $(this).find('.carousel-control.right a').animate({
          opacity: 0
        });
        $(this).find('.carousel-control.right').fadeOut(1000);
      } else {
        $(this).find('.carousel-control.right a').animate({
          opacity: 1
        });
        $(this).find('.carousel-control.right').fadeIn(1000);
      }

      $('#carousel').on('slid.bs.carousel', '', function() {
        var $this = $(this);
        $this.find('.carousel-control').show();
        if($('.carousel-inner .item:first').hasClass('active')) {
          $(this).find('.carousel-control.left a').animate({
            opacity: 0               
          });
          $(this).find('.carousel-control.left').fadeOut(1000);
        } else {
          $(this).find('.carousel-control.left a').animate({
            opacity: 1
          });
          $(this).find('.carousel-control.left').fadeIn(1000);
        }
        if($('.carousel-inner .item:last').hasClass('active')) {
          $(this).find('.carousel-control.right a').animate({
            opacity: 0
          });
          $(this).find('.carousel-control.right').fadeOut(1000);
        } else {
          $(this).find('.carousel-control.right a').animate({
            opacity: 1
          });
          $(this).find('.carousel-control.right').fadeIn(1000);
        }
      });
    });

</script>

<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_directory'); ?>/dist/js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>