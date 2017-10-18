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
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>My Orders</h1>
            <p class="lead text-muted">You currently have <?php echo (count($myoders)==0) ? 'No' : count($myoders); ?> Orders </p>
          </div>
          <ul class="breadcrumb d-flex justify-content-start justify-content-lg-center col-lg-3 text-right order-1 order-lg-2">
            <li class="breadcrumb-item"><a href="Index">Home</a></li>
            <li class="breadcrumb-item active">My Orders</li>
          </ul>
        </div>
      </div>
    </section>

		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="block-body order-summary">
						<h6 class="text-uppercase">My Account</h6>
						<ul class="order-menu list-unstyled">
							<li class="d-flex justify-content-between"><a href="Profile">Profile</a></li>
							<li class="d-flex justify-content-between"><a href="MyOrders">Orders</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="cart">
						<div class="cart-holder">
							<div class="basket-header">
								<div class="row">
									<div class="col-4">Product</div>
									<div class="col-2">Price</div>
									<div class="col-2">Quantity</div>
									<div class="col-2">Discount</div>
									<div class="col-2">Unit Price</div>
								</div>
							</div>
							<div class="basket-body">
								<?php
									$ordertotal=0; $shippingfee=50;
									foreach($myoders as $row){
								?>
								<div class="item row d-flex align-items-center">
									<div class="col-4">
										<div class="d-flex align-items-center"><img style="height:50px;" src="<?php echo $row->image1; ?>" alt="..." class="img-fluid">
											<div class="title"><a href="detail.html">
													<h6><?php echo $row->product_name; ?></h6><span class="text-muted">Weight: <?php echo $row->unit_name; ?></span></a></div>
										</div>
									</div>
									<div class="col-2"><span>₱ <?php echo number_format($row->price,2); ?></span></div>
									<div class="col-2"><span><?php echo $row->order_qty; ?></span></div>
									<div class="col-2"><span>₱&nbsp<?php echo $discount = number_format( (($row->price*$row->order_qty)*$row->disc_decimal),2); ?></span></div>

									<div class="col-2"><span>₱&nbsp<?php echo number_format( ($row->price*$row->order_qty)-$discount,2); ?></span></div>
								</div>

								<?php
									$ordertotal+=($row->price*$row->order_qty)-$discount;
								}
								?>
								</form>
							</div>
						</div>
						<div class="total row"><span class="col-md-10 col-2">Total</span><span class="col-md-2 col-10 text-primary">₱ <?php echo number_format($ordertotal,2); ?></span></div>
					</div>
				</div>
			</div>
		</div>


    <?php echo $_footer; ?>
    <!-- Javascript files-->
    <?php echo $_def_js_files; ?>
    <script>
    </script>
  </body>

<!-- Mirrored from hub.ondrejsvestka.cz/1-0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2017 14:03:32 GMT -->
</html>
