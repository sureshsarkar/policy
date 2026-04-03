<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('title'); ?>

            <?php echo Form::text('title', null, ['class' => 'form-control', 'required' => 'required']); ?>

            <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('publish'); ?>

            <?php echo Form::select('publish', ['published' => 'published', 'draft' => 'draft', 'pending' => 'pending'], null, [
                'class' => 'form-control',
                'required' => 'required',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('publish')); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Priority'); ?>

            <?php echo Form::number('ordering', null, ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('ordering')); ?></span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label('thumbnail'); ?>

            <?php echo Form::file('thumbnail', ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('thumbnail')); ?></span>
            <?php if(isset($data)): ?>
                <?php if($data->thumbnail != ''): ?>
                    <img src="<?php echo e(asset($data->thumbnail)); ?>" width="200">
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label('Video File'); ?>

            <?php echo Form::file('video', [
                'class' => 'form-control',
                'accept' => 'video/*', // accepts all video file types
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('video')); ?></span>

            <?php if(isset($data)): ?>
                <?php if($data->video != ''): ?>
                <input type="hidden" name="old_video" value="<?php echo e($data->video); ?>">
                    <video data-state="pause" playsinline poster="" width=200>
                        <source src="<?php echo e(asset($data->video)); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
            <?php endif; ?>

        </div>
    </div>

    <div class="col-md-6 d-none">
        <div class="form-group">
            <?php echo Form::label('Category'); ?>

            <?php echo Form::select('type', ['News' => 'News', 'Media' => 'Media', 'Meeting' => 'Meeting'], null, [
                'class' => 'form-control',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('type')); ?></span>
        </div>
    </div>



    <div class="col-md-6 d-none">
        <div class="col-md-12">
            <?php echo Form::label('Parent Page'); ?>

            <?php echo Form::select('typeeee', ModelHelper::getPageSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose parent Page',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('typeeee')); ?></span>
        </div>
    </div><br>




    <div class="col-md-6 d-none">
        <div class="form-group">
            <?php echo Form::label('is_home'); ?>

            <?php echo Form::select('is_home', Helper::getBooleanDataActual(), 'true', ['class' => 'form-control']); ?>

        </div>
    </div>


</div>

<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('description'); ?>

            <?php echo Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
        </div>
    </div>
</div>
<?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/admin/video-section/form.blade.php ENDPATH**/ ?>