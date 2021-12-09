<html>

<body>
	<?php
	include('header.php');
	?>

	<div class="content">
		<center>
			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_q6x7fidv.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></lottie-player>
		</center>
		<div class="wrap">
			<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:black;"><u>Upcoming Movies</u></h2>
					<?php
					$qry3 = mysqli_query($con, "SELECT * FROM tbl_news LIMIT 5");

					while ($n = mysqli_fetch_array($qry3)) {
					?>
						<div class="content-left">
							<div class="listimg listimg_1_of_2">
								<img src="admin/<?php echo $n['attachment']; ?>">
							</div>
							<div class="text list_1_of_2">
								<div class="extra-wrap">
									Name: <span style="text-color:#000" class="data"><strong><?php echo $n['name']; ?></strong></span><br>
									Cast: <span style="text-color:#000" class="data"><strong><?php echo $n['cast']; ?></strong></span><br>
									Release Date: <div class="data"><?php echo $n['news_date']; ?></div>
									<span class="text-top"><?php echo $n['description']; ?></span>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					<?php
					}
					?>


				</div>
				<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:black;"><u>Movie Trailers</u></h2>
					<div class="middle-list">
						<?php
						$qry4 = mysqli_query($con, "SELECT * FROM tbl_movie ORDER BY rand() LIMIT 6");

						while ($nm = mysqli_fetch_array($qry4)) {
						?>
							<div class="listimg1">
								<a target="_blank" href="<?php echo $nm['video_url']; ?>"><img src="<?php echo $nm['image']; ?>" alt="" /></a>
								<a target="_blank" href="<?php echo $nm['video_url']; ?>" class="link" style="text-decoration:none; font-size:14px;"><?php echo $nm['movie_name']; ?><br>
									<hr>
								</a>
							</div>
						<?php
						}
						?>
					</div>


				</div>
				<?php include('movie_sidebar.php'); ?>
			</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
	<?php include('searchbar.php'); ?>