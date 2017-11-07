@extends('template')

@section('conteudo')
<form>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationServer01">Nome</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Seu nome" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer02">Sobre nome</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Seu sobrenome" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Cidade</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Sua cidade" required>
      <div class="invalid-feedback">
        Digite uma cidade valida
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">Estado</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Seu estado" required>
      <div class="invalid-feedback">
        Digite um estado valido
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05">Cep</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Seu cep" required>
      <div class="invalid-feedback">
        Digite um CEP valido
      </div>
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@stop