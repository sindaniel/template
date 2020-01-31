<div class="form-group">
    {{ Form::label($name,  trans('validation.attributes.'.$name) , ['class' => 'control-label']) }}
    {{ Form::select($name, $options, $value, array_merge(['class' => 'form-control', 'id'=>preg_replace("/[^a-zA-Z0-9]+/", "", $name)], $attributes))}}
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>