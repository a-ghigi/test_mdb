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
		});
	</script>

</body>
</html>
