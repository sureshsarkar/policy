<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('title') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('publish') !!}
            {!! Form::select('publish', ['published' => 'published', 'draft' => 'draft', 'pending' => 'pending'], null, [
                'class' => 'form-control',
                'required' => 'required',
            ]) !!}
            <span class="text-danger">{{ $errors->first('publish') }}</span>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Priority') !!}
            {!! Form::number('ordering', null, ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('ordering') }}</span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('thumbnail') !!}
            {!! Form::file('thumbnail', ['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
            @isset($data)
                @if ($data->thumbnail != '')
                    <img src="{{ asset($data->thumbnail) }}" width="200">
                @endif
            @endisset
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Video File') !!}
            {!! Form::file('video', [
                'class' => 'form-control',
                'accept' => 'video/*', // accepts all video file types
            ]) !!}
            <span class="text-danger">{{ $errors->first('video') }}</span>

            @isset($data)
                @if ($data->video != '')
                <input type="hidden" name="old_video" value="{{ $data->video }}">
                    <video data-state="pause" playsinline poster="" width=200>
                        <source src="{{ asset($data->video) }}" type="video/mp4">
                    </video>
                @endif
            @endisset

        </div>
    </div>

    <div class="col-md-6 d-none">
        <div class="form-group">
            {!! Form::label('Category') !!}
            {!! Form::select('type', ['News' => 'News', 'Media' => 'Media', 'Meeting' => 'Meeting'], null, [
                'class' => 'form-control',
            ]) !!}
            <span class="text-danger">{{ $errors->first('type') }}</span>
        </div>
    </div>



    <div class="col-md-6 d-none">
        <div class="col-md-12">
            {!! Form::label('Parent Page') !!}
            {!! Form::select('typeeee', ModelHelper::getPageSelectList(), null, [
                'class' => 'form-control',
                'placeholder' => 'choose parent Page',
            ]) !!}
            <span class="text-danger">{{ $errors->first('typeeee') }}</span>
        </div>
    </div><br>




    <div class="col-md-6 d-none">
        <div class="form-group">
            {!! Form::label('is_home') !!}
            {!! Form::select('is_home', Helper::getBooleanDataActual(), 'true', ['class' => 'form-control']) !!}
        </div>
    </div>


</div>

<div class="row d-none">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) !!}
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
</div>
