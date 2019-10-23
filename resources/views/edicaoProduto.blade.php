<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        @include('layouts.partials.header')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/produtos">Produtos</a></li>                   
                        <li class="active">Alterar</li>
                    </ol>              
                </div>          
            </div>
            <div class="container">  
                <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
                <form method="post" action="{{route('produtos.update', $produto->id)}}" enctype="multipart/form-data">
                    {!! method_field('put') !!}
                    {{ csrf_field() }}
                    <div class="form-group col-md-10">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{$produto->nome}}" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" name="quantidade" class="form-control" value="{{$produto->quantidade}}" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="preco">Preço</label>
                        <input type="text" name="preco" class="form-control" value="{{$produto->preco}}" required>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="descricao">Descrição</label>
                        <textarea type="text" name="descricao" class="form-control" rows="6">{{$produto->descricao}}</textarea>     
                    </div>
                    <div class="form-group col-md-4" id="container">
                        <button class="align-baseline btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"> Salvar </span>
                        </button>
                    </div>   
                </form>
            </div>
        </div>
    </body>