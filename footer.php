  <!--footer section start-->


  <footer class="hm2-footer pt-7">
      <div class="hm2-footer-copyright">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-4 col-md-6 order-2 order-lg-1">
                      <div class="copyright-txt mt-3 mt-lg-0">
                          <p class="mb-0 text-white">&copy; 2023 Coolreads. All rights reserved</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 order-1 order-lg-2">
                      <div class="footer-logo text-start text-lg-center">
                          <a href="index.html"><img
                                  src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>"
                                  alt="logo" class="logo"></a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 order-3">
                      <div class="footer-social text-start text-lg-end mt-3 mt-lg-0">
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-dribbble"></i></a>
                          <a href="#"><i class="fab fa-behance"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--footer section end-->
  </div>


  <?php wp_footer(); ?>
  </body>

  </html>