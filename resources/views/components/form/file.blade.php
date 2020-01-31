
<div class="form-group">
    {{ Form::label($name,  trans('validation.attributes.'.$name), ['class' => 'control-label']) }}
    {{ Form::file($name, array_merge(['class' => 'form-control '.($errors->has($name) ? 'is-invalid' : '')  ], $attributes)) }}
    
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
    
</div>