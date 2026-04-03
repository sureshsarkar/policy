<div class="row">
   <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("Title"); ?>

            <?php echo Form::text("name",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("name")); ?></span>
        </div>
    </div>


    

    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("Page*"); ?>

            <?php echo Form::select("cms_id",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"Choose Page","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("cms_id")); ?></span>
        </div>
    </div>





    <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                    <?php if(preg_match('/\.(jpeg|jpg|png|gif)$/i', asset(($data->image)))): ?> 

                    <img src="<?php echo e(asset(($data->image))); ?>" width="200" >
                    <?php else: ?>
                        <video width="320" height="240" controls>
                            <source src="<?php echo e(asset(($data->image))); ?>" type="video/mp4">
                        </video>

                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","pending"=>"pending"],'published',["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>


   



</div>



<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("Description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>

</div>




<?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/admin/services/form.blade.php ENDPATH**/ ?>