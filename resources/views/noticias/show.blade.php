@extends('templates.template')

@section('login')
    <h1 class="text-center">Notícias cadastradas</h1>    
    <hr>
    <div class="container">
       <div class="row">
            <div class="col-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    @if(isset($noticia) && isset($noticia->titulo) && isset($noticia->mensagem) && isset($noticia->id))
                        <h5 class="card-title">{{ $noticia->titulo }}</h5>
                        <p class="card-text">{{ $noticia->mensagem }}</p>
                        <p class="card-text">{{ $noticia->id }}</p>
                        <a href="{{url('noticias')}}" class="card-link">Voltar</a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection