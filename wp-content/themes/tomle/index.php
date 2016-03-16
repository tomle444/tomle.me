<?php get_header(); ?>

	
      <div id="carousel" class="portfolio carousel slide" data-ride="carousel">
        <div class="container">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="item-inner">
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-gozolt.png" />
                <h2>GoZolt</h2>
                <p>A startup company that has created the world's smallest, lightest laptop charger.</p>
                <ul class="tags">

                  <li>Responsive Web Design</li>

                  <li>HTML</li>

                  <li>CSS</li>

                  <li>Jquery</li>

                  <li>Magento</li>

                  <li>Wordpress</li>

                </ul>
                <p>               
                  <a class="btn btn-default" href="javascript:void(0);" role="button" data-id="gozolt" >View details</a>
                </p>
              </div>
            </div>
            <div class="item">
              <div class="item-inner">
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-fpdatasolutions.png" />
                <h2>Focal Pointe Data Solutions</h2>
                <p>A service technology company providing data management, analytics and business intelligence solutions for hospital pharmacies. </p>
                <ul class="tags">
            
                  <li>Responsive Web Design</li>
                  
                  <li>HTML</li>
                  
                  <li>CSS</li>
                  
                  <li>Jquery</li>
                  
                  <li>Jekyll</li>
                  
                </ul>
                <p><a class="btn btn-default" href="javascript:void(0);" role="button" data-id="fpdatasolutions">View details</a></p>
              </div>
            </div>

            <div class="item">
              <div class="item-inner">
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-thedancesocks.png" />
                <h2>The Dance Socks</h2>
                <p>A product that lets you dance using a sock that goes over your regular shoes.</p>
                <ul class="tags">
            
                  <li>Responsive Web Design</li>
                  
                  <li>HTML</li>
                  
                  <li>CSS</li>
                  
                  <li>Magento</li>             
                  
                </ul>
                <p><a class="btn btn-default" href="javascript:void(0);" role="button" data-id="thedancesocks">View details</a></p>
              </div>
            </div>
          </div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
          <!-- Controls -->
          <div class="left carousel-control" data-target="#carousel" role="button" data-slide="prev">
            <a>
              <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
          </div>
          <div class="right carousel-control" data-target="#carousel" role="button" data-slide="next">
            <a>
              <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <div id="contact" class="call-to-action contact">
      <div class="call-to-action-overlay"></div>
        <div class="container">
          <h1>Contact</h1>
          <p>Get in touch with me about any projects you have in mind. I am available to take on new work and to help in any way I can to get goals accomplished. </p>
          <p class="large">Let’s work together and create something.</p>
          <a class="btn btn-default" href="mailto:tomle444@gmail.com">Send</a>
        </div>      
      </div>

      <div id="about" class="about">
        <div class="container">
          <h1>About</h1>
          <p>With over 10 years of professional experience in the web and graphic design industry, I am always finding myself learning new things everyday. I enjoy working in an industry where I can be creative on a daily basis. I am currently a full time front-end web developer at a Magento Hosting and Development company.</p>
          <p>My specialties include HTML, CSS, Responsive Web Design, Graphic Design, Magento, Wordpress, Javascript, and Jquery.</p>
          
        </div>
      </div>



<?php get_footer(); ?>
