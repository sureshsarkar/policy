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
        $bannerImage = asset('front/images/inner-banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    ?>

    <!--========================inner banner section start =======================================-->

    <?php echo $__env->make('front.layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--========================inner banner section end =======================================-->

    <!--========================contact section start =======================================-->

    <section class="contact-page-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="img--div">
                        <img src="<?php echo e(asset('front/images/Bposo.png')); ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="leave-comment posp-form-desc">
                        <?php echo $data->shortDescription; ?>

                        <form action="<?php echo e(route('contactPost')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" id="nameId"
                                        placeholder="Name*" minlength="3" maxlength="25"
                                        onkeydown="return /[a-z ]/i.test(event.key)" onkeyup="useRefShow('nameId')"
                                        required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="email" id="emailId" class="form-control"
                                        placeholder="Email*" onkeyup="useRefShow('emailId')" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="mobile" id="mobileId" class="form-control"
                                        placeholder="Mobile*" minlength="10" maxlength="10"
                                        onkeypress="return digitKeyOnly(event)" onkeyup="useRefShow('mobileId')" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="website" id="websiteId" minlength="3" maxlength="300"
                                        class="form-control" placeholder="Website*" onkeyup="useRefShow('websiteId')"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <textarea class="form-control" name="message" id="messageId" minlength="10" maxlength="150"
                                        placeholder="Write Your Comments*" onkeyup="useRefShow('messageId')" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <button type="submit" id="submitBtnId" class="btn btn-post-com">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--========================contact section end =======================================-->

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



     <!-- ═══ BENEFITS ═══ -->
    <section class="benefits bg-light" id="benefits">
        <div class="container">
            <div class="text-center mb-5 sr">
                <div class="section-eyebrow"><span class="dot"></span> Life Insurance Benefits</div>
                <h2 class="section-h mb-3">Key features  <em>POSP </em>Insurance</h2>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\installed-softwares\xampp-8.2.12\htdocs\laravel-projects\kharido-policy\projects\resources\views/front/static/become-a-posp.blade.php ENDPATH**/ ?>