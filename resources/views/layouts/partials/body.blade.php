<div class="container">
    <!-- Div para nav-->
    <div>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Produtos</li>
        </ol>
    </div>
    <!-- Div para nav-->

    <div class="container">
        @include('layouts.partials.message')
    </div>
   
    
    <!-- Div para botão cadastrar-->
    <div>
        <a href="{{url('/produtos/cadastro')}}" class="align-baseline btn btn-default  pull-rigth"><span class="glyphicon glyphicon-plus"></span>Adicionar</a>
    </div>
    
    <!-- Div para botão cadastrar-->
    <!-- Div para list-produtos-->
    <div class="container">
        <h4 id="center"><b>Produtos Cadastrados</b></h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead >
                    <tr>
                        <th id="center">Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th id="center">Quantidade</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produtos as $produto)
                        <tr>
                            <td id="center">{{$produto->id}}</td>
                            <td title="Nome">{{$produto->nome}}</td>
                            <td title="Descrição">{{$produto->descricao}}</td>
                            <td title="Quantidade" id="center">{{$produto->quantidade}}</td>
                            <td title="Preço">R$ {{number_format($produto->preco, 2,',','.')}}</td>
                            <td title="Valor Investido">R$ {{number_format(($produto->preco) * ($produto->quantidade), 2,',','.') }}</td>    
                            <!-- botões editar/excluir-->
                            <td>
                                <a class="btn btn-default" href="{{route('produtos.edit', $produto->id)}}" data-toggle="tooltip" data-placement="top" title="Alterar">
                                    <i class="fa fa-pencil"></i>
                                </a>              
                                <form style="display: inline-block;" method="POST" action="{{route('produtos.destroy', $produto->id)}}" data-toggle="tooltip" data-placement="top" title="Excluir" onsubmit="return confirm('Confirma exclusão?')">
                                    {{method_field('DELETE')}}{{ csrf_field() }}             
                                    <button type="submit" class="btn btn-default">
                                        <a class="btn-default"><i class="fa fa-trash-o"></i></a>                                                    
                                    </button>
                                </form>
                            </td>
                            <!-- botões editar/excluir-->    
                        </tr>
                    @empty
                        <p>Nenhum produto cadastrado ainda</p>
                    @endforelse                             
                </tbody>        
            </table>
        </div>    
    </div>
  
</div>