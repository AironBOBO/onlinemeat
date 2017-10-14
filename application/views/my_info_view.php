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

	<div class="twelve columns">

	<!-- Billing Details Content -->
	<div class="checkout-section active"><span>1</span> My Info</div>
		<div class="checkout-content">

			<form method="POST" action="MyAccount/transaction/update">
				<input type="hidden" name="user_id" value="<?php echo $this->session->user_id; ?>">
			<div class="half first"><label>First Name: <abbr>*</abbr></label><input type="text" placeholder="" name="user_fname" value="<?php echo $this->session->user_fname; ?>" /></div>
			<div class="half"><label>Last Name: <abbr>*</abbr></label><input type="text" name="user_lname"  value="<?php echo $this->session->user_lname; ?>" /></div>


			<label>Address: <abbr>*</abbr></label><input type="text" name="user_address" class="input-text "  value="<?php echo $this->session->user_address; ?>"  />


			<label>Phone: <abbr>*</abbr></label><input type="text" name="user_mobile" placeholder=""  value="<?php echo $this->session->user_mobile; ?>" />
			<button type="submit" class="continue button color">Save</button>
			</form>
			<div class="clearfix"></div>


			</div>


		</div>

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
