@extends('templates.template')

@section('login')
    <h1 class="text-center">Assistentes cadastrados</h1>    
    <hr>
    <div class="container">
        <a href="{{url('assistentes/create') }}">
            <button class="btn btn-success">Cadastrar assistentes</button>
        </a>
        @csrf
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assistente as $assistentes)
                    <tr>
                        <th scope="row">{{$assistentes->id}}</th>
                        <td>{{$assistentes->nome}}</td>
                        <td>{{$assistentes->email}}</td>
                        <td>{{$assistentes->matricula}}</td>
                        <td>
                            <a href="{{url('assistentes/' . $assistentes->id)}}">
                                <button class="btn btn-primary"><i class="bi bi-eye"></i></button>
                            </a>
                            <a href="{{url('assistentes/' . $assistentes->id . '/edit')}}">
                                <button class="btn btn-success"><i class="bi bi-pencil"></i></button>
                            </a>
                            <a href="{{url('assistentes/' . $assistentes->id)}}" class="js-del">
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$assistente->links('pagination::bootstrap-4')}}
    </div>
@endsection
