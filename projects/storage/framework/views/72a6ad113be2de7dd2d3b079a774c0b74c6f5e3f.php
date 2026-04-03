<?php $__env->startSection("title",$data->meta_title); ?>
<?php $__env->startSection("keywords",$data->meta_keywords); ?>
<?php $__env->startSection("description",$data->meta_description); ?>
<?php $__env->startSection("header-section"); ?>
<?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("footer-section"); ?>
<?php echo $data->footer_section; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("css"); ?>
    <style>
        .left-sec_appr {
            width: 100%;
        }
        .sub-footer{
            display:none;
        }
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("container"); ?>

    <?php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.jpg');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    ?>
    

    
    

<section class="inner-banner-wrapper">
	<div class="container">
    <div class="inner-banner-img">
        <img src="<?php echo e($bannerImage); ?>" title="Stores" alt="Stores">
        <div class="inner-banner-main">
        <div class="container">
            <div class=" inner-banner-con">
                <div class="inner-banner-con-inn">
                    <h2><?php echo e($name); ?></h2>
                </div>
        <div class="bread-crumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($name); ?></li>
                </ol>
            </nav>
        </div>
    </div>
        </div>
        
    </div>
    </div>
    </div>
</section>

<!--===========================================privacy policy sec========================================-->

<section class="privacy-policy-wrapp">
	 <div class="container">
	 	<div class="privacy-policy-con">
          <?php echo $data['shortDescription']; ?>

	 	</div>
	 </div>
</section>

<!--===========================================privacy policy sec========================================-->

 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/front/static/common.blade.php ENDPATH**/ ?>