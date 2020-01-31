@extends('layouts.auth')


@section('content')

<h4 class="font-18 m-b-5 text-center">Restablecer la contraseña</h4>

{{Form::open(['route' => 'password.email', 'class'=>'form-horizontal m-t-30'])}}
    {{ Form::bsText('email') }}
   
    <div class="form-group row m-t-20">       
        <div class="col-sm-12 text-right">
            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Restablecer</button>
        </div>
    </div>

    <div class="form-group m-t-10 mb-0 row">
        <div class="col-12 m-t-20">
            <a href="{{route('login')}}"><i class="mdi mdi-lock"></i> Ingresar</a>
        </div>
    </div>
{{Form::close() }}


@endsection


