@extends('templates.template')

@section('login')
  <h1 class="text-center">@if(isset($noticia))Editar @else Cadastrar @endif</h1>
  <div class="col-8 m-auto">
    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert alert-danger">
        @foreach($errors->all() as $error)
          {{$error}}<br>
        @endforeach
      </div>
    @endif

  @if(isset($noticia))
  <form name="formEdit" id="formEdit" method="POST" action="{{ url('noticias/' . $noticia->id) }}">
  <input type="hidden" name="id_users" value="{{ Auth::user()->id }}">

    @method('PUT')
  @else  
  <form name="formCad" id="formCad" method="POST" action="{{ url('noticias') }}">
  <input type="hidden" name="id_users" value="{{ Auth::user()->id }}">

  @endif
    @csrf
      <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp" value="{{$noticia->titulo ?? ''}}" required>
      </div>
      <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required>{{$noticia->mensagem ?? ''}}</textarea>
      </div>
      <input class="btn btn-primary" type="submit" value="@if(isset($noticia))Editar @else Cadastrar @endif">
    </form>
  </div>

@endsection