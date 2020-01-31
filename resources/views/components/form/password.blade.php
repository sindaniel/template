<div class="form-group">
    {{ Form::label($name,   trans('validation.attributes.'.$name), ['class' => 'control-label']) }}
    {{ Form::password($name, array_merge(['class' => 'form-control '.($errors->has($name) ? 'is-invalid' : '')  ], $attributes)) }}
    @if($help)<small class='form-text text-muted'>  {{$help}}</small>@endif
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>