<!--Bottom-->
<section id="bottom" class="main">
	<!--Container-->
	<div class="container">

		<!--row-fluids-->
		<div class="row-fluid">

			<!--Contact Form-->
			<div class="span5">
				<h4>ADDRESS</h4>
				<ul class="styled address">
					<li>
						<i class="icon-home"></i><strong>Address:</strong> P.O. Box 42254-00100, Nairobi, Kenya<br>
					</li>
					<li>
						<i class="icon-envelope"></i>
						<strong>Email: </strong><a href="mailto:info@thelovetour.co.ke">info@thelovetour.co.ke</a>
					</li>
					<li>
						<i class="icon-globe"></i>
						<strong>Website: </strong><a rel="nofollow" href="http://www.thelovetour.co.ke" target="_blank">www
							.thelovetour.co.ke</a>
					</li>
					<li>
						<i class="icon-mobile-phone"></i>
						<strong>Find Us: </strong> +254-729-465940 &amp; +254-712-953938
					</li>
				</ul>
			</div>
			<!--End Contact Form-->

			<!--Important Links-->
			<div id="tweets" class="span4">
				<h4>THE LOVE TOUR</h4>

				<div>
					<ul class="arrow">
						<li><a href='<?php echo base_url() . "lovetour/"; ?>'><i class="icon-home"></i> Home</a></li>
						<li><a
									href='<?php echo base_url
											() . "lovetour/portFolio"; ?>'><i class="icon-briefcase"></i>
								Portfolio</a></li>
						<li><a
									href='<?php echo base_url
											() . "lovetour/aboutUs"; ?>'><i class="icon-info-sign"></i> About
								Us</a></li>
						<li><a
									href='<?php echo base_url
											() . "lovetour/contactUs"; ?>'><i class="icon-envelope"></i>
								Contact</a></li>
						<li><a
									href='<?php echo base_url
											() . "lovetour/privacy"; ?>'><i class="icon-lock"></i>
								Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<!--Important Links-->

			<!--Archives-->
			<div id="archives" class="span3">
				<h4>ARCHIVES</h4>

				<div>
					<ul class="arrow">
						<li><a href="#">December 2012 (1)</a></li>
						<li><a href="#">November 2012 (5)</a></li>
						<li><a href="#">October 2012 (8)</a></li>
						<li><a href="#">September 2012 (10)</a></li>
						<li><a href="#">August 2012 (29)</a></li>
					</ul>
				</div>
			</div>
			<!--End Archives-->
			<!--/row-fluid-->
		</div>
		<!--/container-->
</section>
<!--/bottom-->
<!--Footer-->
<footer id="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="span5 cp">
				&copy; 2014 The Love Tour Foundation | Design : <a rel="nofollow" href="http://www.api-crafttech.com"
				                                                   target="_blank">Api-Craft Technology</a>
			</div>
			<!--/Copyright-->

			<div class="span6">
				<ul class="social pull-right">
					<li class=".btn-social.btn-facebook"><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>

			<div class="span1">
				<a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
			</div>
			<!--/Goto Top-->
		</div>
	</div>
</footer>
<!--/Footer-->
<script src="<?php echo base_url(); ?>js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url(); ?>js/jquery.ba-cond.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript">
	$(function () {
		var Page = (function () {

			var $navArrows = $('#nav-arrows'),
					slitslider = $('#slider').slitslider({
						autoplay: true
					}),

					init = function () {
						initEvents();
					},
					initEvents = function () {
						$navArrows.children(':last').on('click', function () {
							slitslider.next();
							return false;
						});

						$navArrows.children(':first').on('click', function () {
							slitslider.previous();
							return false;
						});
					};

			return { init: init };

		})();

		Page.init();
	});
</script>
<!-- /SL Slider -->
</body>
</html>
