<footer class="footer-1 footer-3 overflow-hidden">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-footer-wid footer-logo widget-description">
                    <a href="#" class="d-block mb-30 mb-xs-20">
                        <img src="<?php echo asset($setting_data['footer_logo'] ?? 'front/images/logos.png'); ?>" alt="">
                    </a>
                    <div class="description">
                        <p><?php echo $setting_data['about']; ?></p>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-3 - single-footer-wid -->
            <div class="col-lg-2 col-md-6 col-6">
                <div class="single-footer-wid quick-links">
                    <h4 class="wid-title mb-30 color-white">Quick Link</h4>
                    <ul>
                        <li><a href="<?php echo url(''); ?>">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>
                        <li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo e(url('terms-of-use')); ?>">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <div class="single-footer-wid quick-links">
                    <h4 class="wid-title mb-30 color-white">Categories</h4>
                    <ul>
                        <li><a href="<?php echo url('gulf'); ?>">Gulf</a></li>
                        <li><a href="<?php echo url('world'); ?>">World</a></li>
                        <li><a href="<?php echo url('finance'); ?>">Finance</a></li>
                        <li><a href="<?php echo url('sports'); ?>">Sports</a></li>
                        <li><a href="<?php echo url('entertainment'); ?>">Entertainment</a></li>
                    </ul>
                </div>
            </div>

            <!-- /.col-lg-4 - single-footer-wid -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-footer-wid">
                    <h4 class="wid-title mb-30 color-white">Newsletter</h4>
                    <div class="single-footer-wid newsletter_widget">
                        <div class="newsletter_box">
                            <form action="<?php echo e(route('newsletterPost')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="input-group news-form-input ">
                                    <input type="text" class="form-control" name="email" id="subscribeEmailId" onkeyup="useRefNewsLetter('subscribeEmailId')" placeholder="Enter Your Email" required>
                                    <button class="btn btn-outline-secondary" type="submit" id="subscribeBtnId"
                                        id="button-addon2">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="header-right-socail d-flex align-items-center news-foot-social">
                        <div class="social-profile">
                            <ul>
                                <?php if($setting_data['facebook']): ?>
                                    <li><a href="<?php echo e($setting_data['facebook']); ?>" aria-label="Facebook"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif; ?>
                                <?php if($setting_data['twitter']): ?>
                                    <li><a href="<?php echo e($setting_data['twitter']); ?>" aria-label="Twitter" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                <?php endif; ?>
                                <?php if($setting_data['instagram']): ?>
                                    <li><a href="<?php echo e($setting_data['instagram']); ?>" aria-label="Instagram"
                                            target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <?php endif; ?>
                                <?php if($setting_data['linkedin']): ?>
                                    <li><a href="<?php echo e($setting_data['linkedin']); ?>" aria-label="Linkedin"
                                            target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php endif; ?>
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
                    <?php echo $setting_data['copyright']; ?>

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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></button>
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
                                            <form action="<?php echo e(route('user.login')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" placeholder="Email"
                                                    name="email" id="loginEmail" onkeyup="useRefShow('loginEmail')" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" placeholder="Password" 
                                                    name="password" minlength="5" maxlength="25" id="loginPassword" onkeyup="useRefShow('loginPassword')" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100" id="loginBtnId">Login</button>
                                                <p class="text-center mt-3">Don't have an account? <a href="#"
                                                        id="showSignup">Sign up</a></p>
                                            </form>
                                        </div>

                                        <!-- Signup Form -->
                                        <div id="signupForm" style="display: none;">
                                            <h3>Sign Up</h3>
                                            <form action="<?php echo e(route('front.user.register')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Full Name" name="name" id="signUpNameId" minlength="3" maxlength="25" onkeydown="return /[a-z ]/i.test(event.key)" onkeyup="useRefShow('signUpNameId')" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control"
                                                     placeholder="Email" name="email" id="signUpEmailId" onkeyup="useRefShow('signUpEmailId')" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control"
                                                     placeholder="Password" name="password" minlength="5" maxlength="25" id="passwordId" onkeyup="useRefShow('passwordId')" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Re-enter Password" minlength="5" maxlength="25" name="cpassword" id="cpasswordId" onkeyup="useRefShow('cpasswordId')" required>
                                                </div>
                                                <button type="submit" class="btn btn-success w-100" id="signUpBtnId">Sign Up</button>
                                                <p class="text-center mt-3">Already have an account? <a href="#"
                                                        id="showLogin">Login</a></p>
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

<?php echo $__env->make('front.layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('js'); ?>
<?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>