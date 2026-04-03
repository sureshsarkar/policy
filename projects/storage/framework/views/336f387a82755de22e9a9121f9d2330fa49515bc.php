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
        $bannerImage = asset('front/images/inner-banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    ?>
 


 
<!--===========================================Breaking news bar========================================-->

<section class="breaking-news-bar">
    <div class="container">
        <div class="bar-con">
            <h5><span>Breaking News</span> UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
        </div>
    </div>
</section>

<!--===========================================Breaking news bar========================================-->

<!--=======================================detail middle section start=====================================-->

<section class="detail-middle-wrapp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="detail-main">
                    <div class="main-img">
                    <img src=" <?php echo asset('front/images/bd1.jpg'); ?>">
                    </div>
                    <ul class="authors-detail">
                        <li><i class="fa-solid fa-user"></i> By Jenny Watson</li>
                        <li><i class="fa-solid fa-comment"></i> Comments 35</li>
                        <li><i class="fa-solid fa-calendar-days"></i> 24 Jun 2022</li>
                    </ul>
                    <h1>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="detail-inner-img">
                        <img src="<?php echo asset('front/images/bd2.jpg'); ?>">
                        <img src="<?php echo asset('front/images/bd3.jpg'); ?>">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



                    


                </div>

                <div class="comment-main">
                    <h3>Comments</h3>

                    <div class="comments-area">
                        <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-theme">
                                                <div class="comment-image"><img src="<?php echo asset('front/images/img-1.jpg'); ?>" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Robert Sonny <span class="comments-date">says Jul 21,
                                                                2022 at 10:00am</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>I must explain to you how all this mistaken idea of
                                                            denouncing pleasure and praising pain was born and I
                                                            will give you a complete account of the system</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-theme">
                                                        <div class="comment-image"><img src="<?php echo asset('front/images/img-2.jpg'); ?>" alt=""></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>John Abraham <span class="comments-date">says
                                                                        Jul 21, 2022 at 10:00am</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>I must explain to you how all this mistaken idea
                                                                    of denouncing pleasure and praising pain was
                                                                    born and I will give you a complete account of
                                                                    the system</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="comment">
                                                        <div>
                                                            <div class="comment-theme">
                                                                <div class="comment-image"><img src="<?php echo asset('front/images/img-3.jpg'); ?>" alt=""></div>
                                                            </div>
                                                            <div class="comment-main-area">
                                                                <div class="comment-wrapper">
                                                                    <div class="comments-meta">
                                                                        <h4>Robert Sonny <span class="comments-date">says Jul 21,
                                                                                2022 at 10:00am</span></h4>
                                                                    </div>
                                                                    <div class="comment-area">
                                                                        <p>I must explain to you how all this
                                                                            mistaken idea of denouncing pleasure and
                                                                            praising pain was born and I will give
                                                                            you a complete account of the system</p>
                                                                        <div class="comments-reply">
                                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="comment">
                                        <div>
                                            <div class="comment-theme">
                                                <div class="comment-image"><img src="<?php echo asset('front/images/img-1.jpg'); ?>" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>John Abraham <span class="comments-date">says Jul 21,
                                                                2022 at 10:00am</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>I must explain to you how all this mistaken idea of
                                                            denouncing pleasure and praising pain was born and I
                                                            will give you a complete account of the system</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                    </div>

                </div>

                <div class="leave-comment">
                    <h3>Leave a reply</h3>
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
                                 <button class="btn btn-post-com">Post Comment</button>
                             </div>
                         </div>
                     </form>
                </div>


            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="detail-right-side">
                <div class="tech-main">
                    <div class="trending-headline">
                    <div class="trending-headline-inn">
                        <h3>Categories</h3>
                        <ul class="category-side">
                            <li>
                                <h2>Gulf <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                            <li>
                                <h2>News <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                            <li>
                                <h2>World <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                            <li>
                                <h2>Finance <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                            <li>
                                <h2>Sports <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                            <li>
                                <h2>Entertainment <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                            <li>
                                <h2>Business <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                            <li>
                                <h2>Technology <i class="fa-solid fa-right-long"></i></h2>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="tech-main">
                    <div class="trending-headline">
                    <div class="trending-headline-inn">
                        <h3>Related Posts</h3>
                        <ul>
                            <li>
                                <img src="<?php echo asset('front/images/th.jpg'); ?>">
                                <h5>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
                            </li>
                            <li>
                                <img src="<?php echo asset('front/images/th2.jpg'); ?>">
                                <h5>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
                            </li>
                            <li>
                                <img src="<?php echo asset('front/images/th3.jpg'); ?>">
                                <h5>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
                            </li>
                            <li>
                                <img src="<?php echo asset('front/images/th4.jpg'); ?>">
                                <h5>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
                            </li>
                            <li>
                                <img src="<?php echo asset('front/images/th.jpg'); ?>">
                                <h5>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
                            </li>
                            <li>
                                <img src="<?php echo asset('front/images/th2.jpg'); ?>">
                                <h5>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>

                <div class="tech-main">
                    <div class="tags-side">
                        <i class="fa-solid fa-headset"></i>
                        <h3>How We Can Help You!</h3>
                        <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        <a href="#">Contact us</a>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!--========================================detail middle section start=====================================-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\voteproject\projects\resources\views/front/static/news-detail.blade.php ENDPATH**/ ?>