<?php

	include_once "texts.php";

	$l = $_POST['language'];

?>

	<div class="main_header" id="main_header">

		<div class="active_button">
		<!--write out wich content is active-->
			<p class="active_content"><?php echo $header[$l]['about']; ?></p>
		</div>

		<div class="buttons">
		<!--the buttons to the selection of section of main content-->
<?php
			foreach ($header[$l] as $key=>$header) {
?>
				<div class="button" onclick="nav('<?php echo $key; ?>')">
					<p><?php echo $header; ?></p>
				</div>
<?php
			}; 
?>
		</div>
		
		<div class="icon" onclick="menu_toggle()">
			<div class="bars_container">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
		</div>

	</div>


	<div class="main-body">

		<div id="about" class="main_content">
		<!--the about me section-->

			<h1><?php echo $about_me_title[$l]; ?></h1>
			<p><?php echo $about_me[$l]; ?></p>


			<h1><?php echo $i_know_title[$l]; ?></h1>
			<ul>
<?php 
				foreach ($i_know[$l] as $i_know) {
?>
					<li><?php echo $i_know; ?></li>
<?php
				}; 
?>
			</ul>


			<h1><?php echo $i_read_title[$l]; ?></h1>
			<ul>
<?php 
				foreach ($i_read[$l] as $i_read) {
?>
					<li><?php echo $i_read; ?></li>
<?php
				}; 
?>
			</ul>

		</div>


		<div id="projects" class="main_content">
		<!--the about my project section-->

			<!--in general-->
			<h1><?php echo $about_projects_title[$l]; ?></h1>
			<p><?php echo $about_projects[$l]; ?></p>

			<div class="projects_examples">
			<!--one after another-->

<?php
				$types = array("websites", "games");
				
				for ($j = 0; $j < count($types); $j++) {
					$files = glob(__DIR__ . "/../img/" . $types[$j] . "/*.jpg");
					$n = count($files);
?>
					<h1><?php echo $projects[$types[$j]][$l]; ?></h1>
<?php
					for ($i = 0; $i < $n; $i++) {
?>
						<div class="projects">
							<div class="projects_link">
							<!--the picture, link and program language to each project-->
								<a href="<?php echo 'http://buksi.000webhostapp.com/' . $types[$j] . '/' . basename($files[$i], ".jpg") . '/index.php'; ?>" target="_blank">
									<img class="projects_picture" src="<?php echo 'img/' . $types[$j] . '/' . basename($files[$i]); ?>"/>
									<div class="overlay">
										<div class="overlay_text">
											<ul>
<?php

												foreach ($projects[basename($files[$i], ".jpg")]["overlay_text"][$l] as $overlay_text) {
?>
													<li><?php echo $overlay_text; ?></li>
<?php
												}
?>
											</ul>
										</div>
									</div>
								</a>
							</div>
							<div class="projects_text">
							<!--the text to each project-->
								<p><?php echo $projects[basename($files[$i], ".jpg")]["text"][$l]; ?></p>
							</div>
						</div>
<?php
					}
				}
?>
			</div>
			
		</div>


		<div id="contact" class="main_content">
		<!--the contact section-->

			<h1><?php echo $contact_title[$l]; ?></h1>
			<ul>
<?php 
				foreach ($contact[$l] as $contact) {
?>
					<li><?php echo $contact; ?></li>
<?php
				}; 
?>

			</ul>

		</div>

		<div id="contact_form" class="main_content">
		<!--the contact page-->
<?php
			include_once "contact.php";
?>
		</div>

	</div>