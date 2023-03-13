
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url()?>asset/backEnd/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="<?= base_url()?>asset/backEnd/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url()?>asset/backEnd/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url()?>asset/backEnd/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    <?php echo $this->session->flashdata('pesan'); ?>
                  </div>
                  <form class="user" action="<?= base_url('login/proseslogin') ?>" method="post">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                      <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  <hr>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?= base_url()?>asset/backEnd/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/js/ruang-admin.min.js"></script>

  <script>
    $(function() {
        // setTimeout() function will be fired after page is loaded
        var timeout = 5000; // in miliseconds (5*1000)
        $('.alert').delay(timeout).fadeOut(300);
    });
    </script>
</body>

</html>