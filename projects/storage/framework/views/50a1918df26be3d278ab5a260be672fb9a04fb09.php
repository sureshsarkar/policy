<?php $__env->startSection('title', $data->meta_title); ?>
<?php $__env->startSection('keywords', $data->meta_keywords); ?>
<?php $__env->startSection('description', $data->meta_description); ?>
<?php $__env->startSection('logo', $data->image); ?>
<?php $__env->startSection('header-section'); ?>
    <?php echo $data->header_section; ?>

<?php $__env->stopSection(); ?>
<?php
error_reporting(0);
?>
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
 
 
    <section class="inner-banner-wrapper">
        <div class="container">
            <div class="inner-banner-img">
                <img src="<?php echo asset('front/images/inner-banner.jpg'); ?>" title="Stores" alt="Stores">
                <div class="inner-banner-main">
                    <div class="container">
                        <div class=" inner-banner-con">
                            <div class="inner-banner-con-inn">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="bread-crumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>"><i
                                                    class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--===========================================contact forms sec========================================-->

    <section class="contact-page-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="leave-comment">
                        <h3>Get in Touch</h3>
                        <form>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <textarea class="form-control" placeholder="Write Your Comments"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <button class="btn btn-post-com">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="map-div">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.941871822243!2d55.134505676079435!3d25.06995923684142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f13458e9e73ed%3A0x644be003b58e37!2sAardys%20properties%20llc!5e0!3m2!1sen!2sin!4v1746016764022!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===========================================contact forms sec========================================-->


    <!--===========================================contact banner sec========================================-->

    <section class="contact-middle-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="tech-main">
                        <div class="tags-side">
                            <i class="fa-solid fa-phone"></i>
                            <h3>Call Now</h3>
                            <p>+1 800 123 456 789</p>
                            <p>+1 800 123 456 789</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="tech-main">
                        <div class="tags-side">
                            <i class="fa-solid fa-envelope"></i>
                            <h3>Email Us</h3>
                            <p>helloyou@gmail.com</p>
                            <p>helloyou@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="tech-main">
                        <div class="tags-side">
                            <i class="fa-solid fa-location-dot"></i>
                            <h3>Address</h3>
                            <p>7 Green Lake Street Crawfordsville, IN 47933</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===========================================contact banner sec========================================-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\voteproject\projects\resources\views/front/static/contact.blade.php ENDPATH**/ ?>