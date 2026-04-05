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

    <!-- ═══ CATEGORIES ═══ -->
    <section class="categories" id="categories">
        <div class="container">
            <div class="text-center mb-5 sr">
                <div class="section-eyebrow"><span class="dot"></span> Insurance Products</div>
                <h2 class="section-h mb-3">Explore Our <em>Insurance Plans</em></h2>
                <p class="section-p mx-auto">Every policy is tailored to protect what matters most at every stage of
                    life.</p>
            </div>
            <div class="cat-grid">
                <div class="cat-card sr sr-d1">
                    <div class="cat-icon-bg"><i class="fas fa-shield-halved"></i></div>
                    <div class="cat-name">Life Insurance</div>
                    <div class="cat-desc">Lifetime protection ensuring your family's financial stability no matter what
                        happens.</div>
                    <a href="#" class="cat-link">View Plans <div class="cat-link-icon"><i
                                class="fas fa-arrow-right"></i></div></a>
                </div>
                <div class="cat-card sr sr-d2">
                    <div class="cat-icon-bg"><i class="fas fa-heart-pulse"></i></div>
                    <div class="cat-name">Health Insurance</div>
                    <div class="cat-desc">Cashless treatment at 10,000+ network hospitals across India with zero
                        paperwork.</div>
                    <a href="#" class="cat-link">View Plans <div class="cat-link-icon"><i
                                class="fas fa-arrow-right"></i></div></a>
                </div>
                <div class="cat-card sr sr-d3">
                    <div class="cat-icon-bg"><i class="fas fa-car"></i></div>
                    <div class="cat-name">Motor Insurance</div>
                    <div class="cat-desc">Protect your vehicle from accidents, theft, natural calamities and third-party
                        claims.</div>
                    <a href="#" class="cat-link">View Plans <div class="cat-link-icon"><i
                                class="fas fa-arrow-right"></i></div></a>
                </div>
                <div class="cat-card sr sr-d4">
                    <div class="cat-icon-bg"><i class="fas fa-file-contract"></i></div>
                    <div class="cat-name">Term Insurance</div>
                    <div class="cat-desc">Maximum life cover at the most affordable premiums — pure protection for your
                        family.</div>
                    <a href="#" class="cat-link">View Plans <div class="cat-link-icon"><i
                                class="fas fa-arrow-right"></i></div></a>
                </div>

                <div class="cat-card sr sr-d2">
                    <div class="cat-icon-bg"><i class="fas fa-heart-pulse"></i></div>
                    <div class="cat-name">Health Insurance</div>
                    <div class="cat-desc">Cashless treatment at 10,000+ network hospitals across India with zero
                        paperwork.</div>
                    <a href="#" class="cat-link">View Plans <div class="cat-link-icon"><i
                                class="fas fa-arrow-right"></i></div></a>
                </div>
                <div class="cat-card sr sr-d3">
                    <div class="cat-icon-bg"><i class="fas fa-car"></i></div>
                    <div class="cat-name">Motor Insurance</div>
                    <div class="cat-desc">Protect your vehicle from accidents, theft, natural calamities and third-party
                        claims.</div>
                    <a href="#" class="cat-link">View Plans <div class="cat-link-icon"><i
                                class="fas fa-arrow-right"></i></div></a>
                </div>
                <div class="cat-card sr sr-d4">
                    <div class="cat-icon-bg"><i class="fas fa-file-contract"></i></div>
                    <div class="cat-name">Term Insurance</div>
                    <div class="cat-desc">Maximum life cover at the most affordable premiums — pure protection for your
                        family.</div>
                    <a href="#" class="cat-link">View Plans <div class="cat-link-icon"><i
                                class="fas fa-arrow-right"></i></div></a>
                </div>

            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ═══ WHY CHOOSE US ═══ -->
    <section class="why" id="why">
        <div class="container">
            <div class="row align-items-center mb-5 sr">
                <div class="col-lg-5">
                    <div class="section-eyebrow"><span class="dot"></span> Why PolicyLelo</div>
                    <h2 class="section-h">Why Millions <em>Trust Us</em></h2>
                </div>
                <div class="col-lg-6 offset-lg-1 mt-3 mt-lg-0">
                    <p class="section-p">We've simplified insurance — no jargon, no fine print surprises. Just
                        transparent, fast, and affordable coverage for every Indian family.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3 sr sr-d1">
                    <div class="why-card">
                        <div class="why-icon wi-blue"><i class="fas fa-chart-bar"></i></div>
                        <h5>Compare 50+ Plans</h5>
                        <p>Instantly compare premiums, features, and claim ratios from every major insurer in India,
                            side by side.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 sr sr-d2">
                    <div class="why-card">
                        <div class="why-icon wi-teal"><i class="fas fa-bolt"></i></div>
                        <h5>Instant Issuance</h5>
                        <p>Receive your official policy document to your inbox within minutes of completing your
                            purchase.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 sr sr-d3">
                    <div class="why-card">
                        <div class="why-icon wi-orange"><i class="fas fa-headset"></i></div>
                        <h5>24/7 Claim Support</h5>
                        <p>Dedicated claim advisors guide you through every step — paperwork, submission, and
                            settlement.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 sr sr-d4">
                    <div class="why-card">
                        <div class="why-icon wi-purple"><i class="fas fa-award"></i></div>
                        <h5>IRDAI Regulated</h5>
                        <p>All partner insurers are IRDAI-registered with proven track records and high claim settlement
                            ratios.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ HOW IT WORKS ═══ -->
    <section class="hiw" id="how">
        <div class="container">
            <div class="text-center mb-5 sr">
                <div class="section-eyebrow"><span class="dot"></span> Simple Process</div>
                <h2 class="section-h mb-3">Covered in <em>4 Steps</em></h2>
                <p class="section-p mx-auto">From comparison to coverage — the entire process takes less than 10
                    minutes, entirely online.</p>
            </div>
            <div class="hiw-steps sr">
                <div class="hiw-conn"></div>
                <div class="hiw-step">
                    <div class="hiw-num hn1"><i class="fas fa-magnifying-glass-chart"></i>
                        <div class="step-badge">1</div>
                    </div>
                    <h6>Compare Plans</h6>
                    <p>Browse and compare top insurance plans based on your age, income, and coverage requirements.</p>
                </div>
                <div class="hiw-step">
                    <div class="hiw-num hn2"><i class="fas fa-check-to-slot"></i>
                        <div class="step-badge">2</div>
                    </div>
                    <h6>Select Best Policy</h6>
                    <p>Choose the plan that suits you with guidance from our IRDAI-certified insurance advisors.</p>
                </div>
                <div class="hiw-step">
                    <div class="hiw-num hn3"><i class="fas fa-credit-card"></i>
                        <div class="step-badge">3</div>
                    </div>
                    <h6>Secure Payment</h6>
                    <p>Pay safely via UPI, net banking, or card. 256-bit SSL encrypted — 100% secure transaction.</p>
                </div>
                <div class="hiw-step">
                    <div class="hiw-num hn4"><i class="fas fa-file-circle-check"></i>
                        <div class="step-badge">4</div>
                    </div>
                    <h6>Instant Policy</h6>
                    <p>Your official policy document arrives instantly in your inbox. You are now fully protected.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ═══ BENEFITS ═══ -->
    <section class="benefits" id="benefits">
        <div class="container">
            <div class="text-center mb-5 sr">
                <div class="section-eyebrow"><span class="dot"></span> Life Insurance Benefits</div>
                <h2 class="section-h mb-3">Key Features to <em>Understand</em></h2>
                <p class="section-p mx-auto">Understanding these building blocks helps you choose the best policy for
                    your life stage and goals.</p>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3 sr sr-d1">
                    <div class="benefit-card bc1">
                        <i class="fas fa-indian-rupee-sign ben-icon bi1"></i>
                        <h5>Affordable Premium</h5>
                        <p>A small, regular payment that keeps your entire family protected for decades to come.</p>
                        <span class="ben-metric">₹21/day <span>onwards</span></span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 sr sr-d2">
                    <div class="benefit-card bc2">
                        <i class="fas fa-hand-holding-heart ben-icon bi2"></i>
                        <h5>Death Benefit</h5>
                        <p>Your nominee receives a tax-free lump-sum payout under Section 10(10D) of the IT Act.</p>
                        <span class="ben-metric">Up to ₹10 Cr <span>tax-free</span></span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 sr sr-d3">
                    <div class="benefit-card bc3">
                        <i class="fas fa-calendar-days ben-icon bi3"></i>
                        <h5>Flexible Policy Term</h5>
                        <p>Choose coverage durations from 5 to 40 years that align perfectly with your life goals.</p>
                        <span class="ben-metric">5–40 Years <span>coverage</span></span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 sr sr-d4">
                    <div class="benefit-card bc4">
                        <i class="fas fa-piggy-bank ben-icon bi4"></i>
                        <h5>Cash Value Growth</h5>
                        <p>Select plans accumulate tax-free cash value over time as a long-term financial asset.</p>
                        <span class="ben-metric">Grows Tax-Free <span>annually</span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .slider {
            /* background: white; */
            /* box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .125); */
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 1150px;
        }

        .slider::before,
        .slider::after {
            /* background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%); */
            content: "";
            height: 100px;
            position: absolute;
            width: 200px;
            z-index: 2;
        }

        .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }


        .client {
            height: 100px;
            width: 250px;
        }

        .client img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 7));
            }
        }
    </style>


    <!-- ═══ STATS ═══ -->
    <section class="stats" id="trust">
        <div class="container" style="position:relative;z-index:1">
            <div class="text-center mb-3 sr">
                <div class="section-eyebrow"
                    style="background:rgba(255,255,255,.07);color:rgba(255,255,255,.6);border-color:rgba(255,255,255,.1)">
                    <span class="dot" style="background:rgba(255,255,255,.4)"></span> Our Numbers
                </div>
                <h2 class="section-h" style="color:var(--white)">Trusted Across <em style="color:#93c5fd">India</em>
                </h2>
            </div>
            <div class="row g-0 sr">
                <div class="col-6 col-md-3">
                    <div class="stat-block">
                        <div class="stat-num">1M<span>+</span></div>
                        <div class="stat-lbl">Happy Customers</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-block">
                        <div class="stat-num">50<span>+</span></div>
                        <div class="stat-lbl">Insurance Companies</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-block">
                        <div class="stat-num">98<span>%</span></div>
                        <div class="stat-lbl">Claim Settlement Ratio</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-block">
                        <div class="stat-num">24<span>/7</span></div>
                        <div class="stat-lbl">Customer Support</div>
                    </div>
                </div>
            </div>
            <div class="partners-section sr">
                <div class="partners-lbl">Our Insurance Partners</div>





                <div class="slider">
                    <div class="slide-track">
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/care_health_insurance_logo.jpg" alt="Image 1">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/future_general.jpg" alt="Image 2">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/hdfc_ergo.jpg" alt="Image 3">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/icic.jpg" alt="Image 4">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/royal_sundaram.jpg" alt="Image 5">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/tata.jpg" alt="Image 6">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/tata.jpg" alt="Image 6">
                        </div>

                        <!-- Repeating the images to ensure seamless scroll -->
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/care_health_insurance_logo.jpg" alt="Image 1">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/future_general.jpg" alt="Image 2">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/hdfc_ergo.jpg" alt="Image 3">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/icic.jpg" alt="Image 4">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/royal_sundaram.jpg" alt="Image 5">
                        </div>
                        <div class="client">
                            <img src="https://www.policy-lelo.com/clients/tata.jpg" alt="Image 6">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- ═══ BLOGS ═══ -->
    <section class="blogs">
        <div class="container">

            <div class="text-center mb-5 sr">
                <div class="section-eyebrow"><span class="dot"></span> Policy Updates</div>
                <h2 class="section-h mb-3">Our Latest <em>Blogs</em></h2>
            </div>

            <div class="swiper blogSwiper">

                <div class="swiper-wrapper">

                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>
                    <!-- BLOG ITEM -->
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <article class="blog-item blog-item-box">

                                <div class="blog-item-img">
                                    <img class="blog-img"
                                        src="<?php echo e(asset($c?->featureImage ?? 'https://voteyour.com/uploads/blogs/681b330890f8c.png')); ?>">
                                </div>

                                <div class="blog-item-content">
                                    <h5 class="blog-item-title">
                                        <a href="#"><?php echo e($c?->title ?? 'Marketing Insurance'); ?></a>
                                    </h5>

                                    <p><?php echo e($c?->shortDescription ?? 'What is captive insurance? How can it benefit the industry?'); ?>

                                    </p>

                                    <div class="blog-item-details">
                                        <span class="blog-item-date">
                                            <i class="fas fa-calendar-week"></i>
                                            <?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>

                                        </span>
                                    </div>

                                </div>

                            </article>
                        </div>
                    </div>

                </div>

                <!-- Navigation Buttons (Correct Position) -->
                <div class="swiper-button-prev blog-prev"></div>
                <div class="swiper-button-next blog-next"></div>

            </div>

        </div>
    </section>




    <!-- ═══ TESTIMONIALS ═══ -->
    <section class="testimonials">
        <div class="container">

            <div class="text-center mb-5 sr">
                <div class="section-eyebrow"><span class="dot"></span> Customer Stories</div>
                <h2 class="section-h mb-3">What Our <em>Customers Say</em></h2>
            </div>

            <div class="swiper testimonialSwiper">

                <div class="swiper-wrapper">

                    <!-- testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-stars">★★★★★</div>

                            <div class="testi-quote">
                                "PolicyLelo helped me find the perfect term plan for my family. The comparison tool is easy
                                to use and I saved ₹4,000 per year versus what my bank offered."
                            </div>

                            <div class="testi-author">
                                <div class="testi-av av1">RK</div>
                                <div>
                                    <div class="testi-name">Rajesh Kumar</div>
                                    <div class="testi-plan">Term Insurance · ₹1 Cr Cover</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-stars">★★★★★</div>

                            <div class="testi-quote">
                                "When my husband was hospitalised, the team guided us through every step of the claim.
                                Settlement happened in just 48 hours."
                            </div>

                            <div class="testi-author">
                                <div class="testi-av av2">PS</div>
                                <div>
                                    <div class="testi-name">Priya Sharma</div>
                                    <div class="testi-plan">Health Insurance · Family Floater</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-stars">★★★★★</div>

                            <div class="testi-quote">
                                "Renewed my motor insurance in under 3 minutes. No agent calls, no paperwork."
                            </div>

                            <div class="testi-author">
                                <div class="testi-av av3">AM</div>
                                <div>
                                    <div class="testi-name">Arjun Mehta</div>
                                    <div class="testi-plan">Motor Insurance · Comprehensive</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-stars">★★★★★</div>

                            <div class="testi-quote">
                                "Renewed my motor insurance in under 3 minutes. No agent calls, no paperwork."
                            </div>

                            <div class="testi-author">
                                <div class="testi-av av3">AM</div>
                                <div>
                                    <div class="testi-name">Arjun Mehta</div>
                                    <div class="testi-plan">Motor Insurance · Comprehensive</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-stars">★★★★★</div>

                            <div class="testi-quote">
                                "Renewed my motor insurance in under 3 minutes. No agent calls, no paperwork."
                            </div>

                            <div class="testi-author">
                                <div class="testi-av av3">AM</div>
                                <div>
                                    <div class="testi-name">Arjun Mehta</div>
                                    <div class="testi-plan">Motor Insurance · Comprehensive</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-stars">★★★★★</div>

                            <div class="testi-quote">
                                "Renewed my motor insurance in under 3 minutes. No agent calls, no paperwork."
                            </div>

                            <div class="testi-author">
                                <div class="testi-av av3">AM</div>
                                <div>
                                    <div class="testi-name">Arjun Mehta</div>
                                    <div class="testi-plan">Motor Insurance · Comprehensive</div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Navigation Buttons (Correct Position) -->

                </div>
                <div class="swiper-button-prev blog-prev"></div>
                <div class="swiper-button-next blog-next"></div>


            </div>

        </div>
    </section>



    <!-- ═══ --FAQs ═══ -->
    


    <!-- ═══════════════════════════════════════
     SECTION 6 – FAQ
