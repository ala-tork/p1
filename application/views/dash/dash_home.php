<?php
if (!$_SESSION['u_name']){ redirect("Welcome/index");}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashbord</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
    <!-- nav bar -->
    <?php $this->load->view('dash/inc/navbar'); ?>
    <!-- nav bar -->
    <!-- dash data -->
    <div class="container">
      <div calss="row">
        <div class="col-lg-3 col-md-3">
        <!-- side bar -->
          <?php $this->load->view('dash/inc/sidebar');?>
        <!-- side bar -->

        </div>
        <div class="col-lg-9 col-md-9"></div>
      </div>
    </div>
    <!-- nav bar -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>