<div class="box-body">
    <div class="row">
        <div class="col-xs-6">
            <label for="nome">Nome</label>
            <input name="name" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}" autofocus required>
        </div>
        <div class="col-xs-6">
            <label for="email">E-mail</label>
            <input style="text-transform:lowercase" onkeyup="minuscula(this)" name="email" id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}" reqired>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <label for="email">Mudar a Senha</label>
            <input id="password" name="password" type="password" placeholder="Senha" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="col-xs-6">
            <label for="email">Confirme a Senha</label>
            <input id="password-confirm" name="password_confirmation" type="password" placeholder="Repita a Senha" class="form-control {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password-confirm">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
    </div>
</div>