<div class="form-group">
    {{ Form::label($name,   trans('validation.attributes.'.$name), ['class' => 'control-label']) }}
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control '.($errors->has($name) ? 'is-invalid' : '')  ], array_merge(['rows'=>3], $attributes))) }}
    
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
    
</div>