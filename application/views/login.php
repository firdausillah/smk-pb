
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Login</li>
	</ol>
	<!--//banner-->
	<!--/main-->
<section class="main-content-w3layouts-agileits">
	<div class="container">
	<h3 class="tittle">Login Now</h3>
		<div class="row inner-sec">
			<div class="login p-5 bg-light mx-auto mw-100">
				<!-- <form action="#" method="post"> -->
				<?= form_open('login/proses_login'); ?>
					<div class="form-group">
					  <label for="username mb-2">User Name</label>
					  <input type="text" class="form-control" id="username" name="username" aria-describedby="usern" placeholder="" required="">
					  <!-- <small id="usern" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>
				<div class="form-group">
				  <label for="password mb-2">Password</label>
				  <input type="password" class="form-control" id="password" name="password" placeholder="" required="">
				</div>
				<!-- <div class="form-check mb-2">
				  <input type="checkbox" class="form-check-input" id="exampleCheck1">
				  <label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div> -->
					<button type="submit" class="btn btn-succes submit mb-4">Login</button><br>
					<span class="text-danger"><?php if(isset($pesan)){echo $pesan;} ?></span>
					<!-- <p><a href=""> Don't have an account?</a></p> -->
					<?= form_close(); ?>
			  <!-- </form> -->
			</div>
		</div>
	</div>
</section>
	<!--//main-->
