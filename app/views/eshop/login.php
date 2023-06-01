
	<?php $this->view("header",$data); ?>

	<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">
				 

				 <span style="font-size:18px;color:red;"><?php check_error() ?></span>

				<div class="col-sm-4" style="float: none;display: inline-block;">
					<div class="signup-form"><!--sign up form-->
					<h2>Login to your account</h2>
						<form method="post">
							<input type="email"name="email" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Password" />
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>

					<br>
						<a style="font-size:22px;" href="<?= ROOT ?>signup">Don't have an account? Signup here.</a>

					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
 
<?php $this->view("footer",$data); ?>

