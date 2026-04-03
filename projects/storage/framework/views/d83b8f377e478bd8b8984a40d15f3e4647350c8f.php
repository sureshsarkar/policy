

<footer class="footer-1 footer-3 overflow-hidden" >

	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="single-footer-wid footer-logo widget-description">
					<a href="#" class="d-block mb-30 mb-xs-20">
					<img src="<?php echo asset('front/images/logos.png'); ?>" alt="">
					</a>
					<div class="description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut</p>
					</div>
					<!--  <a href="#" class="theme-btn btn-red btn-md fw-600">Purchase Now <i class="far fa-chevron-double-right"></i></a> -->
				</div>
			</div>
			<!-- /.col-lg-3 - single-footer-wid -->
			<div class="col-lg-2 col-md-6 col-12">
				<div class="single-footer-wid quick-links">
					<h4 class="wid-title mb-30 color-white">Quick Link</h4>
					<ul>
						<li><a href="<?php echo url(''); ?>">Home</a></li>
						<li><a href="<?php echo url('about-us'); ?>">About Us</a></li>
						<li><a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-12">
				<div class="single-footer-wid quick-links">
					<h4 class="wid-title mb-30 color-white">Categories</h4>
					<ul>
						<li><a href="#">Gulf</a></li>
						<li><a href="#">World</a></li>
						<li><a href="#">Finance</a></li>
						<li><a href="#">Sports</a></li>
						<li><a href="#">Entertainment</a></li>
					</ul>
				</div>
			</div>
			<!-- /.col-lg-2 - single-footer-wid -->
		<!-- 	<div class="col-lg-4 col-md-6 col-12">
				<div class="single-footer-wid recent_post_widget">
					<h4 class="wid-title mb-30 color-white">Contact Us</h4>
					<div class="recent-post-list">
						<a href="#" class="single-recent-post">
							<div class="post-data">
								<span class="color-white d-flex ailign-items-center"><i class="fas fa-map-marker-alt"></i> 6733 Mississauga Rd suite 700, Mississauga, ON L5N 6J5, Canada</span>
							</div>
						</a>
						<a href="#" class="single-recent-post">
							<div class="post-data">
								<span class="color-white d-flex ailign-items-center"><i class="far fa-envelope"></i> office@sgaglobe.com</span>
							</div>
						</a>
						<a href="#" class="single-recent-post">
							<div class="post-data">
								<span class="color-white d-flex ailign-items-center"><i class="fas fa-phone-volume"></i> +1-(437) 564 6200</span>
							</div>
						</a>
					</div>
				</div>
			</div> -->
			<!-- /.col-lg-4 - single-footer-wid -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="single-footer-wid">
					<h4 class="wid-title mb-30 color-white">Newsletter</h4>
					<div class="single-footer-wid newsletter_widget">
						<div class="newsletter_box">
							<form>
							<div class="input-group news-form-input ">
							  <input type="text" class="form-control" placeholder="Enter Your Email">
							  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>
							</div>
						</form>
						</div>
					</div>
					<div class="header-right-socail d-flex align-items-center news-foot-social">
						<div class="social-profile">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col-lg-3 - single-footer-wid -->
		</div>
	</div>
	<div class="footer-bottom overflow-hidden mt-20 mt-sm-15 mt-xs-10">
		<div class="container">
			<div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-center align-items-center">
				<div class="coppyright text-center text-md-start">
					© Copyright 2025 | All Rights Reserved Developed by <a href="#">Digital Hub solution</a>
				</div>
			</div>
		</div>
	</div>
</footer>


<div class="login-sign-pop-wrapp">
<!-- Modal -->
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    


      <div class="modal-body ">
      	<div class="pop-close">
      		 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
      	</div>
      	<div class="login-pop-wrapp">
      		<div class="row">
      			<div class="col-lg-6 col-md-6 col-12 col-pading">
      				<div class="log-pop-img">
      					<img src="<?php echo asset('front/images/popup.png'); ?>">
      				</div>
      			</div>
      			<div class="col-lg-6 col-md-6 col-12">
      				<div class="both-form-main">
      				<div class="both-form">
      					<!-- Login Form -->
					        <div id="loginForm">
					        	<h3>Login</h3>
					          <form>
					            <div class="mb-3">
					              <input type="text" class="form-control" id="loginEmail" placeholder="Email" required>
					            </div>
					            <div class="mb-3">
					              <input type="text" class="form-control" id="loginPassword"  placeholder="Password" required>
					            </div>
					            <button type="submit" class="btn btn-primary w-100">Login</button>
					            <p class="text-center mt-3">Don't have an account? <a href="#" id="showSignup">Sign up</a></p>
					          </form>
					        </div>

					        <!-- Signup Form -->
					        <div id="signupForm" style="display: none;">
					        	<h3>Sign Up</h3>
					          <form>
					            <div class="mb-3">
					              <input type="text" class="form-control" placeholder="Full Name" required>
					            </div>
					            <div class="mb-3">
					              <input type="text" class="form-control" placeholder="Email" required>
					            </div>
					            <div class="mb-3">
					              <input type="text" class="form-control" placeholder="Password" required>
					            </div>
					            <div class="mb-3">
					              <input type="text" class="form-control" placeholder="Re-enter Password" required>
					            </div>
					            <button type="submit" class="btn btn-success w-100">Sign Up</button>
					            <p class="text-center mt-3">Already have an account? <a href="#" id="showLogin">Login</a></p>
					          </form>
					        </div>
      				</div>
      			</div>
      			</div>
      		</div>
      	</div>
        
      </div>
    </div>
  </div>
</div>
</div>


<?php echo $__env->make("front.layouts.js", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent("js"); ?>


<?php /**PATH E:\Xampp8.2\htdocs\laravel\voteproject\projects\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>