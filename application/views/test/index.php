	<!--Main layout-->
	<main>
		<div class="container-fluid">

			<!--Section: Modals-->
			<section>

			</section>
			<!--Section: Modals-->

			<!--Section: Main panel-->
			<section class="card card-cascade narrower mb-5">

				<!--Grid row-->
				<div class="row">

					<!--Grid column-->
					<div class="col-md-5">

						<!--Panel Header-->
						<div class="view view-cascade py-3 gradient-card-header info-color-dark">
							<h5 class="mb-0">Sales</h5>
						</div>
						<!--/Panel Header-->

						<!--Panel content-->
						<div class="card-body">

							<!--Grid row-->
							<div class="row">

								<!--Grid column-->
								<div class="col-md-6 mb-4">

									<!--Date select-->
									<p class="lead">
										<span class="badge info-color-dark p-2">Date range</span>
									</p>
									<select class="mdb-select colorful-select dropdown-info">
										<option value="" disabled>Choose time period</option>
										<option value="1">Today</option>
										<option value="2">Yesterday</option>
										<option value="3">Last 7 days</option>
										<option value="3">Last 30 days</option>
										<option value="3">Last week</option>
										<option value="3">Last month</option>
									</select>

									<!--Date pickers-->
									<p class="lead my-4">
										<span class="badge info-color-dark p-2">Custom date</span>
									</p>
									<div class="md-form">
										<input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
										<label for="from">From</label>
									</div>
									<div class="md-form">
										<input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
										<label for="to">To</label>
									</div>

								</div>
								<!--Grid column-->

								<!--Grid column-->
								<div class="col-md-6 mb-4 text-center">

									<!--Summary-->
									<p>Total sales:
										<strong>2000$</strong>
										<button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top" title="Total sales in the given period">
											<i class="fas fa-question"></i>
										</button>
									</p>
									<p>Average sales:
										<strong>100$</strong>
										<button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top" title="Average daily sales in the given period">
											<i class="fas fa-question"></i>
										</button>
									</p>

									<!--Change chart-->
									<span class="min-chart my-4" id="chart-sales" data-percent="76">
										<span class="percent"></span>
									</span>
									<h5>
										<span class="badge green p-2">Change
											<i class="fas fa-arrow-circle-up ml-1"></i>
										</span>
										<button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top" title="Percentage change compared to the same period in the past">
											<i class="fas fa-question"></i>
										</button>
									</h5>

								</div>
								<!--Grid column-->

							</div>
							<!--Grid row-->

						</div>
						<!--Panel content-->

					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-md-7">

						<!--Panel Header-->
						<div class="view view-cascade py-3 gradient-card-header info-color-dark mb-4">

							<canvas id="lineChart"></canvas>

						</div>
						<!--/Card image-->

					</div>
					<!--Grid column-->

				</div>
				<!--Grid row-->

			</section>
			<!--Section: Main panel-->

			<!--Section: Table-->
			<section class="mb-5">

				<!--Top Table UI-->
				<div class="card p-2 mb-5">

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-lg-3 col-md-12">

							<!--Name-->
							<select class="mdb-select colorful-select dropdown-primary mx-2">
								<option value="" disabled selected>Bulk actions</option>
								<option value="1">Delate</option>
								<option value="2">Export</option>
								<option value="3">Change segment</option>
							</select>

						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-lg-3 col-md-6">

							<!--Blue select-->
							<select class="mdb-select colorful-select dropdown-primary mx-2">
								<option value="" disabled selected>Show only</option>
								<option value="1">All
									<span> (2000)</span>
								</option>
								<option value="2">Never opened
									<span> (200)</span>
								</option>
								<option value="3">Opened but unanswered
									<span> (1800)</span>
								</option>
								<option value="4">Answered
									<span> (200)</span>
								</option>
								<option value="5">Unsunscribed
									<span> (50)</span>
								</option>
							</select>
							<!--/Blue select-->

						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-lg-3 col-md-6">

							<!--Blue select-->
							<select class="mdb-select colorful-select dropdown-primary mx-2">
								<option value="" disabled selected>Filter segments</option>
								<option value="1">Contacts in no segments
									<span> (100)</span>
								</option>
								<option value="1">Segment 1
									<span> (2000)</span>
								</option>
								<option value="2">Segment 2
									<span> (1000)</span>
								</option>
								<option value="3">Segment 3
									<span> (4000)</span>
								</option>
							</select>
							<!--/Blue select-->

						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-lg-3 col-md-6">

							<form class="form-inline mt-2 ml-2">
								<input class="form-control my-0 py-0" type="text" placeholder="Search" style="max-width: 150px;">
								<button class="btn btn-sm btn-info ml-2 px-2">
									<i class="fas fa-search"></i>
								</button>
							</form>

						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

				</div>
				<!--Top Table UI-->

				<!--Card-->
				<div class="card card-cascade narrower">

				<!--Card header-->
				<div class="view view-cascade py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">

					<div>
						<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
							<i class="fas fa-th-large mt-0"></i>
						</button>
						<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
							<i class="fas fa-columns mt-0"></i>
						</button>
					</div>

					<a href="" class="white-text mx-3">Table name</a>

					<div>
						<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
							<i class="fas fa-pencil-alt mt-0"></i>
						</button>
						<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
							<i class="fas fa-times mt-0"></i>
						</button>
						<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
							<i class="fas fa-info-circle mt-0"></i>
						</button>
					</div>

				</div>
				<!--/Card header-->

					<!--Card content-->
					<div class="card-body">
					
						<div class="table-responsive">

							<table class="table text-nowrap">
								<thead>
									<tr>
										<th>#</th>
										<th>First column</th>
										<th>Second column</th>
										<th>Third column</th>
										<th>Fourth column</th>
										<th>Fifth column</th>
										<th>Sixth column</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
										<td>Lorem Ipsum</td>
									</tr>
								</tbody>
							</table>

						</div>

					</div>
					<!--/.Card content-->

				</div>
				<!--/.Card-->

			  </section>
			  <!--Section: Table-->

			<!--Section: Accordion-->
			<section class="mb-5">

			</section>
			<!--Section: Accordion-->

		</div>
	</main>
	<!--Main layout-->
