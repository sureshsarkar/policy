<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header <?php echo e($item['class'] ?? ''); ?>">

    <?php echo e(is_string($item) ? $item : $item['header']); ?>


</li>
<?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/vendor/adminlte/partials/sidebar/menu-item-header.blade.php ENDPATH**/ ?>