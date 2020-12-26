<?php
if (!$_SESSION['u_name']){ redirect("Welcome/index");}
?>
<?php 
     //cette instruction prend le 3 eme argument au niveau de site url 
         $id=$this->uri->segment(3);
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
            <div class="panel-heading">Update Job </div>
            <div class="panel-body">
            <!-- cette phrase elle permet de controler le formulaire par la function 
            update_process_job qu'il existe dans el controller Job -->
            <?php echo form_open('Job/update_process_job/'.$id,'class="from-horizontal"'); ?>
            <?php
                //cette prasse permet de stocker les donner qui on un j_id = id dans $job_list
                $job_list=$this->db->get_where('jobs',array('j_id' => $id));
                foreach($job_list->result() as $res){
            ?>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Job Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="j_name" class="form-control input-sm" value="<?php echo $res->j_name; ?>" placeholder="Job Name">
                    </div>
                </div>
                <?php } ?>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="update_job" class="btn btn-sm btn-warning" value="update Job"></input>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
      </div>
    </div>
    <!-- nav bar -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>