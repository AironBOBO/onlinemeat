<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hub.ondrejsvestka.cz/1-0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2017 14:01:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_title; ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <?php echo $_def_css_files; ?>
  </head>
  <body>
    <!-- navbar-->
    <?php echo $_top_navigation; ?>

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-9 order-2 order-md-1">
            <h1>Contact</h1>
          </div>
          <ul class="breadcrumb d-flex justify-content-start justify-content-md-center col-md-3 text-right order-1 order-md-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
          </ul>
        </div>
      </div>
    </section>
    <main class="contact-page">
      <!-- Contact page-->
      <section class="contact">
        <div class="container">
          <header>
            <p class="lead">
              Are you curious about something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am
              he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.
            </p>
          </header>
          <div class="row">
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-street-map"></div>
              </div>
              <h3>Address</h3>
              <p>13/25 New Avenue<br>New Heaven, 45Y 73J<br>England, <strong>Great Britain</strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-support"></div>
              </div>
              <h3>Call center</h3>
              <p>This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
              <p><strong>+33 555 444 333</strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-envelope"></div>
              </div>
              <h3>Electronic support</h3>
              <p>Please feel free to write an email to us or to use our electronic ticketing system.</p>
              <ul class="list-style-none">
                <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                <li><strong><a href="#">
                      Ticketio
                       - our ticketing support platform</a></strong></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <div id="map">                                       </div>
      <section>
        <div class="container">
          <header class="mb-5">
            <h2 class="heading-line">Contact form</h2>
          </header>
          <div class="row">
            <div class="col-md-7">
              <form id="contact-form" method="post" action="http://hub.ondrejsvestka.cz/1-0/contact.php" class="custom-form form">
                <div class="controls">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name" class="form-label">Your firstname *</label>
                        <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="surname" class="form-label">Your lastname *</label>
                        <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-label">Your email *</label>
                    <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="message" class="form-label">Your message for us *</label>
                    <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-template">Send message</button>
                </div>
              </form>
            </div>
            <div class="col-md-5">
              <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
              <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
              <div class="social">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php echo $_footer; ?>
    <!-- Javascript files-->
    <?php echo $_def_js_files; ?>
    <script>
      $('.viewtocart').click(function(){
        var _product_id=$(this).parent().parent().parent().parent().parent().find('.product_id').val();
        var _product_qty=$(this).parent().parent().parent().parent().parent().find('.product_qty').val();
        var _prodname_name=$(this).parent().parent().parent().parent().parent().find('.product_name').val();
        var _prodname_description=$(this).parent().parent().parent().parent().parent().find('.product_description').val();
        var _prod_price=$(this).parent().parent().parent().parent().parent().find('.product_price').val();
        var _prod_image=$(this).parent().parent().parent().parent().parent().find('.product_image').val();

        $('.modalprodid').val(_product_id);
        $('.modalprodqty').val(_product_qty);
        $('.modalprodname').text(_prodname_name);
        $('.modalproddescription').text(_prodname_description);
        $('.modalprodprice').text('₱ '+_prod_price);
        $('.modalprodimage').attr('src',_prod_image);
        $('#exampleModal').modal('show');

      });

      $('.addtocart').click(function(){
        _product_id = $('.d_productid').val();
        _product_qty = $('.d_qty').val();
        _quantitybuy = $('.quantity-no').val();
        _unit_id = $('.d_unit_id').val();
        if(_product_qty<_quantitybuy){
          alert('Out of Stock');
        }
        else{
          AddToCartFunc(_product_id).done(function(response){
            window.location.href = "ShoppingCart";
          });
        }

      });

      var AddToCartFunc=function(_product_id){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Cart/transaction/create",
            "data":{product_id : _product_id,unit_id : _unit_id }
        });

      };



    </script>
  </body>

<!-- Mirrored from hub.ondrejsvestka.cz/1-0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2017 14:03:32 GMT -->
</html>
