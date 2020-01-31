@extends('layouts.auth')

@section('content')

<h4 class="font-18 m-b-5 text-center">Bienvenido de nuevo!</h4>
<p class="text-muted text-center">Inicia sesión para continuar a {{config('app.name')}}.</p>


{{Form::open(['route' => 'login', 'class'=>'form-horizontal m-t-30'])}}
    {{ Form::bsText('email') }}
    {{ Form::bsPassword('password') }}
    <div class="form-group row m-t-20">       
        <div class="col-sm-12 text-right">
            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Ingresar</button>
        </div>
    </div>

    <div class="form-group m-t-10 mb-0 row">
        <div class="col-12 m-t-20">
            <a href="{{route('password.request')}}"><i class="mdi mdi-lock"></i> Olvido su contraseña?</a>
        </div>
    </div>
{{Form::close() }}


@endsection


@section('footer')
<p>¿No tienes una cuenta? <a href="{{route('register')}}" class="font-500 text-primary"> Regístrate ahora</a> </p>
@endsection