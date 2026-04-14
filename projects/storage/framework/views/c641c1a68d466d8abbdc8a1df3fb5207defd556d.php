<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header <?php echo e($item['class'] ?? ''); ?>">

    <?php echo e(is_string($item) ? $item : $item['header']); ?>


</li>
<?php /**PATH E:\xampp 8.2\htdocs\laravel\kharido-policy\projects\resources\views/vendor/adminlte/partials/sidebar/menu-item-header.blade.php ENDPATH**/ ?>