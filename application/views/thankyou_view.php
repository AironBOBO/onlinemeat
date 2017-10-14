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

<!-- Titlebar
================================================== -->
<section class="parallax-titlebar fullwidth-element"  data-background="#000" data-opacity="0.45" data-height="160">

	<img src="assets/images/cart.jpg" alt="" />
	<div class="parallax-overlay"></div>


	<div class="parallax-content">
		<h2>Thank you for your order <span></span></h2>

		<nav id="breadcrumbs">
			<ul>
				<li><a href="Index">Home</a></li>
				<li>Thank You</li>
			</ul>
		</nav>
	</div>

</section>


<div class="container cart">

	<div class="sixteen columns">

		<!-- Cart -->

      <form id="frm_order">
			<!-- Item #1 -->
      <?php $ordertotal=0;
				if(count($order_info)!=0){
					?>
				<div class="contentprint">
					<div class="row">
            <div class="">
                <address>
                    <strong>Daffy's Car Accessories</strong>
                    <br>
                    Mc Arthur Hi-Way,Zone C San Miguel
                    <br>
                    Tarlac City, Tarlac
                    <br>
                    <abbr title="Phone">P:</abbr> 0929 799 4700
                </address>
            </div>
            <div class="" style="float:right;text-align:right;">
								<p style="margin:0;padding:0;">
										<em>Ordered By : <?php echo $order_info[0]->full_name; ?></em>
								</p>
								<p style="margin:0;padding:0;">
										<em>Shipping Address : <?php echo $order_info[0]->order_address; ?></em>
								</p>
                <p style="margin:0;padding:0;">
                    <em>Date : <?php echo $order_info[0]->order_date; ?></em>
                </p>
                <p style="margin:0;padding:0;">
                    <em>Receipt #: <?php echo $order_info[0]->order_no; ?></em>
                </p>
            </div>
        	</div>
					<table class="cart-table responsive-table">

						<tr>
							<th>Item</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
					<?php
					foreach($order_info as $row){
	          ?>

	          <tr class="Test">
							<td class="cart-title"><a href="#"><input type="hidden" name="product_name" value="<?php echo $row->product_name; ?>"><?php echo $row->product_name; ?></a></td>
	    				<td>₱&nbsp<price class="price"><?php echo $row->price; ?></price></td>
	    				<td class="test"><?php echo $row->order_qty; ?></td>
	    				<td class="cart-total">₱&nbsp<totalprice class="totalprice"><?php echo $row->order_price; ?></totalprice></td>
	    			</tr>

						<!-- Apply Coupon Code / Buttons -->

	          <?php
	          $ordertotal += $row->order_price;
	        }
					$shipping_free=100;
					?>
					<tr class="Test">
						<td></td>
						<td></td>
						<td><h3 style="font-weight:bold;">Shipping Fee</h3></td>
						<td class="cart-total">₱ <totalprice class="totalprice">100</totalprice></td>
					</tr>
					<tr class="Test">
						<td></td>
						<td></td>
						<td><h3 style="font-weight:bold;">Subtotal</h3></td>
						<td class="cart-total">₱ <totalprice class="totalprice"><?php echo $ordertotal+$shipping_free; ?></totalprice></td>
					</tr>

					</table>
				</div>
					<table class="cart-table bottom">

						<tr>
						<th>
							<div class="cart-btns">
								<a class="button color cart-btns proceed printreceipt">Print Receipt</a>
							</div>
						</th>
						</tr>

					</table>
					<?php

				}

      ?>


	</div>




</div>

<div class="margin-top-40"></div>



<?php echo $_footer; ?>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>


<!-- Java Script
================================================== -->

<?php echo $_def_js_files; ?>
<script>
$('.printreceipt').click(function(){
  $('.contentprint').printThis({
    debug: false,               // show the iframe for debugging
    importCSS: true,            // import page CSS
    importStyle: true,         // import style tags
    printContainer: true,       // grab outer container as well as the contents of the selector
    loadCSS: ["<?php echo base_url().'/assets/css/style.css'; ?>","<?php echo base_url().'/assets/css/green.css'; ?>"],  // path to additional css file - use an array [] for multiple
    pageTitle: "",              // add title to print page
    removeInline: false,        // remove all inline styles from print elements
    printDelay: 333,            // variable print delay; depending on complexity a higher value may be necessary
    header: null,               // prefix to html
    footer: null,               // postfix to html
    base: false ,               // preserve the BASE tag, or accept a string for the URL
    formValues: true,           // preserve input/form values
    canvas: false,              // copy canvas elements (experimental)
    doctypeString: "",       // enter a different doctype for older markup
    removeScripts: false,       // remove script tags from print content
    copyTagClasses: false       // copy classes from the html & body tag
});
})
</script>
</body>
</html>
