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
        <div class="col-lg-9 col-md-9">
        <div class="panel panel-default">
        <table class="table table-striped">
            <tr>
                <td>id</td>
                <td> name</td>
                <td>Job</td>
                <td>details</td>
                <td>edite</td>
                <td>delete</td>
                
            </tr>
            <?php
                //cette instruction permetre de prend tous les donner dans le table jobs
                 $data=$this->db->get('employees');
                 //cette instruction permet de prend la resultat de notre un struction executer au dessue
                 $data=$data->result();
                    foreach($data as $row)
                    {?>
                        <tr>
                         <td><?php echo $row->e_id; ?> </td>
                         <td><?php echo $row->e_name;?> </td>
                        <td><?php echo $row->e_job;?></td>
                         <!-- creer deux boutons avec un href qui permet de passe sur un autre page -->
                         <td><a href="<?php echo site_url() ;?>employee/details/<?php echo $row->e_id ;?>" class="btn btn-info btn-xs btn-block">details</a></td>
                         <td><a href="<?php echo site_url(); ?>employee/edit/<?php echo $row->e_id ; ?>" class="btn btn-warning btn-xs btn-block ">edite</a> </td>
                         <td><a href="<?php echo site_url(); ?>employee/delete/<?php echo $row->e_id; ?>" class="btn btn-danger btn-xs btn-block">delete</a> </td>
                        
                        </tr>
                    <?php
                    }
            ?>
        </table>
        </div>
      </div>
    </div>
    <!-- nav bar -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>