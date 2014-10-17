@extends('layouts.clean')

@section('body_content')

<div class="container">
    <div class="row">
        <form class="form-signin mg-btm" method="POST">
            <h3 class="heading-desc">
                Login
            </h3>
            <div class="main">
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" placeholder="Usuário ou Email" value="{{{ $username }}}">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha" value="{{{ $password }}}" />
                    </div>
                </div>

                @if ($error)
                    <div class="row alert alert-danger">
                        {{{ $error }}}
                    </div>
                @endif
                <span class="clearfix"></span>  
            </div>
            <div class="login-footer">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                    </div>
                    <div class="col-xs-6 col-md-6 pull-right">
                        <button type="submit" class="btn btn-large btn-danger pull-right">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@stop