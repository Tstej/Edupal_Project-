<?php include "navbar.php" ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("connection failed:" . $conn->connect_error);
}

$sql = "SELECT * FROM `eplatform`";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);
$search1 = $_POST['search1'];
$search2 = $_POST['search2'];

?>

<html>

<head>

	<style>
		html,
		body {
			height: 120%;
		}

		body {
			margin: 0;
			background: linear-gradient(45deg, #49a09d, #5f2c82);
			font-family: sans-serif;
			font-weight: 100;
		}

		.bod {
			margin-left: 70px;
		}


		table {
			width: 1200px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
		}

		th,
		td {
			padding: 15px;
			background-color: rgba(255, 255, 255, 0.2);
			color: #fff;
		}

		th {
			text-align: left;
		}


		.middle {
			text-align: center;
		}

		.star-color {
			color: orange;
		}

		.cross-red {
			color: red;
			text-align: center !important;
		}

		.tick-green {
			color: green;
		}

		.headd {
			position: sticky;
			top: 0;

		}

		.my-4 {
			font-size: 21px;
			margin-left: 80px;
			margin-right: 150px;
			text-shadow: 0 1px 2px rgb(41 48 59 / 30%);
			color: #fff;
			margin-bottom: 50px;
			text-align: center;


		}

		.compp {
			font-size: 70px;
			margin-left: 100px;
			margin-right: 170px;
			text-align: center;
			color: #fff;
			margin-bottom: 0%;
		}
	</style>
</head>

<body>

	<div class="bod">
		<h1 class="compp"> <?php echo $search1; ?> vs <?php echo $search2; ?> Online Learning Platform Comparison</h1>
		<p class="my-4">Use this in-depth Online Learning Platform Comparison Tool &amp; compare <?php echo $search1; ?> vs <?php echo $search2; ?>head-to-head in seconds. Find out which e-learning provider is the best based on factual data &amp; expert feedback!</p>
		<p class="par">

		</p>

		<table>
			<thead>
				<tr style="background: linear-gradient(45deg, #49a09d, #5f2c82);" class="headd">
					<th class="middle headd">FEATURES</th>
					<th class="middle headd">

						<?php
						$search1 = $_POST['search1'];
						$s1 = "SELECT * from eplatform where epname = '" . $search1 . "' ";
						$q1 = mysqli_query($conn, $s1);
						while ($r1 = mysqli_fetch_array($q1)) {
							echo '<img src= "data:image;base64,' . base64_encode($r1['image']) . '"style="width:180px; height:130px;">';
						}
						?>


						<!--<img src="images/small_logos/greatlarning.jpg" width="150" height="100"> -->
					</th>
					<th class="middle headd">
						<?php
						$search2 = $_POST['search2'];
						$s2 = "SELECT * from eplatform where epname = '" . $search2 . "' ";
						$q2 = mysqli_query($conn, $s2);
						while ($r2 = mysqli_fetch_array($q2)) {
							echo '<img src= "data:image;base64,' . base64_encode($r2['image']) . '"style="width:180px; height:130px;">';
						}
						?>
						<!--<img src="images/small_logos/vedantu.png" style="background-color: white;" width="150" height="100"> -->
					</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				$selectquery1 = "SELECT * from eplatform where epname = '" . $search1 . "' ";
				$selectquery2 = "SELECT * from eplatform where epname = '" . $search2 . "' ";
				
				$query4 = mysqli_query($conn, $selectquery1);
				$query5 = mysqli_query($conn, $selectquery2);
				

				$num = mysqli_num_rows($query4);

				while ($row1 = mysqli_fetch_array($query4)) {
					while ($row2 = mysqli_fetch_array($query5)) {
						 {
				?>
							<tr>
								<th class="middle">Overall score</th>
								<td class="middle"> <?php echo $row1['overall_score']; ?> <br><br>
									<?php
									if ($row1['overall_score'] > 0) {
										$n = ($row1['overall_score']) / 2;
										for ($i = 1; $i <= $n; $i++) { ?>
											<span class="fa fa-star star-color"></span>
										<?php

										}
										$m = 5 - $n;
										for ($i = 0; $i < $m; $i++) { ?>
											<span class="fa fa-star"></span>
									<?php
										}
									}
									?>
								</td>

								<td class="middle"> <?php echo $row2['overall_score']; ?> <br><br>
									<?php
									if ($row2['overall_score'] > 0) {
										$n = ($row2['overall_score']) / 2;
										for ($i = 1; $i <= $n; $i++) { ?>
											<span class="fa fa-star star-color"></span>
										<?php

										}
										$m = 5 - $n;
										for ($i = 0; $i < $m; $i++) { ?>
											<span class="fa fa-star"></span>
									<?php
										}
									}
									?>
								</td>
								

							</tr>
							<tr>

								</td>
								<th class="middle">Best For </th>
								<td class="middle"><?php echo $row1['best_for'] ?></td>
								<td class="middle"><?php echo $row2['best_for'] ?></td>
								
							</tr>
							<tr>
								<th class="middle">Pros</th>
								<td>
									<i class="fa fa-check fa-1x tick-green"> </i><?php echo $row1['pros'] ?> <br>
									<i class="fa fa-check fa-1x tick-green"> </i> Has a few different plans, including a free one <br>
									<i class="fa fa-check fa-1x tick-green"> </i> Easy to navigate <br>
									<i class="fa fa-check fa-1x tick-green"> </i> Flexible timetables <br>
								</td>
								<td>
									<i class="fa fa-check fa-1x tick-green"> </i> <?php echo $row2['pros'] ?> <br>
									<i class="fa fa-check fa-1x tick-green"> </i> Integrated gamification features <br>
									<i class="fa fa-check fa-1x tick-green"> </i> Simplistic design<br>
									<i class="fa fa-check fa-1x tick-green"> </i> Professional service <br>
								</td>

							</tr>
							<tr>
								<th class="middle">Cons</th>
								<td>
									<i class="fa fa-times fa-1x cross-red"> </i> Pricing can be confusing <br>
									<i class="fa fa-times fa-1x cross-red"> </i> Free courses are too general <br>
									<i class="fa fa-times fa-1x cross-red"> </i> The platform tends to crash <br>
								</td>
								<td>
									<i class="fa fa-times fa-1x cross-red"> </i> Few community features <br>
									<i class="fa fa-times fa-1x cross-red"> </i> The video player could be better <br>
									<i class="fa fa-times fa-1x cross-red"> </i> Course pages could do with an overhaul <br>
								</td>
								
							</tr>
							<tr>
								<th class="middle">Course Level</th>
								<td class="middle"><?php echo $row1['course_level'] ?></td>
								<td class="middle"><?php echo $row2['course_level'] ?></td>
								

							</tr>
							<tr>
								<th class="middle">Free Courses</th>
								<td class="middle"><?php echo $row1['free_courses'] ?></td>
								<td class="middle"><?php echo $row2['free_courses'] ?></td>
								
							</tr>
							<tr>
								<th class="middle">Course Recommendation Engine</th>
								<td class="middle">
									<?php if ($row1['course_rec_eng'] == 'Available') {
									?>
										<i class="fa fa-check fa-2x tick-green">
										<?php } else {
										?>
											<i class="fa fa-times fa-2x cross-red">
											<?php
										}
											?>
								</td>
								<td class="middle"><?php if ($row2['course_rec_eng'] == 'Available') {
													?>
										<i class="fa fa-check fa-2x tick-green">
										<?php } else {
										?>
											<i class="fa fa-times fa-2x cross-red">
											<?php
													}
											?>
								</td>
								
							</tr>
							<tr>
								<th class="middle">No. of Users</th>
								<td class="middle"><?php echo $row1['no_of_users'] ?></td>
								<td class="middle"><?php echo $row2['no_of_users'] ?>
								</td>
								
							</tr>
							<tr>
								<th class="middle">Value For Money</th>
								<td class="middle">
									<?php
									if ($row1['value_for_money'] > 0) {
										$n = floor($row1['value_for_money']);
										for ($i = 0; $i < $n; $i++) { ?>
											<span class="fa fa-star star-color"></span>
										<?php

										}
										$m = 5 - $n;
										for ($i = 0; $i < $m; $i++) { ?>
											<span class="fa fa-star"></span>
									<?php
										}
									}
									?>

								</td>
								<td class="middle">
									<?php
									if ($row2['value_for_money'] > 0) {
										$n = floor($row2['value_for_money']);
										for ($i = 0; $i < $n; $i++) { ?>
											<span class="fa fa-star star-color"></span>
										<?php

										}
										$m = 5 - $n;
										for ($i = 0; $i < $m; $i++) { ?>
											<span class="fa fa-star"></span>
									<?php
										}
									}
									?>
								</td>
				
							</tr>
							<tr>
								<th class="middle">Offline courses</th>
								<td class="middle">
									<!--<i class="fa fa-check fa-1.5x tick-green"></i> -->
									<?php if ($row1['offline_courses'] == 'Yes') {
									?>
										<i class="fa fa-check fa-2x tick-green">
										<?php } else {
										?>
											<i class="fa fa-times fa-2x cross-red">
											<?php
										}
											?>
								</td>
								<td class="middle">
									<?php if ($row2['offline_courses'] == 'Yes') {
									?>
										<i class="fa fa-check fa-2x tick-green">
										<?php } else {
										?>
											<i class="fa fa-times fa-2x cross-red">
											<?php
										}
											?>
								</td>
								
							</tr>
							<tr>
								<th class="middle">Free Trial</th>
								<td class="middle"><?php echo $row1['free_trial'] ?></td>
								<td class="middle"><?php echo $row2['free_trial'] ?></td>
								
							</tr>
							<tr>
								<th class="middle">Certificates</th>
								<td class="middle"><?php echo $row1['certificates'] ?></td>
								<td class="middle"><?php echo $row2['certificates'] ?></td>
								
							</tr>
							<tr>
								<th class="middle">Degree/ Specialisation</th>
								<td class="middle">
									<?php if ($row1['spec'] == 'Available') {
									?>
										<i class="fa fa-check fa-2x tick-green">
										<?php } else {
										?>
											<i class="fa fa-times fa-2x cross-red">
											<?php
										}
											?>
								</td>
								<td class="middle"><?php if ($row2['spec'] == 'Available') {
													?>
										<i class="fa fa-check fa-2x tick-green">
										<?php } else {
										?>
											<i class="fa fa-times fa-2x cross-red">
											<?php
													}
											?>
								</td>
								
							</tr>
							<tr>
								<th class="middle">Learning Material</th>
								<td class="middle"><?php echo $row1['learn_mat'] ?></td>
								<td class="middle"><?php echo $row2['learn_mat'] ?></td>
								
							</tr>
							<tr>
								<th class="middle">Customer Support</th>
								<td class="middle"><?php echo $row1['cust_support'] ?></td>
								<td class="middle"><?php echo $row2['cust_support'] ?></td>
								
							</tr>

							<tr>
								<th class="middle headd" style="bottom: 0px; background: linear-gradient(45deg, #49a09d, #5f2c82);">Check Official Website</th>
								<td class="middle headd" style="bottom: 0px; background: linear-gradient(45deg, #49a09d, #5f2c82);"> <a href="<?php echo $row1['link']; ?>" target=_blank; style="color: white;">Visit Site </a> &#x27A8;</td>
								<td class="middle headd" style="bottom: 0px; background: linear-gradient(45deg, #49a09d, #5f2c82);"> <a href="<?php echo $row2['link']; ?>" target=_blank; style="color: white;">Visit Site </a> &#x27A8;</td>
								
							</tr>




				<?php
						}
					}
				}
				?>
			</tbody>

		</table>
	</div>
	<?php include "review.php"; ?>
</body>

</html>