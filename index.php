<?php
	$thisPage="start";
	include ("_inc/header.inc.php");
?>

<div class="wrapper">
	<div class="videoplayer">
		<a href="slide_ch1_1.php">
			<img src="https://media.giphy.com/media/QSc0B6hg8IkOQ/giphy.gif" class="startpic" alt="startimage.jpg" title="SartPic">
		</a>
	</div>
	<div class="controls">
		<div class="empty">
			<a href="slide_ch1_1.php"><button type="button" class="close" data-dismiss="modal">Chapter 1</button></a><span class="close" style="padding:0 10px;"> ● </span>
<!--
			<a href="slide_ch2_1.php"><button type="button" class="close" data-dismiss="modal">Chapter 2</button></a><span class="close" style="padding:0 10px;"> ● </span>
			<a href="slide_ch3_1.php"><button type="button" class="close" data-dismiss="modal">Chapter 3</button></a><span class="close" style="padding:0 10px;"> ● </span>
-->
		</div>
		<div class="next">
			<a href="slide_ch1_1.php" title="next Slide">
				<img src="_gfx/ctrl_next.svg">
			</a>
		</div>
	</div>
<!-- Wrapper-Div is closed in footer.inc.php -->

<?php
	include ("_inc/footer.inc.php");
?>