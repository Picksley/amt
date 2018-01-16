<?php include('header.php'); ?>
<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1>My Showroom</h1>
			<p> My showroom is our vehicle comparison tool which allows you to compare up to three vehicles - by price, standard equipment, technical specification, optional extras, BIK tax payable or by fuel costs. If you want to save your selection for later, just provide us with your email address and we'll send you a link so you can view your chosen vehicles at anytime.</p>
    </div>
  </div>
</div>


<section class="my_showroom_compare_box">
	<div class="container-fluid dark_compare">
			<div class="row text-center">
				<h2> Compare vehicles by: </h2>
			</div>
		</div>

<div class="container">
			<div class="row selected_vehicles">
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
		        			<a href="#">
		          			<div class="showroom_vehicle">

		            			<figure>
		            			<img class="img-responsive center-block" src="images/hm_spofr3.jpg">
		            			</figure>

		          			  <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>

		            			<div class="item_spofrname">
		              			<h4>Dacia Sandero Hatchback</h4>
		              			<h5>1.2 16V Access 5dr</h5>
		            			</div>

		          			 <div class="spoffrsap"><img src="images/sp_ofrline.png"></div>

		          			<div class="showroom_vehicle_specs">
		            			<div class="row">
		            			<!--start main div-->
		            			<div class="prd-list">
		            			<div class="col-md-6">
		            			<p>MPG <span>38 - 57.7</span></p>
		            			</div>

		            			<div class="col-md-6">
		            			<p>Gearbox <span>Manual</span></p>
		            			</div>
		            			</div>
		            			<!--End main div-->

		            			<!--start main div-->
		            			<div class="prd-list">
		            			<div class="col-md-6">
		            			<p>Co2  <span>130g/km</span></p>
		            			</div>

		            			<div class="col-md-6">
		            			<p>Fuel <span>Petrol</span></p>
		            			</div>
		            			</div>
		            			<!--End main div-->
		            			</div>

		            			<div class="hm_viewspo"><button type="submit"> view vehicle </button></div>

		          			   <div class="showroom_actions"><button class="btn" type=""><i class="fa fa-lg fa-trash-o" aria-hidden="true"></i> DELETE </button><button class="btn" type=""><i class="fa fa-lg fa-clone" aria-hidden="true"></i> DUPLICATE </button></div>
		          			</div>
		          			</div>
		        			</a>
		      </div>
					<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
								<a href="#">
									<div class="showroom_vehicle unselected">

										<figure>
										<img class="center-block" src="images/icon1.png">
										</figure>

										<div class="item_spofrname text-center">
											<h4> No vehicle selected </h4>
											<p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
										</div>


										<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

											<div class="form-group">
										      <select class="form-control unselected_vehicle" id="manufacturer">
										        <option value="" disabled selected>Manufacturers</option>
										        <option value="">Audi</option>
										        <option value="">BMW</option>
										        <option value="">Chevrolet</option>
										      </select>
											 </div>

											<div class="form-group">
										      <select class="form-control unselected_vehicle" disabled id="model">
										        <option value="" disabled selected>Model</option>
										        <option value="">A1</option>
										        <option value="">A3</option>
										        <option value="">A5</option>
										      </select>
											 </div>

											<div class="form-group">
										      <select class="form-control unselected_vehicle" disabled id="derivative">
										        <option value="" disabled selected>Derivative</option>
										        <option value="">Version 1</option>
										        <option value="">Version 2</option>
										        <option value="">Version 3</option>
										      </select>
											 </div>
										</div>

									<div class="showroom_vehicle_specs">

										<div class="hm_viewspo"><button type="submit"> add vehicle </button></div>

									</div>
									</div>
								</a>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
							<a href="#">
								<div class="showroom_vehicle unselected">

									<figure>
									<img class="center-block" src="images/icon1.png">
									</figure>

									<div class="item_spofrname text-center">
										<h4> No vehicle selected </h4>
										<p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
									</div>


									<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

										<div class="form-group">
												<select class="form-control unselected_vehicle" id="manufacturer">
													<option value="" disabled selected>Manufacturers</option>
													<option value="">Audi</option>
													<option value="">BMW</option>
													<option value="">Chevrolet</option>
												</select>
										 </div>

										<div class="form-group">
												<select class="form-control unselected_vehicle" disabled id="model">
													<option value="" disabled selected>Model</option>
													<option value="">A1</option>
													<option value="">A3</option>
													<option value="">A5</option>
												</select>
										 </div>

										<div class="form-group">
												<select class="form-control unselected_vehicle" disabled id="derivative">
													<option value="" disabled selected>Derivative</option>
													<option value="">Version 1</option>
													<option value="">Version 2</option>
													<option value="">Version 3</option>
												</select>
										 </div>
									</div>

								<div class="showroom_vehicle_specs">

									<div class="hm_viewspo"><button type="submit"> add vehicle </button></div>

								</div>
								</div>
							</a>
			</div>
			</div>
	</div>

	<div class="container-fluid light_compare">
			<div class="row text-center">
				<h2> Comparing vehicles by: <strong> Price </strong> </h2>
				<button type=""> Change Comparison </button>
			</div>
		</div>

