<?php get_header(); ?>

	
      <div id="carousel" class="portfolio carousel slide" data-ride="carousel">
        <div class="container">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="item-inner">
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-gozolt.png" class="portfolio-image" data-id="gozolt"/>
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
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-fpdatasolutions.png" class="portfolio-image" data-id="fpdatasolutions"/>
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
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-thedancesocks.png" class="portfolio-image" data-id="thedancesocks"/>
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

            <div class="item">
              <div class="item-inner">
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-bsasi.png" class="portfolio-image" data-id="bsasi"/>
                <h2>Bay State Alarm Security Integrators</h2>
                <p>BSA Security Integrators is a provider in professional security solutions for their customers ranging from small commercial systems to major industries.</p>
                <ul class="tags">
                  
                  <li>HTML</li> 
                  
                  <li>CSS</li>
                  
                  <li>Magento</li>             

                  <li>Photoshop</li>             
                  
                </ul>
                <p><a class="btn btn-default" href="javascript:void(0);" role="button" data-id="bsasi">View details</a></p>
              </div>
            </div>

            <div class="item">
              <div class="item-inner">
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio/project-tribalhollywood.png" class="portfolio-image" data-id="tribalhollywood"/>
                <h2>Tribal Hollywood</h2>
                <p>Tribal Hollywood is a Men's Jewelry store based out of Los Angeles, California. They specialize in selling designer men's jewelry and accessories.</p>
                <ul class="tags">
                  
                  <li>UI/UX Design</li>   

                  <li>Graphic Design</li>             

                  <li>Photoshop</li>             
                  
                </ul>
                <p><a class="btn btn-default" href="javascript:void(0);" role="button" data-id="tribalhollywood">View details</a></p>
              </div>
            </div>
          </div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
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
          <div id="status"></div>     
          <form action="<?php echo get_template_directory_uri(); ?>/js/contact.php" method="POST" class="contact-form col-md-12">
                  <div class="form-group ">
                      <label for="message">Name</label>
                      <input type="text" name="name" class="form-control " placeholder="Your Name" value=""/>
                  </div>
                  <div class="form-group">
                      <label for="message">Email</label>
                      <input type="text" name="email" class="form-control" placeholder="you@email.com" value=""/>
                  </div>
                  <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="message" class="form-control" placeholder="Your Message..." value=""></textarea>
                  </div>
                  <div class="form-group">
                      <label for="message">Human Test (5 + 3 = ?)</label>
                      <input name="spam" class="form-control" value="" />
                  </div>
                  <div>
                      <input type="submit" class="btn btn-default" value="Get in Touch" />
                  </div>
              </form>
          <!--<a class="btn btn-default" href="mailto:hello@tomle.me">Get in Touch</a>-->
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
