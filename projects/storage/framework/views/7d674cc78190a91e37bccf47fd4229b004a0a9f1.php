<header>
	<div class="top-header d-none d-xl-block">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-8">
				<div class="header-cta d-flex justify-content-start">
					<ul>
						
						<li><a href="mailto:<?php echo e($setting_data['email']); ?>"><img src="<?php echo asset('front/images/email.png'); ?>"> <?php echo e($setting_data['email']); ?></a></li>
						<li><a href="tel:<?php echo e($setting_data['mobile']); ?>"><img src="<?php echo asset('front/images/phone.png'); ?>"> <?php echo e($setting_data['mobile']); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="header-right-socail d-flex align-items-center" style="
					justify-content: end;
					">
					<div class="social-profile">
						<ul>
							<li><a href="#"><img src="<?php echo asset('front/images/facebook.png'); ?>"></a></li>
							<li><a href="#"><img src="<?php echo asset('front/images/instagram.png'); ?>"></a></li>
							<li><a href="#"><img src="<?php echo asset('front/images/twitter.png'); ?>"></a></li>
							<li><a href="#"><img src="<?php echo asset('front/images/linkedin.png'); ?>"></a></li>
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
	    <a class="navbar-brand" href="<?php echo url(''); ?>"><img src="<?php echo asset('front/images/logo.png'); ?>"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="<?php echo url(''); ?>">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">News</a>
	        </li>
            <li class="nav-item">
	          <a class="nav-link" href="#">Gulf</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">World</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Finance</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Sports</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Entertainment</a>
	        </li>


	      </ul>
	      <div class="nav-right">
		<div class="search-btn">
			<a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
		 </div>
		<div class="language">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
		<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#authModal">Login</a>
		</div>
	</div>
	    </div>
	  </div>
	</nav>

</div>
</header><?php /**PATH E:\Xampp8.2\htdocs\laravel\voteproject\projects\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>