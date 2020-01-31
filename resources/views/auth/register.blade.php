@extends('layouts.auth')

@section('content')

{{Form::open(['route' => 'register', 'class'=>'form-horizontal m-t-30'])}}
    {{ Form::bsText('name') }}
    {{ Form::bsText('email') }}
    {{ Form::bsPassword('password') }}
    {{ Form::bsPassword('password_confirmation') }}
    <div class="form-group row m-t-20">       
        <div class="col-sm-12 text-right">
            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Ingresar</button>
        </div>
    </div>

    <div class="form-group m-t-10 mb-0 row">
        <div class="col-12 m-t-20">
            <a href="{{route('login')}}"><i class="mdi mdi-lock"></i> Ya tienes una cuenta?</a>
        </div>
    </div>
{{Form::close() }}




@endsection
