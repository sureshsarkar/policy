<header>
    <div class="top-header d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8">
                    <div class="header-cta d-flex justify-content-start">
                        <ul>

                            <li><a href="mailto:<?php echo e($setting_data['email']); ?>"><img src="<?php echo asset('front/images/email.png'); ?>">
                                    <?php echo e($setting_data['email']); ?></a></li>
                            <li><a href="tel:<?php echo e($setting_data['mobile']); ?>"><img src="<?php echo asset('front/images/phone.png'); ?>">
                                    <?php echo e($setting_data['mobile']); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <div class="header-right-socail d-flex align-items-center"
                        style="
					justify-content: end;
					">
                        <div class="social-profile">
                            <ul>
                                <?php if($setting_data['facebook']): ?>
                                    <li><a href="<?php echo e($setting_data['facebook']); ?>" aria-label="Facebook"
                                            target="_blank"><img src="<?php echo asset('front/images/facebook.png'); ?>"></a></li>
                                <?php endif; ?>
                                <?php if($setting_data['instagram']): ?>
                                    <li><a href="<?php echo e($setting_data['instagram']); ?>" aria-label="Instagram"
                                            target="_blank"><img src="<?php echo asset('front/images/instagram.png'); ?>"></a></li>
                                <?php endif; ?>
                                <?php if($setting_data['twitter']): ?>
                                    <li><a href="<?php echo e($setting_data['twitter']); ?>" aria-label="Twitter"
                                            target="_blank"><img src="<?php echo asset('front/images/twitter.png'); ?>"></a></li>
                                <?php endif; ?>
                                <?php if($setting_data['linkedin']): ?>
                                    <li><a href="<?php echo e($setting_data['linkedin']); ?>" aria-label="Linkedin"
                                            target="_blank"><img src="<?php echo asset('front/images/linkedin.png'); ?>"></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo url(''); ?>"><img src="<?php echo asset($setting_data['header_logo'] ?? 'front/images/logo.png'); ?>"></a>

                <div class="mobile-tabs">
            <div class="nav-right">
                <div class="search-btn">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                 </div>
                <div class="language">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo asset('front/images/english.png'); ?>" alt="English" class="flag-icon">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="#" onclick="setLanguage('us', 'English')">
                                <img src="<?php echo asset('front/images/english.png'); ?>" class="flag-icon">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="setLanguage('ae', 'Arabic')">
                                <img src="<?php echo asset('front/images/ar.png'); ?>" class="flag-icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="login-btn">
                	 <?php if(Auth::guard('employee')->check()): ?>
                                <a href="<?php echo e(route('user.logout')); ?>">Logout</a>
                            <?php else: ?>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#authModal"><i class="far fa-user"></i></a>
                            <?php endif; ?>
                <!-- <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#authModal"><i class="far fa-user"></i></a> -->
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>


                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo url(''); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('news')); ?>">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('gulf')); ?>">Gulf</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('world')); ?>">World</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('finance')); ?>">Finance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('sports')); ?>">Sports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('entertainment')); ?>">Entertainment</a>
                        </li>


                    </ul>
                    <div class="nav-right desktop-tabs" >
                        <div class="search-btn">
                            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                        <div class="language">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="languageDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo asset('front/images/english.png'); ?>" alt="English" class="flag-icon"> EN
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="setLanguage('us', 'English')">
                                            <img src="<?php echo asset('front/images/english.png'); ?>" class="flag-icon"> EN
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="setLanguage('ae', 'Arabic')">
                                            <img src="<?php echo asset('front/images/ar.png'); ?>" class="flag-icon"> AR
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="login-btn">
                            <?php if(Auth::guard('employee')->check()): ?>
                                <a href="<?php echo e(route('user.logout')); ?>">Logout</a>
                            <?php else: ?>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#authModal">Login</a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </nav>

    </div>
</header>
<?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>