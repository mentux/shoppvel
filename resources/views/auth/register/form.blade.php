<div class="col-md-4">
    <div class="panel panel-warning">
        <div class="panel-heading">Não tem registro em nossa loja?</div>
        <div class="panel-body">
            <div class="alert alert-warning">
                Entre com seus dados para fazer o cadastro e finalizar compras:
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Nome</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Senha</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Confirme a senha</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">CPF</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="cpf" value="{{ old('cpf') }}">

                        @if ($errors->has('cpf'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cpf') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Endereço (Logradouro, Cidade, CEP)</label>

                    <div class="col-md-8">
                        <textarea class="form-control" name="endereco">
                                    {{ old('endereco') }}
                        </textarea>

                        @if ($errors->has('endereco'))
                        <span class="help-block">
                            <strong>{{ $errors->first('endereco') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>