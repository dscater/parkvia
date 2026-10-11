@extends('layouts.login')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="login-box">
        <div class="logo bg2">
            <a href="javascript:void(0);" class="text-black">{{ $empresa->name }}</a>
            <img src="{{ asset('imgs/empresa/' . $empresa->logo) }}" class="logo_inst" alt="">
        </div>
        <div class="card bg1">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="msg">Escribe tu usuario y contraseña</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Usuario" required autofocus>
                        </div>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    @if (session('error_c'))
                        <div class="alert alert-danger text-center"><button class="close"
                                data-dismiss="modal">&times;</button>La cuenta a la que esta intentando acceder fue
                            eliminada. Para mas información comuniquese con un administrador.</div>
                    @endif
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">INICIAR SESIÓN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
