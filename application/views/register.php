
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-oush-4 col-md-push-4">
            <div class="panel panel-default" style="margin-top: 50px">
                <div class="panel-heading">login </div>
                <div class="panel-body">
                    <?php echo form_open('Welcome/register_process'); ?>
                    <div class="form_group">
                    <input type="text" name="u_email" class="form-control input-sm" placeholder="Email" required>
                    </div>
                    <div class="form_group">
                    <input type="text" name="u_name" class="form-control input-sm" placeholder="Username" required>
                    </div>
                    <div class="form_group">
                    <input type="password" name="u_pass" class="form-control input-sm" placeholder="Password" required>
                    </div>
                    <div class="form_group">
                    <input type="submit" name="register" value="register" class="btn btn-success btn-sm">
                    <a href="<?php echo site_url("Welcome") ;?>" class="btn btn-warning btn-sm"> login as admin</a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
  </div>

    