@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produtos</h1>
</div>
<div>
    <form action="" method="GET">
        <input type="text" name="pesquisar" placeholder="Digite o nome"/>  
        <button class=" btn btn-primary">Pesquisar</button> 
        <a href="" type="button" class="btn btn-success float-end">Incluir</a>
    </form>
    <div class="table-responsive small mt-4">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th >Nome</th>
                    <th >Valor</th>
                    <th >Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($findProdutos as $produto)
                <tr>
                    <td>{{$produto->nome}}</td>
                    <td>{{'R$'.''.number_format($produto->valor, 2, ',','.')}}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>                
                </tr>                    
                @endforeach
            </tbody>
        </table>
    </div> 
</div>
<!-- Listagem de produtos-->

@endsection
