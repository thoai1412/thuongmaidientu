<div id="header">
	<?php 
		if(isset($_SESSION['id_user'])){
			$id_user = $_SESSION['id_user'];
			$sql_select_id_user = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE khachhang_id='$id_user'"); 
		}
	?>
		<a href="index.php" id="logo">
			<img src="img/logo.png">
		</a>
		<div class="search-box-container">
			<div class="search-box">
				<form id="pr-search" action="timkiem.php" method="POST">
					<input type="text" name="ten" placeholder="Search">
					<button type="submit" name="btn_search"><i class="fa-solid fa-magnifying-glass"></i></button>
				</form>					
			</div>
		</div>	
		<div class="right-header">
			<div id="logined">
				<span><i class="fa-solid fa-user"></i></span>
				<?php 
					while($row_email = mysqli_fetch_array($sql_select_id_user)){ 
				?>
				<div class="menu-user">
					<a href="" id="name"><?php echo $row_email['khachhang_email'] ?></a>					
					<ul class="sub-menu-user">
						<li><a href="">Thông tin</a></li>
						<li><a href="logout.php">Log out</a></li>
					</ul>
					<?php } ?>	
				</div>
			</div>	
			<div class="cart-container">
				<a href="cart.php">
					<img src="img/cart.png" class="cart-icon">
				</a>
			</div>
		</div>		
	</div> 