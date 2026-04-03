<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label("name"); ?>

            <?php echo Form::text("name",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("name")); ?></span>
        </div>
    </div>
    


    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label("email"); ?>

            <?php echo Form::email("email",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("email")); ?></span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label("Mobile"); ?>

            <?php echo Form::text("mobile",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("mobile")); ?></span>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label("National ID"); ?>

            <?php echo Form::text("pan",null,["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("pan")); ?></span>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">

            <?php echo Form::label("password"); ?>

            <?php echo Form::password("password",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("password")); ?></span>
            <input type="hidden" name="old_password" value="<?php echo e($data->password); ?>">

        </div>
    </div>
    <div class="col-md-4  ">
        <div class="form-group">
            <?php echo Form::label("status"); ?>

            <?php echo Form::select("status",["1"=>"active","0"=>"deactive"],null,["class"=>"form-control","required"=>"required"]); ?>

            <span class="text-danger"><?php echo e($errors->first("status")); ?></span>
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="form-group">
            <?php echo Form::label("image"); ?>

            <?php echo Form::file("image",["class"=>"form-control"]); ?>

            <span class="text-danger"><?php echo e($errors->first("image")); ?></span>
            <?php if(isset($data)): ?>
                <?php if($data->image!=""): ?>
                    <img src="<?php echo e(asset(($data->image))); ?>" width="200" > <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes" type="checkbox" id="remove_image" >
                        <label for="remove_image" class="custom-control-label">Remove  Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    
    
    

</div>

<?php /**PATH E:\Xampp8.2\htdocs\laravel\voting-app\projects\resources\views/admin/customers/form.blade.php ENDPATH**/ ?>