	<!-- Footer -->
	<footer class="page-footer font-small">

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->

	<!-- End your project here-->

	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo mdb_url(); ?>js/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="<?php echo mdb_url(); ?>js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?php echo mdb_url(); ?>js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?php echo mdb_url(); ?>js/mdb.min.js"></script>

	<script>
		$(document).ready(function() {
			// SideNav Button Initialization
			$(".button-collapse").sideNav();
			
			// SideNav Scrollbar Initialization
			var sideNavScrollbar = document.querySelector('.custom-scrollbar');
			var ps = new PerfectScrollbar(sideNavScrollbar);
		
			// Material Select Initialization
			$('.mdb-select').materialSelect();

			// Data Picker Initialization
			$('.datepicker').pickadate();

			// Tooltip Initialization
			$('[data-toggle="tooltip"]').tooltip();

			// Minimalist chart
			$('.min-chart#chart-sales').easyPieChart({
				barColor: "#4caf50",
				onStep: function (from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});

			// Main chart
			var ctxL = document.getElementById("lineChart").getContext('2d');
			var myLineChart = new Chart(ctxL, {
				type: 'line',
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July"],
					datasets: [{
						label: "My First dataset",
						fillColor: "#fff",
						backgroundColor: 'rgba(255, 255, 255, .3)',
						borderColor: 'rgba(255, 255, 255)',
						data: [0, 10, 5, 2, 20, 30, 45],
					}]
				},
				options: {
					legend: {
						labels: {
							fontColor: "#fff",
						}
					},
					scales: {
						xAxes: [{
							gridLines: {
								display: true,
								color: "rgba(255,255,255,.25)"
							},
							ticks: {
								fontColor: "#fff",
							},
						}],
						yAxes: [{
							display: true,
							gridLines: {
								display: true,
								color: "rgba(255,255,255,.25)"
							},
							ticks: {
								fontColor: "#fff",
							},
						}],
					}
				}
			});
		});
	</script>

</body>
</html>
