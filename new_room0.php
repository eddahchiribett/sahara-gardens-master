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

                                              <form class="form-horizontal group-border-dashed" action="new_room_action.php" method="post" enctype="multipart/form-data" >
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Room Name</label>
                                                      <div class="col-sm-6">
                                                          <input type="text" name="name" class="form-control" required
                                                                 placeholder="Type something"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Room Class</label>
                                                      <div class="col-sm-6">
                                                          <select name="class" class="form-control">
                                                            <option value="luxury">Luxury Class</option>
                                                            <option value="business">Business Class</option>
                                                            <option value="simple">Simple Clas</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Room Type</label>
                                                      <div class="col-sm-6">
                                                          <select name="type" class="form-control">
                                                            <option value="single">Single Room</option>
                                                            <option value="double">Double Room</option>
                                                            <option value="deluxe">Deluxe Room</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Cost Per Night</label>
                                                      <div class="col-sm-6">
                                                          <input type="number" name="cost" class="form-control" required
                                                                 placeholder="Cost per night"/>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Beds</label>
                                                      <div class="col-sm-6">
                                                          <select name="beds" class="form-control">
                                                            <?php

                                                              for ($i=1; $i <= 5 ; $i++) {
                                                                ?>
                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                <?php
                                                              }
                                                             ?>

                                                            <option value="double">Double Room</option>
                                                            <option value="deluxe">Deluxe Room</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">About</label>
                                                      <div class="col-sm-6">
                                                          <textarea name="about" required class="form-control"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Facilities</label>
                                                      <div class="col-sm-6">
                                                          <textarea name="facilities" required class="form-control"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Bathroom</label>
                                                      <div class="col-sm-6">
                                                          <input type="radio" value="1" name="bath">Yes &nbsp;<input value="2" type="radio" name="bath">Yes
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Incl. Breakfast</label>
                                                      <div class="col-sm-6">
                                                          <input type="radio" value="1" name="breakfast">Yes &nbsp;<input value="2" type="radio" name="breakfast">Yes
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Wifi</label>
                                                      <div class="col-sm-6">
                                                          <input type="radio" value="1" name="wifi">Yes &nbsp;<input type="radio" value="2" name="wifi">No
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Room Sevice</label>
                                                      <div class="col-sm-6">
                                                          <input type="radio" value="1" name="room_service">Yes &nbsp;<input type="radio" value="2" name="room_service">No
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-sm-3 control-label">Picture</label>
                                                      <div class="col-sm-6">
                                                          <input type="file" name="avatar" class="form-control" id="avatar"  required>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                                          <button type="submit" name="new_room" class="btn btn-primary waves-effect waves-light">
                                                              Submit
                                                          </button>

                                                      </div>
                                                  </div>
                                              </form>
                                          </div><!-- end col -->


                                              </div><!-- end row -->
                                          </div>
                                      </div><!-- end col -->
                                  </div>
</div>
</div>
</div>
