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
    <?php $name=$data->name; ?>

    <!--===========================================Breaking news bar========================================-->
    <?php
        $BreakingNews = App\Models\NewsPost::where('breaking_news', 'yes')
            ->where('publish', 'published')
            ->orderBy('id', 'desc')
            ->limit(10)
            ->select('id', 'name', 'seo_url', 'bannerImage')
            ->get();

    ?>

    

    
    <?php if(isset($BreakingNews)): ?>
    <?php if(count($BreakingNews) > 0): ?>
        <section class="breaking-news-bar">
            <div class="container">
                <div class="bar-con">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 col-12">
                            <h5><span>Breaking News</span></h5>
                        </div>
                        <div class="col-lg-10 col-md-12 col-12">
                            <div class="breaking-news-slide owl-carousel">
                               
                                    <?php $__currentLoopData = $BreakingNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <a href="<?php echo e(url('news/' . $c->seo_url)); ?>">  <h5> <?php echo e($c->name ?? ''); ?></h5></a> 
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    <?php endif; ?>
    <!--===========================================Breaking news bar========================================-->

    <!--===========================================hero section start========================================-->

    <section class="hero-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="hero-sec-img">
                        <img src="<?php echo asset($BreakingNews[0]->bannerImage ?? 'front/images/banner.jpg'); ?>">
                        <div class="hero-con">
                            <h2><?php echo $BreakingNews[0]->name ?? ''; ?></h2>
                        </div>
                    </div>
                </div>

                <?php
                    $TrendingNews = App\Models\NewsPost::where('trending_news', 'yes')
                        ->where('publish', 'published')
                        ->limit(10)
                        ->orderBy('id', 'desc')
                        ->select('id', 'name', 'seo_url', 'bannerImage')
                        ->get();
                ?>
                <?php if(count($TrendingNews) > 0): ?>

                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="trending-headline">
                            <div class="trending-headline-inn">
                                <h3>Trending Headlines</h3>
                                <ul>
                                    <?php $__currentLoopData = $TrendingNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <img src="<?php echo asset($c->bannerImage ?? 'front/images/th.jpg'); ?>">
                                            <h5><a href="<?php echo url('news/' . $c->seo_url); ?>" class="ancher-head">
                                                    <?php echo $c->name ?? ''; ?> </a></h5>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!--===========================================hero section start========================================-->

    <!--===========================================top stories start========================================-->

    <?php
        $news = App\Models\NewsPost::with('parentname')
            ->where('publish', 'published')
            ->where('is_parent', $data->id)
            ->orderBy('id', 'desc')
            ->select('id', 'name', 'seo_url', 'bannerImage', 'is_parent', 'descrIption', 'created_at')
            ->paginate(12);
    ?>
    <?php if(count($news) > 0): ?>
        <section class="top-stories-wrapp category-page">
            <div class="container">
                <div class="top-stories-inner">
                    <div class="row">
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="top-st-box">
                                    <a href="<?php echo e(url('news/' . $c->seo_url)); ?>">
                                        <img src="<?php echo asset($c->bannerImage ?? 'front/images/ts1.jpg'); ?>">
                                    </a>
                                    <h5>
                                        <span class="ts-cat"> <?php echo $c->parentname->title ?? ''; ?></span>
                                        <?php
                                            $dt =
                                                Carbon\Carbon::now()->diffInDays(
                                                    Carbon\Carbon::parse($c->created_at),
                                                ) ?? 1;
                                        ?>
                                        <span class="ts-time"><?php echo e($dt != 0 ? $dt : 1); ?>d ago</span>
                                    </h5>
                                    <h4> <a href="<?php echo e(url('news/' . $c->seo_url)); ?>" class="ancher-head"> <?php echo e($c->name); ?>

                                        </a></h4>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--===========================================top stories end========================================-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/front/static/news.blade.php ENDPATH**/ ?>