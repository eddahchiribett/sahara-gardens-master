<?php
session_start();
include('includes/header.php');
?>
<div class="content-page">

      <div class="content">
        <div class="container">
          <div class="row">
                                      <div class="col-sm-12">
                                          <div class="card-box">


                                              <h4 class="header-title m-t-0 m-b-30">New User</h4>
                                              <?php
                                              if (isset($_GET['msg'])) {
                                                if ($_GET['msg'] == 1) {
                                                  ?>
                                                  <div class="alert alert-warning">
                                                    <p>Please fill all the required fields.</p>
                                                  </div>
                                                  <?php
                                                }elseif ($_GET['msg'] == 2) {
                                                  ?>
                                                  <div class="alert alert-warning">
                                                    <p>New user added successfully.</p>
                                                  </div>
                                                  <?php
                                                }
                                              }
                                               ?>

                                              <div class="row">
                                                <div class="col-lg-10">

                                              <p class="text-muted font-13 m-b-30">
                                                Please fill all the required Fields.
                                              </p>

                                              <form class="form-horizontal group-border-dashed" action="new_user_action.php" method="post" enctype="multipart/form-data" >
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Name</label>
                                                      <div class="col-sm-6">
                                                          <input type="text" name="name" class="form-control" required
                                                                 placeholder="Name"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Phone Number</label>
                                                      <div class="col-sm-6">
                                                          <input type="text" name="phone" class="form-control" required
                                                                 placeholder="Phone"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Username</label>
                                                      <div class="col-sm-6">
                                                          <input type="text" name="username" class="form-control" required
                                                                 placeholder="Username"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Password</label>
                                                      <div class="col-sm-6">
                                                          <input type="password" name="password" class="form-control" required
                                                                 placeholder="Password"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Confirm Password</label>
                                                      <div class="col-sm-6">
                                                          <input type="password" name="password1" class="form-control" required
                                                                 placeholder="Confirm Password"/>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                                          <button type="submit" name="new_user" class="btn btn-primary waves-effect waves-light">
                                                              Submit
                                                          </button>

                                                      </div>
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
