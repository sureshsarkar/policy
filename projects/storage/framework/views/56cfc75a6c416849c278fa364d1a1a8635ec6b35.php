
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
        $name = $insurance->name;
        $bannerImage = asset('front/images/inner-banner.png');
        if ($insurance->bannerImage) {
            $bannerImage = asset($insurance->bannerImage);
        }
    ?>

    <!--========================inner banner section start =======================================-->

    <?php echo $__env->make('front.layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--========================inner banner section end =======================================-->


    <!-- ═══════════════════════════════════════
                     SECTION 1 – HERO QUOTE
                ═══════════════════════════════════════ -->
    <section class="hero-quote">
        <div class="container" style="position:relative;z-index:1;">
            <div class="row">

                <!-- LEFT -->
                <div class="col-lg-6 mt-0">
                    <div class="hero-left sr">
                        <div class="img--div">
                            <img src="<?php echo e(asset('front/images/Bposo.png')); ?>" alt="">
                        </div>
                    </div>
                </div>

                <!-- RIGHT – FORM -->
                <div class="col-lg-6">
                    <div class="quote-card sr">
                        <div class="qc-header">
                            <div class="qc-header-tag"><i class="fas fa-bolt me-1"></i> Get Instant Quote</div>
                            <h3><?php echo e($insurance->name); ?></h3>
                            <div class="qc-header-sub">Fill in your details to view the best available plans</div>
                        </div>
                        <form id="getPolicyFromId" action="<?php echo e(route('contactPost')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="service" value="<?php echo e($insurance->id); ?>">
                            <div class="qc-body">
                                <!-- Name + Mobile -->
                                <div class="form-row-2">
                                    <div class="form-group">
                                        <div class="form-label-pl">
                                            <i class="fas fa-user"></i> Full Name <em>*</em>
                                        </div>
                                        <div class="input-wrap">
                                            <input class="form-input has-icon" type="text" placeholder="Rahul Sharma" name="name"
                                                required>
                                            <i class="fas fa-user input-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-pl">
                                            <i class="fas fa-mobile-screen"></i> Mobile <em>*</em>
                                        </div>
                                        <div class="input-wrap">
                                            <input class="form-input has-icon" type="tel" placeholder="+91 9999999999" name="mobile"
                                                required>
                                            <i class="fas fa-mobile-screen input-icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email + City -->
                                <div class="form-row-2">
                                    <div class="form-group">
                                        <div class="form-label-pl">
                                            <i class="fas fa-envelope"></i> Email Address (optional)
                                        </div>
                                        <div class="input-wrap">
                                            <input class="form-input has-icon" type="email" name="email" placeholder="rahul@email.com">
                                            <i class="fas fa-envelope input-icon"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-pl">
                                            <i class="fas fa-location-dot"></i> City
                                        </div>
                                        <div class="input-wrap">
                                            <input class="form-input has-icon" type="text" name="city" placeholder="New Delhi">
                                            <i class="fas fa-location-dot input-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message -->
                                <div class="form-group">
                                    <div class="form-label-pl">
                                        <i class="fa-regular fa-message"></i> Message
                                    </div>
                                    <div class="input-wrap">
                                        <input class="form-input has-icon" type="text" placeholder="Hello.." name="message">
                                        <i class="fa-regular fa-message input-icon"></i>
                                    </div>
                                </div>


                                <!-- Checkbox -->
                                <label class="check-wrap">
                                    <input type="checkbox" checked>
                                    <span class="check-label">
                                        I accept to receive notifications on <strong>SMS, emails, and WhatsApp</strong>
                                        about my
                                        insurance plans and policy updates.
                                    </span>
                                </label>

                                <!-- Submit -->
                                <button class="btn-submit">
                                    Submit
                                    <i class="fas fa-arrow-right fa-sm"></i>
                                </button>

                                <div class="qc-footer">
                                    <i class="fas fa-lock"></i>
                                    Your data is safe &amp; encrypted · No spam, ever
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ═══ WHY CHOOSE US ═══ -->
    <section class="why" id="why">
        <div class="container">
            <div class="row align-items-center mb-5 sr">
                <div class="col-lg-5">
                    <div class="section-eyebrow"><span class="dot"></span> Why Kharido Policy</div>
                    <h2 class="section-h">Key <em>Features</em></h2>
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


    <!-- ═══════════════════════════════════════
                     SECTION 3 – POLICY DESCRIPTION
                ═══════════════════════════════════════ -->
    <section class="policy-desc-section">
        <div class="container">

            <div class="text-center mb-5 sr">
                <div class="eyebrow"><span class="dot"></span> Policy Overview</div>
                <h2 class="sec-h mb-3">Understanding <em>Car Insurance</em></h2>
                <p class="sec-sub mx-auto">Everything you need to know before making your decision. Car insurance, also
                    known as motor or four-wheeler insurance, is more than just a legal requirement—it's your financial
                    safety net. Whether your car is stolen or damaged due to unforeseen events, car insurance provides
                    crucial compensation to protect you from significant financial loss. We love claims! Smartphone-enabled
                    claims to no hardcopies, you'll get a VIP treatment when you buy a car insurance Car Insurance by us
                    gives an Advance Claim Money for Repair. No hardcopies, no questions on where you’re getting it
                    repaired.</p>
            </div>
        </div>
    </section>


    <!-- Scripts -->
    <script>
        /* Scroll reveal */
        // let srEls = document.querySelectorAll('.sr');
        // let io = new IntersectionObserver(entries => {
        //     entries.forEach(e => {
        //         if (e.isIntersecting) {
        //             e.target.classList.add('in');
        //             io.unobserve(e.target);
        //         }
        //     });
        // }, {
        //     threshold: 0.1
        // });
        // srEls.forEach(el => io.observe(el));



        /* Car plate input formatting */
        let plateInput = document.querySelector('.car-input');
        if (plateInput) {
            plateInput.addEventListener('input', function() {
                this.value = this.value.toUpperCase().replace(/[^A-Z0-9\s]/g, '');
            });
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp 8.2\htdocs\laravel\kharido-policy\projects\resources\views/front/static/policy-detail.blade.php ENDPATH**/ ?>