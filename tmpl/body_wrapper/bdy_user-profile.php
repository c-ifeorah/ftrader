<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Welcome to your user profile of your account. Here you can view and edit your registered details..<br>
                        </div>
                        <div class="panel-body ">
                            <div class="row">
                                <div class="col-lg-12"><br>
                                    <div class="row">
                                        <!-- left column -->
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <div class="image-section">
                                                    <img src="img/bground.jpg" class="avatar img-circle user-photo" alt="avatar">
                                                </div>
                                                <!-- <h6>Upload a different photo...</h6>
                                                <input  name="image" type="file" class="form-control upload-width"> -->
                                            </div>
                                        </div>
                                      <!-- edit form column -->
                                      <div class="col-md-8 personal-info">
                                        <?php 
                                          //    CHceking if there is a success variable passed from the previous page. That means that it was sent after user details update
                                          if (isset($_GET["status"])) {
                                            if ($_GET["status"] == "success") {
                                                echo '  <div class="alert alert-info alert-dismissable">
                                                            <a class="panel-close close" data-dismiss="alert">×</a> 
                                                            <i class="fa fa-coffee"></i>
                                                            <strong>Thanks</strong>. Your details were updated <strong>Successfully!</strong>
                                                        </div>';
                                            } else if ($_GET["status"]== "fail") {
                                                echo '  <div class="alert alert-info alert-dismissable">
                                                            <a class="panel-close close" data-dismiss="alert">×</a> 
                                                            <i class="fa fa-coffee"></i>
                                                            <strong>Sorry</strong>. Your update was <strong>Unsuccessfully!</strong>. Please retry or contact admin.
                                                        </div>';
                                            }
                                          } 
                                        ?>
                                        <h3>Personal Info</h3>
                                        <form class="form-horizontal" role="form" method="post" action="user-profile-update.php">
                                          <div class="form-group">
                                            <label class="col-lg-3 control-label">First name:</label>
                                            <div class="col-lg-8">
                                              <input name="first_name" class="form-control" type="text" value="<?php echo $arr_Details['firstname']; ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-lg-3 control-label">Last name:</label>
                                            <div class="col-lg-8">
                                              <input name="last_name" class="form-control" type="text" value="<?php echo $arr_Details["lastname"]; ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-lg-3 control-label">Phone:</label>
                                            <div class="col-lg-8">
                                              <input name="phone" class="form-control" type="text" value="<?php echo $arr_Details["phone"]; ?>">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-lg-3 control-label">Email:</label>
                                            <div class="col-lg-8">
                                              <input name="email" class="form-control" type="text" value="<?php echo $arr_Details["email"]; ?>">
                                            </div>
                                          </div>                                          
                                          <div class="form-group">
                                            <label class="col-lg-3 control-label">Date of Account Creation:</label>
                                            <div class="col-lg-8">
                                              <input name="created" class="form-control" type="text" value="<?php echo $arr_Details["created"]; ?>" disabled>
                                            </div>
                                          </div>
                                          <div class="form-group">  
                                            <label class="col-md-3 control-label">Username:</label>
                                            <div class="col-md-8">
                                              <input name="username" class="form-control" type="text" value="<?php echo $arr_Details["username"]; ?>" disabled>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Password:</label>
                                            <div class="col-md-8">
                                              <input id="password" name="password" class="form-control" type="password">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Confirm password:</label>
                                            <div class="col-md-8">
                                              <input id="confirm_password" name="confirm_password" class="form-control" type="password">
                                              <span id='pass_message'></span>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-8">
                                              <input type="submit" class="btn btn-primary" value="Save Changes">
                                              <span></span>
                                              <input type="reset" class="btn btn-default" value="Cancel">
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->