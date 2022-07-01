<footer>
  <div class="container">
    <div class="footer-wrapper">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8">
              <div class="footer-block">
                <div class="logo">
                  <img src="images/logo-white.png" alt="">
                </div>
                <div class="about">
                  <p>
                    With over 30 years of experience tiling, we strive to provide you with the highest standard of
                    quality work available. We work with you from start to finish to guarantee you get the result you’re
                    after and gladly look forward to helping each of our clients with their renovations.
                  </p>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="footer-block">
                <div class="footer-title">
                  <h3>Quick Links</h3>
                </div>
                <ul class="links information menu">
                  <li>
                    <a href="about" class="info">About Us</a>
                  </li>
                  <li>
                    <a href="services" class="info">Services</a>
                  </li>
                  <li>
                    <a href="gallery" class="info">Gallery</a>
                  </li>
                  <li>
                    <a href="contact" class="info">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="footer-block">
                <div class="footer-title">
                  <h3>Get in Touch</h3>
                </div>

                <ul class="links information">
                  <li>
                    <a href="tel:<?= $number; ?>" class="info"><i class="icon icon-phone"></i><?= $number; ?></a>
                  </li>
                  <li>
                    <a href="mailto:<?= $email; ?>" class="info"><i class="icon icon-envelope"></i><?= $email; ?></a>
                  </li>
                  <li>
                    <div class="info"><i class="icon icon-location-pin"></i><?= $address; ?></div>
                  </li>
                  <li>
                    <ul class="links social-links">
                      <li>
                        <a href="" target="_blank">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <i class="fab fa-pinterest"></i>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-block">
                <div class="footer-title">
                  <h3>Review Us On</h3>
                </div>
                <ul class="list d-flex">
                  <li>
                    <a href="#" class="link" target="_blank">
                      <img src="images/review/review6.jpg" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link" target="_blank">
                      <img src="images/review/review1.jpg" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link" target="_blank">
                      <img src="images/review/review4.jpg" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link" target="_blank">
                      <img src="images/review/review2.jpg" alt="">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <div class="mobile-call-button">
    <a href="tel:<?= $number; ?>"><i class="fa fa-phone"></i></a>
  </div>
</footer>


<div class="footer-bottom">
  <div class="container">
    <div class="wrapper">
      <div class="block">
        <div>© Copyright <?php date('Y'); ?>. <a href="./"><?= $company; ?></a></div>
      </div>
      <div class="develop">
        <div class="text-center"><span class="p-divider"></span>Designed & Developed by</div>
        <a href="https://www.codecrewz.com.au" target="_blank">Code Crewz Technology Pty Ltd</a>
      </div>
    </div>
  </div>
</div>



<div class="scrollevent"><a class="scrollToTop" href="#" style="display: block;">
    <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button></a>
</div>

<!-- Jquery Links -->
<!-- Jquery Source-->
<script type="text/javascript" src="js/jquery-v2.2.2.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</script>

<!-- Jquery Plugins-->
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/slick-animation.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/isotope.min.js"></script>
<!-- Custom Jquery-->
<script type="text/javascript" src="js/main.js"></script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->