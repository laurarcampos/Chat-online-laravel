@extends('templates.template')

@section('login')
    <h1 class="text-center">Assistente cadastrado</h1>    
    <hr>
    <div class="container">
       <div class="row">
            <div class="col-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    @if(isset($assistente) && isset($assistente->nome) && isset($assistente->email) && isset($assistente->id))
                        <h5 class="card-title">{{ $assistente->nome }}</h5>
                        <p class="card-text">{{ $assistente->email }}</p>
                        <p class="card-text">{{ $assistente->id }}</p>
                        <a href="{{url('assistentes')}}" class="card-link">Voltar</a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection