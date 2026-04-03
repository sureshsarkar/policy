<header>



    <!-- <div class="top-bar">

    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-md-8 col-12">

          <div class="top-left">

            <ul>

              <li><a href="#"><i class="fab fa-whatsapp"></i> +919859856547</a></li>

              <li><a href="#"><i class="fas fa-envelope"></i> admin@example.com</a></li>

            </ul>

          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-12">

          <div class="top-right">

            <ul>

              <li>

                <h5>Follow Us</h5>

              </li>

              <li><a href="#" target="_blank"><i class="fab fa-instagram" ></i></a></li>

              <li><a href="#" target="_blank"><i class="fab fa-facebook-f" ></i></a></li>

              <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div> -->

    <div class="main-header-wrapper">

        <nav class="navbar navbar-expand-lg">

            <div class="container">

                <a class="navbar-brand" href="<?php echo e(url('')); ?>"><img

                        src="<?php echo e(asset($setting_data['header_logo'] ?? 'front/images/logo.png')); ?>"></a>

                  <div class="mobiel-navs">


                      <?php if(Auth::guard('employee')->check()): ?>

                                <!-- <div class="button">

                                    <a class="theme-btn1" href="<?php echo e(route('user.logout')); ?>"><span><i

                                                class="fas fa-sign-out-alt"></i></span> Logout </a>



                                </div> -->



                                <div class="button m-1">

                                    <a class="theme-btn1" href="<?php echo e(route('dashboard')); ?>"><span><i

                                                class="fas fa-user"></i></span> </a>



                                </div>

                            <?php else: ?>

                                <div class="button">

                                    <a class="theme-btn1" href="<?php echo e(url('user-login')); ?>"><span><i

                                                class="fas fa-sign-in-alt"></i></span> Login </a>

                                </div>

                            <?php endif; ?>




                        <!-- <a class="theme-btn1" href="#"><span><i class="fas fa-sign-in-alt"></i></span> Login </a> -->
                         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-bars"></i>
                    </button>
                    </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto  me-auto mb-2 mb-lg-0">

                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="<?php echo e(url('')); ?>">Home</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="<?php echo e(url('about-us')); ?>">About Us</a>

                        </li>

                        <!--   <li class="nav-item">

            <a class="nav-link" href="#">Services</a>

          </li> -->

                        <li class="nav-item">

                            <a class="nav-link" href="<?php echo e(url('gallery')); ?>">Gallery</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="<?php echo e(url('blogs')); ?>">Blogs</a>

                        </li>

                        <!-- <li class="nav-item">

            <a class="nav-link" href="#">Login</a>

          </li> -->



                    </ul>

                    <div class="nav-right  desktop-navs">

                        <div class="header1-buttons">

                            <div class="contact-btn">

                                <div class="icon">

                                    <img src="<?php echo e(asset('front/images/header1-icon.png')); ?>" alt="">

                                </div>

                                <div class="headding">

                                    <p>Make a Call</p>

                                    <a href="tel:<?php echo e($setting_data['mobile']); ?>"><?php echo e($setting_data['mobile']); ?></a>

                                </div>

                            </div>

                            <?php if(Auth::guard('employee')->check()): ?>

                                <div class="button">

                                    <a class="theme-btn1" href="<?php echo e(route('user.logout')); ?>"><span><i

                                                class="fas fa-sign-out-alt"></i></span> Logout </a>



                                </div>



                                <div class="button m-1">

                                    <a class="theme-btn1" href="<?php echo e(route('dashboard')); ?>"><span><i

                                                class="fas fa-user"></i></span> </a>



                                </div>

                            <?php else: ?>

                                <div class="button">

                                    <a class="theme-btn1" href="<?php echo e(url('user-login')); ?>"><span><i

                                                class="fas fa-sign-in-alt"></i></span> Login </a>

                                </div>

                            <?php endif; ?>



                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </div>

</header>

<?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>