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
<?php $__env->startSection('container'); ?>

    <?php
        $name = $data->name;
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    ?>


    <!-- start banner sec -->

    <?php echo $__env->make('front.layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--========================gallery section start =======================================-->
    <?php
        $gallery = App\Models\Gallery::where('status', 'active')->get();
    ?>
    <?php if(count($gallery) > 0): ?>
        <section class="gallery-wrapper">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="gallery-image">
                                <a href="<?php echo e(asset($c->image ?? '')); ?>" data-fancybox="images" alt=""> <img
                                        src="<?php echo e(asset($c->image ?? 'front/images/g1.png')); ?>" alt=""> </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--========================gallery section end =======================================-->
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/front/static/gallery.blade.php ENDPATH**/ ?>