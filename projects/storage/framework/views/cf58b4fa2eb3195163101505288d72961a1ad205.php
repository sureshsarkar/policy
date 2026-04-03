
<script src="<?php echo e(asset('front/assets/jquery/jquery.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>

<script src="<?php echo e(asset('front/assets/bootstrap/js/bootstrap.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/assets/owl/owl.carousel.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/assets/vendor/fancybox/jquery.fancybox.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script> 
<script src="<?php echo e(asset('front/js/script.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script src="<?php echo e(asset('front/js/wow.min.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>


<script src="<?php echo e(asset('toastr/toastr.js')); ?>?ver=<?php echo $setting_data['version_css_js'] ?? '1.0.0'; ?>"></script>
<script>
$(document).ready(function(){
    <?php if(Session::has("success")): ?>
        toastr.success("<?php echo e(Session::get('success')); ?>");
    <?php endif; ?>
    <?php if(Session::has("danger")): ?>
        toastr.error("<?php echo e(Session::get('danger')); ?>");
    <?php endif; ?>
  } );
 
</script>

<?php echo $__env->yieldContent("js"); ?>
<?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/front/layouts/js.blade.php ENDPATH**/ ?>