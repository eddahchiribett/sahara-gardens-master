<?php
session_start();
if (empty($_SESSION['user_id']) OR empty($_SESSION['username'])) {
	header("Location:log_in.php");
}
include('../includes/connection.php');
include('includes/header.php');
?>

			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">
						<?php
						if (isset($_GET['msg'])) {
							if ($_GET['msg'] == 1) {
								?>
								<div class="alert alert-warning">
									<p>Your email was sent successfully.</p>
								</div>
								<?php
							}
						}
						 ?>

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="nav nav-pills nav-pills-custom display-xs-none pull-right">
                                    <li role="presentation"><a href="#">Today</a></li>
                                    <li role="presentation" class="active"><a href="#">Yesterday</a></li>
                                    <li role="presentation"><a href="#">Last Week</a></li>
                                </ul>

                                <h4 class="page-title">Reservations</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
																		<table class="table table-bordered">
																			<thead>
																				<tr>
																					<th>Email</th>
																					<th>Phone</th>
																					<th>Room Type</th>
																					<th>Checkin</th>
																					<th>Checkout</th>
																					<th>Adults</th>
																					<th>Children</th>
																					<th>Reservation date</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php
																				$reservations = mysqli_query($connection,"SELECT * FROM reservations");
																				while ($row = mysqli_fetch_assoc($reservations)) {
																				 ?>
																				 <tr>
																				 <td><?php echo $row['email']; ?></td>
																				 <td><?php echo $row['phone']; ?></td>
																				 <td><?php echo $row['room_type']; ?></td>
																				 <td><?php echo $row['checkin']; ?></td>
																				 <td><?php echo $row['checkout']; ?></td>
																				 <td><?php echo $row['adults']; ?></td>
																				 <td><?php echo $row['children']; ?></td>
																				 <td><?php echo $row['date']; ?></td>
																				 <td><a class="btn btn-default" href="email.php?email=<?php echo $row['email']; ?>">Email</a></td>
																			 </tr>
																				 <?php
																				}
																				 ?>

																			</tbody>
																		</table>


                                </div>
                            </div>



                    </div>

                </div>

                <footer class="footer">
                    2021 © Bett. Design by <a href="http://coderthemes.com/" target="_blank" class="text-muted">Coderthemes</a>
                </footer>

            </div>

            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>




        </div>


        <script>
            var resizefunc = [];
        </script>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>


        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>


        <script src="assets/pages/jquery.dashboard.js"></script>



        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

	</body>


</html>
