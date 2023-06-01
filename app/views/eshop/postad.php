<?php $this->view('header',$data)?>

<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">
				 

				 <span style="font-size:18px;color:red;"><?php check_error() ?></span>

				<div class="col-sm-4" style="float: none;display: inline-block;">
					<div class="signup-form"><!--sign up form-->
						<h2>You can customize and publish your add here.</h2>
						<form method="post" enctype="multipart/form-data">

                            <label for="heading">Heading:</label>
                            <input type="text" name="heading" id="" placeholder="Enter your add's heading" required>

                            <label for="description">Description:</label>
                            <input type="text" style="height:100px;" name="description" id="" placeholder="" required>

							<label for="location">City/Country</label>
                            <input type="text" name="location" id="" placeholder="Where are you located..." required>

                            <label for="file">Photo:</label>
                            <input style="background-color:transparent;" type="file" name="image" id="file" class="inputfile" />

                            <label for="visibility">Choose visibility of your ad:</label>

                            <select name="visibility" id="">
								<option value="">Select Ad Visibility :</option>
                                <option value="average">Average</option>
                                <option value="premium">Premium</option>
                                <option value="ultra">Ultra</option>
                            </select>

                            <hr><hr>

							<button type="submit" class="btn btn-default">Post</button>

		

						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

<?php $this->view('footer', $data)?>