<?php $this->view('header',$data)?>

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Top</span>ADS</h1>
									<h1>WELCOME TO TOP ADS WEBSITE</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									
								</div>
								<div class="col-sm-6">
									<img src="<?= ASSETS . THEME?>images/home/ads.png" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Top</span>ADS</h1>
									<h1>PLACE WHERE OTHER PEOPLE CAN SEE WHAT YOU OFFER</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									
								</div>
								<div class="col-sm-6">
									<img src="<?= ASSETS . THEME?>images/home/payment-method.png" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Top</span>ADS</h1>
									<h1>ALL IN ONE PLACE</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									
								</div>
								<div class="col-sm-6">
									<img src="<?= ASSETS . THEME?>images/home/note.png" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											House Selling
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">London </a></li>
											<li><a href="#">Madrid </a></li>
											<li><a href="#">Moscow </a></li>
											<li><a href="#">Budapest</a></li>
											<li><a href="#">Paris</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Clothes
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Cars
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Ferrari</a></li>
											<li><a href="#">BMW</a></li>
											<li><a href="#">AUDI</a></li>
											<li><a href="#">Masserati</a></li>
											<li><a href="#">Yugo</a></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Featured Ads</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="width:150px; height:150px;" src="<?= ASSETS . THEME?>images/uploads/note.png" alt="" />
											<h2>Ad Heading</h2>
											<p>Ad Description</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Ad</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Ad Heading</h2>
								
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="width:150px; height:150px;" src="<?= ASSETS . THEME?>images/uploads/note.png" alt="" />
											<h2>Ad Heading</h2>
											<p>Ad Description</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Ad</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Ad Heading</h2>
								
											</div>
										</div>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="width:150px; height:150px;" src="<?= ASSETS . THEME?>images/uploads/note.png" alt="" />
											<h2>Ad Heading</h2>
											<p>Ad Description</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Ad</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Ad Heading</h2>
								
											</div>
										</div>
								</div>
							</div>
						</div>					
				</div>
			</div>
		</div>
	</section>

<?php $this->view('footer', $data)?>