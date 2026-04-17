
<!-- ═══ NAVBAR ═══ -->
<nav id="mainNav">
  <div class="container">
    <div class="nav-inner">
      <a href="<?php echo e(url('/')); ?>" class="nav-logo">
        <div class="nav-logo-icon"><i class="fas fa-shield-halved"></i></div>
        <span class="nav-logo-text">Kharido<span>Policy</span></span>
      </a>

      <ul class="nav-menu">
        <li class="nav-item"><a href="<?php echo e(url('/')); ?>" class="nav-link-pl <?php echo e(($data->seo_url=='home')?'active':''); ?>">Home</a></li>
        <li class="nav-item"><a href="about-us" class="nav-link-pl <?php echo e(($data->seo_url=='about-us')?'active':''); ?>">About Us</a></li>

        
        <!-- INSURANCE PLANS DROPDOWN -->
        <?php if($insuranceData->count()>0): ?>
        <li class="nav-item">
          <button class="nav-link-pl">
            Insurance Plans <i class="fas fa-chevron-down chev"></i>
          </button>
          <div class="nav-dropdown">
            <div class="dd-grid">

                <?php $__currentLoopData = $insuranceData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url($ss->seo_url)); ?>" class="dd-item">
                <div class="dd-icon ic-blue"><i class="<?php echo e($ss->icon_class); ?>"></i></div>
                <div class="dd-text"><h6><?php echo e($ss->name); ?></h6><p><?php echo e(Str::limit($ss->description,55)); ?></p></div>
              </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
          </div>
        </li>
        <?php endif; ?>

        <li class="nav-item"><a href="become-a-posp" class="nav-link-pl <?php echo e(($data->seo_url=='become-a-posp')?'active':''); ?>">Become A POSP</a></li>
        <li class="nav-item"><a href="contact-us" class="nav-link-pl <?php echo e(($data->seo_url=='contact-us')?'active':''); ?>">Contact Us</a></li>
      </ul>

      <div class="nav-cta">
        
        <a href="<?php echo e($setting_data['whatsapp_url']); ?>" target="_blank">
            <button class="btn-nav-whatsapp-quote"><i class="fa-brands fa-whatsapp"></i></button>
        </a>
        <a href="tel:<?php echo e($setting_data['mobile']); ?>">
            <button class="btn-nav-phone-quote"><i class="fa-solid fa-phone-volume"></i></button>
        </a>
        <button class="btn-nav-quote" data-bs-toggle="modal" data-bs-target="#getQuoteModel"><i class="fas fa-bolt fa-sm"></i> Get Quote</button>
      </div>

      <button class="mob-toggle" id="mobToggle"><i class="fas fa-bars"></i></button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu">
      <button class="mob-link" onclick="var s=this.nextElementSibling;s.style.display=s.style.display==='block'?'none':'block'">
        Insurance Plans <i class="fas fa-chevron-down" style="font-size:.7rem"></i>
      </button>
      <div class="mob-sub">
        <a href="<?php echo e(url('/')); ?>" class="mob-sublink"><i class="fas fa-shield-halved" style="color:var(--blue)"></i> Life Insurance</a>
        <a href="<?php echo e(url('/')); ?>" class="mob-sublink"><i class="fas fa-heart-pulse" style="color:#0d9488"></i> Health Insurance</a>
        <a href="<?php echo e(url('/')); ?>" class="mob-sublink"><i class="fas fa-car" style="color:#ea580c"></i> Motor Insurance</a>
        <a href="<?php echo e(url('/')); ?>" class="mob-sublink"><i class="fas fa-file-contract" style="color:#4f46e5"></i> Term Insurance</a>
        <a href="<?php echo e(url('/')); ?>" class="mob-sublink"><i class="fas fa-chart-line" style="color:#e11d48"></i> Investment Plans</a>
        <a href="<?php echo e(url('/')); ?>" class="mob-sublink"><i class="fas fa-users" style="color:#d97706"></i> Group Insurance</a>
      </div>
      <div class="mob-divider"></div>
      <a href="<?php echo e(url('about-us')); ?>" class="mob-link">About Us</a>
      <a href="become-a-posp" class="mob-link">Become A POSP</a>
      <a href="<?php echo e(url('contact-us')); ?>" class="mob-link">Contact Us</a>
      <div class="mob-divider"></div>
      <div class="mob-cta">
        
        <button class="btn-pl" style="flex:1;justify-content:center">Get Quote</button>
      </div>
    </div>
  </div>
</nav>
<?php /**PATH E:\xampp 8.2\htdocs\laravel\kharido-policy\projects\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>