@extends('templates.template')

@section('login')
    <h1 class="text-center">Fornecedor cadastrado</h1>    
    <hr>
    <div class="container">
       <div class="row">
            <div class="col-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    @if(isset($fornecedor) && isset($fornecedor->nome) && isset($fornecedor->email) && isset($fornecedor->id))
                        <h5 class="card-title">{{ $fornecedor->nome }}</h5>
                        <p class="card-text">{{ $fornecedor->email }}</p>
                        <p class="card-text">{{ $fornecedor->id }}</p>
                        <a href="{{url('fornecedores')}}" class="card-link">Voltar</a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection