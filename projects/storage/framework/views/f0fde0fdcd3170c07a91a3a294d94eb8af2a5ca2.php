

<?php
$bannerData = App\Models\Slider::where('cms_id', $data->id)
    ->where('publish', 'published')
    ->orderBy('ordering', 'ASC')
    ->select('id', 'title', 'image', 'cms_id', 'description', 'link')
    ->limit(3)
    ->get();
// pre($bannerData);
?>
<!--========================banner section start =======================================-->
<?php if(count($bannerData) > 0): ?>
<section class="banner-wrapper">
    <div class="container-fluids">
        <div class="owl-carousel banner-slide">
            <?php $__currentLoopData = $bannerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <div class="banner-slide-box">
                        <img src="<?php echo e(asset($c->image ?? 'front/images/banner-green.jpg')); ?>">
                        <div class="banner-con-div">
                            <div class="banner-con-inner">
                                <div class="container">
                                    <div class="content-div">
                                        <h5><?php echo e($c->title ?? ''); ?></h5>
                                        <?php echo $c->description; ?>

                                        <div class="header1-buttons banner-button">
                                            <div class="button">
                                                <a class="theme-btn1" href="<?php echo e(url('user-login')); ?>"><span><i
                                                            class="fas fa-sign-in-alt"></i></span> Login </a>
                                            </div>
                                            <div class="button">
                                                <a class="theme-btn1" href="<?php echo e(url('contact-us')); ?>"><span><i
                                                            class="fas fa-phone-alt"></i></span> Contact Us </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
    </div>
</section>
<?php endif; ?>
<!--========================banner section end =======================================-->
<?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/front/layouts/slider.blade.php ENDPATH**/ ?>