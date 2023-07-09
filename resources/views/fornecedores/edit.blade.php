@extends('templates.template')

@section('login')
  <h1 class="text-center">Editar</h1>
  <div class="col-8 m-auto">
    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert alert-danger">
        @foreach($errors->all() as $error)  
          {{$error}}<br>
        @endforeach
      </div>
    @endif

  @if(isset($fornecedor))
  <form name="formEdit" id="formEdit" method="POST" action="{{ url('fornecedores/' . $fornecedor->id) }}">
    @method('PUT')
  @else  
  <form name="formCad" id="formCad" method="POST" action="{{ url('fornecedores') }}">
  @endif
    @csrf
      <div class="form-group">
        <label for="nome">nome</label>
        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="{{$fornecedor->nome ?? ''}}" required>
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <textarea class="form-control" id="email" name="email" rows="3" required>{{$fornecedor->email ?? ''}}</textarea>
      </div>
      <div class="form-group">
        <label for="senha">senha</label>
        <textarea type="password" class="form-control" id="senha" name="senha" rows="3" required>{{$fornecedor->senha ?? ''}}</textarea>
      </div>
      <div class="form-group">
        <label for="confirmasSenha">Confirme a senha</label>
        <textarea type="password" class="form-control" id="confirmasSenha" name="confirmaSenha" rows="3" required>{{$fornecedor->confirmaSenha ?? ''}}</textarea>
      </div>

      <div class="form-group">
        <label for="cnpj">CPF/CNPJ</label>
        <textarea type="password" class="form-control" id="cnpj" name="cnpj" rows="3" required>{{$fornecedor->cnpj ?? ''}}</textarea>
      </div>
      <input class="btn btn-primary" type="submit" value="@if(isset($fornecedor))Editar @else Cadastrar @endif">
    </form>
  </div>

@endsection