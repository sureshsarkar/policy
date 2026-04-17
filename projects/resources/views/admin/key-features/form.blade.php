<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("Title") !!}
            {!! Form::text("title",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("title")}}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Icon Class Name *</label>
            {!! Form::text("icon_class",null,["class"=>"form-control","required"=>"required"]) !!}
            <span class="text-danger">{{ $errors->first("icon_class")}}</span>
        </div>
    </div>

        <div class="col-md-4">
        <div class="form-group">
            {!! Form::label("Ordering") !!}
            {!! Form::text("ordering",null,["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("ordering")}}</span>
        </div>
    </div>

    {{-- <div class="col-md-6 ">
        <div class="form-group">
            {!! Form::label("image") !!}
            {!! Form::file("image",["class"=>"form-control"]) !!}
            <span class="text-danger">{{ $errors->first("image")}}</span>
             @isset($data)
                @if($data->image!="")
                     <img src="{{ asset(($data->image)) }}" width="200" >
                @endif
            @endisset
        </div>
    </div> --}}


    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label("descreption") !!}
            {!! Form::textarea("descreption",null,["class"=>"form-control","rows"=>"2"]) !!}
            <span class="text-danger">{{ $errors->first("descreption")}}</span>
        </div>
    </div>


</div>

