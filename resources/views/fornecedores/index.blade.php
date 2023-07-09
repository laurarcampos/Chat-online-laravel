@extends('templates.template')

@section('login')
    <h1 class="text-center">Fornecedores cadastrados</h1>    
    <hr>
    <div class="container">
        
        @csrf
        @foreach($fornecedor as $fornecedores)
            
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Razão social</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Data</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">{{$fornecedores->id}}</th>
                <td>{{$fornecedores->nome}}</td>
                <td>{{$fornecedores->email}}</td>
                <td>{{$fornecedores->cnpj}}</td>
                <td>{{$fornecedores->created_at->format('d/m/Y H:i:s')}}</td>
                    <td><a href="{{url('fornecedores/' . $fornecedores->id)}}">
                            <button class="btn btn-primary"><i class="bi bi-eye"></i></button>
                        </a>
                        <a href="{{url('fornecedores/' . $fornecedores->id . '/edit')}}">
                            <button class="btn btn-success"><i class="bi bi-pencil"></i></button>
                        </a>
                        <a href="{{url('fornecedores/' . $fornecedores->id)}}" class="js-del">
                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$fornecedor->links('pagination::bootstrap-4')}}
    </div>
@endsection