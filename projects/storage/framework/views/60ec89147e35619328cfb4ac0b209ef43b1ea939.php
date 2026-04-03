<?php $__env->startSection('title', $data->meta_title); ?>
<?php $__env->startSection('keywords', $data->meta_keywords); ?>
<?php $__env->startSection('description', $data->meta_description); ?>

<?php $__env->startSection('container'); ?>

    <!-- About Section -->
    
    
    <section class="about_wrapper mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow rounded p-4 text-center">
                        <h4 class="mb-4">User Profile</h4>
                        <p><strong>Name:</strong> <?php echo e($user->name); ?></p>
                        
                        <p><strong>Email:</strong> <?php echo e($user->email); ?></p>
                        
                        
                        
                        <a href="<?php echo e(route('user.logout')); ?>" class="btn btn-danger mt-3"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/front/static/profile.blade.php ENDPATH**/ ?>