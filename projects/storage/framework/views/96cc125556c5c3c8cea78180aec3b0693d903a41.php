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
    <style>
        @media (max-width: 767px) {
            .carousel-inner .carousel-item>div {
                display: none;
            }

            .carousel-inner .carousel-item>div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {

            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }

            .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }

            .home-slider h2 {
                color: white;
                font-family: GothamBold;
                ;
                margin: 0px 0px 40px;
                text-align: center;
                font-size: 40px;
                line-height: 18px;
                font-weight: 400;
                letter-spacing: -2px;
            }

            .home-slider h3 {
                color: white;
                font-family: GothamBold;
                ;
                margin: 0px 0px 40px;
                text-align: center;
                font-size: 20px;

                font-weight: 400;
                letter-spacing: -2px;
            }

        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }

        .home-slider {
            position: absolute;
            font-family: GothamBold;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            max-width: 99%;
            display: flex;
            flex-direction: column;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            z-index: 5;
            pointer-events: none;
        }

        .home-slider h2 {
            color: white;
            font-family: GothamBold;
            margin: 0px 0px 40px;
            text-align: center;
            font-size: 64px;

            font-weight: Bold;
            ;
            letter-spacing: -2px;
        }

        .home-slider h3 {
            color: white;
            font-family: GothamBold;
            margin: 0px 0px 40px;
            text-align: center;
            font-size: 44px;

            font-weight: 400;
            letter-spacing: -2px;
        }

        .navbar-collapse .footer-button {
            /*
                 margin-top: 0px !important;
                 */

        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

        /* RESETS */


        /* TIMER STYLES */
        .timeContainer {
            z-index: 2;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: GothamBold;
        }


        .counter-wrapperx {
            background: #413839;
        }




        .timeContainer .wrapper {
            width: 800px;
            padding: 20px;
            max-height: 400px;
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .timeContainer .wrapper div {
            color: #ccc;
            text-align: center;
            width: 24%;
            height: 150px;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
        }

        .timeContainer .wrapper div:first-child {
            background: #454545;
            color: white;
        }

        .timeContainer .wrapper div:nth-child(2) {
            background: #00A3D0;
            color: white;
        }

        .timeContainer .wrapper div:nth-child(3) {
            background: #1C1C1C;
            color: #fff;
        }

        .timeContainer .wrapper div:last-child {
            background: #1C1C1C;
            color: #fff;
        }

        .timeContainer .wrapper div h2 {
            font-size: 4.4rem;
            font-family: GothamBold;
        }

        .circleDiv {
            position: fixed;
            z-index: -1;
            top: calc(50% - 237px);
            left: calc(-50% + 474px);
            width: 474px;
            height: 474px;
            border-radius: 100%;
            border: 6px dashed #00A3D0;
            animation: rotatingCircle infinite linear 60s;
        }

        @keyframes rotatingCircle {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* MOUSE TRAIL STYLE */
        #cursor {
            position: fixed;
            top: 0;
            left: 0;
            background-color: transparent;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            border-radius: 100%;
            pointer-events: none;
            user-select: none;
            backdrop-filter: invert(100%);
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
    <?php $name=$data->name; ?>

<!--===========================================Breaking news bar========================================-->

<section class="breaking-news-bar">
    <div class="container">
        <div class="bar-con">
            <h5><span>Breaking News</span> UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
        </div>
    </div>
</section>

<!--===========================================Breaking news bar========================================-->
 



<!--===========================================hero section start========================================-->

<section class="hero-wrapp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="hero-sec-img">
                    <img src="<?php echo asset('front/images/banner.jpg'); ?>">
                    <div class="hero-con">
                        <h2>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="trending-headline">
                    <div class="trending-headline-inn">
                        <h3>Trending Headlines</h3>
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
                                <img src="<?php echo asset('front/images/th5.jpg'); ?>">
                                <h5>UAE Strengthens Global Ties with New Strategic Partnerships Across Energy and Tech Sectors</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--===========================================hero section start========================================-->

<!--===========================================top stories start========================================-->

<section class="top-stories-wrapp">
    <div class="container">
        <div class="top-stories-inner">
            <div class="top-stories-head">
                <h3>Top Stories</h3>

            </div>
            <div class="owl-carousel ts-slider">
                <div class="item">
                    <div class="top-st-box">
                        <img src="<?php echo asset('front/images/ts1.jpg'); ?>">
                        <h5>
                            <span class="ts-cat">Sports</span>
                            <span class="ts-time">5h ago</span>
                        </h5>
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="top-st-box">
                        <img src="<?php echo asset('front/images/ts2.jpg'); ?>">
                        <h5>
                            <span class="ts-cat">Sports</span>
                            <span class="ts-time">5h ago</span>
                        </h5>
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="top-st-box">
                        <img src="<?php echo asset('front/images/ts3.jpg'); ?>">
                        <h5>
                            <span class="ts-cat">Sports</span>
                            <span class="ts-time">5h ago</span>
                        </h5>
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="top-st-box">
                        <img src="<?php echo asset('front/images/ts4.jpg'); ?>">
                        <h5>
                            <span class="ts-cat">Sports</span>
                            <span class="ts-time">5h ago</span>
                        </h5>
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="top-st-box">
                        <img src="<?php echo asset('front/images/ts5.jpg'); ?>">
                        <h5>
                            <span class="ts-cat">Sports</span>
                            <span class="ts-time">5h ago</span>
                        </h5>
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--===========================================top stories end========================================-->

<!--===========================================gulf and tech sec start========================================-->

<section class="gulf-tech-wrapp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="gulf-main">
                <div class="top-stories-head">
                <h3>Gulf Spotlight</h3>
            </div>
            <div class="owl-carousel gulf-slider">
                <div class="item">
                    <div class="gulf-box">
                        <img src="<?php echo asset('front/images/g1.jpg'); ?>">
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                        <p>The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​</p>
                    </div>
                </div>
                <div class="item">
                    <div class="gulf-box">
                        <img src="<?php echo asset('front/images/g2.jpg'); ?>">
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                        <p>The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​</p>
                    </div>
                </div>
                <div class="item">
                    <div class="gulf-box">
                        <img src="<?php echo asset('front/images/g3.jpg'); ?>">
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                        <p>The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​</p>
                    </div>
                </div>
            

            </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="tech-main">
                    <div class="trending-headline">
                    <div class="trending-headline-inn">
                        <h3>Tech & Business</h3>
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
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--===========================================gulf and tech sec end========================================-->


<!--===========================================world 60 second start========================================-->

<section class="top-stories-wrapp">
    <div class="container">
        <div class="top-stories-inner">
            <div class="top-stories-head">
                <h3>World in 60 Seconds</h3>
            </div>
            <div class="owl-carousel world-slider">
                    <div class="item">
                    <div class="gulf-box">
                        <img src="<?php echo asset('front/images/w1.jpg'); ?>">
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                        <p>The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​</p>
                    </div>
                </div>
                <div class="item">
                    <div class="gulf-box">
                        <img src="<?php echo asset('front/images/w2.jpg'); ?>">
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                        <p>The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​</p>
                    </div>
                </div>
                <div class="item">
                    <div class="gulf-box">
                        <img src="<?php echo asset('front/images/w3.jpg'); ?>">
                        <h4>UAE Enhances AI Integration in Government  Operations</h4>
                        <p>The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--===========================================world 60 second end========================================-->

<!--===========================================majlixx original start========================================-->

<section class="majlixx-original-wrapp">
    <div class="container">
        <div class="mj-main">
            <div class="top-stories-head">
                <h3>Majlixx Originals</h3>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="mj-vodeo">
                        <div class="video__wrapper">
                            
                              <button type="button" class="video__play-button" data-button-state="pause">
                                <svg class="video__play-button-icon video__play-button-icon--play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70l0 0C0 31.3 31.3 0 70 0l0 0c38.7 0 70 31.3 70 70l0 0C140 108.7 108.7 140 70 140z"/><polygon fill-rule="evenodd" clip-rule="evenodd" points="57 50.9 57 89.4 88.5 70.2 "/></svg>
                                <svg class="video__play-button-icon video__play-button-icon--pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70v0C0 31.3 31.3 0 70 0h0c38.7 0 70 31.3 70 70v0C140 108.7 108.7 140 70 140z"/><rect fill-rule="evenodd" clip-rule="evenodd" x="56" y="50.8" class="st1" width="8.8" height="38.5"/><rect fill-rule="evenodd" clip-rule="evenodd" x="75.2" y="50.8" class="st1" width="8.8" height="38.5"/></svg>
                              </button>
                              <video data-state="pause" playsinline poster="<?php echo asset('front/images/video.jpg'); ?>">
                            <!--     <source src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4" type="video/mp4"> -->
                                <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                                
                              </video>
                            </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="mj-vid-con">
                        <div class="mj-vid-con-inn">
                            <h3>UAE Enhances AI Integration in Government  Operations</h3>
                            <p>The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​ The UAE government is leveraging artificial intelligence to transform its operations, aiming to improve efficiency and service delivery across various sectors. ​</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--===========================================majlixx original end========================================-->


<!--===========================================Video Section start========================================-->

<section class="top-stories-wrapp">
    <div class="container">
        <div class="top-stories-inner">
            <div class="top-stories-head">
                <h3>Video Section</h3>
            </div>
            <div class="owl-carousel world-slider">
                    <div class="item">
                    <div class="mj-vodeo">
                        <div class="video__wrapper">
                            
                              <button type="button" class="video__play-button" data-button-state="pause">
                                <svg class="video__play-button-icon video__play-button-icon--play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70l0 0C0 31.3 31.3 0 70 0l0 0c38.7 0 70 31.3 70 70l0 0C140 108.7 108.7 140 70 140z"/><polygon fill-rule="evenodd" clip-rule="evenodd" points="57 50.9 57 89.4 88.5 70.2 "/></svg>
                                <svg class="video__play-button-icon video__play-button-icon--pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70v0C0 31.3 31.3 0 70 0h0c38.7 0 70 31.3 70 70v0C140 108.7 108.7 140 70 140z"/><rect fill-rule="evenodd" clip-rule="evenodd" x="56" y="50.8" class="st1" width="8.8" height="38.5"/><rect fill-rule="evenodd" clip-rule="evenodd" x="75.2" y="50.8" class="st1" width="8.8" height="38.5"/></svg>
                              </button>
                              <video data-state="pause" playsinline poster="<?php echo asset('front/images/v1.jpg'); ?>">
                            <!--     <source src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4" type="video/mp4"> -->
                                <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                                
                              </video>
                            </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mj-vodeo">
                        <div class="video__wrapper">
                            
                              <button type="button" class="video__play-button" data-button-state="pause">
                                <svg class="video__play-button-icon video__play-button-icon--play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70l0 0C0 31.3 31.3 0 70 0l0 0c38.7 0 70 31.3 70 70l0 0C140 108.7 108.7 140 70 140z"/><polygon fill-rule="evenodd" clip-rule="evenodd" points="57 50.9 57 89.4 88.5 70.2 "/></svg>
                                <svg class="video__play-button-icon video__play-button-icon--pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70v0C0 31.3 31.3 0 70 0h0c38.7 0 70 31.3 70 70v0C140 108.7 108.7 140 70 140z"/><rect fill-rule="evenodd" clip-rule="evenodd" x="56" y="50.8" class="st1" width="8.8" height="38.5"/><rect fill-rule="evenodd" clip-rule="evenodd" x="75.2" y="50.8" class="st1" width="8.8" height="38.5"/></svg>
                              </button>
                              <video data-state="pause" playsinline poster="<?php echo asset('front/images/v2.jpg'); ?>">
                            <!--     <source src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4" type="video/mp4"> -->
                                <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                                
                              </video>
                            </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mj-vodeo">
                        <div class="video__wrapper">
                            
                              <button type="button" class="video__play-button" data-button-state="pause">
                                <svg class="video__play-button-icon video__play-button-icon--play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70l0 0C0 31.3 31.3 0 70 0l0 0c38.7 0 70 31.3 70 70l0 0C140 108.7 108.7 140 70 140z"/><polygon fill-rule="evenodd" clip-rule="evenodd" points="57 50.9 57 89.4 88.5 70.2 "/></svg>
                                <svg class="video__play-button-icon video__play-button-icon--pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70v0C0 31.3 31.3 0 70 0h0c38.7 0 70 31.3 70 70v0C140 108.7 108.7 140 70 140z"/><rect fill-rule="evenodd" clip-rule="evenodd" x="56" y="50.8" class="st1" width="8.8" height="38.5"/><rect fill-rule="evenodd" clip-rule="evenodd" x="75.2" y="50.8" class="st1" width="8.8" height="38.5"/></svg>
                              </button>
                              <video data-state="pause" playsinline poster="<?php echo asset('front/images/v3.jpg'); ?>">
                            <!--     <source src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4" type="video/mp4"> -->
                                <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                                
                              </video>
                            </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mj-vodeo">
                        <div class="video__wrapper">
                            
                              <button type="button" class="video__play-button" data-button-state="pause">
                                <svg class="video__play-button-icon video__play-button-icon--play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70l0 0C0 31.3 31.3 0 70 0l0 0c38.7 0 70 31.3 70 70l0 0C140 108.7 108.7 140 70 140z"/><polygon fill-rule="evenodd" clip-rule="evenodd" points="57 50.9 57 89.4 88.5 70.2 "/></svg>
                                <svg class="video__play-button-icon video__play-button-icon--pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M70 140L70 140c-38.7 0-70-31.3-70-70v0C0 31.3 31.3 0 70 0h0c38.7 0 70 31.3 70 70v0C140 108.7 108.7 140 70 140z"/><rect fill-rule="evenodd" clip-rule="evenodd" x="56" y="50.8" class="st1" width="8.8" height="38.5"/><rect fill-rule="evenodd" clip-rule="evenodd" x="75.2" y="50.8" class="st1" width="8.8" height="38.5"/></svg>
                              </button>
                              <video data-state="pause" playsinline poster="<?php echo asset('front/images/v4.jpg'); ?>">
                            <!--     <source src="https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4" type="video/mp4"> -->
                                <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                                
                              </video>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--===========================================Video Section end========================================-->


<!--===========================================instagram Section start========================================-->


<section class="insta-feed-wrapp">
<div class="container">
    <div class="insta-feed-top">
         <img src="<?php echo asset('front/images/instagramfeed.png'); ?>">
         <h3>@Majlixx</h3>
         <p>Find Your Perfect Place: Where Dreams Meet Reality. Sale or Rent, Your Key to Home Sweet Home!</p>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="insta-feed-box">
                <img src="<?php echo asset('front/images/insta1.webp'); ?>">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="insta-feed-box">
                <img src="<?php echo asset('front/images/insta2.jpg'); ?>">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="insta-feed-box">
                <img src="<?php echo asset('front/images/insta3.webp'); ?>">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="insta-feed-box">
                <img src="<?php echo asset('front/images/insta2.jpg'); ?>">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="insta-feed-box">
                <img src="<?php echo asset('front/images/insta3.webp'); ?>">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="insta-feed-box">
                <img src="<?php echo asset('front/images/insta1.webp'); ?>">
            </div>
        </div>
    </div>

</div>
</section>



<!--===========================================instagram Section end========================================-->



    <!--=============================================footer top start======================================-->


    <!--=============================================footer top end======================================-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\voteproject\projects\resources\views/front/static/home.blade.php ENDPATH**/ ?>