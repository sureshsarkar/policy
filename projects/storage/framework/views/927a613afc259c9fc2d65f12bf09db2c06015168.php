<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label('News Title'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control', 'required' => 'required']); ?>

            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            <?php echo Form::text('seo_url', null, [
                'class' => 'form-control',
                'pattern' => '[a-zA-Z0-9-_]+',
                'title' => 'Enter Valid SEO URL',
                'oninvalid' =>
                    "this.setCustomValidity('SEO URL is not Valid Please enter first letter must be a-z and only accept chars a-z 0-9,-,_')",
                'onchange' => "try{setCustomValidity('')}catch(e){}",
                'oninput' => "setCustomValidity(' ')",
                'required' => 'required',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('seo_url')); ?></span>
        </div>
    </div>



    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('image'); ?>

            <?php echo Form::file('image', ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
            <?php if(isset($data)): ?>
                <?php if($data->image != ''): ?>
                    <img src="<?php echo e(asset($data->image)); ?>" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes"
                            type="checkbox" id="remove_image">
                        <label for="remove_image" class="custom-control-label">Remove Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('image2'); ?>

            <?php echo Form::file('image2', ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('image2')); ?></span>
            <?php if(isset($data)): ?>
                <?php if($data->image2 != ''): ?>
                    <img src="<?php echo e(asset($data->image2)); ?>" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image2" value="yes"
                            type="checkbox" id="remove_image2">
                        <label for="remove_image2" class="custom-control-label">Remove Image 2</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('bannerImage'); ?>

            <?php echo Form::file('bannerImage', ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo e($errors->first('bannerImage')); ?></span>
            <?php if(isset($data)): ?>
                <?php if($data->bannerImage != ''): ?>
                    <img src="<?php echo e(asset($data->bannerImage)); ?>" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_banner_image"
                            value="yes" type="checkbox" id="remove_banner_image">
                        <label for="remove_banner_image" class="custom-control-label">Remove Banner Image</label>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    

    
    <div class="col-md-4">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input custom-control-input-danger" name="breaking_news" value="yes"
                type="checkbox" id="breaking_news" <?php echo e((isset($data->breaking_news) && $data->breaking_news=="yes")?'checked':''); ?>>
            <label for="breaking_news" class="custom-control-label">Breaking News</label>
        </div>
    </div>

    <div class="col-md-4">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input custom-control-input-danger" name="trending_news" value="yes"
                type="checkbox" id="trending_news"  <?php echo e((isset($data->trending_news) && $data->trending_news=="yes")?'checked':''); ?>>
            <label for="trending_news" class="custom-control-label">Trending News</label>
        </div>
    </div>

    <div class="col-md-4">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input custom-control-input-danger" name="top_stories_news" value="yes"
                type="checkbox" id="top_stories_news"  <?php echo e((isset($data->top_stories_news) && $data->top_stories_news=="yes")?'checked':''); ?>>
            <label for="top_stories_news" class="custom-control-label">Top Stories</label>
        </div>
    </div>
 

<br>
<br>


    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('News category'); ?>

            <?php echo Form::select('is_parent', ModelHelper::getCareerLocationSelect(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose news category',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('is_parent')); ?></span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('Author Name'); ?>

            <?php echo Form::text('author', null, ['class' => 'form-control', 'required' => 'required']); ?>

            <span class="text-danger"><?php echo e($errors->first('author')); ?></span>
        </div>
    </div>

    
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('publish'); ?>

            <?php echo Form::select(
                'publish',
                ['published' => 'published', 'draft' => 'draft', 'pending' => 'pending'],
                'published',
                ['class' => 'form-control', 'required' => 'required'],
            ); ?>

            <span class="text-danger"><?php echo e($errors->first('publish')); ?></span>
        </div>
    </div>

    <div class="col-md-4 d-none">
        <div class="form-group">
            <?php echo Form::label('publish'); ?>

            <?php echo Form::select('publish', ['published' => 'published', 'draft' => 'draft', 'pending' => 'pending'], null, [
                'class' => 'form-control',
                'required' => 'required',
            ]); ?>

            <span class="text-danger"><?php echo e($errors->first('publish')); ?></span>
        </div>
    </div>


</div>
 
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('Youtube Link'); ?>

            <?php echo Form::textarea('cta_description', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('cta_description')); ?></span>
        </div>
    </div>
</div>
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('description'); ?>

            <?php echo Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('shortDescription'); ?>

            <?php echo Form::textarea('shortDescription', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('shortDescription')); ?></span>
        </div>
    </div>

</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('mediumDescription'); ?>

            <?php echo Form::textarea('mediumDescription', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('mediumDescription')); ?></span>
        </div>
    </div>

</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('longDescription'); ?>

            <?php echo Form::textarea('longDescription', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('longDescription')); ?></span>
        </div>
    </div>

</div>

  




<div class="row">
    <div class="col-md-12 alert alert-warning text-center">
        <h3>Seo Section</h3>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label('meta_title'); ?>

            <?php echo Form::textarea('meta_title', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('meta_title')); ?></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo Form::label('meta_keywords'); ?>

            <?php echo Form::textarea('meta_keywords', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('meta_keywords')); ?></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('meta_description'); ?>

            <?php echo Form::textarea('meta_description', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('meta_description')); ?></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('header_section'); ?>

            <?php echo Form::textarea('header_section', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('header_section')); ?></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('footer_section'); ?>

            <?php echo Form::textarea('footer_section', null, ['class' => 'form-control', 'rows' => '2']); ?>

            <span class="text-danger"><?php echo e($errors->first('footer_section')); ?></span>
        </div>
    </div>
</div>
<?php /**PATH E:\Xampp8.2\htdocs\laravel\majlix-news\projects\resources\views/admin/news-post/form.blade.php ENDPATH**/ ?>