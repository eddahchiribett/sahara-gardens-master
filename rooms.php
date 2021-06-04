<?php
include('../includes/connection.php');
include('includes/header.php');
?>
<div class="content-page">

      <div class="content">
        <div class="container">
          <div class="row">

                  <div id="panelChart3" class="panel">
                     <div class="panel-heading">

                        <div class="pull-right btn-group">
                           <button  type="button" onclick="items_display()" data-toggle="dropdown" class="dropdown-toggle btn btn-default btn-sm hidden-print">Refresh</button>
                           <button  type="button" onclick="window.print()" data-toggle="dropdown" class="dropdown-toggle btn btn-warning btn-sm hidden-print">Print</button>
                        </div>


                        <div class="panel-title">Rooms</div>
                        <hr>
                     </div>
                     <div collapse="panelChart3" class="panel-wrapper">

                        <div class="panel-body">
                           <table class="table table-bordered" id="TheSo">
                                <thead>
                                    <tr>
                                       <th>Room Name</th>
                                        <th>Class</th>
                                        <th>Type</th>
                                        <th>Cost </th>
                                        <th>Beds</th>
                                        <th>Bathroms</th>
                                        <th>Wifi</th>
                                        <th>Breakfast</th>
                                        <th>Room Service</th>
                                        <th>About</th>

                                        <th  class="hidden-print">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $rooms = mysqli_query($connection,"SELECT * FROM rooms");
                                while ($row = mysqli_fetch_assoc($rooms)) {
                                  $bath = $row['bath'];
                                  if ($bath = 1) {
                                     $bath = "YES";
                                  }else{
                                    $bath = "NO";
                                  }
                                  $wifi = $row['wifi'];
                                  if ($wif = 1) {
                                     $wifi = "YES";
                                  }else{
                                    $wifi = "NO";
                                  }
                                  $room_service = $row['room_service'];
                                  if ($room_service = 1) {
                                     $room_service = "YES";
                                  }else{
                                    $room_service = "NO";
                                  }
                                  $breakfast = $row['breakfast'];
                                  if ($breakfast = 1) {
                                     $breakfast = "YES";
                                  }else{
                                    $breakfast = "NO";
                                  }
                                  ?>
                                  <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['class']; ?></td>
                                    <td><?php echo $row['type']; ?></td>
                                    <td><?php echo $row['cost']; ?></td>
                                    <td><?php echo $row['beds']; ?></td>
                                    <td><?php echo $bath; ?></td>
                                    <td><?php echo $wifi; ?></td>
                                    <td><?php echo $breakfast; ?></td>
                                    <td><?php echo $room_service; ?></td>
                                    <td><?php echo $row['about']; ?></td>
                                    <td><a href="edit_room.php" class="btn btn-success">Edit</a></td>
                                  </tr>
                                  <?php
                                }

                                 ?>
                                <tbody>


                                </tbody>

                            </table>
                            <br>
                            <br>

                           <div class="chart-bar-stackedv2 flot-chart"></div>
                        </div>
                     </div>
                  </div>
</div>
</div>
</div>
</div>
