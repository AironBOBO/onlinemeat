<!-- Overview Popup    -->
<div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="icon-close"></i></span></button>
    </div>
    <div class="modal-body">
      <div class="row d-flex align-items-center">
        <input type="hidden" class="modalprodid" value="">
        <input type="hidden" class="modalprodqty" value="">
        <div class="image col-lg-5"><img alt="..." class="img-fluid d-block modalprodimage"></div>
        <div class="details col-lg-7">
          <h2><modalprodname class="modalprodname"></modalprodname></h2>
          <ul class="price list-inline">
            <li class="list-inline-item current"><modalprodprice class="modalprodprice"></modalprodprice></li>
          </ul>
          <p class="modalproddescription"></p>
          <div class="d-flex align-items-center">
            <div class="quantity d-flex align-items-center">
              <div class="dec-btn">-</div>
              <input type="text" value="1" class="quantity-no">
              <div class="inc-btn">+</div>
            </div>
            <select id="size" class="bs-select">
              <option value="small">Small</option>
              <option value="meduim">Medium</option>
              <option value="large">Large</option>
              <option value="x-large">X-Large</option>
            </select>
          </div>
          <ul class="CTAs list-inline">
            <?php if($this->session->user_fullname){ ?>
            <li class="list-inline-item"><a href="javascript:void()" class="btn btn-template wide addtocart"> <i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
            <?php } else{ ?>
            <li class="list-inline-item"><a href="#" class="btn btn-template wide"> <i class="fa fa-shopping-cart"></i>Login to Buy Product</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
<!-- Footer-->
<footer class="main-footer">
  <!-- Service Block-->
  <div class="services-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
          <div class="item d-flex align-items-center">
            <div class="icon"><i class="icon-truck"></i></div>
            <div class="text">
              <h6 class="no-margin text-uppercase">Free shipping &amp; return</h6><span>Free Shipping over $300</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
          <div class="item d-flex align-items-center">
            <div class="icon"><i class="icon-coin"></i></div>
            <div class="text">
              <h6 class="no-margin text-uppercase">Money back guarantee</h6><span>30 Days Money Back Guarantee</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
          <div class="item d-flex align-items-center">
            <div class="icon"><i class="icon-headphones"></i></div>
            <div class="text">
              <h6 class="no-margin text-uppercase">020-800-456-747</h6><span>24/7 Available Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Block -->
  <div class="main-block">
    <div class="container">
      <div class="row">
        <div class="info col-lg-4">
          <div class="logo">Gerona Marketplace</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="social-menu list-inline">
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
        <div class="site-links col-lg-2 col-md-6">
          <h5 class="text-uppercase">Shop</h5>
          <ul class="list-unstyled">
            <li> <a href="#">Meat</a></li>
            <li> <a href="#">Vegetables</a></li>
            <li> <a href="#">Fish</a></li>
          </ul>
        </div>
        <div class="site-links col-lg-2 col-md-6">
          <h5 class="text-uppercase">Company</h5>
          <ul class="list-unstyled">
            <li> <a href="MyAccount">Login</a></li>
            <li> <a href="#">Register</a></li>
            <li> <a href="#">Wishlist</a></li>
            <li> <a href="#">Our Products</a></li>
            <li> <a href="#">Checkouts</a></li>
          </ul>
        </div>
        <div class="newsletter col-lg-4">
          <h5 class="text-uppercase">Daily Offers & Discounts</h5>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
          <form action="#" id="newsletter-form">
            <div class="form-group">
              <input type="email" name="subscribermail" placeholder="Your Email Address">
              <button type="submit"> <i class="fa fa-paper-plane"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="copyrights">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="text col-md-6">
          <p>&copy; 2017 <a href="#" target="_blank">Gerona Marketplace </a> All rights reserved.</p>
        </div>
        <div class="payment col-md-6 clearfix">
          <ul class="payment-list list-inline-item pull-right">
            <li class="list-inline-item"><img src="assets/images/visa.svg" alt="..."></li>
            <li class="list-inline-item"><img src="assets/images/mastercard.svg" alt="..."></li>
            <li class="list-inline-item"><img src="assets/images/paypal.svg" alt="..."></li>
            <li class="list-inline-item"><img src="assets/images/western-union.svg" alt="..."></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm d-none d-lg-block"><i class="fa fa-cog fa-2x"></i></button>
<div id="style-switch" class="collapse">
  <h4 class="text-uppercase">Select theme colour</h4>
  <form class="mb-3">
    <select name="colour" id="colour" class="form-control style-switch-select">
      <option value="">select colour variant</option>
      <option value="default">violet</option>
      <option value="pink">pink</option>
      <option value="green">green</option>
      <option value="red">red</option>
      <option value="sea">sea</option>
      <option value="blue">blue</option>
    </select>
  </form>
  <p><img src="assets/images/template-mac.png" alt="" class="img-fluid"></p>
  <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
</div>
