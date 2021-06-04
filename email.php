<?php
session_start();
include('includes/header.php');
$email = $_GET['email'];
?>
<div class="content-page">

      <div class="content">
        <div class="container">
          <div class="row">
                                      <div class="col-sm-12">
                                          <div class="card-box">


                                              <h4 class="header-title m-t-0 m-b-30">New Room</h4>
                                              <?php
                                              if (isset($_GET['msg'])) {
                                                if ($_GET['msg'] == 1) {
                                                  ?>
                                                  <div class="alert alert-warning">
                                                    <p>New Room Added successfully</p>
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

                                              <form class="form-horizontal group-border-dashed" action="email_action.php" method="post" enctype="multipart/form-data" >



                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Message</label>
                                                      <div class="col-sm-6">
                                                          <textarea name="message" required class="form-control"></textarea>
                                                      </div>
                                                  </div>
                                                  <input type="hidden" name="email" value="<?php echo $email; ?>"

                                                  <div class="form-group">
                                                      <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                                          <button type="submit" name="new_room" class="btn btn-primary waves-effect waves-light">
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
