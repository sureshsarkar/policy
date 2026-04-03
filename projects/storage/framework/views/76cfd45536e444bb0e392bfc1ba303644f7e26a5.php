<?php $__env->startSection('title', $data->meta_title); ?>
<?php $__env->startSection('keywords', $data->meta_keywords); ?>
<?php $__env->startSection('description', $data->meta_description); ?>
<?php $__env->startSection('logo', $data->image); ?>
<?php $__env->startSection('header-section'); ?>
    <?php echo $data->header_section; ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer-section'); ?>
    <?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
    <?php $name=$data->name; ?>


    <?php echo $__env->make('front.layouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--========================About Us section start =======================================-->

    <section class="about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-image">
                        <img src="<?php echo e(asset($data->image ?? 'front/images/abouts.png')); ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="home-abt-con">
                        <div class="abt-inner-con">
                            <?php echo $data->shortDescription ?? ''; ?>

                            <div class="header1-buttons about-btn">
                                <div class="button">
                                    <a class="theme-btn1" href="<?php echo e(url('about-us')); ?>"><span><i class="fab fa-readme"></i></span> Read
                                        More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========================About Us section end =======================================-->

    <!--========================why vote your section start =======================================-->

    <?php
        $services = App\Models\Service::where('cms_id', $data->id)->where('publish', 'published')->get();
    ?>
    <?php if(count($services) > 0): ?>
        <section class="why-voteyour-wrapp">
            <div class="container">
                <div class="why-head">
                    <?php echo $data->mediumDescription ?? ''; ?>

                </div>
                <div class="row">

                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-box">
                                <div class="icon">
                                    <img src="<?php echo e(asset($c->image ?? 'front/images/poll.png')); ?>" alt="">
                                </div>
                                <div class="heading1">
                                    <h4><a href="#"> <?php echo e($c->name ?? ''); ?></a></h4>
                                    <p> <?php echo e($c->description ?? ''); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--========================why vote your section end =======================================-->

    <!--========================popular category start =======================================-->

    <?php
        $popularCategory = App\Models\OurClient::where('publish', 'published')->get();
    ?>
    <?php if(count($popularCategory) > 0): ?>
        <section class="popular-category-wrapp">
            <div class="container">
                <div class="why-head">
                    <?php echo $data->longDescription ?? ''; ?>

                </div>
                <div class="owl-carousel category-slider">
                    <?php $__currentLoopData = $popularCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="category-box">
                                <img src="<?php echo e(asset($c->image ?? 'front/images/logo.png')); ?>">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--========================popular category end =======================================-->


    <!--========================step section end =======================================-->
    <?php
        $workingProcess = App\Models\WelcomePackage::where('publish', 'published')->get();
    ?>
    <?php if(count($workingProcess) > 0): ?>
        <section class="how-works-wrapp">
            <div class="container">
                <div class="why-head">
                    <?php echo $data->longDescriptiontwo ?? ''; ?>

                </div>
                <div class="row">

                    <?php $__currentLoopData = $workingProcess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="preced-box">
                                <div class="preced-box-icon">
                                    <h5><img src="<?php echo e(asset($c->image ?? 'front/images/login.png')); ?>"></h5>
                                </div>
                                <div class="proced-box-con">
                                    <h6><?php echo e($c->name ?? ''); ?></h6>
                                    <p> <?php echo e($c->longDescription ?? ''); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--========================step section end =======================================-->




<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/front/static/home.blade.php ENDPATH**/ ?>