@extends('templates.template')

@section('login')
  <h1 class="text-center">@if(isset($assistente))Editar @else Cadastrar @endif</h1>
  <div class="col-8 m-auto">
    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert alert-danger">
        @foreach($errors->all() as $error)
          {{$error}}<br>
        @endforeach
      </div>
    @endif

  @if(isset($assistente))
  <form name="formEdit" id="formEdit" method="POST" action="{{ url('assistentes/' . $assistente->id) }}">
    @method('PUT')
  @else  
  <form name="formCad" id="formCad" method="POST" action="{{ url('assistentes') }}">
  @endif
    @csrf
      <div class="form-group">
      </div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="{{ $assistente->nome ?? '' }}" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $assistente->email ?? '' }}" required>
      </div>

      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" aria-describedby="emailHelp" value="{{ $assistente->senha ?? '' }}" required>
      </div>

      <div class="form-group">
        <label for="confirmaSenha">Confirme a senha</label>
        <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" aria-describedby="emailHelp" value="{{ $assistente->confirmaSenha ?? '' }}" required>
      </div>

      <div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="number" class="form-control" id="matricula" name="matricula" aria-describedby="emailHelp" value="{{ $assistente->matricula ?? '' }}" required>
      </div>
      
      <div class="form-group">
        <label for="id_adm">Selecione o usuário</label>
        <select class="form-control" id="id_adm" name="id_adm" required>
          <option value="{{ $assistente->relAdm->id ?? '' }}">{{ $assistente->relAdm->name ?? '' }}</option>
          @foreach($adm as $admItem)
            <option value="{{ $admItem->id }}">{{ $admItem->name }}</option>
          @endforeach
        </select>
      </div>

      <input class="btn btn-primary" type="submit" value="@if(isset($assistente))Editar @else Cadastrar @endif">
    </form>
  </div>

@endsection
