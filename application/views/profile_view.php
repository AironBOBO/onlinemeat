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
        <div class="row">
          <div class="col-sm-4">
                <img alt="User Pic" src="assets/images/admin.png "width=450 height="300" id="profile-image1" class="img-circle img-responsive"> <br></br>
                <input type="file" name="imageupload" " class="form-control">
          </div>
          <div class="col-sm-6">
            <form id="frm_register">
                  <div class="row">
                    <div class="col-sm-6" style="float: none;  margin: 0 auto;">
                      <div class="form-group">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" name="user_fname" value="<?php echo $this->session->user_fname; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6" style="float: none;  margin: 0 auto;">
                      <div class="form-group">
                        <label for="name" class="form-label">Last Name</label>
                        <input type="text" name="user_lname" value="<?php echo $this->session->user_lname; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6" style="float: none;  margin: 0 auto;">
                      <div class="form-group">
                        <label for="name" class="form-label">Address</label>
                        <input type="text" name="user_address" value="<?php echo $this->session->user_address; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6" style="float: none;  margin: 0 auto;">
                      <div class="form-group">
                        <label for="name" class="form-label">Contact Number</label>
                        <input type="text" name="user_mobile" value="<?php echo $this->session->user_mobile; ?>" class="form-control input-text"> <br></br>
                          <button type="button" class="btn btn-template wide" >Update</button>
                      </div>
                    </div>
                  </div>
              </form>
          </div>
          <div class="col-sm-6">

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
