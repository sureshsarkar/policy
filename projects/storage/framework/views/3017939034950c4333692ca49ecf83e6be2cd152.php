<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("title"); ?>

            <?php echo Form::text("title",null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("title")); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("category"); ?>

            <?php echo Form::select("category_id",ModelHelper::getCareerLocationSelect(),null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("category_id")); ?></span>
        </div>
    </div>

    

    <div class="col-md-3 d-none">
        <div class="form-group">
            <?php echo Form::label("image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
             <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                     <img src="<?php echo e(asset(($data->image))); ?>" width="200" >
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>



    <div class="col-md-6 d-none">
        <div class="form-group">
            <?php echo Form::label("Category"); ?>

            <?php echo Form::select("type",["News"=>"News","Media"=>"Media","Meeting"=>"Meeting"],null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("type")); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("publish"); ?>

            <?php echo Form::select("publish",["published"=>"published","unpublished"=>"unpublished"],'published',["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("publish")); ?></span>
        </div>
    </div>

     <div class="col-md-6 d-none">
    <div class="col-md-12">
            <?php echo Form::label("Parent Page"); ?>

            <?php echo Form::select("typeeee",ModelHelper::getPageSelectList(),null,["class"=>"form-control","placeholder"=>"choose parent Page"]); ?>

            <span class="text-danger"><?php echo e($errors->first("typeeee")); ?></span>
        </div>
    </div><br>




    <div class="col-md-6 d-none">
        <div class="form-group">
            <?php echo Form::label("is_home"); ?>

    <?php echo Form::select("is_home",Helper::getBooleanDataActual(),'true',["class"=>"form-control"]); ?>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("Priority"); ?>

            <?php echo Form::number("ordering",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("ordering")); ?></span>
        </div>
    </div>
</div>

<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label("description"); ?>

            <?php echo Form::textarea("description",null,["class"=>"form-control","rows"=>"2"]); ?>

            <span class="text-danger"><?php echo e($errors->first("description")); ?></span>
        </div>
    </div>
</div>


<?php /**PATH E:\xampp 8.2\htdocs\laravel\kharido-policy\projects\resources\views/admin/question/form.blade.php ENDPATH**/ ?>