

<?php $__env->startSection("container"); ?>
<section class="coming-soon-wrapp error-page pt-5">
  <div class="container">
    <div class="coming-con">
        <h3><i class="fa fa-map-signs text-gray-silver"></i> 404!</h3> 
       <h5>Oops! Not Found</h5>
       <a href="<?php echo e(url('/')); ?>">Back to Home</a>
    </div>
  </div>
</section>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/front/static/404.blade.php ENDPATH**/ ?>