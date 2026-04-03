<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('News Title') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>SEO URL ( Only A-z,0-9,_,- are allowed)</label>
            {!! Form::text('seo_url', null, [
                'class' => 'form-control',
                'pattern' => '[a-zA-Z0-9-_]+',
                'title' => 'Enter Valid SEO URL',
                'oninvalid' =>
                    "this.setCustomValidity('SEO URL is not Valid Please enter first letter must be a-z and only accept chars a-z 0-9,-,_')",
                'onchange' => "try{setCustomValidity('')}catch(e){}",
                'oninput' => "setCustomValidity(' ')",
                'required' => 'required',
            ]) !!}
            <span class="text-danger">{{ $errors->first('seo_url') }}</span>
        </div>
    </div>



    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('image') !!}
            {!! Form::file('image', ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('image') }}</span>
            @isset($data)
                @if ($data->image != '')
                    <img src="{{ asset($data->image) }}" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image" value="yes"
                            type="checkbox" id="remove_image">
                        <label for="remove_image" class="custom-control-label">Remove Image</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('image2') !!}
            {!! Form::file('image2', ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('image2') }}</span>
            @isset($data)
                @if ($data->image2 != '')
                    <img src="{{ asset($data->image2) }}" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_image2" value="yes"
                            type="checkbox" id="remove_image2">
                        <label for="remove_image2" class="custom-control-label">Remove Image 2</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('bannerImage') !!}
            {!! Form::file('bannerImage', ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('bannerImage') }}</span>
            @isset($data)
                @if ($data->bannerImage != '')
                    <img src="{{ asset($data->bannerImage) }}" width="200"> <br>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" name="remove_banner_image"
                            value="yes" type="checkbox" id="remove_banner_image">
                        <label for="remove_banner_image" class="custom-control-label">Remove Banner Image</label>
                    </div>
                @endif
            @endisset
        </div>
    </div>

    {{-- <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('templete') !!}
            {!! Form::select('templete', Helper::getTempletes(), null, [
                'class' => 'form-control',
                'required' => 'required',
            ]) !!}
            <span class="text-danger">{{ $errors->first('templete') }}</span>
        </div>
    </div> --}}

    
    <div class="col-md-4">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input custom-control-input-danger" name="breaking_news" value="yes"
                type="checkbox" id="breaking_news" {{ (isset($data->breaking_news) && $data->breaking_news=="yes")?'checked':'' }}>
            <label for="breaking_news" class="custom-control-label">Breaking News</label>
        </div>
    </div>

    <div class="col-md-4">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input custom-control-input-danger" name="trending_news" value="yes"
                type="checkbox" id="trending_news"  {{ (isset($data->trending_news) && $data->trending_news=="yes")?'checked':''}}>
            <label for="trending_news" class="custom-control-label">Trending News</label>
        </div>
    </div>

    <div class="col-md-4">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input custom-control-input-danger" name="top_stories_news" value="yes"
                type="checkbox" id="top_stories_news"  {{ (isset($data->top_stories_news) && $data->top_stories_news=="yes")?'checked':''}}>
            <label for="top_stories_news" class="custom-control-label">Top Stories</label>
        </div>
    </div>
 

<br>
<br>


    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('News category') !!}
            {!! Form::select('is_parent', ModelHelper::getCareerLocationSelect(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose news category',
            ]) !!}
            <span class="text-danger">{{ $errors->first('is_parent') }}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Author Name') !!}
            {!! Form::text('author', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <span class="text-danger">{{ $errors->first('author') }}</span>
        </div>
    </div>

    
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('publish') !!}
            {!! Form::select(
                'publish',
                ['published' => 'published', 'draft' => 'draft', 'pending' => 'pending'],
                'published',
                ['class' => 'form-control', 'required' => 'required'],
            ) !!}
            <span class="text-danger">{{ $errors->first('publish') }}</span>
        </div>
    </div>

    <div class="col-md-4 d-none">
        <div class="form-group">
            {!! Form::label('publish') !!}
            {!! Form::select('publish', ['published' => 'published', 'draft' => 'draft', 'pending' => 'pending'], null, [
                'class' => 'form-control',
                'required' => 'required',
            ]) !!}
            <span class="text-danger">{{ $errors->first('publish') }}</span>
        </div>
    </div>


</div>
 
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('Youtube Link') !!}
            {!! Form::textarea('cta_description', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('cta_description') }}</span>
        </div>
    </div>
</div>
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('shortDescription') !!}
            {!! Form::textarea('shortDescription', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('shortDescription') }}</span>
        </div>
    </div>

</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('mediumDescription') !!}
            {!! Form::textarea('mediumDescription', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('mediumDescription') }}</span>
        </div>
    </div>

</div>
<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('longDescription') !!}
            {!! Form::textarea('longDescription', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('longDescription') }}</span>
        </div>
    </div>

</div>

  




<div class="row">
    <div class="col-md-12 alert alert-warning text-center">
        <h3>Seo Section</h3>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('meta_title') !!}
            {!! Form::textarea('meta_title', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('meta_title') }}</span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('meta_keywords') !!}
            {!! Form::textarea('meta_keywords', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('meta_description') !!}
            {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('meta_description') }}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('header_section') !!}
            {!! Form::textarea('header_section', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('header_section') }}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('footer_section') !!}
            {!! Form::textarea('footer_section', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('footer_section') }}</span>
        </div>
    </div>
</div>