<div class="container">
	<div class="row selected_vehicles">
				<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
							<a href="#">
								<div class="showroom_vehicle">

									<figure>
										<table class="short_dark_table">
											<tr>
												<td class="drk"><p> Personal leasing </p><span> inc. VAT </span></td>
												<td class="lgt"><p>£XXX.XX</p></td>
											</tr>
											<tr>
												<td class="drk"><p> Annual fuel costs</p><span> excl. VAT </span></td>
													<td class="lgt"><p>£XXX.XX</p></td>
											</tr>
										</table>
									</figure>

									<div class="spoffrsap"><img src="images/sp_ofrline.png"></div>

									<div class="item_spofrname">
										<h4>Customise your deal:</h4>

										<div class="form-group">
												<select class="form-control unselected_vehicle" id="contract-type">
													<option value="" disabled selected><strong> Personal Leasing </strong></option>
													<option value="">Audi</option>
													<option value="">BMW</option>
													<option value="">Chevrolet</option>
												</select>
										 </div>

										<div class="form-group">
												<select class="form-control unselected_vehicle" id="initial-payment">
													<option value="" disabled selected><strong> 9 Months </strong></option>
													<option value="">A1</option>
													<option value="">A3</option>
													<option value="">A5</option>
												</select>
										 </div>

										<div class="form-group">
												<select class="form-control unselected_vehicle" id="contract-length">
													<option value="" disabled selected><strong> 4 years </strong></option>
													<option value="">Version 1</option>
													<option value="">Version 2</option>
													<option value="">Version 3</option>
												</select>
										 </div>
										 <div class="form-group">
												 <select class="form-control unselected_vehicle" id="annual-mileage">
													 <option value="" disabled selected><strong> 8,000 miles </strong></option>
													 <option value="">Version 1</option>
													 <option value="">Version 2</option>
													 <option value="">Version 3</option>
												 </select>
											</div>
									</div>


								<div class="showroom_vehicle_specs">
									<div class="row">
										<h3> Your summary: </h3>
										<p> Processing Fee: <strong> £XXX.XX </strong> Inc VAT</p>
										<p> Initial Payment: <strong> £XXX.XX </strong> Inc VAT</p>
										<p> 48 Monthly Rentals: <strong> £XXX.XX </strong> Inc VAT</p>
										<p> Excess mileage charge: <strong> £XXX.XX </strong></p>
									</div>

									<h3> Found your vehicle? </h3>

									<div class="hm_viewspo"><button type="submit"> REQUEST A QUOTE </button></div>

									 <div class="hm_viewspo"><button class="btn" type=""> ORDER VEHICLE ONLINE </button></div>
								</div>
								</div>
							</a>
			</div>


			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
						<a href="#">
							<div class="showroom_vehicle unselected">

								<figure>
								<img class="center-block" src="images/icon1.png">
								</figure>

								<div class="item_spofrname text-center">
									<h4> No vehicle selected </h4>
									<p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
								</div>


								<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

									<div class="form-group">
											<select class="form-control unselected_vehicle" id="manufacturer">
												<option value="" disabled selected>Manufacturers</option>
												<option value="">Audi</option>
												<option value="">BMW</option>
												<option value="">Chevrolet</option>
											</select>
									 </div>

									<div class="form-group">
											<select class="form-control unselected_vehicle" disabled id="model">
												<option value="" disabled selected>Model</option>
												<option value="">A1</option>
												<option value="">A3</option>
												<option value="">A5</option>
											</select>
									 </div>

									<div class="form-group">
											<select class="form-control unselected_vehicle" disabled id="derivative">
												<option value="" disabled selected>Derivative</option>
												<option value="">Version 1</option>
												<option value="">Version 2</option>
												<option value="">Version 3</option>
											</select>
									 </div>
								</div>

							<div class="showroom_vehicle_specs">

								<div class="hm_viewspo"><button type="submit"> add vehicle </button></div>

							</div>
							</div>
						</a>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="">
					<a href="#">
						<div class="showroom_vehicle unselected">

							<figure>
							<img class="center-block" src="images/icon1.png">
							</figure>

							<div class="item_spofrname text-center">
								<h4> No vehicle selected </h4>
								<p> Search for a vehicle below or select "Compare in My Showroom" on a vehicle listing. </p>
							</div>


							<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

								<div class="form-group">
										<select class="form-control unselected_vehicle" id="manufacturer">
											<option value="" disabled selected>Manufacturers</option>
											<option value="">Audi</option>
											<option value="">BMW</option>
											<option value="">Chevrolet</option>
										</select>
								 </div>

								<div class="form-group">
										<select class="form-control unselected_vehicle" disabled id="model">
											<option value="" disabled selected>Model</option>
											<option value="">A1</option>
											<option value="">A3</option>
											<option value="">A5</option>
										</select>
								 </div>

								<div class="form-group">
										<select class="form-control unselected_vehicle" disabled id="derivative">
											<option value="" disabled selected>Derivative</option>
											<option value="">Version 1</option>
											<option value="">Version 2</option>
											<option value="">Version 3</option>
										</select>
								 </div>
							</div>

						<div class="showroom_vehicle_specs">

							<div class="hm_viewspo"><button type="submit"> add vehicle </button></div>

						</div>
						</div>
					</a>
	</div>


	</div>



</div>


</section>





<?php include('recently_viewed_vehicles.php'); ?>



<?php include('newsletter.php'); ?>


<?php include('footer.php'); ?>