═══════════════════════════════════════ -->
<section class="faq-section">
  <div class="container">

    <div class="row align-items-center mb-5 sr">
      <div class="col-lg-12">
        <h2 class="section-h mb-3 text-center">Frequently Asked <em>Questions</em></h2>
        
      </div>
      
    </div>

    <div class="row">
      <div class="col-lg-12 mx-auto sr">

        <div class="faq-item open">
          <div class="faq-q" onclick="toggleFaq(this)">
            <span class="faq-q-text">Is car insurance mandatory in India?</span>
            <div class="faq-icon"><i class="fas fa-plus"></i></div>
          </div>
          <div class="faq-a">
            Yes, third-party car insurance is legally mandatory for all vehicles in India under the Motor Vehicles Act, 1988. Driving without valid insurance can result in a fine of ₹2,000 for the first offence and ₹4,000 for subsequent offences, along with potential imprisonment. Comprehensive insurance, while not legally required, offers far broader protection.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            <span class="faq-q-text">What is the difference between comprehensive and third-party insurance?</span>
            <div class="faq-icon"><i class="fas fa-plus"></i></div>
          </div>
          <div class="faq-a">
            Third-party insurance only covers damages or injuries you cause to other people or their property. Comprehensive insurance provides all the benefits of third-party cover plus protection for your own vehicle against accidents, theft, fire, natural calamities, and more. Comprehensive is recommended for vehicles under 5 years old.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            <span class="faq-q-text">How does the cashless claim process work?</span>
            <div class="faq-icon"><i class="fas fa-plus"></i></div>
          </div>
          <div class="faq-a">
            In a cashless claim, you take your damaged vehicle to any of the insurer's 20,000+ network garages. The insurer directly settles the repair bill with the garage — you only pay for non-covered items or your deductible. Our claim support team is available 24/7 to guide you through every step and ensure swift settlement.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            <span class="faq-q-text">What is No Claim Bonus (NCB) and how does it work?</span>
            <div class="faq-icon"><i class="fas fa-plus"></i></div>
          </div>
          <div class="faq-a">
            NCB is a discount rewarded for not making any claims during your policy year. It starts at 20% for the first claim-free year and can go up to 50% after five consecutive claim-free years. NCB belongs to you (the policyholder), not the vehicle, so you can transfer it when you buy a new car or switch insurers.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            <span class="faq-q-text">Can I buy car insurance online instantly?</span>
            <div class="faq-icon"><i class="fas fa-plus"></i></div>
          </div>
          <div class="faq-a">
            Absolutely. On PolicyLelo, you can compare plans, make payment, and receive your official policy document — all within 3 minutes, completely online. No agent visits, no paperwork, no waiting. For renewals, the process is even faster as your vehicle details are pre-filled.
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


    <!-- ═══ CTA BANNER ═══ -->
    <section class="cta-banner">
        <div class="container" style="position:relative;z-index:1">
            <div class="sr">
                <h2 class="cta-h">Protect What Matters <em>Most.</em></h2>
                <p class="cta-sub">Get the best insurance plan for your family — in minutes, entirely online.</p>
                <div class="cta-acts">
                    <a href="#" class="btn-cta-main"><i class="fas fa-shield-halved"
                            style="color:var(--blue)"></i> Get Best Insurance Plan</a>
                    <a href="#" class="btn-white-outline">Talk to an Advisor <i
                            class="fas fa-headset fa-sm"></i></a>
                </div>
            </div>
        </div>
    </section>




    <script>
        /* FAQ toggle */
  function toggleFaq(el) {
    const item = el.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  }

        // owlCarousel start
        document.addEventListener("DOMContentLoaded", function() {

            // TESTIMONIAL SLIDER
            var testimonialSwiper = new Swiper(".testimonialSwiper", {

                loop: true,

                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },


                  navigation: {
                    nextEl: ".blog-next",
                    prevEl: ".blog-prev"
                },
                spaceBetween: 30,

                breakpoints: {

                    0: {
                        slidesPerView: 1
                    },

                    768: {
                        slidesPerView: 2
                    },

                    992: {
                        slidesPerView: 3
                    }

                }

            });


            // BLOG SLIDER
            var blogSwiper = new Swiper(".blogSwiper", {

                loop: true,

                spaceBetween: 25,

                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },

                navigation: {
                    nextEl: ".blog-next",
                    prevEl: ".blog-prev"
                },

                breakpoints: {

                    0: {
                        slidesPerView: 1
                    },

                    768: {
                        slidesPerView: 2
                    },

                    992: {
                        slidesPerView: 3
                    }

                }

            });

        });
        // owlCarousel end
    </script>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\installed-softwares\xampp-8.2.12\htdocs\laravel-projects\kharido-policy\projects\resources\views/front/static/home.blade.php ENDPATH**/ ?>