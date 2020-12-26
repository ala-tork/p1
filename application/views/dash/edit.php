<?php
if (!$_SESSION['u_name']){ redirect("Welcome/index");}
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
            <div class="panel-heading">edit employee </div>
            <div class="panel-body">
            <?php echo form_open('employee/edit_process_empoyee/'.$id,'class="from-horizontal"'); ?>
                <div class="form-group">
                <?php $data=$this->db->get_where('employees',array('e_id'=>$id));
                    foreach($data->result() as $row){
                ?>
                    <label  class="col-sm-2 control-label">employe Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="e_name" value="<?php echo $row->e_name; ?>" class="form-control input-sm"  placeholder="Name" required>
                    </div>
                </div>

                  <div class="form-group">
                    <label  class="col-sm-2 control-label">employe email</label>
                    <div class="col-sm-10">
                    <input type="text" name="e_email" value="<?php echo $row->e_email; ?>" class="form-control input-sm"  placeholder="email" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">employe phone</label>
                    <div class="col-sm-10">
                    <input type="text" name="e_phone" value="<?php echo $row->e_phone; ?>" class="form-control input-sm"  placeholder="phone" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-2 control-label">employe Job</label>
                    <div class="col-sm-10">
                    <select  name="e_job" class="form-control input-sm" >
                    <option value="pick a job"></option>
                    <?php 
                      $list_job=$this->db->get("jobs");
                      $the_job= $row->e_job;
                      foreach($list_job->result() as $job){?>
                        
                        
                        <?php
                        $j=$job->j_name;
                        if($j==$the_job){?>
                          <option value="<?php echo $job->j_name ; ?>" selected> <?php echo $job->j_name ; ?> </option>
                          <?php 
                        }
                        else{?>
                        <option value="<?php echo $job->j_name ; ?>" > <?php echo $job->j_name ; ?> </option>
                          <?php
                        }
                        
                      }
                    ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="edit_employee" class="btn btn-sm btn-success" value="edit employee"></input>
                    </div>
                </div>
            </form>
                    <?php }   ?>
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