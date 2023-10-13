<div id="slideshow">
		<?php  
		$sql_slider = mysqli_query($conn,"SELECT * FROM tbl_slider WHERE slider_active = '1' ORDER BY slider_id ASC");
	?>
		<div class="slide-wrapper" >
			<?php
			while($row_slider = mysqli_fetch_array($sql_slider)){
			?>
			<div class="slide">
				<img src="img/slide-img/<?php echo $row_slider['slider_img'] ?>">
			</div>
			<?php } ?>
		</div>
	</div>