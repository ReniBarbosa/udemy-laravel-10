@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Usuarios</h1>
</div>
<div>
    <form action="{{ route('usuario.index')}}" method="GET">
        <input type="text" name="pesquisar" placeholder="Digite o nome"/>  
        <button class=" btn btn-primary">Pesquisar</button> 
        <a href="{{route('cadastrar.usuario')}}" type="button" class="btn btn-success float-end">Incluir</a>
    </form>
    <div class="table-responsive small mt-4">
        @if ($findUsuario->isEmpty())
            <p>Nao existe dados</p>
            
        @else
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th >Nome</th>
                    <th >Email</th>
                    <th >Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($findUsuario as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    
                    <td>
                        <a href="{{ route('atualizar.usuario',$usuario->id)}}" class="btn btn-primary btn-sm">
                            Editar
                        </a>
                        <meta name="csrf-token" content="{{csrf_token()}}">
                        <a onclick="deleteRegistroPaginacao('{{route('usuario.delete')}}',{{$usuario->id}})" class="btn btn-danger btn-sm">Excluir</a>
                    </td>                
                </tr>                    
                @endforeach
            </tbody>
        </table>
        @endif
    </div> 
</div>
<!-- Listagem de produtos-->

@endsection
