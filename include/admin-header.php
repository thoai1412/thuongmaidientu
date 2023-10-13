<div class="admin-container">
		<div class="btn-logout">
			<a href="logout.php"><span style="color: red"><i class="fa-solid fa-power-off"></i></span></a>
		</div>
		<div class="admin-avatar">
			<?php 
					while($row_admin = mysqli_fetch_array($sql_select_id_admin)){ 
				?>
			<span><?php echo $row_admin['admin_email'] ?><i class="fa-solid fa-user"></i></span>
			<?php } ?>
		</div>
	</div>