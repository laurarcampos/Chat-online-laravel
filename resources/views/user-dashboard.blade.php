@extends('templates.template')

@section('login')
<x-app-layout>
    <x-slot name="header">
        <h1>user</h1>
        <div class="container">
            <a href="{{url('noticias/create') }}">
                <button  class="btn btn-success">Cadastrar notícias</button>
            </a>
            @csrf
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Data</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($noticia))
                        @foreach($noticia as $noticias)
                            <tr>
                                <th scope="row">{{ $noticias->id }}</th>
                                <td>{{ $noticias->titulo }}</td>
                                <td>{{ $noticias->created_at->format('d/m/Y H:i:s') }}</td>
                                <td>
                                    <a href="{{url('noticias/' . $noticias->id)}}">
                                        <button class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                    </a>
                                    <a href="{{url('noticias/' . $noticias->id . '/edit')}}">
                                        <button class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                    </a>
                                    <a href="{{url('noticias/' . $noticias->id)}}" class="js-del">
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>
@endsection
