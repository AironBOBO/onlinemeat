<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title><?php echo $_title; ?></title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php echo $_def_css_files; ?>


</head>

<body class="boxed">
<div id="wrapper">

<?php echo $_top_navigation; ?>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<div class="four columns">
			<!-- Sidebar -->
			<div class="widget margin-top-0">
				<h3 class="headline">My Account</h3><span class="line"></span><div class="clearfix"></div>

				<ul id="categories">

					<ul id="categories">
							<li><a href="MyInfo">My Info <span></span></a></li>
							<li><a href="MyOrders">My Orders <span></span></a></li>
					</ul>

				</ul>
				<div class="clearfix"></div>

			</div>
		</div>
		<!-- Billing Details / Enc -->


	<!-- Checkout Cart -->
	<div class="twelve columns">
		<div class="checkout-section cart">My Orders</div>
		<!-- Cart -->
		<table class="checkout cart-table responsive-table">

			<tr>
				<th class="hide-on-mobile">Item</th>
				<th></th>
				<th>Price</th>
				<th>Qty</th>
				<th>Total</th>
				<th>Order Status</th>
			</tr>

			<?php
			$totalprod=0;
			foreach($myoders as $row){
				?>
				<tr>
					<td class="hide-on-mobile"><img style="height:80px;width:140px;" src="<?php echo $row->image1; ?>" alt=""/></td>
					<td class="cart-title"><a href="ProductDetails?getprodinfo=<?php echo $row->product_id; ?>"><?php echo $row->product_name; ?></a></td>
					<td><?php echo '₱'.number_format($row->price); ?></td>
					<td class="qty-checkout"><?php echo $row->order_qty; ?></td>
					<td class="cart-total"><?php echo '₱'.number_format($row->order_price); ?></totalprice></td>
					<td style="font-weight:bold;"><?php echo $row->order_status_name; ?></td>
				</tr>
				<?php
				$totalprod+=$row->order_price;
			}
			?>
			</form>
			</table>

			<!-- Apply Coupon Code / Buttons -->
			<table class="cart-table bottom">

				<tr>
				<th class="checkout-totals">
					<div class="checkout-subtotal">
						Subtotal: ₱<span><?php echo number_format($totalprod,2); ?></span>
					</div>
				</th>
				</tr>

			</table>
	</div>
	<!-- Checkout Cart / End -->


</div>
<!-- Container / End -->

<div class="margin-top-50"></div>



<?php echo $_footer; ?>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>


<!-- Java Script
================================================== -->

<?php echo $_def_js_files; ?>
<script>
  var selected_id; var subtotal=0;

  $('.continue').click(function(){
		Ordernow().done(function(response){
			if(response.stat=="success"){
				window.location.href = "ThankYou";
			}
		}).always(function(){
		});
  });


	var Ordernow=function(newval){
      var _data=$('#checkout_frm').serializeArray();

      return $.ajax({
          "dataType":"json",
          "type":"POST",
          "url":"Order/transaction/create",
          "data":_data
      });

  };

</script>
</body>
</html>
