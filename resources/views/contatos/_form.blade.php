<div class="box-body">
    <div class="row">
        <div class="col-xs-5">
            <label for="nome">Nome Completo*</label>
            <input style="text-transform:uppercase" onkeyup="maiuscula(this)" name="nome" id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" value="{{ isset($registro->nome) ? $registro->nome : '' }}" autofocus >
        </div>
        <div class="col-xs-5">
            <label for="email">E-mail*</label>
            <input style="text-transform:lowercase" onkeyup="minuscula(this)" name="email" id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ isset($registro->email) ? $registro->email : '' }}" >
        </div>
        <div class="col-xs-2">
            <label for="fone">Fone/Whatsapp</label>
            <input name="fone" id="fone" type="text" class="form-control{{ $errors->has('fone') ? ' is-invalid' : '' }}" name="fone" value="{{ isset($registro->fone) ? $registro->fone : '' }}">
        </div>
    </div>
</div>
<div class="box-body">
    <div class="row">
        <div class="col-xs-4">
            <label for="facebook">Facebook</label>
            <input style="text-transform:lowercase" onkeyup="minuscula(this)" name="facebook" id="facebook" type="url" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" value="{{ isset($registro->facebook) ? $registro->facebook : '' }}">
        </div>
        <div class="col-xs-4">
            <label for="twitter">Twitter</label>
            <input style="text-transform:lowercase" onkeyup="minuscula(this)" name="twitter" id="twitter" type="url" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" value="{{ isset($registro->twitter) ? $registro->twitter : '' }}">
        </div>
        <div class="col-xs-4">
            <label for="instagram">Instagram</label>
            <input style="text-transform:lowercase" onkeyup="minuscula(this)" name="instagram" id="instagram" type="url" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" value="{{ isset($registro->instagram) ? $registro->instagram : '' }}">
        </div>

    </div>
</div>
<div class="box-body">
    <div class="row">
        <div class="col-xs-2">
            <label for="cep">CEP</label>
            <input name="cep" id="cep" type="text" class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep" value="{{ isset($registro->cep) ? $registro->cep : '' }}" data-inputmask='"mask": "99999-999"' data-mask>
        </div>
        <div class="col-xs-1">
            <label for="uf">UF</label>
            <input name="uf" id="uf" type="text" class="form-control{{ $errors->has('uf') ? ' is-invalid' : '' }}" name="uf" value="{{ isset($registro->uf) ? $registro->uf : '' }}">
        </div>
        <div class="col-xs-3">
            <label for="localidade">Cidade</label>
            <input style="text-transform:uppercase" onkeyup="maiuscula(this)" name="localidade" id="localidade" type="text" class="form-control{{ $errors->has('localidade') ? ' is-invalid' : '' }}" name="localidade" value="{{ isset($registro->localidade) ? $registro->localidade : '' }}">
        </div>
        <div class="col-xs-3">
            <label for="logradouro">Logradouro</label>
            <input style="text-transform:uppercase" onkeyup="maiuscula(this)" name="logradouro" id="logradouro" type="text" class="form-control{{ $errors->has('logradouro') ? ' is-invalid' : '' }}" name="logradouro" value="{{ isset($registro->logradouro) ? $registro->logradouro : '' }}">
        </div>
        <div class="col-xs-3">
            <label for="bairro">Bairro</label>
            <input style="text-transform:uppercase" onkeyup="maiuscula(this)" name="bairro" id="bairro" type="text" class="form-control{{ $errors->has('bairro') ? ' is-invalid' : '' }}" name="bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}">
        </div>
    </div>
</div>
<div>
    <input name="user_id" id="user_id" type="hidden" value="{{ Auth::user()->id }}">
</div>