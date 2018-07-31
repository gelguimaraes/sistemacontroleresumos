@extends('layouts/fullpage')
@section('content')
    <div class="row container valign-wrapper">
        <div class="col">
            <h2 class="header">Login</h2>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="image.png">
                </div>
                <div class="card-stacked">
                    <form  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        {{csrf_field()}}
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <label for="email">Login</label>
                                </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                        <label for="password">Senha</label>
                                    </div>

                            </div>
                            <div class="card-action">
                                <button type="submit" name="enter" value="foo" class="waves-effect waves-light btn center">
                                    <i class="material-icons left">input</i>Entrar
                                </button>
                                <button type="submit" name="newuser" value="foo" class="waves-effect waves-light btn center red darken-2">
                                    <i class="material-icons left">person_add</i><a class="nav-link" href="{{ route('register') }}">Cadastre-se</a>
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop