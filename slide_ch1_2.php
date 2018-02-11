<?php
	$thisPage="2";
	$thisChapter="1";
	include ("_inc/header.inc.php");
?>

<div class="wrapper">
	<div class="videoplayer">
		<video poster="_gfx/Start.svg" autobuffer controls>
			<source src="_video/slide_ch<?php echo ($thisChapter)."_".($thisPage) ?>.ogg" type="video/ogg">
			<source src="_video/slide_ch<?php echo ($thisChapter)."_".($thisPage) ?>.mp4" type="video/mp4">>
		</video>
	</div>
	<div class="controls">
		<div class="prev">
			<a href="slide_ch<?php echo ($thisChapter)."_".($thisPage-1) ?>.php" title="previous Psge<?php echo $thisPage-1 ?>">
				<img src="_gfx/ctrl_prev.svg">
			</a>
		</div>
		<div class="empty">
			<p>
				<?php echo $wbtTitle ?> &mdash; Chapter <?php echo $thisChapter ?>, Page <?php echo $thisPage ?>
			</p>
		</div>
		<div class="next">
			<a href="slide_ch<?php echo ($thisChapter)."_".($thisPage+1) ?>.php" title="next Page<?php echo $thisPage+1 ?>">
				<img src="_gfx/ctrl_next.svg">
			</a>
		</div>
	</div>
<!-- Wrapper-Div is closed in footer.inc.php -->

<?php
	include ("_inc/footer.inc.php");
?>