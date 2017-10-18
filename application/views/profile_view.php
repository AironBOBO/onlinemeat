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
            <h1>My Profile</h1>
            <p class="lead text-muted">Account Information </p>
          </div>
          <ul class="breadcrumb d-flex justify-content-start justify-content-lg-center col-lg-3 text-right order-1 order-lg-2">
            <li class="breadcrumb-item"><a href="Index">Home</a></li>
            <li class="breadcrumb-item active">My Profile</li>
          </ul>
        </div>
        <div class="container-fluid">
  <div class="row">
  <div class="col-md-4 col-xs-10 col-sm-6 col-md-4">
       <img alt="User Pic" src="assets/images/admin.png" id="profile-image1" class="img-circle img-responsive">
    </div>
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                         <div class="container" >
                           <h2><?php echo $this->session->user_fname; ?>
                           <?php echo $this->session->user_lname; ?></h2>
                           <br /><br />
                      <!--     <p>an <b> Employee</b></p>-->
                         </div>
                          <hr>
                         <ul class="container details" >
                           <p><label class="form-label">Contact No:</label><span class="glyphicon glyphicon-phone-alt" style="width:10px;"></span><?php echo $this->session->user_mobile; ?></p>
                           <p><label class="form-label">Address: </label><span class="glyphicon glyphicon-phone-alt" style="width:10px;"></span><?php echo $this->session->user_address; ?></p>
                            <p><label class="form-label">Date Joined:</label><span class="glyphicon glyphicon-phone-alt" style="width:10px;"></span><?php echo $this->session->date_created; ?></p>
                         </ul>
                         <hr>
                         <!--<div class="col-sm-5 col-xs-6 tital " >Date Of Birth: 15 Jun 2016</div>-->
                     </div>
  </div>
</div>
      </div>
    </div>
    </section>

		<div class="container">
		</div>


    <?php echo $_footer; ?>
    <!-- Javascript files-->
    <?php echo $_def_js_files; ?>
    <script>
    </script>
  </body>

<!-- Mirrored from hub.ondrejsvestka.cz/1-0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2017 14:03:32 GMT -->
</html>
